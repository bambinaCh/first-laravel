@extends('layouts/master')
@section('title','Bambi Twitt')
@section('content')
<img class="logo" src="{{asset('img/B.png')}}">
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
    </b><br>rgb(251, 184, 231)
    {{$message->content}}<br>
    {{$message->created_at->diffForHumans()}}
    <form action="/message/{{$message->id}}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-default" type="submit">Delete</button>
    </form>
    <a class="btn btn-default" href="/message/{{$message->id}}">Edit</a>
    <br>
</li>

@endforeach


@endsection