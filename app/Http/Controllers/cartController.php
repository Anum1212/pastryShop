<?php



// controller Details
// ------------------
// Methods Present
// ------------------
// 1) __construct
// 2) addToCart --> add product to cart
// 3) remove --> remove product from cart
// 4) view --> go to cart page
// 5) update --> update quantity of cart item
// 6) checkOut --> save order in db and show invoice
// 7) __destruct



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use App\User;
use App\Order;
use App\Orderitem;
use Cart;
use Mail;
use App\Mail\invoice;

class cartController extends Controller
{



  // |---------------------------------- 1) construct ----------------------------------|
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            Cart::instance('shopping');
            Cart::restore(Auth::id());

            return $next($request);
        });
    }



    // |---------------------------------- 2) addToCart ----------------------------------|
    public function addToCart($productId, $productName, $productPrice)
    {
        $cart = Cart::add($productId, $productName, '1', $productPrice);

        return redirect()->back()->with('message', 'Item added to cart'); // change in future
    }



    // |---------------------------------- 3) remove ----------------------------------|
    public function remove($rowId)
    {
        Cart::remove($rowId);
        return redirect()->route('cart.view');
    }



    // |---------------------------------- 4) view ----------------------------------|
    public function view()
    {
        return view('cart');
    }



    // |---------------------------------- 5) update ----------------------------------|
    public function update(Request $req)
    {
        $i = 0;
        foreach (Cart::content() as $item) {
            $itemRowId = $item->rowId;
            Cart::update($itemRowId, $req->qty[$i]);
            $i++;
        }
        return redirect()->route('cart.view')->with('message', 'cart updated');
    }



    // |---------------------------------- 2) checkout ----------------------------------|
    public function checkout()
    {
        $customerDetails = User::whereId(Auth::user()->id)->first();
        if (Cart::total()>0) {
            $order = new Order;
            $order->customerId = Auth::user()->id;
            $order->cost = Cart::total();
            $order->save();

            $lastInsertId = $order->id; // for using it in orderItem table

            foreach (Cart::content() as $item) {
                $orderItem = new orderitem;
                $orderItem->orderId = $lastInsertId;
                $orderItem->productId = $item->id;
                $orderItem->productName = $item->name;
                $orderItem->price = $item->price;
                $orderItem->quantity = $item->qty;
                $orderItem->save();
            }
            $products = Cart::content();

            // send mail to customer
            Mail::send(new invoice($customerDetails, $products, $order));
                
            Cart::destroy();
                
            // return view
            return view('invoice', compact('products', 'order', 'customerDetails', 'lastInsertId'));
        } else {
            return redirect()->route('cart.view')->with('error', 'cart is empty');

        }
    }



    // |---------------------------------- 6) destruct ----------------------------------|
    public function __destruct()
    {
        Cart::instance('shopping')->store(Auth::id());
    }
}
