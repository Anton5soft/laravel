@extends('layouts.main')

@section('content')
<p>
    Your Posts
</p>

<tbody>
@foreach ($posts as $post)
<tr>
    <center><h1><td>{{{ $post->title }}}</td></h1></center>
    <br>
    <center><td>{{{ $post->content }}}</td></center>
    <center><td>{{{ $post->created_at }}}</td></center>
</tr>
@endforeach
</tbody>
@stop