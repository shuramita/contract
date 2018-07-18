<?php

namespace Shuramita\Contract\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Controller extends BaseController
{
    public $namespace = 'Contract'; // registered in Service Provider

    public function home(){
        return 'Home';
    }
}
