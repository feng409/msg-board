@extends('layouts.app')

@section('content')
    <div class="container">
        <form class="form" method="post" action="{{ route('comment.store') }}" id="comment" >
            @if(Auth::guest())
                <div class="form-group">
                    <label for="comment">请登录后留言</label>
                    <textarea class="form-control" name="comment comment_content" rows="5" disabled="disabled">
                </textarea>
                </div>
                <div class="form-group text-right">
                    <input type="submit" disabled class="btn-info btn" value="登录后发言"/>
                </div>
            @else
                <div class="form-group">
                    <label for="comment">请输入你想说的话</label>
                    <textarea class="form-control comment_content" name="comment" rows="5">
                </textarea>
                </div>
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group " style="float: left">
                    <a class="hint text-danger" target="_blank" href="https://laravel-china.org/ecc/index.html">emoji表情请参考这里</a>
                </div>
                <div class="form-group float-right" style="float: right">
                        <input type="submit" class="btn-info btn" value="留言"/>
                </div>
                <div class="form-group text-right">
                </div>
            @endif
        </form>
        <div class="clear"></div>
        <div id="comments">
            尚未加载好
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/index.js') }}"></script>
@endsection
