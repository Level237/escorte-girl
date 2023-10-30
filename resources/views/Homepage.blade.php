@extends('layouts.Frontend.master')
@section('title', __('Viens Yamo'))
@section('content')


<html>
  <body>
<section data-ppt-blockid="hero1" data-ppt-blocktype="hero" data-ppt-section="" class="hero1 py-5 position-relative bg-light">
<div class="container position-relative z-10 py-0 py-sm-5 _contents">
    <div class="row align-items-center">
      <div class="col-lg-6 text-light">


<h1 data-ppt-title="" class=" text-light">Meet Local Escorts Online Right Now!</h1>

<p class="lead text-light" data-ppt-subtitle="">Stunning escorts for incalls and outcalls.</p>




        <div class="mt-5 d-flex h1buttonbox mobile-mb-4">



          <a href="/register" class="btn-lg  text-600 btn-primary" data-ppt-btn="" data-ppt-btn-txt="">Inscription</a>


                    <a href="index-13.htm?s=" class="btn-lg btn-light text-600" data-ppt-btn="" data-ppt-btn2-txt="">Start Search</a>


        </div>



      </div>





    </div>
  </div>

  <div class="bg-image" style="background-image:url('{{ asset('assets/images/hero/hero1.jpg') }}');" data-ppt-image-bg="" data-bg="https://premiumpress1063.b-cdn.net/_demoimagesv10//framework/layouts/_es/chocolate/hero1.jpg"> </div>
  </section>
</body>
</html><html>

 <div class="bg-light ppt-page-body">
<div class="border-bottom">
<div class="container py-4">

<h1 class=" h3 mb-0 pb-0">LES MEILLEURES ESCORTES DU CAMEROUN SONT ICI !</h1>


    <p class="mt-2 opacity-5">Probablement plus d'un homme et plus d'une fois ont dû rechercher des escortes Camerounaises. Ici vous trouverez rapidement la bonne escorte dans le catalogue trié par services, prix, paramètres parmi les meilleurs de votre région.</p>

    <div class="d-flex justify-content-between mt-4 tablist hide-mobile">
        @if($locations != null)
         <div class="tab tab-all active"><a href="javascript:void(0);" onclick="filterLetters('all');">Tout</a></div>
        @endif
        @forelse ($locations as $location)

            <div class="tab tab-{{ $location['town_name'] }}"><a href="javascript:void(0);" onclick="filterLetters('{{ $location['town_name'] }}');">{{ $location['town_name'] }}({{ $location['numberEscort'] }})</a></div>
        @empty

        @endforelse



    <select onchange="filterCategory(this.value);" class="form-control show-mobile">
    <option value="all">All Categories</option>

    <option value="18">Black hair Escorts</option>

    <option value="34">Fitness Escorts</option>

    <option value="19">Brunette Escorts</option>

    <option value="35">Massage / Erotic Relaxation Escorts</option>

    <option value="20">Slim EscortsTall Escorts</option>

    <option value="36">Photos Verified Escorts</option>

    <option value="21">BBW Escorts</option>

    <option value="37">Fly Me To You Escorts</option>

    <option value="22">Curvy Escorts</option>

    <option value="38">Doubles Profiles</option>

    <option value="23">Voluptuous Escorts</option>

    <option value="8">Non Asian Girls</option>

    <option value="24">Petite Escorts</option>

    <option value="9">Asian Girls</option>

    <option value="25">Touring Escorts</option>

    <option value="10">Sensual Massage</option>

    <option value="26">Tattooed Escorts</option>

    <option value="11">Blonde Escorts</option>

    <option value="27">No Tattoo Escorts</option>

    <option value="12">Busty Escorts</option>

    <option value="28">Submissive Escorts</option>

    <option value="13">Mature Escorts</option>

    <option value="29">Shaved Escorts</option>

    <option value="14">Young Escorts</option>

    <option value="30">Natural Bush Escorts</option>

    <option value="15">Cougar Escorts</option>

    <option value="31">Non Smoking Escorts</option>

    <option value="16">MILF Escorts</option>

    <option value="32">Enhanced Breasts Escorts</option>

    <option value="17">Red hair Escorts</option>

    <option value="33">Natural Breasts Escorts</option>
        </select>


</div>
</div>

<div class="bg-white">
<div class="container py-4">


		@forelse ($locations as $location)
	    <div class="wrap wrap-{{ $location['town_name'] }}" id="{{ $location['town_name'] }}">
			<h3>{{ $location['town_name'] }}</h3>
			<hr>
			<div class="py-3 ">
		   <div class="">



           @forelse ($location['locals'] as $quarter)
            <div class="tab tab-{{ $quarter['quarter_name'] }}" style="display: inline"><a href="javascript:void(0);" onclick="filterLetters('{{ $quarter['quarter_name'] }}');">{{ $quarter['quarter_name'] }}({{ $quarter['total'] }})</a></div> |
           @empty

        @endforelse


			</div>
			</div>
        </div>
        @empty
        @endforelse
        <div class="wrap wrap-Z" id="Z">
    <h3>Z</h3>
    <hr>
    <div class="py-3 ">
   <div class="">

    </div>
 	</div>
    </div>


</div>
</div>

<style>
.tablist .tab { padding: 5px 15px;  }
.tablist .tab.active { background:#111; border-radius:4px; }
.tablist .tab.active a { color:#fff; font-weight:bold; }
.bg-image-wrap { height:130px; width:100%; border-radius:4px; position:relative; background: #fff; border: 1px solid #ddd; }
.bg-image-wrap .bg-image { background-size: unset; background-repeat: no-repeat;  }

@media (max-width: 575.98px) {
.bg-image-wrap { height:100px; }
.bg-image-wrap .bg-image {
    background-size: contain;

}
}
</style>

<script>
function filterLetters(l){

	jQuery(".tab").removeClass('active');
	jQuery(".tab-"+l).addClass('active');



	if(l == "all"){

		jQuery(".wrap").show();
		cleanCats();

	}else{
		jQuery(".wrap").hide();
		jQuery(".wrap-"+l).show();
	}

}
function filterCategory(l){

	if(l == "all"){

		jQuery(".wrap").show();
		cleanCats();

	}else{
		jQuery(".wrap").hide();
		jQuery(".hascat-"+l).show();

	}

}

function cleanCats(){

	var a = jQuery(".wrap");
    a.each(function (a) {
        wrapid = jQuery(this).attr('id').toString();


		var a = jQuery(".wrap-"+wrapid+" .category-wrap");
		a.each(function (a) {
			topid = jQuery(this).attr('data-topcatid');

			jQuery('.wrap-'+wrapid+'').addClass(" hascat-"+topid)

		});


		links = jQuery('.wrap-'+wrapid+' a').length;
		if(links == 0){
			jQuery(this).hide();
			jQuery('.tablist').removeClass('justify-content-between');
			jQuery(".tab-"+wrapid).hide();

		}
    });

}

jQuery(document).ready(function(){

cleanCats();

});

</script>
</div><html>
  <body><section data-ppt-blockid="listings100" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
  <div class="container">
    <div class="row">
          <div class="col-lg-12">
        <div class="d-flex justify-content-between">
          <h2 class="mb-5" data-ppt-title="">Popular Escorts</h2>
          <div>
                        <a href="index-13.htm?s=" data-ppt-btn="" data-ppt-btn-link="" class="btn-system">View More</a>
                      </div>
        </div>
      </div>
            <div class="col-12">
        <div class='row'><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="43" data-lat="40.72211057045409" data-long="-73.87108987305908" data-address="">

  <figure>

<div class="button-featured-new-wrap es">
<div class="button-featured-new">Featured</div>
</div>


<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/roadblock/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Roadblock
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=15&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 45 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 167 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/roadblock/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=15&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/roadblock/index.htm" class="text-dark">Roadblock, <span class="fs-sm opacity-5">45</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="39" data-lat="40.73967164196744" data-long="-73.94473260377197" data-address="">

  <figure>

<div class="button-featured-new-wrap es">
<div class="button-featured-new">Featured</div>
</div>


<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/giuliana/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Giuliana
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=11&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 31 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 177 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/giuliana/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=11&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/giuliana/index.htm" class="text-dark">Giuliana, <span class="fs-sm opacity-5">31</span></a>
    </div>
  </div>
</div>
</body>
</html></div></div>
      </div>
    </div>
  </div>
</section>
</body>
</html><html>
  <body><section data-ppt-blockid="text102" data-ppt-blocktype="text" data-ppt-section="" class="section-60">
  <div class="container">
    <div class="row  y-middle">
      <div class="col-md-6 pr-lg-5 pe-lg-5">
        <img data-src="https://premiummod.com/demoimages/img.php?fw=text102&t=es" class="img-fluid lazy rounded shadow-sm  mobile-mb-2" alt="image" data-ppt-image="">
      </div>
      <div class="col-md-6 pl-xl-5 ps-xl-5">

        <h2 data-ppt-title="">We put you in touch with nearby girls and guys!</h2>

        <p class="my-3" data-ppt-subtitle="">Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque
          nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique
          neque consequat.</p>


                <a href="add-listing/index.htm" class="btn-lg btn-primary  mt-2" data-ppt-btn="" data-ppt-btn-txt="">Add Profile</a>
                        <a href="index-13.htm?s=" class="btn-lg btn-primary  mt-2" data-ppt-btn="" data-ppt-btn2-txt="">Start Search</a>


      </div>
    </div>
  </div>
</section>
</body>
</html><section data-ppt-blockid='text122' data-ppt-blocktype='text' data-ppt-section="" class="bg-primary section-40 hide-mobile">
  <div class="container">
    <div class="row align-items-center  text-center text-md-right">
      <div class="col-md-8 mobile-mb-2">

        <div class="text-md-left">

          <h2 class="text-light m-0" data-ppt-title="">Create your free account today!</h2>

       </div>
      </div>
      <div class="col-10 mx-auto col-md-4 text-center text-md-right">

        <a href="wp-login.php-1.htm?action=register" class="btn-rounded-25  font- btn-xl btn-light  mt-0  btn-icon icon-after" data-ppt-btn="" data-ppt-btn-link=""> <span data-ppt-btn-txt="">Signup Now</span> <i class="fa fa-long-arrow-alt-right">&nbsp;</i> </a>

      </div>
    </div>
  </div>
</section>
<html>
  <body><section data-ppt-blockid="listings99" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
  <div class="container">
    <div class="row">
          <div class="col-lg-12">
        <div class="d-flex justify-content-between">
          <h2 class="mb-5" data-ppt-title="">Featured Profiles</h2>
          <div>
                        <a href="index-13.htm?s=" data-ppt-btn="" data-ppt-btn-link="" class="btn-system">View More</a>
                      </div>
        </div>
      </div>
            <div class="col-12">
        <div class='row'><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/rooster/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Rooster
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=18&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 40 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 181 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/rooster/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=18&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/rooster/index.htm" class="text-dark">Rooster, <span class="fs-sm opacity-5">40</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="29" data-lat="40.7127753" data-long="-74.0059728" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/nicolette/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Nicolette
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=1&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 38 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 193 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/nicolette/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=1&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/nicolette/index.htm" class="text-dark">Nicolette, <span class="fs-sm opacity-5">38</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="37" data-lat="40.76324171770885" data-long="-73.96344369385986" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/soraya/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Soraya
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=9&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 42 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 168 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/soraya/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=9&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/soraya/index.htm" class="text-dark">Soraya, <span class="fs-sm opacity-5">42</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="47" data-lat="40.66406104898427" data-long="-73.74878114197998" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/kaelee/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Kaelee
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=19&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 31 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 181 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/kaelee/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=19&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/kaelee/index.htm" class="text-dark">Kaelee, <span class="fs-sm opacity-5">31</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="30" data-lat="40.710433145221195" data-long="-74.00099462006835" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/natalia/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Natalia
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=2&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 29 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 178 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/natalia/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=2&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/natalia/index.htm" class="text-dark">Natalia, <span class="fs-sm opacity-5">29</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="38" data-lat="40.74217534312245" data-long="-73.94765084718017" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/adrianna/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Adrianna
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=10&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 27 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 160 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/adrianna/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=10&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/adrianna/index.htm" class="text-dark">Adrianna, <span class="fs-sm opacity-5">27</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="35" data-lat="40.735541954942086" data-long="-73.98884957764892" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/heartbreaker/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Heartbreaker
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=7&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 26 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 154 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/heartbreaker/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=7&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/heartbreaker/index.htm" class="text-dark">Heartbreaker, <span class="fs-sm opacity-5">26</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="32" data-lat="40.72123239521979" data-long="-73.99932092164306" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/paulina/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Paulina
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=4&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 33 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 200 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/paulina/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=4&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/paulina/index.htm" class="text-dark">Paulina, <span class="fs-sm opacity-5">33</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="36" data-lat="40.755570168893485" data-long="-73.98215478394775" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/coffee/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Coffee
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=8&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 18 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 190 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/coffee/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=8&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/coffee/index.htm" class="text-dark">Coffee, <span class="fs-sm opacity-5">18</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="33" data-lat="40.72539549359491" data-long="-73.98627465699462" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/alessandra/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Alessandra
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=5&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 42 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 193 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/alessandra/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=5&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/alessandra/index.htm" class="text-dark">Alessandra, <span class="fs-sm opacity-5">42</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="45" data-lat="40.67929418003906" data-long="-73.8354701373413" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/leyre/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Leyre
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=17&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 24 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 150 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/leyre/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=17&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/leyre/index.htm" class="text-dark">Leyre, <span class="fs-sm opacity-5">24</span></a>
    </div>
  </div>
</div>
</body>
</html></div><div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="42" data-lat="40.75878842640948" data-long="-73.89546578858642" data-address="">

  <figure>



<div class="buttons-wrap">



<div class="button-new">new</div>





</div>
  <a href="listing/ethel/index.htm">

  <div ppt-border1="" class="p-1">

    <div class="search-gradient"> </div>

    <div class="bg-light position-relative overflow-hidden" style="height:360px;">
      <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
        <div class="text-white fs-4 text-600">
          Ethel
                    <span class="text-online">•</span>
                  </div>
        <div class="fs-sm text-white opacity-5 text-400">
          New York  
        </div>
      </div>
      <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?imgid=14&t=es">
         
      </div>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>

      <div class="list-info-pop bg-black hide-mobile">
        <ul class="list-unstyled ">
                              <li class="d-flex justify-content-between"> <span>Age</span> 37 </li>
                              <li class="d-flex justify-content-between"> <span>City</span> New York</li>
                              <li class="d-flex justify-content-between"> <span>Height</span> 195 CM </li>
                            </ul>
      </div>
    </div>

  </div>
</a></figure></div>


<div class="show-mobile">
  <div class="position-relative mb-3">
    <a href="listing/ethel/index.htm">
    <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
      <div class="h-100 position-relative">
        <figure>

<div ppt-search-badges="" style="z-index:1" class="right">
    <div class="badge" style="color:#000000;background-color:#FFC300;">
    <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

</div>           <div class="bg-image z-0" data-bg="https://premiummod.com/demoimages/img.php?imgid=14&t=es"> </div>
        </figure>
      </div>
    </div>
    </a>
    <div class="lh-20 text-700 " style="margin-top:20px;">
            <span class="text-online">•</span>
            <a href="listing/ethel/index.htm" class="text-dark">Ethel, <span class="fs-sm opacity-5">37</span></a>
    </div>
  </div>
</div>
</body>
</html></div></div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
@endsection
