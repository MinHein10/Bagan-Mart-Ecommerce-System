<?php

namespace App\Http\Controllers\User;
use App\Model\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function index(){
        $userproduct = Products::all();
        return view('user/producttemplate/bodybody',compact('userproduct'));

    }

    public function cart(){
        return view('user/producttemplate/cart');
    }

    public function addToCart($id){
        $product = Products::find($id);

        if(!$product){
            abort(404);
        }
        $cart = session()->get('cart');

        if(!$cart){

            $cart = [
                    $id =>[
                        "name" =>$product->ProductName,
                        "quantity" => 1,
                        "price" => $product->Price,
                        "photo" => $product->Img
                    ]
            ];

            session()->put('cart',$cart);

            return redirect()->back()->with('success','Bagan Mark Product added to cart successfully!');

        }

        if(isset($cart[$id])){
            $cart[$id]['quantity']++;
            session()->put('cart',$cart);
            return redirect()->back()->with('success','Bagan Mark Product added to cart successfully!');
        }
        
        $cart[$id] = [
                        "name" =>$product->ProductName,
                        "quantity" => 1,
                        "price" => $product->Price,
                        "photo" => $product->Img
        ];

        session()->put('cart',$cart);
        return redirect()->back()->with('success','Bagan Mark Product added to cart successfully!');
    }


    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }


}
