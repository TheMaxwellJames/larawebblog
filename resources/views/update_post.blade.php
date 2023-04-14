<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<x-app-layout>



<div style="padding-left: 40%; padding-top: 10%">


<form action="{{url('confirm_update', $data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf


    <div>
        <label for="">Post Description</label>
        <input type="text" name="description" value="{{$data->description}}">
    </div>

    <br>


    <div>
        <label for="">Current Image</label>
        <img src="/post/{{$data->image}}" height="400px" width="400px">
    </div>

<br>

    <div>
        <label for="">Change Image</label>
        <input type="file" name="image">
    </div>

<br>

    <div>
     
        <input type="Submit" value="Update Post"  style="background: skyblue; cursor:pointer; padding:10px; border-radius:10px;">
    </div>


<br>


</form>

</div>







</x-app-layout>

</body>
</html>