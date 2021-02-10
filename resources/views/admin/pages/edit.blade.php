
@extends('admin.layouts.full')

@section('content')
    <div class = "container">
    <div class="col-md-10 mt-5 ">
        <h2>Edit Employee</h2>

        <div class="col-md-8">
            <form method = "post" action="{{ URL::to('update/'.$employee->id) }}">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" class = "form-control" name="name" value={{ $employee->name }}>
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" class = "form-control" name="email" value={{ $employee->email }}>
                </div>

                <div><label for="">Gender</label></div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="male" <?php if($employee->gender=='male'){echo 'checked';}?>>Male
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="female" <?php if($employee->gender=='female'){echo 'checked';}?>>Female
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" value="other" <?php if($employee->gender=='other'){echo 'checked';}?>>Other
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
                    <input type="date" class = "form-control" name="dob" value={{ $employee->dob }}>
                </div>

                <div class="form-group">
                            <label for="sel1">Select Role:</label>
                            <select class="form-control" name='role'>
                                <option value="admin" <?php if($employee->role=='admin'){echo 'selected';}?> >admin</option>
                                <option value="teacher" <?php if($employee->role=='teacher'){echo 'selected';}?> >teacher</option>
                            </select>
                        </div>

                <div class="form-group">
                    <button type = "submit" class = "btn btn-primary">Submit</button>
                    <a href="{{ URL::to('employees') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
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