<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class invoice extends Mailable
{
    use Queueable, SerializesModels;

    public $customerDetails, $products, $order;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customerDetails, $products, $order)
    {
        $this->customerDetails = $customerDetails;
        $this->products = $products;
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('anamamer0@gmail.com', 'Pastry Love')
            ->to($this->customerDetails->email)
            ->subject('Pastry Love Order Invoice')
            ->view('email.invoice');
    }
}
