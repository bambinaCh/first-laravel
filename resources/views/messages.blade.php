<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('/resources/css/app.css') }}" /*href="/resources/css/app.css"*/ >
    <title>Bambi Twitt</title>
</head>

<body>

    @extends('layouts/master')
    @section('title','Bambi Twitt')
    @section('content')
     <h3>Recent messages</h3>
     <h5>I WANNA EAT AND SLEEP!!</h5>
     <h6>2 min ago</h6>
    @endsection 
    
   
</body>

</html>
