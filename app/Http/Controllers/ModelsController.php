<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;


class ModelsController extends Controller
{
    public function add_model(Request $request){
        $model=new Models;
        $model->name=$request->name;
        $model->brand_id=$request->brand_id;
        $model->entry_date=date("Y/m/d");
        $model->save();
        
        return back();
        
    }
    
    public function edit_model(Request $request,$id){
        $model=Models::find($id);
        $model->name=$request->name;
        $model->brand_id=$request->brand_id;
        $model->entry_date=date("Y/m/d");
        $model->save();
        
        return back();
        
    }
    
    public function delete_model($id){
        $model=Models::find($id);

        if(!is_null($model)){
            $model->delete();
        }
       return back(); 
    }

}
