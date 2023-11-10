
    <section data-ppt-blockid="footer1" data-ppt-blocktype="footer" data-ppt-section="">
<div class="bg-primary footer-txt-light">
<div class="container">

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

        <div class="lh-30 mobile-mb-2" data-ppt-footerdesc="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue.</div>

      </div>

      <div class="col-6 col-md-3 col-xl-2 text-center text-md-left mobile-mb-2">

        <div class="fs-5 mb-2 text-600" data-ppt-footer-menutitle1="">Liens Utiles</div>
        <div class="lh-30">        <ul>
                <li><a href="{{ route('homepage') }}">Accueil</a></li>
                <li><a href="{{ route('ads.list') }}">Annonces</a></li>
                <li><a href="#">Comment ça marche</a></li>
                <li><a href="{{ route('ads.create') }}">Publier une annonce</a></li>
                </ul>
        </div>

      </div>

      <div class="col-6 col-md-3 col-xl-2 text-center text-md-left mobile-mb-2">

        <div class="fs-5 mb-2 text-600" data-ppt-footer-menutitle2="">Recherche</div>
        <div class="lh-30">        <ul>
                <li><a href="#">Rechercher</a></li>
                <li><a href="i#">Populaire</a></li>
                <li><a href="#">Ajouts Recents</a></li>
                <li><a href="#">Plus Important</a></li>
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
