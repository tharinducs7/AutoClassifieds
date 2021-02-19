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
        <th>Vehicle name:</th>
        <td>{{$req->vehicle}}</td>
    </tr>
    
    <tr>
        <th>Category:</th>
        <td>{{$req->category}}</td>
    </tr>
    <tr>
        <th>Fuel:</th>
        <td>{{$req->fuel}}</td>
    </tr>
    <tr>
        <th>Registration Year:</th>
        <td>{{$req->registrationYear}}</td>
    </tr>
    <tr>
        <th>Mileage:</th>
        <td>{{$req->mileage}}</td>
    </tr>
    <tr>
        <th>Description:</th>
        <td>{{$req->Description}}</td>
    </tr>
    <tr>
        <th>Offers Sent:</th>
        <td>{{$req->OffersSent}}</td>
    </tr>
</table>
<br><br><br>
@endforeach
</body>
</html>