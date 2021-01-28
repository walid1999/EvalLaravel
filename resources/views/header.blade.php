<div class="contenu">
    <header >

		<h2>W/E</h2>

            <ul>
				<li>
					<a href="home">Accueil</a>
                </li>
				<li>
                 	<a class="utilisateurs" href="utilisateurs"  >
					 	Utilisateurs
                 	</a> 
				</li>
            </ul>           
        </nav>
            <ul>
               
                @if(auth()->check()) 
                <li>
                 	<a class="connexion" href="{{url('/mon-compte')}}"  >
					 	Mon compte
                 	</a> 
				</li>
                @else
				<li>
                 	<a class="connexion" href="{{url('/inscription')}}"  >
					 	S'inscrire
                 	</a> 
				</li>

				<li>
                 	<a class="connexion" href="{{url('/connexion')}}"  >
					 	Connexion
				 	<i class="fas fa-sign-in-alt"></i>
                 	</a> 
				</li>
                @endif
            </ul>
	</header>

    
   
       