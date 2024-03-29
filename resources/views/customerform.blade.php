<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Form</title>
    <style>
        *{
            margin: 5px;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <center><h1>{{$title}}</h1></center>
    <form action={{$url}} method="POST">
        @csrf
     <label for="">FullName:</label>
    <input type="text" name="FullName" placeholder="Enter your Fullname" value="{{$cus->FullName}}">
     <br>
    <label for="">Address:</label>
    <input type="text" name="Address" placeholder="Enter your Address" value="{{$cus->Address}}">
    <br>
    <label for="">State:</label>
    <input type="text" name="state" placeholder="Enter your State" value="{{$cus->state}}">
    <br>
    <label for="">Country:</label>
    <input type="text" name="Country" placeholder="Enter your Country" value="{{$cus->Country}}">
     <br>
    <label for="">Age:</label>
    <input type="number" name="Age" placeholder="Enter your Age" value="{{$cus->Age}}">
    <br>
    <label for="">Product:</label>
    <input type="text" name="Product" placeholder="Enter your Product" value="{{$cus->Product}}">
    <br> 
    <button name="submit">submit</button>
</form>
</body>
</html>