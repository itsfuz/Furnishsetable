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

    public function productDetails($id){


        $allProducts = Product::all();
        $size = sizeof($allProducts);

        if($id == 0){

            $id = $size;
        }
        else if($id == $size+1){

            $id = 1;
        }

        $products = Product::find($id);
        $category = Category::all();

        foreach($category as $c){
            if($c->id == $products->category_id){
                $categoryName = $c -> name;
            }
        }
            if($products==null){
                return redirect('/');
            }
        return view('productDetail', ['products'=>$products])
        ->with('products', $products)
        ->with('categoryName', $categoryName);
    }

    public function searchID(Request $request){

        $PID = $request->search;

        $allProducts = Product::all();
        $size = sizeof($allProducts);

        if($PID > $size || $PID < 1){

            $counter = 0;

            $product = [];

            $products[0]['id'] = 1;
            $products[0]['product_name'] = 'none';
            $products[0]['product_category'] = 'none';
            $products[0]['product_price'] = 0;
            $products[0]['color'] = 'none';
            $products[0]['image'] = 'none';

            return view('product')
            ->with('products', $products)
            ->with('counter', $counter);
        }

        $product = Product::where('id', $PID)->first();

        $category = Category::find($product->category_id)->first();

        $counter = 1;

        $category_name = $category->category_name;

        $products = [];

        $products[0]['id'] = $product->id;
        $products[0]['product_name'] = $product->product_name;
        $products[0]['product_category'] = $category_name;
        $products[0]['product_price'] = $product->price;
        $products[0]['color'] = $product->color;
        $products[0]['image'] = $product->image;

        return view('product')
        ->with('products', $products)
        ->with('counter', $counter);
    }

}
