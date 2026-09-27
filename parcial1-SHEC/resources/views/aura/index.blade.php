@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="list-group text-center">
      <a href="{{ route('aura.humans.create') }}" class="list-group-item list-group-item-action">Register Humans</a>
      <a href="{{ route('aura.humans.index') }}" class="list-group-item list-group-item-action">List Humans</a>
      <a href="{{ route('aura.humans.battle') }}" class="list-group-item list-group-item-action">Human Battle</a>
    </div>
  </div>
</div>
@endsection
