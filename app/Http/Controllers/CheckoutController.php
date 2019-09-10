<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Session;
use App\Shipping;
use App\Product;
use Cart;
use App\Order;
use App\OrderDetail;
use App\Payment;
use DB;



class CheckoutController extends Controller
{
    public function index(){
        return view('front-end.checkout.checkout-content');
    }
    public function customerSignUp(Request $request){
        $this->validate($request, [
            'email_address' => 'email|unique:customers,email_address'

        ]);

        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->password = bcrypt($request->password);
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->save();

        $customerId = $customer->id;
        Session::put('customerId',$customerId);
        Session::put('customerName',$customer->first_name.' '.$customer->last_name);

        $data = $customer->toArray();
        Mail::send('front-end.mail.confirmation-mail', $data, function ($message) use ($data){
            $message->to($data['email_address']);
            $message->subject('confirmation mail');
        });

        return redirect('/checkout/shipping');
    }
    public function shippingForm(){
        $customer = Customer::find(Session::get('customerId'));
        return view('front-end.checkout.shipping', ['customer'=>$customer]);
    }
    public function saveShippingInfo(Request $request){
        $shipping = new Shipping();
        $shipping->full_name = $request->full_name;
        $shipping->email_address = $request->email_address;
        $shipping->phone_number = $request->phone_number;
        $shipping->address = $request->address;
        $shipping->save();

        Session::put('shippingId', $shipping->id);
        return redirect('/checkout/payment');
    }
    public function paymentForm(){
        return view('front-end.checkout.payment');
    }
    public function newOrder(Request $request){
        $paymentType = $request->payment_type;
        if($paymentType == 'Cash') {

            $order = new Order();
            $order->customer_id = Session::get('customerId');
            $order->shipping_id = Session::get('shippingId');
            $order->order_total = Session::get('orderTotal');
            $order->save();


            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_type = $paymentType;
            $payment->save();


            $cartProducts = Cart::getContent();
            //return $cartProducts->qty;
            foreach ($cartProducts as $cartProduct){
                $orderDetail = new OrderDetail();
                $orderDetail->order_id = $order->id;
                $orderDetail->product_id = $cartProduct->id;
                $orderDetail->product_name = $cartProduct->name;
                $orderDetail->product_price = $cartProduct->price;
                $orderDetail->product_quantity = $cartProduct->quantity;
                $orderDetail->save();

            }



            /*$product_quantity= $cartProduct->qty;
            //$pid= $cartProduct->id;
            return $product_quantity;
*/


            //$mainProducts= Product::find()->get();

            //return $mainProducts;
            //$mainProducts= DB::table('products')->get();
            /* $products = DB::table('products')
                 ->join('order_details', 'products.order_id', '=', 'order_details.id')
                 ->select('products.*', 'order_details.product_quantity')
                 ->get();*/
            /*$orderDetailss = DB::table('order_details')
                ->join('products', 'order_details.product_id', '=', 'products.id')
                ->select('order_details.*', 'products.product_quantity')
                ->get();
            //$products_quantity= $orderDetailss->product_quantity;
            //return $products_quantity;*/

            //$myorderDetails = OrderDetail::where('order_id', $orderDetailss->id)->get();
            //return $orderDetails;
            //return $myorderDetails;

            //$mainProducts =  Product::where('id',$myorderDetails)->first();
            //return $mainProducts;
            //$product_quantity= $mainProducts->product_quantity;
            //$product->product_quantity = $request->product_quantity;


            Cart::clear();
            return redirect('/complete/order');


        }elseif ($paymentType == 'Paypal'){

        }elseif ($paymentType == 'Bkash' ){

        }
    }
    public function completeOrder(){
        //return 'success';
        return view('front-end.checkout.order-success');
    }

    public function customerLoginCheck(Request $request){
        $customer = Customer::where('email_address', $request->email_address)->first();


        if (password_verify($request->password, $customer->password)) {

            Session::put('customerId',$customer->id);
            Session::put('customerName',$customer->first_name.' '.$customer->last_name);
            return redirect('/checkout/shipping');

        } else {
            return redirect('/checkout')->with('message', 'Invalid password');
        }

    }
}
