<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    public function index(Request $request){
        
        $data = DB::table('news')->select('*')->get();
        return view('Frontend.news',compact('data'));
    }
    public function NewsDetail($id){

        $Detail_news = DB::table('news')->where('id',$id)->first();
        DB::table( 'news' )->where('id',$id)->update([
            'Viewers' => $Detail_news->Viewers+1,
        ]);
        return view('Frontend.news_detail',compact('Detail_news'));
        
    }
}
