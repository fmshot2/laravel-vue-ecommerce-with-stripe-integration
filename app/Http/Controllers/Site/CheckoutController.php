<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Contracts\OrderContract;
use App\Http\Controllers\Controller;

use App\Services\PayPalService;


class CheckoutController extends Controller
{
    protected $orderRepository;

    protected $payPal;

    public function __construct(OrderContract $orderRepository, PayPalService $payPal)
    {
        $this->payPal = $payPal;
        $this->orderRepository = $orderRepository;
    }

    public function getCheckout()
    {
        return view('site.pages.checkout');
    }

    public function placeOrder(Request $request)
    {
        // Before storing the order we should implement the
        // request validation which I leave it to you
        $order = $this->orderRepository->storeOrderDetails($request->all());

        // You can add more control here to handle if the order
        // is not stored properly
        if ($order) {
            $this->payPal->processPayment($order);
        }

        return redirect()->back()->with('message', 'Order not placed');
    }
}
