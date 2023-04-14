<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav>
        <label for="" class='logo'>Blog Web</label>
        <ul>
            <li>
                <a href="">Home</a>
            </li>

            <li>
                <a href="">Contact Us</a>
            </li>


            @if (Route::has('login'))

            @auth

            <li>
                <a href="{{ url('/dashboard') }}" class="btn btn-success"> {{ Auth::user()->name }}</a>
            </li>

            @else
            <li>
                <a href="{{ route('register') }}" class="btn btn-success">Register</a>
            </li>

             

            <li>
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
            </li>

            @endauth

            @endif


        </ul>
    </nav>

    @foreach($post as $post)


    <div class="deg">
        <label for="" class="label">{{$post->username}}</label>
        <br>
        <p>{{$post->description}}</p>

        <img src="post/{{$post->image}}" height="300px" width="100%" alt="" >
    </div>


    @endforeach

</body>
</html>