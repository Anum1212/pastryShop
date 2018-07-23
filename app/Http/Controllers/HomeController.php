<?php



// controller Details
// ------------------
// Methods Present
// ------------------
// 1) __construct
// 2) index
// 3) dashboard
// 4) editDetails
// 5) orders
// 6) logout



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Auth;
use App\User;
use App\Order;
use App\Orderitem;

class HomeController extends Controller
{



  // |---------------------------------- 1) __construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }



  // |---------------------------------- 2) index ----------------------------------|
    public function index()
    {
        return view('index');
    }



  // |---------------------------------- 3) dashboard ----------------------------------|
    public function dashboard()
    {
        $userDetails = Auth::user();
        // dd($userDetails);
        return view('account.dashboard', compact('userDetails'));;
    }



  // |---------------------------------- 4) editDetails ----------------------------------|
    public function editDetails(Request $req)
    {
        $validatedData = $req->validate([
            'name' => 'required|string|max:255',
            'contact' => 'required|digits:11|numeric',
            'address' => 'required',
        ]);

        $userDetails = User::find(Auth::user()->id);
        $userDetails->name = $req->name;
        $userDetails->contact = $req->contact;
        $userDetails->address = $req->address;
        $userDetails->save();
        return redirect()->route('home');
    }



  // |---------------------------------- 5) orders ----------------------------------|
    public function orders()
    {
        if(Auth::user()->userType == '0')
        $orders = Order::orderBy('created_at', 'DESC')->paginate(10);
        if(Auth::user()->userType == '1')
        $orders = Order::where('customerId', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(10);
        
        if(count($orders)<=0)
        return redirect()->route('home')->with('error', 'No Orders');

        foreach ($orders as $order){
        $orderItemsCollection[] = OrderItem::where('orderId', $order->id)->get();
        $customerDetails[] = User::whereId($order->customerId)->first();
        }

        // to remove duplicates
        $customerDetails = array_unique($customerDetails);

        // to renumber the array index after using array_unique() i.e after using array_unique() the array may look like
        // index => value
        // 0     =>   1
        // 2     =>   3
        // 7     =>   9
        // to fix this we use array_values()
        // which will give the result
        // index => value
        // 0     =>   1
        // 1     =>   3
        // 2     =>   9
        $customerDetails = array_values($customerDetails);
        
        $orderItems = new Collection();
        foreach ($orderItemsCollection as $collection) {
            foreach ($collection as $item) {
                $orderItems->push($item);
            }
        }
        return view('account.orders', compact('orders', 'orderItems', 'customerDetails'));;
    }



  // |---------------------------------- 6) logout ----------------------------------|
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
