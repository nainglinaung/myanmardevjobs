<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Myanmar Dev Jobs</a>
    </div>

    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="https://twitter.com/setkyarwalar" target="_blank">Contact</a></li>
      </ul>

      @if(Auth::check())
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/users/user">Welcome {{ Auth::user()['name'] }}</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/users/user">View Profile</a></li>
            <li><a href="/users/joblisters/">Job Dashboard</a></li>
            <li class="divider"></li>
            <li><a href="/users/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
      @endif
    </div><!--/.nav-collapse -->
  </div>
</nav>