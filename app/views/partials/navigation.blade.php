<div class="container">
	<div class="header">
       	<ul class="nav nav-pills pull-right">
          <li><a href="/">Home</a></li>
          @if(Auth::check())
         	  <li><a href="/users/user">Your Account</a></li>
          	<li><a href="/users/joblisters/">Jobs Dashboard</a></li>
          	<li><a href="/users/logout">Logout</a></li>
          @else
          	<li><a href="/about">About</a></li>
          @endif
        </ul>
        <a href="/" style="text-decoration:none"><h3 class="text-muted">Developer Jobs</h3></a>
    </div>
</div>