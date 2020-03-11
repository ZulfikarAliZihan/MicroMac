<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class ProductController extends Controller
{
    public function add(Request $request){
        $brand=new Brand;
        $brand->name=$request->name;
        $brand->entry_date=date("Y/m/d");
        $brand->save();
        
        return back();
        
    }
    public function edit_brands(){
        
        return view('pages.edit_brands');
        
    }

    public function edit_brand(Request $request,$id){
        $brand=Brand::find($id);
        $brand->name=$request->name;
        $brand->entry_date=date("Y/m/d");
        $brand->save();
        
        return back();
        
    }


    public function delete_brand($id){
        $brand=Brand::find($id);

        if(!is_null($brand)){
            $brand->delete();
        }
       return back(); 
    }

}
