<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        .error{
            color: red;
        }
    </style>

</head>
<body>

<div class = "container">
<div class="col-md-8">
        <h1>Signup Page</h1>
        <form action="{{ URL::to('store-student') }}" method="post">
        
        {{ csrf_field() }}

            <div class = "form-group">
                <label for="">name</label>
                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                <span class="error">{{ $errors->first('name') }}</span>
            </div>

            <div class = "form-group">
                <label for="">email</label>
                <input class="form-control" type="text" name="email" value="{{ old('email') }}">
                <span class="error">{{ $errors->first('email') }}</span>
            </div>
            
            <div class = "form-group">
                <label for="">Salary</label>
                <input class="form-control" type="text" name="salary" value="{{ old('salary') }}">
                <span class="error">{{ $errors->first('salary') }}</span>
            </div>

            <div class = "form-group">
                <label for="">Age</label>
                <input class="form-control" type="text" name="age" value="{{ old('age') }}">
                <span class="error">{{ $errors->first('age') }}</span>
            </div>

            <div class = "form-group">
                <label for="">Date of Birth</label>
                <input class="form-control" type="text" name="dob" value="{{ old('dob') }}">
                <span class="error">{{ $errors->first('dob') }}</span>
            </div>
            
            <div class = "form-group">
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
            </div>

            </form>
        </div>
    </div>
    
</body>
</html>