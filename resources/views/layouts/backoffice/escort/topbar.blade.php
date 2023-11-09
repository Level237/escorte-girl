<div class="card-mobile-transparent p-3 mb-4  mobile-negative-margin-x" ppt-border1>
<nav ppt-nav class="sepetator">
<ul>

<li  class="w-100">

<div class="d-flex">
<a href="https://es10.premiummod.com/author/demo/" class="ppt-avatar ppt-avatar-lg  rounded-circle" >

                <div class="_wrap bg-image" data-bg="https://es10.premiummod.com/wp-content/uploads/sites/5/2023/10/gay-escorts-lesbian-escorts-300x169.jpg">&nbsp;</div>



                </a>


<div class=" ml-4">
<a href="https://es10.premiummod.com/my-account//?tab=details">

    <div class="d-flex align-items-center">
    <div class="fs-md text-600">{{ ucfirst($user->username) }}</div>

    </div>

    <div class="fs-sm opacity-5 text-truncate" style="max-width:350px">Téléphone &bull; {{ $user->phone_number }} </div>
</a>
</div>

</div>
</li>





<li class="ml-auto hide-mobile hide-ipad" ppt-flex-middle >
<a href="javascript:void(0);" onclick="processBoost(0);" class="btn-primary" data-ppt-btn>
<div class="d-flex">

	    <div ppt-icon-16 data-ppt-icon-size="16" class="mr-2" ppt-flex-middle><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div>
    <span style="display:inline-block;" class="text-600" ppt-flex-middle
     data-pre-layout="boost" data-ppt-countdown="2023-11-04 06:12:30" data-timezone="0">&nbsp;</span>

</div>
</a>
</li>




<li class="hide-mobile hide-ipad " ppt-flex-middle>
<a href="https://es10.premiummod.com/add-listing/" class="btn-secondary" data-ppt-btn>

<span><a href="{{ route('step-one') }}"> Profile</a></span>

</a>
</li>




<li class=" ml-auto ml-lg-2 ml-xl-2" ppt-flex-middle>
<a href="" class="btn-system" data-ppt-btn>
 <div ppt-icon-16 data-ppt-icon-size="16" class="show-mobile py-3 float-right" ppt-flex-middle><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" /></svg></div>
  <form method="POST" action="{{ route('logout') }}" id="logoutprofile">
                                @csrf
                            </form>
<span class="hide-mobile" onclick="event.preventDefault(); document.getElementById('logoutprofile').submit();">Déconnexion</span>

</a>
</li>

</ul>
</nav>

</div>
