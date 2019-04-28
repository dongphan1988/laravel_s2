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
<h1 style="text-align: center">LOGIN</h1>
<form method="post" action="{{route('login')}}">
@csrf
<a>
<input type="text" name="nameUser" placeholder="enter a name user"/>
</a>

<a>
<input type="password" name="password" placeholder="enter a password"/>
</a>

<a>
<button type="submit">login</button>
</a>
</form>
</body>
</html>