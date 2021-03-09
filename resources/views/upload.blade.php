<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <h2>Upload image Using Intervention Package</h2>
        <form method="post" action="{{ URL::to('upload-image') }}" enctype="multipart/form-data">
            {{ csrf_field() }} 
            <div class="form-group">
                <input type="file" multiple name="filename[]" id="imgInp" class="form-control">  
                <div class="blah"  ></div> 
            </div>

            <div class="form-group">
                <input type="submit" value="upload" class="btn btn-primary">  
            </div>  
        </form>

        <div>
            <h4>Original Image</h4>
            @foreach($images as $i)
                <img width = "400px" src="{{ asset('images/'.$i->filename) }}" alt="">
            @endforeach
        </div>

        <div>
            <h4>Thumbnail Image</h4>
            @foreach($images as $i)
                <img  width = "400px" src="{{ asset('thumbnail/'.$i->filename) }} " alt="">
            @endforeach
        
        </div>
        
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(function() {
            // Multiple images preview in browser
            var imagesPreview = function(input, placeToInsertImagePreview) {

                if (input.files) {
                    var filesAmount = input.files.length;

                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();

                        reader.onload = function(event) {
                            $($.parseHTML("<img height='200px' width='200px'>")).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }

                        reader.readAsDataURL(input.files[i]);
                    }
                }

            };

            $('#imgInp').on('change', function() {
                imagesPreview(this, 'div.blah');
            });
        });
    </script>
</body>
</html>