<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function goToProductPage(){

        //user autentication needed
        $categories = Category::all();
        $allProducts = Product::all();

        $products = [];

        foreach($categories as $category){
            foreach($allProducts as $product){

                if($product->category_id == $category->id){

                    $products[$product->id]['id'] = $product->id;
                    $products[$product->id]['product_name'] = $product->product_name;
                    $products[$product->id]['product_category'] = $category->category_name;
                    $products[$product->id]['product_price'] = $product->price;
                    $products[$product->id]['color'] = $product->color;

                }
            }
        }

        $productSize= sizeof($products);

        return view('product')
        ->with('products', $products)
        ->with('productSize', $productSize);
    }


}
