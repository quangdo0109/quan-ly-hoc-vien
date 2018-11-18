@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Title</th>
            <th>Content</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($posts as $post)

            <tr>
                <td><a href="/posts/{{$post->id}}">{{ $post->title }}</a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
