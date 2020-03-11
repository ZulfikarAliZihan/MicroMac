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
                        <th scope="col">Entry date</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i_count=1;
                        @endphp
                        @foreach ($brands as $brand)
                            
                        
                      <tr>
                        <th scope="row">@php echo $i_count; @endphp</th>
                        <td>{{$brand->name}}</td>
                        <td>{{date('d-m-Y', strtotime($brand->entry_date))}}</td>
                        <td>
                            <a href="#brand_edit{{$brand->id}} "data-toggle="modal">
                                <img src="{{asset('images/'.'edit_btn.svg')}}" alt="edit" width="20px">
                            </a>

             <!-- Modal for edit -->
            <div class="modal fade" id="brand_edit{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Brand</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <p>Fields marked with <b class="star_red">*</b> are mandatory</p>
                        <hr class="hr_dotted">

                        <div class="script_msg1" id="brand_edit_error"></div>
                        <form action="{{route('edit_brand',$brand->id)}}" method="post" id="brand_edit1">
                           {{ csrf_field() }}
                            <div class="form-group row">
                              <label for="inputPassword" class="col-sm-4 col-form-label">Brand Name <b class="star_red">*</b></label>
                              <div class="col-sm-8">
                                <input class="form-control" name="name" id="brand_name_edit" type="text" value="{{$brand->name}}">
    
                                <br>
                                <button type="submit" id="submit" class="btn btn-success">Update</button>
                              </div>
                            </div>
                            
                          </form>
    
                        </div>
                    </div>
                </div>
            </div>


                            <a href="#brand_delete{{$brand->id}} "data-toggle="modal">
                                <img src="{{asset('images/'.'delete_btn.svg')}}" alt="delete" width="20px">
                            </a>
                            
                        
            <!-- Modal for delete -->
            <div class="modal fade" id="brand_delete{{$brand->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>Are You sure to delete the selected brand?</p>
        
                    <form action="{{route('delete_brand',$brand->id)}}" method="post">
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
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                Add Brand
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>Fields marked with <b class="star_red">*</b> are mandatory</p>
                    <hr class="hr_dotted">

                    <div class="script_msg1" id="brand_add_error"></div>
                    <form action="{{route('add')}}" id="brand_add" method="post">
                       {{ csrf_field() }}
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Brand Name <b class="star_red">*</b></label>
                          <div class="col-sm-8">
                            <input class="form-control" name="name" id="brand_name_add" type="text" placeholder="Brand Name">

                        


                            <br>
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