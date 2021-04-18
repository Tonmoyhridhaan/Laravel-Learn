<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="link.https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">
    
</head>
<body>

<div class="container">
    <h2>All products</h2>
    <table class="table table-borderd" id="xyz">
        <thead>
            <th>Product</th>
            <th>Price</th>
            <th>Category</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>

        <tbody>
            @if($products)
                @foreach($products as $p)
                    <tr>
                        <td>{{ $p->product }}</td>
                        <td>{{ $p->price }}</td>
                        <td>{{ $p->category }}</td>
                        <td><button>Edit</button></td>
                        <td><button>Delete</button></td>
                        
                    </tr> 
                @endforeach   
            @endif
        </tbody>
    </table>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.colVis.min.js"></script>





<script>
$(document).ready(function() {
    $("#xyz").DataTable({

        columnDefs: [{
            bSortable: false, 
            targets: [3,4] 
        }],

        dom: 'Blfrtip',
        buttons: [
            //'pageLength',
            {
                extend: 'copyHtml5',
                exportOptions: {
                    columns: [ 0, ':visible' ]
                }
            },
            {
                extend: 'excelHtml5',
                exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'pdfHtml5',
                exportOptions: {
                    columns: [0,1,2]
                }
            },
            'colvis'
            // {
            //     extend: 'print',
            //     text: 'Print all (not just selected)',
            //     exportOptions: {
            //         modifier: {
            //             selected: null
            //         }
            //     }
            // }
        ]
        //select: true
    });
});
</script>


    
</body>
</html>