@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">Human Battle</div>
      <div class="card-body">
        @if ($viewData['firstHuman'] && $viewData['secondHuman'])
          <div class="row text-center mb-3">
            <div class="col-6">
              <h5>{{ $viewData['firstHuman']->getName() }}</h5>
              <p>Aura: {{ $viewData['firstHuman']->getAura() }}</p>
            </div>
            <div class="col-6">
              <h5>{{ $viewData['secondHuman']->getName() }}</h5>
              <p>Aura: {{ $viewData['secondHuman']->getAura() }}</p>
            </div>
          </div>
          <div class="alert alert-info text-center">{{ $viewData['result'] }}</div>
        @else
          <p>At least two humans are required to battle.</p>
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
