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
<h1>Hello from blade</h1>
<pre>
    <?#=var_dump($users);?>
</pre>
@forelse($users as $user)
    <li>{{ $user->email }}</li>
@empty
    <h1>No users</h1>
@endforelse

</body>
</html>