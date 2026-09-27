@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-6 mx-auto">
      <p class="lead"><strong>Name:</strong> {{ $name }}</p>
      <p class="lead"><strong>Address:</strong> {{ $address }}</p>
      <p class="lead"><strong>Phone:</strong> {{ $phone }}</p>
    </div>
  </div>
</div>
@endsection
