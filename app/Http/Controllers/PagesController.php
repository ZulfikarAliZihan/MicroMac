<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Models;
use App\Brand;

class PagesController extends Controller
{
    // public function items(){
    //     $brands=Brand::orderBy('id','desc')->get();
    //     $models=Models::orderBy('id','desc')->get();
    //     return view('pages.items')->with('brands',$brands)->with('models',$models);
    // }

    public function items(){
        $brands=Brand::orderBy('id','desc')->get();
        $models=Models::all();

        $items=Item::orderBy('id','desc')->get();
        return view('pages.items',compact('items','models','brands'));
    }

    public function models(){
        $models=Models::orderBy('id','desc')->get();
        $brands=Brand::orderBy('id','desc')->get();
        return view('pages.models')->with('brands',$brands)->with('models',$models);
    }

    public function brands(){
        $brands=Brand::orderBy('id','desc')->get();
        $models=Models::all();

        $items=Item::orderBy('id','desc')->get();
        return view('pages.brands',compact('items','models','brands'));
    }
    public function add_brands(){
        $brands=Brand::orderBy('id','desc')->get();
        return view('pages.add_brands')->with('brands',$brands);
    }

    
}
