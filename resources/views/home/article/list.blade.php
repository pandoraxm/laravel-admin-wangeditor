@extends('layouts.app')

@section('title', "$data->title")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h3>详情页</h3>
            </div>
            <div>
                <li><h3>{!! $data->title !!}</h3></li>
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    @for($i=1;$i<count($data->cover);$i++)
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}"></li>
                    @endfor
                  </ol>
                  
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox" style="max-height:350px;overflow:hidden;">
                    <div class="item active">
                      <img src="/uploads/{{ $data->cover[0] }}" alt="图1">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    @for($i=1;$i<count($data->cover);$i++)
                    <div class="item">
                      <img src="/uploads/{{ $data->cover[$i] }}" alt="图{{ $i }}">
                      <div class="carousel-caption">
                        ...
                      </div>
                    </div>
                    @endfor
                  </div>
                  <hr>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                @foreach($data->cover as $cover)
                <span><a href="/uploads/{!! $cover !!}" data-lightbox="roadtrip" data-title="{!! $data->title !!}"><img src="/uploads/{!! $cover !!}" style="max-width:25%;" alt=""></a></span>
                @endforeach
                <li>{!! $data->content !!}</li>
                <li><span>创建时间: </span>{!! $data->created_at !!}</li>
                <li><span>更新时间: </span>{!! $data->updated_at !!}</li>
            </div>
         </div>
    </div>
</div>
@endsection