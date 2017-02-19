@extends('layouts.bulma')

@push('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.stream-item').on('click', function() {
            let el = $(this);
            $('.stream-item.expanded').removeClass('expanded');
            $(this).addClass('expanded');
            console.log(el);
        });
    });
</script>
@endpush

@section('content')
<div class="container">
  <section class="section main">
    <div class="container">
      <div class="columns">
        <div class="column is-3">
         @include('layouts.partial.aside-user')
          <div class="spacer"></div>
         @include('layouts.partial.aside-trending')
        </div>
        <div class="column is-6">
          @if( $timeline && $timeline->count() > 0)
          @foreach( $timeline as $status)
            <div id="stream-item-{{$status->id}}" 
            data-uri="{{$status->uri('note')}}" 
            class="box media stream-item notice visible" 
            data-source="#" 
            data-quitter-id="#" 
            data-conversation-id="#" 
            data-quitter-id-in-stream="#" 
            data-in-reply-to-screen-name="" 
            data-in-reply-to-profile-url="null" 
            data-in-reply-to-profile-ostatus-uri="null" 
            data-in-reply-to-status-id="null" 
            data-user-id="#" 
            data-user-screen-name="#" 
            data-user-ostatus-uri="#" 
            data-user-profile-url="#">
              <div class="media-left">
                <figure class="image is-64x64">
                  <img src="http://placehold.it/128x128" alt="Image">
                </figure>
              </div>
              <div class="media-content">
                <div class="content">
                  <p>
                    <strong>{{ $status->user->screenname }}</strong> <small>&commat;{{ $status->user->username }}</small> <small style="float:right;"><a href="{{ $status->url() }}">{{ $status->created_at->diffForHumans() }}</a></small>
                    <br>
                    <div class="rendered">
                    {!! $status->rendered !!}
                    </div>
                  </p>
                </div>
                <nav class="level actions">
                  <div class="level-left">
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-reply"></i></span>
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                      &nbsp; 0
                    </a>
                    <a class="level-item">
                      <span class="icon is-small"><i class="fa fa-heart"></i></span>
                      &nbsp; {{ $status->favorites()->count() }}
                    </a>
                  </div>
                </nav>
              </div>
            </div>
          @endforeach
          <div class="box">
          {!! $timeline->render() !!}
          </div>
          @endif

        </div>
        <div class="column is-3">
          <div class="box">
            <p><span class="title is-5">Who to follow</span> · <a href="#">Refresh</a> · <a href="#">View All</a></p>
            <hr>
            <div class="columns">
              <div class="column is-3 is-marginless">
                <div class="image">
                  <img src="https://placehold.it/200x200">
                </div>
              </div>
              <div class="column is-9">
                <p>
                  <a href="#">
                    <strong>John Smith</strong>
                    &commat;jsmith
                  </a> 
                  <a href="#">
                    <i class="fa fa-times"></i>
                  </a>
                </p>
                <a class="button is-primary is-small">
                  <span>
                    + Follow
                  </span>
                </a>
              </div>
            </div>
            <div class="columns">
              <div class="column is-3 is-marginless">
                <div class="image">
                  <img src="https://placehold.it/200x200">
                </div>
              </div>
              <div class="column is-9">
                <p>
                  <a href="#">
                    <strong>Jane Smith</strong>
                    &commat;janesmith
                  </a> 
                  <a href="#">
                    <i class="fa fa-times"></i>
                  </a>
                </p>
                <a class="button is-primary is-small">
                  <span>
                    + Follow
                  </span>
                </a>
              </div>
            </div>
            <div class="columns">
              <div class="column is-3 is-marginless">
                <div class="image">
                  <img src="https://placehold.it/200x200">
                </div>
              </div>
              <div class="column is-9">
                <p>
                  <a href="#">
                    <strong>Mike Scott</strong>
                    &commat;mscott
                  </a> 
                  <a href="#">
                    <i class="fa fa-times"></i>
                  </a>
                </p>
                <a class="button is-primary is-small">
                  <span>
                    + Follow
                  </span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
