<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="index.html" class="logo logo-light">
        <span class="logo-lg">
            <img  src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="logo">
        </span>
        <span class="logo-sm">
            <img  src="{{ asset('backend/assets/images/logo-sm.png') }}" alt="logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <a href="index.html" class="logo logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark.png" alt="dark logo">
        </span>
        <span class="logo-sm">
            <img src="assets/images/logo-dark-sm.png" alt="small logo">
        </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <div class="button-sm-hover" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </div>

    <!-- Full Sidebar Menu Close Button -->
    <div class="button-close-fullsidebar">
        <i class="ri-close-fill align-middle"></i>
    </div>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="assets/images/users/avatar-1.jpg" alt="user-image" height="42" class="rounded-circle shadow-sm">
                <span class="leftbar-user-name mt-2">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Navigation</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="{{ route('admin.dashboard') }}" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span class="badge bg-success float-end">5</span>
                    <span> Dashboards </span>
                </a>
                <div class="collapse" id="sidebarDashboards">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="dashboard-analytics.html">Analytics</a>
                        </li>
                        <li>
                            <a href="index.html">Ecommerce</a>
                        </li>
                        <li>
                            <a href="dashboard-projects.html">Projects</a>
                        </li>
                        <li>
                            <a href="dashboard-crm.html">CRM</a>
                        </li>
                        <li>
                            <a href="dashboard-wallet.html">E-Wallet</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-title">Profil</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Utilisateurs </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('users') }}">List</a>
                        </li>
                        <li>
                            <a href="{{ route('users.create') }}">Ajouter un utilisateur</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> Escorte </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('escorts') }}">Listes</a>
                        </li>
                      
                    </ul>
                </div>
            </li>


            <li class="side-nav-item">
                <a  href="{{ route('users.suspend') }}"  class="side-nav-link">
                    <i class="uil-briefcase"></i>
                    <span> Comptes suspendus </span>

                </a>

            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-clipboard-alt"></i>
                    <span> Droits </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="apps-tasks.html">Listes</a>
                        </li>
                        <li>
                            <a href="apps-tasks-details.html">Ajouter un droit</a>
                        </li>

                    </ul>
                </div>
            </li>


        <li class="side-nav-title">Localisation</li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <i class="uil-map-marker"></i>
                    <span> Pays </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="pages-profile.html">Listes</a>
                        </li>
                        <li>
                            <a href="pages-profile-2.html">Ajouter un pays</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="uil-map-marker"></i>
                    <span> Villes </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('towns') }}" >Listes</a>
                        </li>
                        <li>
                            <a href="{{ route('towns.create') }}" >Ajouter une ville</a>
                        </li>
                    </ul>
                </div>
            </li>

             <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts1" aria-expanded="false" aria-controls="sidebarLayouts1" class="side-nav-link">
                    <i class="uil-map-marker"></i>
                    <span> Quartiers </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts1">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('quarters') }}" >Listes</a>
                        </li>
                        <li>
                            <a href="{{ route('quarters.create') }}" >Ajouter un quartier</a>
                        </li>
                    </ul>
                </div>
            </li>


			<li class="side-nav-title">Messages</li>
			
			  <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts4" aria-expanded="false" aria-controls="sidebarLayouts4" class="side-nav-link">
                    <i class="uil-map-marker"></i>
                    <span> Contacts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts4">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('contacts') }}" >Listes</a>
                        </li>
                    </ul>
                </div>
            </li>

             <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts3" aria-expanded="false" aria-controls="sidebarLayouts3" class="side-nav-link">
                    <i class="uil-map-marker"></i>
                    <span> Dénonciations </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts3">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('reports') }}" >Listes</a>
                        </li>
                    
                    </ul>
                </div>
            </li>

            <li class="side-nav-title">Publicité</li>
            <li class="side-nav-item">
                <a style="cursor: pointer"  class="side-nav-link" href="{{ route('banners') }}">
                    <i class="uil-box"></i>
                    <span> Bannières </span>

                </a>
            </li>

            <li class="side-nav-title">Abonnements</li>

            <li class="side-nav-item">
                <a style="cursor: pointer"  class="side-nav-link" href="{{ route('memberships') }}">
                    <i class="uil-box"></i>
                    <span> Gerer les abonnements </span>

                </a>
            </li>
            <li class="side-nav-item">
                <a style="cursor: pointer"  class="side-nav-link" href="{{ route('memberships.create') }}" >
                    <i class="uil-box"></i>
                    <span> Créer un abonnement</span>

                </a>
            </li>




            <!-- Help Box -->
            <div class="help-box text-white text-center">
                <a href="javascript: void(0);" class="float-end close-btn text-white">
                    <i class="mdi mdi-close"></i>
                </a>
                <img src="assets/images/svg/help-icon.svg" height="90" alt="Helper Icon Image" />
                <h5 class="mt-3">Unlimited Access</h5>
                <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Upgrade</a>
            </div>
            <!-- end Help Box -->


        </ul>
        <!--- End Sidemenu -->

        <div class="clearfix"></div>
    </div>
</div>
