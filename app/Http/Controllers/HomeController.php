<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Mail;
session_start();

class HomeController extends Controller
{
    public function index(Request $request){
        //SEO
        $meta_desc = " trang mua sắm trực tuyến sản phẩm Đồ chơi mô hình & Quà tặng công nghệ";
        $meta_keywords = "đồ chơi mô hình, quà lưu niệm, quà tặng công nghệ";
        $meta_title = " Đồ chơi mô hình & Qùa tặng công nghệ";
        $url_canonical = $request->url();
        //end SEO

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->limit(6)->get();
        
        //Cách 1
        return view('pages.home')
        ->with('category',$cate_product)
        ->with('brand', $brand_product)
        ->with('all_product',$all_product)
        ->with('meta_desc',$meta_desc)
        ->with('meta_keywords',$meta_keywords)
        ->with('meta_title',$meta_title)
        ->with('url_canonical',$url_canonical);
        //Cách 2
        // return view('pages.home')->with(compact(''));
    }
    public function search(Request $request){
        $keywords = $request->keywords_submit;
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get();

        return view('pages.product.search')
        ->with('category',$cate_product)
        ->with('brand', $brand_product)
        ->with('search_product',$search_product);
    }
    public function send_mail(){
        $to_name = "Vuong Duc Hieu";
        $to_email = "vg.duchieu0602@gmail.com";

        $data = array("name"=>"Mail từ tài khoản khách hàng","body"=>"Mail gửi về vấn đề hàng hóa");

        Mail::send('pages.send_mail',$data,function($message) use ($to_name, $to_email){
            $message->to($to_email)->subject('Test thử gửi mail google');
            $message->from($to_email, $to_name);
        });
    }
}
