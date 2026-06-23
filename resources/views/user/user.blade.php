<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Hello </h1>
    <p> Email: {{ $data['email'] }} </p>
    <p> Password: {{ $data['password'] }} </p>

    @if ($data['email'] == "admin@gmail.com" && $data['password'] == "123456")
    <h1> Welcome Admin </h1>
    @else
    <h1> Welcome User </h1>
    @endif
</body>
</html>