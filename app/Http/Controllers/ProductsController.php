<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductsController extends Controller
{
    //
    public function index(){
        $products = Product::all();

        /*foreach($products as $product){
            echo $product->name."<br>";
            echo $product->description."<br>";
        }*/
        return view('products.list')->with('products',$products);
    }

    public function addProduct(){
        $categories = Category::all();
        return view('products.forms.add')->with('categories',$categories);
    }

    public function handlerAdd(Request $request){
        $request->validate([
            'category_id' => 'required|numeric',
            'name' => 'required|max:32',
            'description' => 'nullable',
            'price' => 'nullable|numeric',
        ]);
        
        $product = new Product;
        $product->fill($request->all());
        $product->save();

        return redirect(route('product.list'));
    }
}
