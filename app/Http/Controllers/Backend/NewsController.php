<?php

namespace App\Http\Controllers\Backend;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function OpenNews(){
        return view("Backend.add-news");
    }
    public function AddNews(Request $request){
        $title = $request->title;
        $description = $request->description;
        $thumbnail = $request->thumbnail;
        $user_id = Auth::user()->id;
        if($thumbnail){
            $newthumbnail = date('d-m-y-h-i-s')."_".$thumbnail->getClientOriginalName();
            $path = 'backend/Images';
            $thumbnail->move($path,$newthumbnail);
        }
        // try{
            DB::table('news')->insert([
                'title' => $title,
                'thumbnail'=>$newthumbnail,
                'description'=>$description,
                'user_id'=>$user_id,
                'created_at'=>date('Y-m-d h-i-s'),
                'updated_at'=>date('Y-m-d h-i-s')
            ]);
            return redirect('/admin/add-news')->with('success','');
        // }catch(Exception $e){
            
            return redirect('/admin/add-news')->with('unsuccess','');
        // }
    }
    public function ListNews(){
        $data = DB::table('news')->select('*')->orderByDesc('id')->get();
        return view('Backend.list-news',compact('data'));
    }
    public function OpenUpdate($id){
        $data = DB::table( 'news' )->select('*')->where('id',$id)->first();
        return view('Backend.update-news',compact('data'));
    }
    public function UpdateNews(Request $request){
        $update_id = $request->update_id;
        $title = $request->title;
        $thumbnail = $request->thumbnail;
        $description = $request->description;
        if($thumbnail){
            $newthumbnail = date('d-m-y-h-i-s')."_".$thumbnail->getClientOriginalName();
            $path = 'backend/Images';
            $thumbnail->move($path,$newthumbnail); 
        }
        else {
            $newthumbnail = $request->old_thumbnail;
        }
        try{

            DB::table('news')->where('id',$update_id)->update([
                    'title' => $title,
                    'thumbnail'=>$newthumbnail,
                    'description'=>$description,
                    'updated_at'=>date('Y-m-d h-i-s')
            ]);
            return redirect('/admin/list-news')->with('success','');
        }
        catch(Exception $e){
            return redirect('/admin/update-news')->with('unsuccess','');
        }
    }
    public function DeleteNews(Request $request){
        $id = $request->delete_id;
        DB::table('news')->where('id',$id)->delete();
        return redirect('/admin/list-news')->with('Dsuccess','');
    }
}
