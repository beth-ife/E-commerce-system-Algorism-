<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author OASIS MANAGEMENT
 */
class AdminController extends BaseController {
    
    /**
     * Authenticate User
     */
    public function login(){
        return View::make('admin/login');
    }
    public function postLogin(){
        return View::make('admin/dashboard');
    }
    
    //Dashboard
    public function dashboard(){
        $all_orders_uShip = Order::where('isShipped','=',0)->get();
        $all_orders_Ship = Order::where('isShipped','=',1)->get();
        return View::make('admin/dashboard', compact('all_orders_uShip','all_orders_Ship'));
    }
    
    /**
     * Add products to store
     */
    public function addProduct(){
        return View::make('admin/add-product');
    }
    public function postAddProduct(){}
    
    
    /**
     * Store Information
     * view and edit
     */
    public function storeInfo(){
        return View::make('admin/store-info');
    }
    public function postStoreInfo(){}
    
    
    //view all products
    public function products(){}
    
    /**
     * Process Orders
     */
    public function processOrder($id) {
        
    }
    public function postProcessOrder($id) {
        
    }
}
