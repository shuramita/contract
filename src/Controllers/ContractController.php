<?php

namespace Shuramita\Contract\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ContractController extends Controller
{
    public function form(){

        return view('Contract::contract');
    }
}
