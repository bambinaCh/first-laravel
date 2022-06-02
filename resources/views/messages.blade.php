<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('../css/main.css') }}">
    <title>Bambi Twitt</title>
</head>

<body>
    @extends('layouts/master')
    @section('title','Bambi Twitt')
    @section('content')

    <h2 style="align-items: center;">Create new message:</h2>
    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title">
        <input type="text" name="content" placeholder="Content">
        <!-- this blade directive is necessary for all form posts somewhere in between the form tags -->
        @csrf
        <button class="btn btn-default" type="submit">Submit</button>
    </form>
    <br>
    <h3>Recent messages:</h3>
    @foreach ($messages as $message)
    <li>
        <b>
            <!-- this link to the message details is created dynamically
                and will point to /messages/1 for the first message -->
            <a href="/message/{{$message->id}}">{{$message->title}}:</a>
        </b><br>
        {{$message->content}}<br>
        {{$message->created_at->diffForHumans()}}
        <form action="/message/{{$message->id}}" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-default" type="submit">Delete</button>
        </form>
        <span>{{ $message->updated_at->diffForHumans() }}</span>
        <a class="btn btn-default" href="/message/{{$message->id}}">Edit</a>
        <br>
    </li>

    @endforeach


    @endsection


</body>

</html>