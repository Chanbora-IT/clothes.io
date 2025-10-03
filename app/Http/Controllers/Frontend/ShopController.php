<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    public function index(Request $request){
        $page = $request->page;
        $cate_id = $request->cate;
        $price = $request->price;
        $promotion = $request->promotion;
        $rsProducts  = ($page-1)*6;
        $newproducts = DB::table('products')->orderByDesc('id')->offset($rsProducts)->limit(6)->get();
        $category = DB::table('category')->orderByDesc('id')->get();
        if(!empty($cate_id)){
            $total = DB::table('products')->where('category_id',$cate_id)->count();
            $total_pages = ceil($total/6);
            $newproducts = DB::table('products')
                            ->where('category_id',$cate_id)
                            ->orderByDesc('id')
                            ->offset($rsProducts)
                            ->limit(6)
                            ->get();
        }
        else if($price == "max"){
            $total = DB::table('products')->count();
            $total_pages = ceil($total/6);
            $newproducts = DB::table('products')
                            ->orderBy('sale_price','DESC')
                            ->offset($rsProducts)
                            ->limit(6)
                            ->get();
        }
        else if($price == "min"){
            $total = DB::table('products')->count();
            $total_pages = ceil($total/6);
            $newproducts = DB::table('products')
                            ->orderBy('sale_price')
                            ->offset($rsProducts)
                            ->limit(6)
                            ->get();
        }
        else if ($promotion == "true"){
            $total = DB::table('products')->where('discount','>',0)->count();
            $total_pages = ceil($total/6);
            $newproducts = DB::table('products')
                            ->where('discount','>',0)
                            ->orderBy('sale_price')
                            ->offset($rsProducts)
                            ->limit(6)
                            ->get();
        }
        else{
            $total = DB::table('products')->count();
            $total_pages = ceil($total/6);
            $newproducts = DB::table('products')
                            ->orderByDesc('id')
                            ->offset($rsProducts)
                            ->limit(6)
                            ->get();
        }
        return view( '/Frontend.shop',compact('newproducts','cate_id','price','promotion','total_pages','category'));
    }
}
