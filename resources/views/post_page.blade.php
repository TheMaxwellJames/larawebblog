<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style type="text/css">

        table, tr, td 
        {
            border: 1px solid black;
            border-collapse: collapse;

        }

        tr, td 
        {
            background: skyblue;
            text-align: center;
        }

        table 
        {
            width:80%;

        }



    </style>




</head>
<body>


<x-app-layout>

<div style="padding-left:15%; padding-top:30px">
    <table>
        <tr>
            <th>Post Desc</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>


        @foreach($post as $post)
        <tr>
            <td>{{$post->description}}</td>
            <td>
                <img height='200px' width='200px' src="post/{{$post->image}}" alt="";>
            </td>

            <td>
            <a href="{{url('update_post', $post->id)}}" class="btn btn-primary">Update</a>
            </td>

            <td>
                <a onclick="return confirm('sure to delete?');" href="{{url('delete_post', $post->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach


    </table>
</div>


</x-app-layout>






</body>
</html>