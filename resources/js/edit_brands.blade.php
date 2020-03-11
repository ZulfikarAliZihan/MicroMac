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
                
         ...
            </div>

                        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                Add Brand
            </button>
            
            <!-- Modal -->
            <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                    <p>Fields marked with <b class="star_red">*</b> are mandatory</p>
                    <hr class="hr_dotted">


                    <form action="{{route('add')}}" method="post">
                       {{ csrf_field() }}
                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-4 col-form-label">Brand Name <b class="star_red">*</b></label>
                          <div class="col-sm-8">
                            <input class="form-control" name="name" type="text" placeholder="Brand Name">

                        


                            <br>
                            <button type="submit" id="submit" class="btn btn-success">Add</button>
                          </div>
                        </div>
                        
                      </form>

                    </div>
                    
                </div>
                </div>
            </div>

           

            <a href="{{ route('items') }}"" class="btn btn-primary btn-sm">Add Brands</a>
            
            <button type="button"onclick="myFunction()" id="ab" class="btn btn-success">ab</button>
           
        </div>
    </div>
</div>

<!--sidebar bar end -->

<script>
    function myFunction() {
      alert("Hello! I am an alert box!");
      
      
    }
    </script>
    
@endsection