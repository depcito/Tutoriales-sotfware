@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">Register Human</div>
      <div class="card-body">
        @if ($errors->any())
          <ul id="errors" class="alert alert-danger list-unstyled">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif

        <form method="POST" action="{{ route('aura.humans.save') }}">
          @csrf
          <div class="mb-2">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
          </div>
          <div class="mb-2">
            <label for="aura" class="form-label">Aura amount</label>
            <input type="number" class="form-control" id="aura" name="aura" value="{{ old('aura') }}" />
          </div>
          <div class="mb-2">
            <label for="hierarchy" class="form-label">Hierarchy</label>
            <select class="form-select" id="hierarchy" name="hierarchy">
              @foreach ($viewData['hierarchies'] as $hierarchy)
                <option value="{{ $hierarchy }}" @selected(old('hierarchy') == $hierarchy)>{{ $hierarchy }}</option>
              @endforeach
            </select>
          </div>
          <input type="submit" class="btn btn-primary" value="Send" />
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
