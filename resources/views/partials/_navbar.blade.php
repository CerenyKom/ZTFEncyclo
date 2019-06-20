<nav class="navbar navbar-custom">
        <div class="navbar-header page-scroll">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="navbar">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>

        <div id="navbar" class="navbar-collapse collapse navbar-main-collapse">

            <!-- Right Side Of Navbar -->
            @guest
            <div class="header">
		    <div class="container-fluid">
			<div class="header-grid">
				<div class="header-grid-left">
					<ul>
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="#" class="login" data-toggle="modal" data-target="#myModal4">Connexion</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left">
					<h1><a href="{{route("home")}}">ECSD<span>l'Ecole de la connaissance et du service de DIEU</span></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header nav_2">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						</div>
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav">
								<li><a href="{{route("home")}}">Acceuil</a></li>
								<li class="agileits dropdown">
									<a href="{{route("student")}}" aria-expanded="true">Etudiant</a>
								</li>
								<li><a href="{{route("session")}}">Session</a></li>
								<li class="agileits dropdown">
									<a href="{{route("testimonial")}}" data-toggle="dropdown" aria-expanded="true">Temoignages</a>
								</li>
								<li><a href="{{route("message")}}">Enseignement</a></li>
								<li><a href="{{route("activity")}}">Activites</a></li>
							
							</ul>
						</div>
					</nav>
				</div>
				<div class="clearfix"> </div>
				<div class="logo-nav-right">
				</div>
			</div>
		</div>
	</div>
		</div>
</nav>
             @else
                <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" style="position: relative; padding-left: 50px;">
                                <img src="/uploads/avatar/{{ Auth::user()->image}}" style=" height: 32px; width: 32px; position: absolute; top: 10px ; left : 10px; border-radius: 50%;  ">
                                {{ Auth::user()->pseudo }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{route('profil')}}" class="fa fa-user"> Profil</a>
                                </li>
                                @if(Auth::user()->admn == 1 )
                                    <li>

                                        <a href="{{route('acceuil')}}" class="fa fa-cog"> Administration</a>
                                    </li>
                                @endif
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="fa fa-close">
                                        Deconnexion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                        @endguest
                 </ul>

