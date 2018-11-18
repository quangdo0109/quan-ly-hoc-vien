@extends('layouts.app')

@section('content')
<div class="container">
    {{ $post->title }} <br>
    {{ $post->content }}
</div>
@endsection
