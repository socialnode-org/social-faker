@extends('layouts.docs')

@push('scripts')
@endpush

@section('content')
<section class="hero is-medium is-primary">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Developers Wanted.
      </h1>
      <h2 class="subtitle">
        Primary bold subtitle
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
          <article class="message is-danger">
            <div class="message-header">
              <p><strong>Danger</strong>! <a>Learn more</a></p>
              <button class="delete"></button>
            </div>
            <div class="message-body">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection