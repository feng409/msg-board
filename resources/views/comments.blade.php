{{--@extends('layouts.app')--}}
{{----}}
@foreach($comments as $comment)
    <div class="row">
        <div class="col-md-3">{{$comment->user->user_name}}</div>
        <div class="col-md-6">{{$comment->comment}}</div>
        <div class="col-md-3">{{$comment->updated_at}}</div>
    </div>
@endforeach