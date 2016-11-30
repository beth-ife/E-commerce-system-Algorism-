<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Order
 *
 * 
 */
class Order extends Eloquent {
    public function order_products() {
        return $this->hasMany('OrderProduct','order_id','order_id');
    }
}
