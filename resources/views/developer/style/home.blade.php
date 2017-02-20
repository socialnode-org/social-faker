@extends('layouts.docs')

@push('scripts')
@endpush

@section('content')
<section class="hero is-small is-success">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Overview
      </h1>
      <h2 class="subtitle">
        Style Guide
      </h2>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-3">
        @include('developer.partial.sidebar')
      </div>
      <div class="column is-9">
        <div class="box">
          <p class="title">Coming soon!</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection