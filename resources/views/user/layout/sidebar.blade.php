<div class="sidebar">
    <ul class="navbar-nav">
      <li class="nav-item">
        @foreach ($video as $v)
        <a class="nav-link" href="">{{ $v->kelas->kelas }}</a>
        <ul class="sub-menu">
          <li><a href="/user/tonton/{{ $v->kelas->id }}">{{ $v->video }}</a></li>
        </ul>
        @endforeach
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/user/logout">Logout</a>
      </li>
    </ul>
  </div>