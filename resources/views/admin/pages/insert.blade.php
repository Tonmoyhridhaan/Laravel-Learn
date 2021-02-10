
@extends('admin.layouts.full')

@section('content')
<div class = "container">
        <div class="col-md-8 mt-5 offset-md-2">
        
        
            <div class="card">
                <div class="card-header">
                    Create Employee
                </div>
                <div class="card-body">
                    <form method = "post" action="{{ URL::to('store-employee') }}">
                    {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class = "form-control" name="name">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class = "form-control" name="email">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class = "form-control" name="password">
                        </div>

                        <div><label for="">Gender</label></div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" value="male">Male
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" value="female">Female
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" value="other">Other
                            </label>
                        </div>

                        <div><label for="">Active Status</label></div>
                        <div class="form-check-label">
                            <label class="form-checkbox form-icon" for="s_fac">
                                <input id="s_fac" type="checkbox" class="sev_check" name="isactive" value="1"> isactive
                            </label>
                        </div>
                        
            
                        <div class="form-group">
                            <label for="">Date of birth</label>
                            <input type="date" class = "form-control" name="dob">
                        </div>

                        <div class="form-group">
                            <label for="sel1">Select Role:</label>
                            <select class="form-control" name='role'>
                                <option value="admin">admin</option>
                                <option value="teacher">teacher</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <button type = "submit" class = "btn btn-primary">Submit</button>
                            <a href="{{ URL::to('employees') }} " class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            
            </div>
        </div>       
    </div>



    
<script>
$(function () {
    $('.sev_check').click(function(e) {
        $('.sev_check').not(this).prop('checked', false);
    });
});
</script>

@stop