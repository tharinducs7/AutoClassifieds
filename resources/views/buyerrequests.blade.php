<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Buyer Requests Details</h3>
@foreach ($allRequests as $req)
<table id="tab" border="1px solid black" style="padding:8px;">
    <tr>
        <th>ID:</th>
        <td>{{$req->id}}</td>
    </tr>
    <tr>
        <th>UserId:</th>
        <td>{{$req->user_Id}}</td>
    </tr>
    
    <tr>
        <th>Category ID:</th>
        <td>{{$req->category_Id}}</td>
    </tr>
    <tr>
        <th>Model Year:</th>
        <td>{{$req->model_year}}</td>
    </tr>
    <tr>
        <th>Description :</th>
        <td>{{$req->description}}</td>
    </tr>
    <tr>
        <th>Price:</th>
        <td>{{$req->price}}</td>
    </tr>
    <tr>
        <th>Title:</th>
        <td>{{$req->title}}</td>
    </tr>
    <tr>
        <th>Action Date:</th>
        <td>{{$req->action_Date}}</td>
    </tr>
    <tr>
        <th>Expiry Date:</th>
        <td>{{$req->exp_Date}}</td>
    </tr>
    <tr>
        <th>Status:</th>
        <td>{{$req->status}}</td>
    </tr>
    <tr>
        <th>Remark:</th>
        <td>{{$req->remark}}</td>
    </tr>
</table>
<br><br><br>

@endforeach
</body>
</html>