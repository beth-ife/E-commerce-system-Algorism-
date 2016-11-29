<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author OASIS MANAGEMENT
 */
class Category extends Eloquent{
    //put your code here
    public function product(){
        return $this->hasMany('Product', 'category', 'id');
    }
}
