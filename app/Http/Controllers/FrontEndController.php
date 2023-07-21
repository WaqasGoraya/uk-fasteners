<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
        return view('frontend.pages.home');
    }
    public function about(){
        
        return view('frontend.pages.about',['title'=> 'About']);
    }
    public function export(){
        
        return view('frontend.pages.export-market', ['title' =>'Export Market']);
    }
    public function contact(){
        
        return view('frontend.pages.contact', ['title' =>'Contact Us']);
    }
    public function product($id){
        $product = Product::where('sub_category_id',$id)->get();
        // dd($product);
        return view('frontend.pages.products', ['title' =>'Products','products'=> $product]);
    }
    public function enquiry(){
        return view('frontend.pages.enquiry', ['title' =>'Enquiry']);
    }
}
