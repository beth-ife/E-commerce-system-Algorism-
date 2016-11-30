<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RatingController
 *
 * 
 */
class RatingController extends BaseController {
    public function postRating(){
        $input = Input::all();
        $rating = new Rating();
        $rating->product_id = $input['p_id'];
        $rating->customer_id = $input['c_id'];
        $rating->rating = $input['rating'];
        $rating->save();
        return $rating;
        
    }
}
