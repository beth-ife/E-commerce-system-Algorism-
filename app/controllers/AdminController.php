<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * 
 */
class AdminController extends BaseController {

    /**
     * Authenticate User
     */
    public function login() {

        if (Session::has('user') && Session::get('user') == 1) {
            return Redirect::action('AdminController@dashboard');
        } else {
            return View::make('admin/login');
        }
    }

    public function postLogin() {
        return Redirect::action('AccountController@postLogin');
    }

    //Dashboard
    public function dashboard() {

        if (Session::has('user') && Session::get('user') == 1) {
            $all_orders_uShip = Order::where('isShipped', '=', 0)->get();
            $all_orders_Ship = Order::where('isShipped', '=', 1)->get();
            return View::make('admin/dashboard', compact('all_orders_uShip', 'all_orders_Ship'));
        } else {
            return Redirect::action('AdminController@login');
        }
    }

    /**
     * Add products to store
     */
    public function addProduct() {
        if (Session::has('user') && Session::get('user') == 1) {
            return View::make('admin/add-product');
        } else {
            return Redirect::action('AdminController@login');
        }
    }

    public function postAddProduct() {
        if (Session::has('user') && Session::get('user') == 1) {
            $input = Input::all();
            $product_title = $input['product_title'];
            $product_des = $input['description'];
            $product_price = $input['price'];
            $product_category = $input['category'];

            $product = new Product();
            $product->title = $product_title;
            $product->description = $product_des;
            $product->price = $product_price;
            $product->rating = 1;
            $product->category = $product_category;
            $product->save();

            $product_id = $product->id;
            //Save image name to db and Move to upload folder 
            for ($i = 1; $i <= 3; $i++) {
                $product_image = new ProductImage();
                $product_image->product_id = $product_id;
                $product_image->image = $product_title . '_' . $i . '.' .
                        Input::file('product_image_' . $i)->guessClientExtension();
                $product_image->save();
                Input::file('product_image_' . $i
                )->move(public_path()
                        . '/images/', $product_title . '_' . $i . '.' .
                        Input::file('product_image_' . $i)->guessClientExtension());
            }
        } else {
            return Redirect::action('AdminController@login');
        }
    }

    /**
     * Store Information
     * view and edit
     */
    public function storeInfo() {
        if (Session::has('user') && Session::get('user') == 1) {
            return View::make('admin/store-info');
        } else {
            return Redirect::action('AdminController@login');
        }
    }

    public function postStoreInfo() {
        if (Session::has('user') && Session::get('user') == 1) {
            
        } else {
            return Redirect::action('AdminController@login');
        }
    }

    //view all products
    public function products() {
        if (Session::has('user') && Session::get('user') == 1) {
            return View::make('admin/store-products');
        } else {
            return Redirect::action('AdminController@login');
        }
    }

    /**
     * Process Orders
     */
    public function processOrder($id) {
        if (Session::has('user') && Session::get('user') == 1) {
            $order = Order::where('id', '=', $id)
                    ->with('order_products')
                    ->get();
            $customer = array();
            $address = array();

            foreach ($order as $order) {
                $customer = User::find($order->customer_id)->with('address')->first();
                $address = Address::find($customer->address)->first();


                foreach ($order->order_products as $prod) {
                    $product = Product::find($prod->product_id);
                    $prod->product = $product->title;
                }
            }
            Return View::make('admin/process-order', compact('order', 'customer', 'address'));
        } else {
            return Redirect::action('AdminController@login');
        }
    }

    public function postProcessOrder($id) {
        if (Session::has('user') && Session::get('user') == 1) {
            
        } else {
            return Redirect::action('AdminController@login');
        }
    }

}
