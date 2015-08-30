<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
				<i class="icon-reorder shaded"></i>
			</a>

		  	<a class="brand" href="index.html">
		  		ICT MBSTU
		  	</a>

			<div class="nav-collapse collapse navbar-inverse-collapse">
			
				<ul class="nav pull-right">
					<li class="nav-user dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							Welcome, {{ Auth::user()->name }}
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.nav-collapse -->
		</div>
	</div><!-- /navbar-inner -->
</div><!-- /navbar -->