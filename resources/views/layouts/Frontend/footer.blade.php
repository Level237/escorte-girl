<section data-ppt-blockid="footer1" data-ppt-blocktype="footer" data-ppt-section="">
<div class="bg-primary footer-txt-light">
<div class="container">

  <style>
.tooltip1 {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip1 .tooltiptext1 {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tooltip1:hover .tooltiptext1 {
  visibility: visible;
}
</style>

<div style="height:5px;">   </div>



</div>
</div>

<div class="footer-txt-dark" style="background:!important;">



<div class="container py-4 pt-5">
    <div class="row">

      <div class="col-md-4 text-center text-md-left logo-lg">

        <div class="mb-4">
         <div class='textlogo navbar-brand-light'>Viens <span class='text-primary'>Yamo <i class="fa fa-heart"></i></span></div>

        </div>

        <div class="lh-30 mobile-mb-2" data-ppt-footerdesc="">
          En utilisant le site vous acceptez que le propriétaire du site soit décliné de toutes éventuelles
          reponsabilités quelque soit la nature. </div>

      </div>

      <div class="col-6 col-md-3 col-xl-2 text-center text-md-left mobile-mb-2">

        <div class="fs-5 mb-2 text-600" data-ppt-footer-menutitle1="">Liens Utiles</div>
        <div class="lh-30">        <ul>
                <li><a href="{{ route('cgu') }}">CGU</a></li>
                <li><a href="{{ route('help') }}">Aide</a></li>
                <li><a href="{{ route('privacy') }}">Vie Privée</a></li>
                <li><a href="{{ route('contact') }}">Nous Ecrire</a></li>


                </ul>
        </div>

      </div>

      <div class="col-6 col-md-3 col-xl-2 text-center text-md-left mobile-mb-2">

        <div class="fs-5 mb-2 text-600" data-ppt-footer-menutitle2="">Annonces</div>
        <div class="lh-30">        <ul>
                <li><a href="{{ route('ads.category', ['id'=>'2']) }}">Massage</a></li>
                <li><a href="{{ route('ads.category', ['id'=>'3']) }}">Produits Adultes</a></li>
                <li><a href="{{ route('ads.category', ['id'=>'1']) }}">Rencontres - Escortes</a></li>
                <li><a href="{{ route('ads.list') }}">Toutes les annonces</a></li>
                </ul>
        </div>

      </div>


      <div class="col-md-4">

        <div class="fs-5 mb-2 text-600">Rejoignez notre newsletter</div>
        <p class="opacity-8 mb-3">Nous écrivons rarement, mais seulement le meilleur contenu.</p>




<script>

function ajax_newsletter_signup58945(){

    jQuery.ajax({
        type: "POST",
        url: 'http://escort.test/',
		dataType: 'json',
		data: {
            action: "newsletter_join",
			email: jQuery('#ppt_newsletter_mailme58945').val(),
        },
        success: function(r) {

			if(r.status == "ok"){
				jQuery('#newsletterthankyou58945').show();
				jQuery('#mailinglist-form58945').html('');
			}else{
				jQuery('#mailinglist-form58945').html("Invalid Email Address");
			}

        },
        error: function(e) {
            //console.log(e)
        }
    });

}
</script>

<div id="newsletterthankyou58945" style="display:none" class="newsletter-confirmation txt">
	<div class="h4">Email confirmation sent.</div>
	<p>Please check your email for a confirmation email.</p>
	<p class="small">Only once you've confirmed your email will you be subscribed to our newsletter.</p>
</div>

<form id="mailinglist-form58945" name="mailinglist-form58945" method="post" onsubmit="return IsEmailMailinglist58945();" class="footer-newsletter">


<div class="input-group">
<input type="text" name="ppt_newsletter_mailme58945" id="ppt_newsletter_mailme58945" value="" placeholder="Adresse e-mail ici.." style="height:46px;" class="form-control  rounded-0">
<div class="input-group-append">
<button type="submit" class="btn btn-primary px-3">S'abonner</button>
</div>


</div>




 </form>
 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-body">
         <div class="position-relative filter-keyword mb-4 show-mobile">
          <form method="get" action="{{ route('search') }}" >
                  @csrf
          <input type="text" class="form-control customfilter typeahead shadow-sm"
          name="s"  required
          data-formatted-text="Keyword" placeholder="Rechercher.." value="" style="height:50px;">


          <button class="btn iconbit" type="submit"  style="position:absolute; top:5px; right:5px;" >

              <span ppt-icon-24 data-ppt-icon-size="24"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg></span>

          </button>



          </form>
        </div>
      </div>

    </div>
  </div>
</div>
<script>
		function IsEmailMailinglist58945(){
		var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
			var de4 	= document.getElementById("ppt_newsletter_mailme58945");

			if(de4.value == ''){
			alert("Please enter your email.");
			de4.style.border = 'thin solid red';
			de4.focus();
			return false;
			}
			if( !pattern.test( de4.value ) ) {
			alert("Invalid Email Address");
			de4.style.border = 'thin solid blue';
			de4.focus();
			return false;
			}
			ajax_newsletter_signup58945();

		  	return false;
		}
 </script>




        <div class="small opacity-8 mt-4">
          Nous ne partagerons jamais vos coordonnées. <a class="opacity-8" href="#"></a>
        </div>

      </div>

</div>
</div>

</div>

<div class=" py-3 footer-txt-dark">
<div class="container">


<div class="row px-0">
<div class="col-12">
<div class="my-3"><div style="height:1px;" class="bg-dark opacity-2"> </div></div>
</div>
  <div class="col-md-6">
    <div class="copyright opacity-8 lh-30" data-ppt-copyright="">
      &copy; 2023  All rights reserved.
    </div>
  </div>
  <div class="col-md-6 text-right d-none d-md-block">
  <div class="ppt-icons-social  _style5 size-md rounded">
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

  </div>
</div>
</div>
</div>
</section>

<div class="footer-nav-area hidepage " style="display:none;" id="mobile-bottom-bar">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 list-unstyled d-flex align-items-center justify-content-between pl-0">


	<li><a href="/" class="">
        <i class="fal fa-house"></i> Accueil</a></li>

      @if (!isset($user))
         <li> <a href="{{ route('db.escort.index') }}">
           <i  class="fal fa-user"></i>
          Mon Compte</a> </li>
      @endif
        @if (isset($user))
        @if($user->role_id==2)
        <li> <a href="{{ route('db.escort.index') }}">
           <i  class="fal fa-user"></i>
          Mon Compte</a> </li>
    @endif
    @if($user->role_id==1)
        <li> <a href="{{ route('admin.dashboard') }}">
           <i  class="fal fa-user"></i> Mon Compte</a> </li>
    @endif
    @if($user->role_id==3)
        <li> <a href="{{ route('db.customer.index') }}">
           <i  class="fal fa-user"></i>Mon Compte</a> </li>
    @endif
        @endif







     <li class=""> <a href="{{ route('ads.create') }}" class="menu-add bg-primary "><i class="fa fa-plus text-white"></i> </a>

    </li>



		<li><a href="#" class="" data-toggle="modal" data-target="#exampleModal">
        <i  class="fal fa-search"></i> Chercher</a></li>


	<li><a href="{{ route('ads.list') }}" class="">
        <i class="fal fa-sparkles"></i> Annonces</a></li>



          </ul>
        </div>
      </div>


</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/65867aa907843602b804fda2/1hiaku9r3';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
