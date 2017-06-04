<?php
namespace App\Http\Controllers;

use AppHttpRequests;
use AppHttpControllersController;

use IlluminateHttpRequest;

class IndexController extends Controller {
    public function index()
    {
        return view('index');
    }
}
