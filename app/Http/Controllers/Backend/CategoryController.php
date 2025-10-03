<?php

namespace App\Http\Controllers\Backend;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function OpenCategory(){
        return view('Backend.add-category');
    }
    public function AddCategory(Request $request){
        $name = $request->input('name_category');
        $user_id = Auth::user() -> id;
        try{
            DB::table('category')->insert([
                'name' => $name,
                'user_id'=>$user_id,
                'created_at'=>date('Y-m-d h-i-s'),
                'updated_at'=>date('Y-m-d h-i-s')
            ]);
            return redirect('/admin/add-category')->with('success','');
        }catch(Exception $e){
            
            return redirect('/admin/add-category')->with('unsuccess','');
        }

        // if($name){
        //     DB::table('category')->insert([
        //         'name' => $name,
        //         'user_id'=>$user_id,
        //         'created_at'=>date('y-m-d h-i-s'),
        //         'updated_at'=>date('y-m-d h-i-s')
        //     ]);
        //     return redirect('/admin/add-category')->with('success','');
        // }
        // else{
        //     return redirect('/admin/add-category')->with('unsuccess','');
        // }
    }
    public function ViewCategory(){
        $data = DB::table( 'category' )
                    ->select('category.*','users.name as userName')
                    ->join('users', 'users.id', '=', 'category.user_id')
                    ->orderBy('id','DESC')->get();
        return view('Backend.list-category',compact('data'));
    }
    public function OpenUpdate($id){
        $data = DB::table( 'category' )->select('*')->where('id',$id)->first();
        return view('Backend.update-category',compact('data'));
    }
    public function UpdateCategory(Request $request) {
        $update_id = $request->update_id;
        $name = $request->name_category;
        if($name){
            DB::table('category')->where('id',$update_id)->Update([
                'name'=>$name,
                'updated_at'=>date('y-m-d h-i-s'),
            ]);
            return redirect('admin/list-category')->with('Usuccess','');
        }
        else{
            return redirect('admin/update-category'.$update_id)->with('unsuccess','');
        }
    }
    public function DeleteCategory(Request $request){
        $id = $request->delete_id;
        DB::table('category')->where('id',$id)->delete();
        return redirect('admin/list-category')->with('Dsuccess','');
    }
}
