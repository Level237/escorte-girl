
<style>
  #btn-annonce{
    background-color: #DA9DDC;
  }

  #logo-new{
    width: 250px;
    height: 100px;
  }

@media(max-width : 700px){

  .nav-links{
  flex: 1;
  text-align: right;
}

.nav-links ul li {
  list-style: none;
  display: inline-block;
  padding :  8px 5px;
  position: relative;
  color: white;
}

.nav-links ul li a {
  color: white;
  text-decoration: none;
  font-size: 16px;
}

.nav-links ul li::after{
  content: '';
  width: 0%;
  height: 2px;
  background: #F44336;
  display: block;
  margin: auto;
  transition: 0.5s;
}

.nav-links ul li:hover::after{
  width: 100%;
}

nav .fa{
  display: none;
}
    .text-box h1{
    font-size: 20px;
  }
  .nav-links ul li{
    display: block;
  }

  .nav-links{
      position: absolute;
      background: #000000;
      width: 200px;
      top: 0px;
      left: -1000px;
      text-align: left;
      z-index: 20000000;
      transition: 1s;
  }

  .nav-links .fa{
    display: block;
    color: white;
    margin: 5px;
    font-size:22px;
    cursor: pointer;
  }

  .nav-links ul{
    padding: 30px;
  }
  .appeared{
    left: 0px;
  }

  .search-bar {
  flex: 1;
  height: 36px;
  padding-left: 10px;
  font-size: 16px;
  border: 1px solid rgb(204, 204, 204);
  border-radius: 2px;
  box-shadow: inset 1px 2px 3px rgba(0,0,0,0.05);
  width: 0;
} 
}
</style>

 <div class="nav-links show-mobile" id="navLinks">
            <i class="fa fa-bars" onclick="hideMenu()"></i> 
            <ul>

                  <li><a href="{{ route('homepage') }}"> ACCUEIL </a></li>
                  <li><a href="{{ route('ads.list') }}"> ANNONCES </a></li>
                  <li><a href="{{ route('escort.list') }}"> ESCORTS </a></li>
                   @if(!isset($user))
                  <li><a href="{{ route('login') }}"> CONNEXION </a></li>
                  <li><a href="/register"> INSCRIPTION </a></li>
                  @else
                  <li><a href="{{ route('db.escort.index') }}"> MON TABLEAU DE BORD </a></li>
                  
                  <li onclick="event.preventDefault(); document.getElementById('logout').submit();"><a href="#"> DÉCONNEXION </a></li>
                  @endif
                  <li><a href="{{ route('contact') }}"> CONTACT</a></li>

            </ul>
          
        </div>

<header class=" bg-white navbar-light border-bottom" data-block-id="header">

    <nav class="py-2 elementor_topmenu bg-white border-bottom text-dark hide-mobile hide-ipad small text-500">
        <div class="container">
          <div class="row">
            <div class="col-md-6 pr-0">
              <nav ppt-nav="" class="ppt-top-menu pl-0 seperator" >
                <ul>
                              <li class="dropdown"> <a href="#" class="dropdown-toggle noc" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="fab fa-bitcoin"></i>
                                  </a>
                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">
                                      <i class="fal fa-dollar-sign float-right mt-2"></i>
                                      Français</a>
                                      <a class="dropdown-item" href="#">
                                      <i class="fal fa-pound-sign float-right mt-2"></i>
                                      English</a>


                                    </div>
                  </li>
                   @if(!isset($user))
                    <li> <a href="{{ route('login') }}">Connexion</a> </li>
                    <li> <a href="/register">Inscription</a> </li>
                  @else

                    <li> <a href="{{ route('db.escort.index') }}">Ton Tableau de bord</a> </li>
                     <form method="POST" action="{{ route('logout') }}" id="logout">
                                @csrf
                            </form>
                    <li onclick="event.preventDefault(); document.getElementById('logout').submit();"> <a href="#">Déconnexion</a> </li>
                  @endif
                  <li class="hide-ipad"> <div class="ppt-icons-social  _style2 size-xs ">
                      <ul>

                                       <li class="facebook">
                       <a href="#" title="facebook" class="icon-facebook" rel="nofollow" target="_blank">

                       <i class="fab fa-facebook"></i>


                       </a></li>
                                       <li class="twitter">
                       <a href="#" title="twitter" class="icon-twitter" rel="nofollow" target="_blank">

                       <i class="fab fa-twitter"></i>


                       </a></li>
                                       <li class="instagram">
                       <a href="#" title="instagram" class="icon-instagram" rel="nofollow" target="_blank">

                       <i class="fab fa-instagram"></i>


                       </a></li>
                                       <li class="youtube">
                       <a href="#" title="youtube" class="icon-youtube" rel="nofollow" target="_blank">

                       <i class="fab fa-youtube"></i>


                       </a></li>
                                      </ul>
                      </div>
                       </li>
                            </ul>
              </nav>

            </div>
            <div class="col d-none d-md-block">
               
              <nav ppt-nav="" class="seperator" ppt-flex-end="">
                <form method="get" action="{{ route('search') }}" >
                  @csrf
                <div class="position-relative hide-mobile filter-keyword mb-4" >

                  <input type="text" class="form-control  customfilter typeahead shadow-sm" 
                   required name="s" data-type="text" 
                  data-key="keyword" autocomplete="off"  data-formatted-text="Keyword" 
                  placeholder="Rechercher.." value="" style="height:36px;  padding-left: 10px; font-size: 16px;border: 1px solid rgb(204, 204, 204); border-radius: 18px; box-shadow: inset 1px 2px 3px rgba(0,0,0,0.05);">


                  <button class="btn iconbit"  type="submit" 
                  style="position:absolute; top:0px; right:5px;" >

                      <span ppt-icon-24 data-ppt-icon-size="24"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg></span>

                  </button>


              </div>
              </form>
                  
              </nav>
            </div>
          </div>
        </div>
      </nav>



    <div class="container py-4 logo-lg  ">

      <div class="row no-gutters" ppt-flex-center="">
        <div class="col-md-4">

          <a href="/">
            <!--<div class='textlogo navbar-brand-light'>Viens <span class='text-primary'>Yamo <i class="fa fa-heart"></i></span></div><div class='textlogo navbar-brand-dark'>Viens <span class='text-primary'>Yamo <i class="fa fa-heart"></i></span></div> -->
            <div class='textlogo navbar-brand-dark'>Viens <span style="color:#DA9DDC;">Yamo <i class="fa fa-heart"></i></span></div>
          </a>
        </div>
        <div class="col" ppt-flex-end="">
          <div class="d-flex ">
           
            <nav ppt-nav="" ppt-flex-end="" class="seperator spacing hide-mobile hide-ipad text-600">         <ul>


        <li><a href="{{ route('ads.list') }}" >
          Annonces</a>
        </li>



        {{-- <li><i id="popup-search" style="cursor: pointer" id="search" class="fa fa-search"></i></li> --}}
       </ul>

        
		 </nav>            
     <div class="show-ipad show-mobile">
        <div class="d-flex">
          <div class="ml-4  cursor">
                  <div ppt-icon-size="32" data-ppt-icon2="" onclick="showMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewbox="0 0 24 24" 
                    stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M4 6h16M4 12h16M4 18h16"></path></svg>                
                  </div>
            </div>
        </div>

      </div>
      
                      <div class="hide-mobile" >


                        <a id="btn-annonce" href="{{ route('ads.create') }}"  class="btn-secondary  rounded-pill text-600"  data-ppt-btn="" data-ppt-btn-txt="">Publier une annonce</a>

            </div>

           


                    </div>
        </div>
      </div>
    </div>
      <script>

      var navLinks = document.getElementById('navLinks');

      function showMenu(){
        navLinks.classList.toggle("appeared");
      }

      function hideMenu(){
        navLinks.classList.toggle("appeared");
      }
  </script>

      <div class="container h-100 px-0 show-mobile">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 list-unstyled d-flex align-items-center justify-content-between pl-0">

          <li><a href="{{ route('db.escort.index') }}" class="">
                <i class="fa fa-user" style="color: #ED5858;"></i>Mon Compte</a></li>

          <li><a href="{{ route('ads.create') }}" class="">
                <i class="fal fa-plus-circle" style="color: #ED5858;"></i> Créer une annonce</a></li>
          <li><a href="{{ route('ads.list') }}" class="">
                <i class="fal fa-sparkles" style="color: #ED5858;"></i> Annonces</a></li>



          </ul>
        </div>
      </div>

      <br>

       @if(!isset($user))
       <div class="container show-mobile">
         <div class="d-flex justify-content-center">
            <div class=>
               
            <div class>
                <a href="{{ route('escort.list') }}" class="btn-md   mt-2" data-ppt-btn="" data-ppt-btn-link=""
                 class="btn-system">Besoin d'aide pour s'inscrire?</a>
            </div>
            <div>
               
            </div>
         </div>
         
      </div>
      </div>
      @endif

      <br>
 
 



  </header>
