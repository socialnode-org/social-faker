<div class="card is-fullwidth">
  <header class="card-header">
  </header>
  <div class="card-content">
    <a class="card-avatar">
      <img src="https://placehold.it/120x120" class="card-avatar-img">
    </a>

    <div class="card-user">
      <div class="card-user-name">
        <a href="{{ Auth::user()->url() }}">{{ Auth::user()->screenname }}</a>
      </div>
      <span>
        <a href="{{ Auth::user()->url() }}">@<span>{{ Auth::user()->username }}</span></a>
      </span>
    </div>

    <div class="card-stats">
      <ul class="card-stats-list">
        <li class="card-stats-item">
          <a href="#" title="9.840 Tweet">
            <span class="card-stats-key">Tweets</span>
            <span class="card-stats-val">{{ Auth::user()->statuses()->count() }}</span>
          </a>
        </li>
        <li class="card-stats-item">
          <a href="#/following" title="885 Following">
            <span class="card-stats-key">Following</span>
            <span class="card-stats-val">0</span>
          </a>
        </li>
        <li class="card-stats-item">
          <a href="#">
            <span class="card-stats-key">Followers</span>
            <span class="card-stats-val">0</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>