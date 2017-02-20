<aside class="menu box">
  <p class="menu-label">
    Developer Docs
  </p>
  <ul class="menu-list">
    <li><a class="{{request()->is('/')?'is-active':''}}" href="/">Home</a></li>
    <li><a class="{{request()->is('contributing')?'is-active':''}}" href="/contributing">Contributing</a></li>
    <li>
      <a>API</a>
      <ul>
        <li><a>Rate limits</a></li>
        <li><a>statuses/public_timeline</a></li>
        <li><a>statuses/networkpublic_timeline</a></li>
      </ul>
    </li>
    <li><a class="">Federation</a></li>
    <li>
      <a class="{{request()->is('style-guide')?'is-active':''}}" href="/style-guide">Style Guide</a>
      <ul>
        <li><a class="{{request()->is('style-guide/status')?'is-active':''}}" href="/style-guide/status">Status</a></li>
        <li><a class="{{request()->is('style-guide/timeline')?'is-active':''}}" href="/style-guide/timeline">Timeline</a></li>
        <li><a class="{{request()->is('style-guide/user-card')?'is-active':''}}" href="/style-guide/user-card">User Card</a></li>
        <li><a>User Profile</a></li>
        <li><a>Trending Card</a></li>
        <li><a>Recommended Card</a></li>
      </ul>
    </li>
  </ul>
</aside>