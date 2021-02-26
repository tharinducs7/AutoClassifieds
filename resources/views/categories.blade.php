<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <script>

    </script>

</head>
<body>

    <h3>Main Categories</h3>

    <table>
        <tr>
            <th>Category Name</th>
            <th>Active Status</th>
        </tr>
            @foreach($categories as $cat)
                @if ($cat->parentId == 0)
                    <td><a href="{{url('category/'.$cat->parentId)}}">{{$cat->categoryName}}</a></td>
                    <td>{{$cat->isActive}}</td>
                @endif
            @endforeach
    </table>
    
    <h3>Sub Categories</h3>
    <table>
        <tr>
            <th>Sub Category Name</th>
            <th>Active Status</th>
        </tr>
            @foreach($categories as $cat)
                @if ($cat->parentId == 1)
                    <td><a href="{{url('category/'.$cat->parentId)}}">{{$cat->categoryName}}</a></td>
                    <td>{{$cat->isActive}}</td>
                @endif
            @endforeach
    </table>
    <h3>Mini Sub Categories</h3>

    
</body>
</html>