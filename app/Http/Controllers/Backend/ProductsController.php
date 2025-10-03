<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function OpenAdd(){
        $data = DB::table('category')->get();
        return view('Backend.add-products',compact('data'));
    }
    public function AddProducts(Request $request){
        $name = $request->input('name');
        $qty = $request->qty;
        $description = $request->input('description');
        $color = $request->color;
        $size = $request->size;
        $regular_price = $request->input('regular_price');
        $discount = $request->input('discount');
        $thumbnail = $request->thumbnail;
        $category = $request->category;
        $strSize = '';
        $strColor = '';
        if($size ){
            $strSize = implode(',' ,$size); 
        }
        if($color){
            $strColor = implode(',' ,$color);
        }
        //return $strColor .','. $strSize ;

        if($thumbnail){
            $newthumbnail = date('d-m-y-h-i-s')."_".$thumbnail->getClientOriginalName();
            $path = 'backend/Images';
            $thumbnail->move($path,$newthumbnail);
        }
        $sale_price = $regular_price - ($regular_price*$discount)/100 ;
        $user_id = Auth::user()->id;
         //try{
            Products::create([
                'name'=>$name,
                'stock_qty'=>$qty,
                'color'=>$strColor,
                'size'=>$strSize,
                'regular_price'=>$regular_price,
                'discount'=>$discount,
                'sale_price'=>$sale_price,
                'user_id'=>$user_id,
                'category_id'=>$category,
                'thumbnail'=>$newthumbnail,
                'description'=>$description,
            ]);
            return redirect('admin/add-products')->with('success','');
        // }
        // catch(Exception $e){    
        //     return redirect('admin/add-products')->with('unsuccess','');
        // }
    }
    public function ViewProducts(){
        $data = Products::select('products.*', 'category.name as catename', 'users.name as pName')
                        ->join('category','category.id', '=', 'products.category_id')
                        ->join('users','products.user_id','=', 'users.id')
                        ->get();
        return view('Backend.list-products',compact( 'data'));
    }
    public function OpenUpdate($id){
        $data = Products::select('*')->get();
        return view( 'Backend.update-products',compact( 'data' ) );
    }
    public function UpdateProduct(Request $request){
        $update_id = $request->update_id;
        $name = $request->input('name');
        $qty = $request->qty;
        $description = $request->input('description');
        $color = $request->color;
        $size = $request->size;
        $regular_price = $request->input('regular_price');
        $discount = $request->input('discount');
        $thumbnail = $request->thumbnail;
        $category = $request->category;
        $strSize = '';
        $strColor = '';
        
        if(($strSize) ){
            $strSize = implode(',' ,$size); 
        }
        if(($strColor)){
            $strColor = implode(',' ,$color);
        }
        return $strColor .','. $strSize ;

        if($thumbnail){
            $newthumbnail = date('d-m-y-h-i-s')."_".$thumbnail->getClientOriginalName();
            $path = 'backend/Images';
            $thumbnail->move($path,$newthumbnail);
        }
        else{
            $newthumbnail = $request->old_thumbnail;
        }
        $sale_price = $regular_price - ($regular_price*$discount)/100 ;
        try{
            Products::where('id',$update_id)->update([
                'name'=>$name,
                'stock-qty'=>$qty,
                'color'=>$strColor,
                'size'=>$strSize,
                'regular_price'=>$regular_price,
                'discount'=>$discount,
                'sale_price'=>$sale_price,
                'category-id'=>$category,
                'thumbnail'=>$newthumbnail,
                'description'=>$description,
            ]);
            return redirect('/admin/list-products')->with('Usuccess','');
        }
        catch(Exception $e){
            return redirect('/admin/update-product'.$update_id)->with('Unsuccess',$e);
        }
    }
    public function DeleteProduct(){
        $delete_id=Request()->delete_id;
        Products::where('id',$delete_id)->delete();
        return redirect('/admin/delete-product')->with('Dsuccess','');

    }
}
