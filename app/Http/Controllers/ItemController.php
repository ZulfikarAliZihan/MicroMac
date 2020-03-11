<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    
    public function add_item(Request $request){
        $item=new Item;
        $item->name=$request->name;
        $item->brand_id=$request->brand_id;
        $item->model_id=$request->model_id;
        $item->entry_date=date("Y/m/d");
        $item->save();
        
        return back();
        
    }
    public function edit_item(Request $request,$id){
        $item=Item::find($id);
        $item->name=$request->name;
        $item->brand_id=$request->brand_id;
        $item->model_id=$request->model_id;
        $item->entry_date=date("Y/m/d");
        $item->save();
        
        return back();
        
    }

    public function delete_item($id){
        $item=Item::find($id);

        if(!is_null($item)){
            $item->delete();
        }
        return back(); 
    }

}
