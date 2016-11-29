<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Address
 *
 * @author OASIS MANAGEMENT
 */
class Address extends Eloquent{
    public $timestamps = false;
    public function user(){
        return $this->hasMany('User');
    }
}
