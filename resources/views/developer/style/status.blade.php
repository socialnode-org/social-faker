@extends('layouts.docs')

@push('scripts')
@endpush

@section('content')
<section class="hero is-small is-success" id="top">
  <div class="hero-body">
    <div class="container">
      <h1 class="title">
        Status
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
        <div class="section">
          <div class="box">
            <p class="title">
              <a href="#top">#</a> 
              Overview
            </p>
            <p>The status is the most important UI element in this project. This is the status style guide, entities and multiple statuses (replies, timelines, modals) are referenced on their respective pages.</p>
          </div>
        </div>
        <div class="section" id="basic">
          <div class="box">
            <p class="title">
              <a href="#basic">#</a> 
              Basic Status
            </p>
            <p>The status is the most important UI element in this project. This is the status style guide, entities and multiple statuses (replies, timelines, modals) are referenced on their respective pages.</p>
            <div class="spacer"></div>
            <div class="example column is-8 is-offset-2">
              <div id="stream-item-1" class="box media stream-item notice visible">
                <div class="media-left">
                  <figure class="image is-64x64">
                    <img src="https://placehold.it/128x128" alt="Image">
                  </figure>
                </div>
                <div class="media-content">
                  <div style="display: none;">
                    <span class="action-icon icon">
                      <i class="fa fa-heart is-pulled-right"></i>
                    </span>
                    <span class="action-msg">
                      yan retweeted this
                    </span>
                  </div>
                  <div class="content">
                    <p>
                      <strong>Jane Smith</strong> <small>&commat;jsmith</small> <small style="float:right;"><a href="#">2m</a></small>
                      <br>
                      <div class="rendered">
                        hello, just setting up my soclnod!
                      </div>
                    </p>
                  </div>
                  <div class="entities">

                  </div>
                  <div class="column is-6" style="padding:0;">
                    <nav class="level actions">
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-reply"></i></span>
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                        &nbsp; 0
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-heart"></i></span>
                        &nbsp; 0
                      </a>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <div class="section example-code content">
              <div class="title is-4">Example Code</div>
              <pre>
                <code>
                  
                </code>
              </pre>
            </div>
          </div>
        </div>

        <div class="section" id="expanded">
          <div class="box">
            <p class="title">
              <a href="#expanded">#</a> 
              Expanded Status
            </p>
            <p>The expanded status is one that is active either in a modal or timeline. The main difference between the basic and expanded status is the top/bottom 20px margin and larger status font size.</p>
            <div class="spacer"></div>
            <div class="example column is-8 is-offset-2">
              <div id="stream-item-1" class="box media stream-item notice visible expanded">
                <div class="media-left">
                  <figure class="image is-64x64">
                    <img src="https://placehold.it/128x128" alt="Image">
                  </figure>
                </div>
                <div class="media-content">
                  <div style="display: none;">
                    <span class="action-icon icon">
                      <i class="fa fa-heart is-pulled-right"></i>
                    </span>
                    <span class="action-msg">
                      yan retweeted this
                    </span>
                  </div>
                  <div class="content">
                    <p>
                      <strong>Jane Smith</strong> <small>&commat;jsmith</small> <small style="float:right;"><a href="#">2m</a></small>
                      <br>
                      <div class="rendered">
                        hello, just setting up my soclnod!
                      </div>
                    </p>
                  </div>
                  <div class="entities">

                  </div>
                  <div class="column is-6" style="padding:0;">
                    <nav class="level actions">
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-reply"></i></span>
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                        &nbsp; 0
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-heart"></i></span>
                        &nbsp; 0
                      </a>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <div class="section example-code content">
              <div class="title is-4">Example Code</div>
              <pre>
                <code>

                </code>
              </pre>
            </div>
          </div>
        </div>

        <div class="section" id="reply">
          <div class="box">
            <p class="title">
              <a href="#reply">#</a> 
              Expanded Status w/ Reply
            </p>
            <p>The expanded status with reply bar.</p>
            <div class="spacer"></div>
            <div class="example column is-8 is-offset-2">
              <div id="stream-item-1" class="box media stream-item notice visible expanded">
                <div class="media-left">
                  <figure class="image is-64x64">
                    <img src="https://placehold.it/128x128" alt="Image">
                  </figure>
                </div>
                <div class="media-content">
                  <div style="display: none;">
                    <span class="action-icon icon">
                      <i class="fa fa-heart is-pulled-right"></i>
                    </span>
                    <span class="action-msg">
                      yan retweeted this
                    </span>
                  </div>
                  <div class="content">
                    <p>
                      <strong>Jane Smith</strong> <small>&commat;jsmith</small> <small style="float:right;"><a href="#">2m</a></small>
                      <br>
                      <div class="rendered">
                        hello, just setting up my soclnod!
                      </div>
                    </p>
                  </div>
                  <div class="entities">

                  </div>
                  <div class="column is-6" style="padding:0;">
                    <nav class="level actions">
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-reply"></i></span>
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                        &nbsp; 0
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-heart"></i></span>
                        &nbsp; 0
                      </a>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="box" style="background-color:#E8F4FB;margin-top:-20px;">
                <article class="media">
                  <div class="media-left">
                    <figure class="image is-32x32">
                      <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">
                    </figure>
                  </div>
                  <div class="media-content">
                    <div class="content">
                      <p class="control">
                        <input class="input" type="text" placeholder="Reply to &commat;jsmith">
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <div class="section example-code content">
              <div class="title is-4">Example Code</div>
              <pre>
                <code>
                  
                </code>
              </pre>
            </div>
          </div>
        </div>

        <div class="section" id="status_entity">
          <div class="box">
            <p class="title">
              <a href="#reply">#</a> 
              Status w/ Status Entity
            </p>
            <p>The basic status with a linked status.</p>
            <div class="spacer"></div>
            <div class="example column is-10 is-offset-1">
              <div id="stream-item-1" class="box media stream-item notice visible">
                <div class="media-left">
                  <figure class="image is-64x64">
                    <img src="https://placehold.it/128x128" alt="Image">
                  </figure>
                </div>
                <div class="media-content">
                  <div style="display: none;">
                    <span class="action-icon icon">
                      <i class="fa fa-heart is-pulled-right"></i>
                    </span>
                    <span class="action-msg">
                      yan retweeted this
                    </span>
                  </div>
                  <div class="content">
                    <p>
                      <strong>Jane Smith</strong> <small>&commat;jsmith</small> <small style="float:right;"><a href="#">2m</a></small>
                      <br>
                      <div class="rendered">
                        hello, just setting up my soclnod! <a href="#">social-faker.dev/status/1...</a>
                      </div>
                    </p>
                  </div>
                  <div class="entities">
                      <div class="entity box">
                          <article class="media">
                              <div class="media-left">
                                  <figure class="image is-64x64">
                                      <img src="http://bulma.io/images/placeholders/128x128.png" alt="Image">
                                  </figure>
                              </div>
                              <div class="media-content">
                                  <div class="content">
                                      <p>
                                          <strong>John Smith</strong> <small>@johnsmith</small>
                                          <br>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                                      </p>
                                  </div>
                              </div>
                          </article>
                      </div>
                  </div>
                  <div class="column is-6" style="padding:0;">
                    <nav class="level actions">
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-reply"></i></span>
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-retweet"></i></span>
                        &nbsp; 0
                      </a>
                      <a class="level-item">
                        <span class="icon is-small"><i class="fa fa-heart"></i></span>
                        &nbsp; 0
                      </a>
                    </nav>
                  </div>
                </div>
              </div>
            </div>
            <div class="section example-code content">
              <div class="title is-4">Example Code</div>
              <pre>
                <code>
                  
                </code>
              </pre>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
@endsection