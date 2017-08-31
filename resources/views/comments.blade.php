{{--@extends('layouts.app')--}}
{{----}}
@foreach($comments as $comment)
    <div class="comment">
        <div class="float-left "><img class="icon" src="{{ asset('img/huaji.png') }}"> </div>
        <div class="float-left">{{$comment->user->user_name}}</div>
        <div class="float-right">{{$comment->updated_at}}</div>
        <div class="clearfix"></div>
        <div class="comment-text">{!! $comment->comment !!}</div>
    </div>
@endforeach
<!--分页-->
{{--<div class="page-split text-right">--}}
        {{ $comments->links() }}
{{--</div>--}}
<script >
    $(".pagination li a").click(function () {
        var url = $(this).attr('action');
        console.log('url ' + url);
        $.get(url, function (data) {
            $("#comments").html(data);
        })
    });
</script>
