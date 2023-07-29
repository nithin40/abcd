<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
</head>
<body>
    <h2>PHP Form Example</h2>
    <form method="post" action="{{url('/click')}}">
      @csrf
      @foreach($nithin as $row)
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{$row->name}}"><br/>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{$row->email}}" ><br/>
        
       
        
        <input type="submit" value="update">
        @endforeach
    </form>
</body>
</html>



