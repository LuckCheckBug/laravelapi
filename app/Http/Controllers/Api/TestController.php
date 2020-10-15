<?php

namespace App\Http\Controllers\Api;

use App\Jobs\SendEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //
    public function index(){
        $this->dispatch(new SendEmail());
    }
}
