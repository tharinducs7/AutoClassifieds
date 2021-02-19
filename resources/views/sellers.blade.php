<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Details</title>
    <script>

    </script>

</head>
<body>

    <h3>Seller Details</h3>
@foreach ($allSellers as $sell)
<table id="tab" border="1px solid black" style="padding:8px;">
    <tr>
        <th>ID:</th>
        <td>{{$sell->id}}</td>
    </tr>
    <tr>
        <th>Account Created:</th>
        <td>{{$sell->created_at}}</td>
    </tr>
    <tr>
        <th>Account updated:</th>
        <td>{{$sell->updated_at}}</td>
    </tr>
    <tr>
        <th>Name:</th>
        <td>{{$sell->sellerName}}</td>
    </tr>
    <tr>
        <th>Contact No.:</th>
        <td>{{$sell->contactNumber}}</td>
    </tr>
    <tr>
        <th>Email.:</th>
        <td>{{$sell->sellerEmail}}</td>
    </tr>
    <tr>
        <th>Country:</th>
        <td>{{$sell->country}}</td>
    </tr>
    <tr>
        <th>JoinedDate:</th>
        <td>{{$sell->joinedDate}}</td>
    </tr>
    <tr>
        <th>Seller Status:</th>
        <td>{{$sell->sellerStatus}}</td>
    </tr>
</table>
<br><br><br>
@endforeach
    
</body>
</html>