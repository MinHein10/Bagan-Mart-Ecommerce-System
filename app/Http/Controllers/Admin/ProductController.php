<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Products;
use App\Model\Categories;
use Session;
use App\Model\cart;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Products::all();
        return view('admin/products/index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Categories::all();
        return view('admin/products/add',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            "ProductName" => "required",
            "Category_id" => "required",
            "Img" => "required",
            "description" => "required",
            "Qty" => "required",
            "Price" => "required",
        ]);

        if($request->hasFile('Img')){
            $img_name = 'LB_'.time().$request->Img->getClientOriginalName();
            $request->Img->move(public_path('uploads'),$img_name);
        }

        $sql = new products;
        $sql->ProductName = $request->ProductName;
        $sql->Category_id = $request->Category_id;
        $sql->Img = $img_name;
        $sql->Description = $request->description;
        $sql->Qty = $request->Qty;
        $sql->Price = $request->Price;
        $sql->save();
        return redirect(route('product.index'))->with("success","New Product is created successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Categories::all();
        $product = Products::find($id); 
        return view('admin/products/edit',compact('category','product'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            "ProductName" => "required",
            "Category_id" => "required",
            "description" => "required",
            "Qty" => "required",
            "Price" => "required",
        ]);

        if($request->Img == ""){
            $sql = Products::find($id);
            $sql->ProductName = $request->ProductName;
            $sql->Category_id = $request->Category_id;
            $sql->Description = $request->description;
            $sql->Qty = $request->Qty;
            $sql->Price = $request->Price;

            $sql->save();
            return redirect(route('product.index'))->with("success","Update Product is successfully!");

        }else{

            // Delete photo in public path

            $old = Products::where('id',$id)->select('Img')->first();
            unlink(public_path('uploads/'.$old->Img));

            // Insert photo into public path

            if($request->hasFile('Img')){
                $img_name = 'LB_'.time().$request->Img->getClientOriginalName();
                $request->Img->move(public_path('uploads'),$img_name);
            }
    
            $sql = Products::find($id);
            $sql->ProductName = $request->ProductName;
            $sql->Category_id = $request->Category_id;
            $sql->Img = $img_name;
            $sql->Description = $request->description;
            $sql->Qty = $request->Qty;
            $sql->Price = $request->Price;
            $sql->save();
            return redirect(route('product.index'))->with("success","Update Product is successfully!");
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::where('id',$id)->delete();
        return redirect()->back()->with('success','Delete category is successful!');
    }

    public function getaddtocart(Request $request,$id){
            $cartproduct = Products::find($id);
            $oldcart = Session::has('cart')?Session::get('cart'):null;
            $cart = new cart($oldcart);
            $cart->add($cartproduct,$cartproduct->id);

            $request->session()->put('cart',$cart); 
            dd($request->session()->get('cart'));
            return redirect()->route('baganmart.productpage');
    }
}
