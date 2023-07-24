<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> {{$name}}</h1>
</body>
<ul>
@foreach ($transactions as $transaction)
<li>{{$transaction->name}}</li>
@endforeach
</ul>
</html>