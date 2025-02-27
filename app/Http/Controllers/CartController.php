<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Gloudemans\Shoppingcart\Facades\Cart;

session_start();


class CartController extends Controller
{
    public function save_cart(Request $request) {
        $productID=$request->productid_hidden;
        $quantity=$request->qty;
        $product_info =DB::table('tbl_product')->where('product_id',$productID)->first();

        $data = [
            'id' => $product_info->product_id,
            'qty' => $quantity,
            'name' => $product_info->product_name,
            'price' => $product_info->product_price,
            'weight' => 0, 
            'options' => [
                'image' => $product_info->product_image
            ]
        ];

        Cart::add($data);
        // Cart::destroy();
        Cart::setGlobalTax(0);   
        return Redirect::to('show-cart');

      
    }
    public function show_cart(){
        $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        return view('pages.cart.show_cart')->with('category',$cate_product);
    }
    public function delete_to_cart($rowId){
        Cart::remove($rowId);
        return Redirect::to('show-cart');
    }
    public function update_cart_qty(Request $request){
        $rowId=$request->rowId_cart;
        $qty=$request->cart_quantity;
        Cart::update($rowId,$qty); 
        return Redirect::to('show-cart'); 
     }
}
