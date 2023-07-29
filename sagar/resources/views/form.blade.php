<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
</head>
<body>
    <h2>PHP Form Example</h2>
    <form method="post" action="{{url('/reg')}}">
      @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        
       
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>