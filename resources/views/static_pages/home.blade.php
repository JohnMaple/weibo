@extends('layouts.default')
@section('content')
  <div class="jumbotron">
    <h1>您好！欢迎来到浅阅！</h1>
    <p class="lead">
      由浅入深，获益匪浅
    </p>
    <p>
      一切，将从这里开始。
    </p>
    <p>
      <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
  </div>
@stop
