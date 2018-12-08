@extends('layouts.front')

@section('category')
    <div class="col-md-3">
        <div class="dp">
            <img src="https://dummyimage.com/300x200/000/fff" alt="">
        </div>
        <h3>
            {{$user->name}}
        </h3>

    </div>

@endsection

@section('content')
    <div>

        <h3>{{$user->name}}'s latest Questions</h3>

        @forelse($threads as $thread)
            <h5>{{$thread->subject}}</h5>

        @empty
            <h5>No threads yet</h5>

        @endforelse
        <br>
        <hr>

        <h3>{{$user->name}}'s latest Comments</h3>

        @forelse($comments as $comment)
            <h5>{{$user->name}} commented on
            </h5>
            <h5> {{$comment->commentable}}</h5>

            r
        @empty
            <h5>No comments yet</h5>
        @endforelse
    </div>

@endsection