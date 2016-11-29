<?php

class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout() {
        if (!is_null($this->layout)) {



            $this->layout = View::make($this->layout);
        }
    }

    /**
     * data shared accross all views
     */
    public function __construct() {
        $all_categories = Category::all();
        View::share('all_categories', $all_categories);
    }

}
