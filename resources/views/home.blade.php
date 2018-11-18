@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    You are logged in!
                        <form action="/create_new_post" method="post">
                            @csrf
                            Title:<br>
                            <input type="text" name="title" >
                            <br>
                            Content:<br>
                            <textarea rows="6" name="content"></textarea>
                            <br><br>
                            <input type="submit" value="Submit">
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
