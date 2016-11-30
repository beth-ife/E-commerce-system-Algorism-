<?php

class ProductController extends BaseController {
    

    public function productDetails($id) {
        
        //Load all images related to a single product
        $images = DB::table('products')
                ->where('products.id', '=', $id)
                ->join('product_images', 'products.id', '=', 'product_images.product_id')
                ->select('products.id', 'products.title', 'products.price', 'product_images.image')
                ->take(3)
                ->get();
        
        
        //Load Single Product
        $product = Product::find($id);
                //->get();
        //load product sizes
        $sizes = DB::table('sizes')
                ->join('product_sizes', 'sizes.id', '=', 'product_sizes.size_id')
                //->where('product_sizes.product_id', '=', $id)
                
                ->get();

        return View::make('product_details', compact('product', 'images', 'sizes'));
    }

}
