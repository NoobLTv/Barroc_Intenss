<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('sales.store') }}" method="post">
    @csrf
    Role ID<br>
    <input type="text" name="role_id" placeholder="Role">
    <br>
    Name:<br>
    <input type="text" name="name" placeholder="Name">
    <br><br>
    Email:<br>
    <input type="email" name="email" placeholder="Email">
    <br><br>
    Password:<br>
    <input type="password" name="password" placeholder="">
    <br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>