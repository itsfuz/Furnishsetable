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

        $counter = 0;

        foreach($categories as $category){
            foreach($allProducts as $product){

                if($product->category_id == $category->id){

                    $products[$counter]['id'] = $product->id;
                    $products[$counter]['product_name'] = $product->product_name;
                    $products[$counter]['product_category'] = $category->category_name;
                    $products[$counter]['product_price'] = $product->price;
                    $products[$counter]['color'] = $product->color;
                    $products[$counter]['image'] = $product->image;

                    $counter++;
                }
            }
        }

        $productSize = sizeof($products);

        return view('product')
        ->with('products', $products)
        ->with('counter', $counter);
    }

    public function CategorizedProducts($id){

        $category = Category::where('id', $id)->first();
        $allProducts = Product::all();

        $counter = 0;

        $products = [];


        foreach ($allProducts as $product){

            if($product->category_id == $category->id){

                    $products[$counter]['id'] = $product->id;
                    $products[$counter]['product_name'] = $product->product_name;
                    $products[$counter]['product_category'] = $category->category_name;
                    $products[$counter]['product_price'] = $product->price;
                    $products[$counter]['color'] = $product->color;
                    $products[$counter]['image'] = $product->image;

                    $counter++;

            }

        }

        return view('product')
        ->with('products', $products)
        ->with('counter', $counter);
    }

}
