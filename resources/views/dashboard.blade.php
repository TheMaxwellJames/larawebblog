<x-app-layout>




<div style="padding-left: 40%; padding-top: 10%">




<form action="{{url('view_post')}}" method="get">
    @csrf

<div style="padding-left:140px; padding-bottom:20px">
        <input type="submit" value="View My Post" style="background: greenyellow; cursor:pointer; padding:10px; border-radius:10px;">
</div>
 
</form>




<label style="padding-left:20%; font-size:20px; font-weight:bold;">Add A Post</label>

<br>

<form action="{{url('upload_post')}}" method="POST" enctype="multipart/form-data">


    @csrf

    <div>
    <label for="">Description</label>
    <input type="text" name="description">
    </div>

<br>

    <div>
    <label for="">Upload Image</label>
    <input type="file" name="image">
    </div>

    <br>

    <div>
        <input type="submit" name="" style="background: skyblue; cursor:pointer; padding:10px; border-radius:10px;">
    </div>
   
</form>


</div>





</x-app-layout>
