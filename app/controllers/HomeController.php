<?php

class HomeController extends BaseController
{

    /**
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */
    public function showWelcome()
    {
        $in = Input::all();
        if ($in) {
            echo "<pre>";
            echo print_r($in);
            echo "</pre>";
            exit();
        } else
            return View::make('hello');
    }

    public function add()
    {
       $in = Input::all();
        if ($in) {           
             return View::make('hello',['data'=>$in['Home']]);
        } else
            return View::make('hello');
    }

}
