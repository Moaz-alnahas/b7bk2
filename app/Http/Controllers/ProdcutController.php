<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProdcutController extends Controller
{
    public function index(){
        return view("product.index");
    }
    public function store(Request $request){
        $data=$request->validate([
            "name"=>"required",
            "qty"=> "required|numeric",
            "price"=> "required|1:2",
            "description"=> "nullable",
        ]);
        $newproduct= Product::create($data);
        return redirect(route("produt.index"));
    }
}
