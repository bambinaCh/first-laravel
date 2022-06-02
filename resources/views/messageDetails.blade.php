<!--extend layout master.blade.php -->
@extends('layouts.master')

<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Bambi Twitt')
<br>

<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')<br>
<h2>Message Details:</h2>
<h3>{{$message->title}}</h3>
<p>{{$message->content}}</p><br>

<form action="/update/{{$message->id}}" method="post">
    <input type="text" name="title" value="{{$message->title}}">
    <input type="text" name="content" value="{{$message->content}}">
    @csrf
    <button type="submit">Save</button>
</form>

@endsection