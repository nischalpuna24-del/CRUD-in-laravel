<?php

namespace App\Http\Controllers;

use Dotenv\Validator;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    // This method will show product page
    public function index()
    {
        return view('products.list');
    }

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

        $Validator = Validator::make($request->all(), $rules);

        if ($Validator->fails()) {
            return redirect()->route('proudcts.create')->withInput()->withErrors($Validator);
        }

        // here we will insert product in database
        $product = new Product();
        $product->name = $request->name;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product Added Successfully.');
    }
    // This method will show edit product page
    public function edit() {}

    // This method will update a product
    public function update() {}
    // This method will delete a product
    public function delete() {}
}
