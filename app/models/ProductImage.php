<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product_image
 *
 *
 */
class ProductImage extends Eloquent {
    public function product(){
        //Every image belongs to one product
        return $this->belongsTo('Product','product_id', 'id');
    }
}
