<?php

class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout() {
        if (!is_null($this->layout)) {



            $this->layout = View::make($this->layout);
        }
    }

    /**
     * data shared accross all views
     */
    public function __construct() {
        $all_categories = Category::all();
        $store = StoreInfo::all()->first();
        View::share('all_categories', $all_categories);
        View::share('store', $store);
        View::share('all_products', Product::all());
        View::share('all_orders', Order::all());
        View::share('all_customers', User::where('user_type','=','2'));
    }

}
