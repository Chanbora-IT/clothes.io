<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function Search(Request $request){
        $reSearch = $request->searchProduct;
        $search = DB::table('products')->where('name','LIKE','%'.$reSearch.'%')->get();
        $NewsSearch = DB::table('news')->where('title','LIKE','%'.$reSearch.'%')->get();
        return view('/Frontend/search',compact('search','NewsSearch'));
    }
}
