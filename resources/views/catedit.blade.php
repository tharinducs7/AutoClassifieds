<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Details</title>
    

</head>
<body>

    <h3>Category Edit</h3>


<table id="tab" border="0.8px solid black" style="padding:1px;">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Active</th>
        <th></th>
    </tr>
    @foreach ($categories as $cat)
    <tr>
        <td>{{$cat->id}}</td>
        <td>{{$cat->categoryName}}</td>
        <td>{{$cat->isActive}}</td>

        <!--Delete button-->
        <td><a href="api/category/{{$cat->id}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?" class="btn btn-primary">Delete</a></td>
    </tr>
    
    @endforeach
</table>
<br><br><br>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{asset('js/deleteaction.js')}}"></script>
</body>
</html>