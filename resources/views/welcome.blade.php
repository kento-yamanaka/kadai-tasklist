@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <meta http-equiv="refresh" content="0; URL='https://f3e1acd2ba9649bbb6ffe2b44892e275.vfs.cloud9.us-east-1.amazonaws.com/tasks'" />
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Tasks</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection