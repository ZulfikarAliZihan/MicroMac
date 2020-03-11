@extends('layouts.master')

@section('content')

<!--sidebar bar start -->

<div class="container margin-top-20">
    <div class="row">
        <div class="col-md-4">
           @include('partials.product-sidebar')
        </div>
        
        <div class="col-md-8">
            <div class="widget">
                <h2>All Items</h2>
                <div class="row">

                   
                   @foreach ($items as $item)
                       
                       
                   
                       
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                  <h6 class="card-title">Brand: {{$item->brand['name']}}</h6>

                                  
                                  <p class="card-text">Model: {{$item->model['name']}}</p>
                                  <p class="card-text">Item: {{$item->name}}</p>
                                  <p class="card-text">Date: {{date('d-m-Y', strtotime($item->entry_date))}}</p>
                                  
                                
                                </div>
                              </div>
                        </div>
                     @endforeach
                     
                    

                </div>
            </div>
        </div>
    </div>
</div>
            
<!--sidebar bar end -->
    
@endsection