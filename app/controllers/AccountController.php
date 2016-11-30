<?php

class AccountController extends BaseController {

    /**
     * This function is triggered when the user trys to checkout of store
     * @return type
     */
    public function login() {
        //Check if the user is logged in
        if (Session::has('user')) {
            return Redirect::action('HomeController@home');
        }
        //If not logged in, ask the user to login or sign up
        else {
            return View::make('login');
        }
    }

    //Check if user exists
    public function postLogin() {
        $input = Input::all();
        $email = $input['email'];
        $password = $input['password'];
        //$path = Request::path();


        $user_email = User::where('email', '=', $email); //Check for username first 
        if ($user_email->count() > 0) {
            $user_password = $user_email->where('password', '=', md5($password));
            if ($user_password->count() != 0) {
                $user_password = $user_email->
                        where('password', '=', md5($password))
                        ->take(1)
                        ->get();
                //Put the user in session
                foreach ($user_password as $user) {
                    Session::put('user', $user->user_type);
                    
                    
                    Session::put('user_id', $user->id);
                    //Get cart from session
                    if (Session::has('cart')) {
                        return Redirect::action('OrderController@newOrder');
                    } else {
//                        echo Session::get('user_type'); 
//                        exit();
                        return Redirect::back();
                    }
                }
                
            } else {

                return Redirect::to('/login');
            }
        } else {
            return Redirect::to('/login');
        }
    }

    public function register() {
        //Check if the user is logged in
        if (Session::has('user')) {
            return Redirect::action('HomeController@home');
        }
        //If not logged in, ask the user to login or sign up
        else {
            return View::make('register');
        }
    }

    //Save user details
    public function postRegister() {
        //Check if the user is logged in
        if (Session::has('user')) {
            return Redirect::action('HomeController@home');
        }
        //If not logged in, submit form
        else {
            $input = Input::all();
            $password = $input['password'];
            $firstname = $input['firstname'];
            $lastname = $input['lastname'];
            $phone = $input['phone'];
            $email = $input['email'];
            $street = $input['street'];
            $city = $input['city'];
            $state = $input['state'];

            //Add User's address to address table
            $user_address = new Address();
            $user_address->street = $street;
            $user_address->city = $city;
            $user_address->state = $state;
            $user_address->save();

            $address_id = $user_address->id;
            $user = new User();
            $user->userName = $firstname;
            $user->firstname = $firstname;
            $user->lastName = $lastname;
            $user->phone = $phone;
            $user->email = $email;
            $user->user_type = 2;
            $user->address = $address_id;
            $user->password = md5($password);
            $user->save();

            Session::put('user', 2); //Add user's type to session;
            Session::put('user_id', $user->id); //add user id to session;
            //Get cart from session
            if (Session::has('cart')) {
                return Redirect::action('OrderController@newOrder');
            } else {
                echo('kkk');
                exit();
                return Redirect::to('/view_cart');
            }
        }
    }

}
