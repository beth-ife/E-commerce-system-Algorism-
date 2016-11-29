<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function home() {
        $products = DB::table('products')
                ->join('product_images', 'products.id', '=', 'product_images.product_id')
                ->select('products.id', 'products.title', 'products.price', 'product_images.image')
                ->groupBy('products.id')
                ->get();
        $products_by_category = DB::table('categories')
                ->join('products', 'products.category', '=', 'categories.id')
                ->get();

        return View::make('home', compact('products', 'products_by_category'));
    }

}
