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
                
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">SL</th>
                        <th scope="col">Name</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Entry Date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i_count=1;
                        @endphp
                         
                         @foreach ($models as $model)
                        
                            
                        
                      <tr>
                        <th scope="row">@php echo $i_count; @endphp</th>
                        
                        <td>{{$model->name}}</td>
                        <td>{{$model->brand['name']}}</td>
                        <td>{{date('d-m-Y', strtotime($model->entry_date))}}</td>
                        <td>
                            <a href="#model_edit{{$model->id}} "data-toggle="modal">
                                <img src="{{asset('images/'.'edit_btn.svg')}}" alt="edit" width="20px">
                            </a>

             <!-- Modal for edit -->
            <div class="modal fade" id="model_edit{{$model->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Model</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <p>Fields marked with <b class="star_red">*</b> are mandatory</p>
                        <hr class="hr_dotted">

                        <div class="script_msg1" id="model_edit_error"></div>
                        <form action="{{route('edit_model',$model->id)}}" method="post" id="model_edit_1">
                           {{ csrf_field() }}
                            
                           <div class="form-group row">
                              <label for="inputPassword" class="col-sm-4 col-form-label">Model Name <b class="star_red">*</b></label>
                              <div class="col-sm-8">
                                <input class="form-control" name="name" type="text" value="{{$model->name}}" id="model_name_edit">
    
                              </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Select Brand <b class="star_red">*</b></label>
                                <div class="col-sm-8">
                                
                                    <select name="brand_id" id="brand_id">
                                        @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}"> {{$brand->name}} </option> 
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                               
                                <div class="col-sm-8">  
                                    <button type="submit" id="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>
                            
                          </form>
    
                        </div>
                    </div>
                </div>
            </div>


                            <a href="#model_delete{{$model->id}} "data-toggle="modal">
                                <img src="{{asset('images/'.'delete_btn.svg')}}" alt="delete" width="20px">
                            </a>
                            
                        
            <!-- Modal for delete -->
            <div class="modal fade" id="model_delete{{$model->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Model</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>Are You sure to delete the selected Model?</p>
        
                    <form action="{{route('delete_model',$model->id)}}" method="post">
                       {{ csrf_field() }}
                        
                         
                             <center>
                                <button type="submit" id="submit"  >OK</button>
                                <button type="button"  data-dismiss="modal">Cancel</button>     
                            </center>  
                            
                          
                        
                         </form>
                     </div>
                </div>
                </div>
            </div>


                        </td>
                      </tr>
                      @php
                          $i_count++;
                      @endphp
                      @endforeach
                      
                      

                    </tbody>
                  </table>
            </div>

                        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#create_model">
                Add Model
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="create_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Model</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <p>Fields marked with <b class="star_red">*</b> are mandatory</p>
                        <hr class="hr_dotted">
                        <div class="script_msg1" id="dq"></div>
                        <form action="{{route('add_model')}}" method="post" id="aq">
                           {{ csrf_field() }}
                            
                           <div class="form-group row">
                              <label for="inputPassword" class="col-sm-4 col-form-label">Model Name <b class="star_red">*</b></label>
                              <div class="col-sm-8">
                                <input class="form-control" name="name" type="text" id="nq">
    
                              </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label">Select Brand <b class="star_red">*</b></label>
                                <div class="col-sm-8">
                                
                                    <select name="brand_id" id="brand_id">
                                        @foreach ($brands as $brand)
                                            <option value="{{$brand->id}}"> {{$brand->name}} </option> 
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-4 col-form-label"></label>
                               
                                <div class="col-sm-8">  
                                    <button type="submit" id="submit" class="btn btn-success">Add</button>
                                </div>
                            </div>
                            
                          </form>
    
                        </div>
                    </div>
                </div>
            </div>
           

            
           
        </div>
    </div>
</div>

<!--sidebar bar end -->


    
@endsection