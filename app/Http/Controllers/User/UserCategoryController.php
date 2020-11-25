<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Categories;
use App\Model\Products;

class UserCategoryController extends Controller
{
    public function getIndex(){
            $usercategory = Categories::all();
            return view('user/template/body',compact('usercategory'));
    }

    public function getProduct(){
        $userproduct = Products::all();
        return view('user/producttemplate/bodybody',compact('userproduct'));
    }

    public function getdetail($id){
        $productfordetail= Products::where('id',$id)->first();
        
        // $detailcategory = Categories::where('id',$id)->get();
    
        return view('user/producttemplate/bodybody2',compact('productfordetail'));

    }

    public function getabout(){
        return view('user/about');
    }

    
    public function getcontact(){
        return view('user/contact');
    }

    public function getFAQ(){
        return view('user/faq');
    }

}
