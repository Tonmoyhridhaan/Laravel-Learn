
@extends('website.layouts.full')

@section('content')
<div class = "container">
        <div class="col-md-8 mt-5 offset-md-2">
        
        
            <div class="card">
                <div class="card-header">
                    Update Password
                </div>
                <div class="card-body">

                    @if(Session::has('err1_msg')) 
                        <div class="alert alert-danger alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Error!</strong> {{Session::get('err1_msg')}}
                        </div>
                    @endif

                    @if(Session::has('suc_msg')) 
                        <div class="alert alert-success alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Success!</strong> {{Session::get('suc_msg')}}
                        </div>
                    @endif
                    
                    <form method = "post" action="{{ URL::to('store-update-password/'.Session::get('userid')) }}">
                    {{ csrf_field() }}
                        

                        <div class="form-group">
                            <label for="">Old Password</label>
                            <input type="password" class = "form-control" name="password1">
                        </div>

                        <div class="form-group">
                            <label for="">New Password</label>
                            <input type="password" class = "form-control" name="password2">
                        </div>

                        <div class="form-group">
                            <label for="Old">Retype New Password</label>
                            <input type="password" class = "form-control" name="password3">
                        </div>

                        
                        <div class="form-group">
                            <button type = "submit" class = "btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            
            </div>
        </div>       
    </div>





@stop