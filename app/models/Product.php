<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * 
 */
class Product extends Eloquent {

    public function category() {
        return $this->belongsTo('Category', 'category', 'id')->select(array('id', 'category_name'));
    }

    public function product_image() {
        return $this->hasMany('ProductImage', 'id')->select(array('id', 'image'));
    }

    public function orders() {
        return $this->hasManyThrough('OrderProduct', 'Order', 'product_id', 'id');
    }

}
