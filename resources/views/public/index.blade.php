@extends('layouts.core.app')

@section('content')
<!-- <header><img src="{{ URL::asset('img/apjc-logo-2.png') }}" alt="ecole-header" /></header> -->
    @if(Auth::check())
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <h1>Bienvenue {{Auth::user()->name}}</h1></div>
                </div>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <marquee direction="left">Mon texte va vers la gauche</marquee>
            </div>
        </div>
    </div>
  </div>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <article>
                    <h1>Index</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem debitis deleniti dicta enim eos fuga, inventore ipsum magnam, minus modi pariatur provident quam quo reprehenderit repudiandae sequi sint suscipit vero.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi cumque cupiditate dolore eligendi, eos explicabo laboriosam libero magnam maxime nemo odit optio quibusdam quisquam quod sapiente similique veritatis vitae.</p>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet corporis exercitationem id ipsum nemo nesciunt placeat quam, rerum voluptates. Commodi fuga, in molestias quibusdam quo sequi vero. Inventore, repellat.</p>
                </article>
            </div>

        </div>
    </div>
</div>
@endsection
