@extends('layouts.core.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="panel panel-default panel-body">
      <article class="">
        <h3>{{$post->title}}</h3><date>{{$post->updated_at->format('d F Y')}}</date>
        <div class="">catégorie : {{$post->category->label}}</div>
          <p>{!! $post->article !!}</p>
      </article>
    </div>
  </div>
</div>
@endsection
