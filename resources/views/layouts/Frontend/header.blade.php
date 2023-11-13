
<style>
  #btn-annonce{
    background-color: #DA9DDC;
  }

  #logo-new{
    width: 250px;
    height: 100px;
  }
</style>




<header class=" bg-white navbar-light border-bottom" data-block-id="header">

    <nav class="py-2 elementor_topmenu bg-white border-bottom text-dark hide-mobile hide-ipad small text-500">
        <div class="container">
          <div class="row">
            <div class="col-md-6 pr-0">
              <nav ppt-nav="" class="ppt-top-menu pl-0">
              <ul>
              <li><a href="#">Accueil</a></li>

              <li><a href="#">A Propos</a></li>

               <li><a href="#">Contact</a></li>

              </ul>

               </nav>
            </div>
            <div class="col d-none d-md-block">
              <nav ppt-nav="" class="seperator" ppt-flex-end="">
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

                    <li> <a href="{{ route('db.escort.index') }}">Dashboard</a> </li>
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



        <li><a href="{{ route('escort.list') }}">Escorts</a></li>



        <li><a href="{{ route('ads.list') }}" >
          Annonces</a>
        </li>




	          <li><a href="#">Agences</a></li>

       <li><a href="#">Blog</a></li>


       </ul>


		 </nav>            <div class="show-ipad show-mobile">
              <div class="d-flex">
                              <div class="ml-4 menu-toggle cursor">
                  <div ppt-icon-size="32" data-ppt-icon2="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>                </div>
                </div>
              </div>
            </div>
                      <div class="hide-mobile">


                        <a id="btn-annonce" href="{{ route('ads.create') }}"  class="btn-secondary  rounded-pill text-600"  data-ppt-btn="" data-ppt-btn-txt="">Publier une annonce</a>

            </div>
                    </div>
        </div>
      </div>
    </div>
  </header>
