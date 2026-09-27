@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Aura</th>
      <th>Hierarchy</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($viewData['humans'] as $human)
      <tr>
        <td>{{ $human->getId() }}</td>
        <td>
          {{ $human->getName() }}
          @if ($human->isLegendary())
            <span class="badge bg-warning text-dark">Boff</span>
          @endif
        </td>
        <td>
          @if ($human->isCommon())
            <span class="text-primary">{{ $human->getAura() }}</span>
          @else
            {{ $human->getAura() }}
          @endif
        </td>
        <td>{{ $human->getHierarchy() }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
