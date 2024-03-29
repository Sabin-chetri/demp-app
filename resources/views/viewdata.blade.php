<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ViewData</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Full Name</td>
            <td>Address</td>
            <td>State</td>
            <td>Country</td>
            <td>Age</td>
            <td>Product</td>
            <td>Status</td>
            <td>extra</td>
        </tr>
        @foreach ( $customer as $cus )
            
       
        <tr>
            <td>{{$cus->FullName}}</td>
            <td>{{$cus->Address}}</td>
            <td>{{$cus->state}}</td>
            <td>{{$cus->Country}}</td>
            <td>{{$cus->Age}}</td>
            <td>{{$cus->Product}}</td>
            <td>
               @if($cus->status == '1')
                   active
                @else
                    inactive
               @endif 
            </td>
            <td>
                <a href="{{url('/edit')}}/{{$cus->id}}"><button>edit</button></a>
                <a href="{{url('/delete')}}/{{$cus->id}}"><button>delete</button></a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>