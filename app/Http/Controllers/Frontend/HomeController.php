<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $newproducts = DB::table('products')->select('*')->orderByDesc('id')->limit(4)->get();
        $promotion = DB::table( 'products' )->where('discount','>=',0)->limit(4)->get();
        $popular = DB::table('products')->orderByDesc('viewers')->limit(4)->get();
        return view('Frontend.home',compact('newproducts','promotion','popular'));
       
    }
    public function ProductDetail($id){
        $productdetail = DB::table('products')->where('id',$id)->first();
        DB::table( 'products' )->where('id',$id)->update([
            'Viewers' => $productdetail->Viewers+1,
        ]);
        // return $productdetail;
        $related = DB::table('products')->where('category_id',$productdetail->category_id)
                                        ->where('id','!=',$productdetail->id)
                                        ->limit(4)->get();
        return view('Frontend.productdetail',compact('productdetail','related') );
    }
}
