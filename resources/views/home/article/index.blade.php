@extends('layouts.app')

@section('title', '文章列表页')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h3>文章列表</h3>
            </div>
            @forelse ($data as $list)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/article/{{ $list->id }}">{{ $list->title }}</a>
                    </div>
                    <div class="panel-body" style="max-height:300px;overflow:hidden;">
                        <img src="/uploads/{!! ($list->cover)[0] !!}" style="max-width:100%;overflow:hidden;" alt="">
                    </div>
                </div>
            @empty
                <p>什么都没有 :(</p>
            @endforelse

            {{ $data->links() }}
        </div>
    </div>
</div>
@endsection