<?php

namespace App\Http\Controllers;
use App\Models\AdminUser;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $data = AdminUser::all();
        dd($data);
    }
}
