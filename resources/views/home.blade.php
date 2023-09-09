@extends('layouts.app')


@section('content')

<div class="container">

  @auth

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <ul class="list-group">

          <li class="list-group-item">
            <a href="">Get A Quote</a>
          </li>
          <li class="list-group-item">
            <a href="{{route('posts.index')}}">Posts</a>
          </li>

          <li class="list-group-item">
            <a href="{{route('categories.index')}}">Categories</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  @else

  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">{{ __('Dashboard') }}</div>

          <div class=" card-body">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
            @endif

            {{ __('You are logged in!') }}
          </div>
        </div>
      </div>
    </div>
  </div>

  @endauth
  @endsection