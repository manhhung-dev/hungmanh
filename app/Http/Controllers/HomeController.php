<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
session_start();
class HomeController extends Controller
{
    public function __construct(){
    }

    public function index(){
        $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $all_product=DB::table('tbl_product')->where('product_status','0')->orderby('category_id','desc')->limit(20)->get();
        
        return view('pages.home')->with('category',$cate_product)->with('all_product',$all_product);
    }   
    public function search(Request $request){
        
        $keywords=$request->keywords_submit;
        $cate_product=DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $search_product=DB::table('tbl_product')->where('product_status','0')->where('product_name','like','%'.$keywords.'%')->get();
        return view('pages.sanpham.search')->with('category',$cate_product)->with('search_product',$search_product);
    }
}
