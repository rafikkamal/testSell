<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    public function index(){
        
    }
    public function create(){
        return view('products.create');
    }
    public function show(){
        return view('products.show');
    }
    public function edit(){
        return view('products.edit');
    }
    public function delete(){
        return view('products.delete');
    }
}
