<?php

class OrderController extends BaseController {

    /**
     * This function is triggered when the user trys to checkout of store
     * @return type
     */
    private $product_id;
    private $order_price;

    public function newOrder() {
        
        //Use cart items already in session
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            $input = $cart;
        } else {
            //use simple cart post data if cart is not yet in session
            $input = Input::all();
            Session::put('cart', $input); //Put cart in session.
        }
        //Session::forget('cart');
        

        //Check if the user is logged in
        if (Session::has('user')) {
            

            $order_id = rand(0.58, 1000.93) . '-' . date('Yd-Hs'); //random bytes to become unique order id

            $count = intval($input['itemCount']); //count number of items in cart
            for ($i = 1; $i <= $count; $i++) {
                $product_name = $input['item_name_' . $i];
                $product = Product::where('title', '=', $product_name);

                if ($product->count() > 0) {
                    $this->product_id = $product->first()->id;
                } else {
                    exit();
                }
                $qty = $input['item_quantity_' . $i];
                $this->order_price += $input['item_price_' . $i];
                
                //insert into order_product table
                $order_prod = new OrderProduct();
                $order_prod->product_id = $this->product_id;
                $order_prod->order_id = $order_id;
                $order_prod->quantity = $qty;
                $order_prod->save();
            }
            //Insert into order table
            $order = new Order();
            $order->order_id = $order_id;
            $order->total_price = $this->order_price;
            if (Session::has('user_id')) {
                $order->customer_id = Session::get('user_id');
            } else {
                return Redirect::action('AccountController@login');
            }
            $order->save();
            Session::flush();
            return View::make('order_success',compact('order_id'));
        }

        //If not logged in, ask the user to login or sign up
        else {
            return Redirect::action('AccountController@login');
        }
    }

}
