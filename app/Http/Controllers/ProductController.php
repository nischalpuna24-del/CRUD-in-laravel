<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    // This method will show product page
    public function index() {}
    // This method will create product page
    public function create()
    {
        return view('products.create');
    }
    // This method will store a product page
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|min:5',
            'sku' => 'required|min:3',
            'price' => 'required|numeric',

        ];
        $Validator::make($request->all(), $rules);

        if ($Validator->fails()) {
            return redirect()->route('//proudcts.create')->withInput()->withErrors();
        }
    }
    // This method will show edit product page
    public function edit() {}

    // This method will update a product
    public function update() {}
    // This method will delete a product
    public function delete() {}
}
