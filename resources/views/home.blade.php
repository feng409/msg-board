@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="form" action="" id="comment">
            @if(Auth::guest())
                <div class="form-group">
                    <label for="comment">请登录后留言</label>
                    <textarea class="form-control" name="comment comment_content" rows="5" disabled="disabled">
                </textarea>
                </div>
                <div class="form-group text-right">
                    <input type="button" disabled class="btn-info btn" value="登录后发言"/>
                </div>
            @else
                <div class="form-group">
                    <label for="comment">请输入你想说的话</label>
                    <textarea class="form-control comment_content" name="comment" rows="5">
                </textarea>
                </div>
                <div class="form-group text-right">
                    <input type="button" class="btn-info btn" value="留言"/>
                </div>
            @endif
        </form>
        <div id="comments">
            尚未加载好
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
