<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order_product
 *
 * 
 */
class OrderProduct extends Eloquent {
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'order_products';
        public function Order() {
        return $this->belongsTo('Order','order_id','order_id');
    }
    public function products(){
        return $this->belongsToMany('Product');
    }
}
