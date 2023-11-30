@extends('layouts.Frontend.master')
@section('title', __('Viens Yamo'))
@section('content')

<style>
  .cardbox {
    padding: 30px;
}
.cardbox {
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.035);
    border: 1px solid #dee2e6;
    text-align: center;
    border-radius: 8px;
    cursor: pointer;
    margin-bottom: 20px;
}


.fa-map-marker:before {
    content: "\f041";
}
</style>

<html>
  <body>

<section data-ppt-blockid="hero3" data-ppt-blocktype="hero" data-ppt-section="" 
class="position-relative " data-overlay="gradient-left">

 
<div class="container position-relative z-10 py-0 py-sm-5 _contents">
    <div class="row align-items-center">
      <div class="col-lg-6 text-light">
       
 <h1 data-ppt-title="">Le Nº1 des annonces Yamo. 
	</h1> <br/> 
 <h6 data-ppt-title="">
	 @forelse ( $announcements as $announcement )

		@if($loop->index < 3)
		
			<a href="{{ route('ads.town', ['id'=>$announcement['town_id'] ]) }}" style="text-decoration: none; color:white">
              
			
                    {{ $announcement['town_name'] }} ({{ $announcement['totalAnnounces']  }}),
		     
			</a>
			
		@endif
		@empty

	@endforelse
	 <a href="#" style="text-decoration: none; color:white">Autres villes</a> 
	</h6> <br/> 

        

        

        
        
        <div class="mt-1 d-flex h1buttonbox mobile-mb-4">
        
                
                    
                    
                  
        </div>
        
                <div class="mt-5">
          
        </div>
                
                
      </div>
    </div>
  </div>
  
  <div class="bg-image" style="background-image:url('{{ asset('assets/images/hero/hero4.png') }}');" data-ppt-image-bg="" 
  data-bg="{{ asset('assets/images/hero/hero4.png') }}"> </div>
   
</section>
{{-- <section data-ppt-blockid="hero1" data-ppt-blocktype="hero" data-ppt-section="" class="hero1 py-5 position-relative bg-light">
<div class="container position-relative z-10 py-0 py-sm-5 _contents">
    <div class="row align-items-center">
      <div class="col-lg-6 text-light">


<h1 data-ppt-title="" class=" text-light">Rencontrez des escortes locales en ligne dès maintenant !</h1>



        <div class="mt-5 d-flex h1buttonbox mobile-mb-4">



          <a href="{{ route('escort.list') }}" class="btn-lg  text-600 btn-primary" data-ppt-btn="" data-ppt-btn-txt="">Escorts</a>


                    <a href="{{ route('ads.list') }}" class="btn-lg btn-light text-600" data-ppt-btn="" data-ppt-btn2-txt="">Annonces</a>


        </div>



      </div>

    </div>
  </div>

  <div class="bg-image" style="background-image:url('{{ asset('assets/images/hero/hero1.jpg') }}');" data-ppt-image-bg="" data-bg="https://premiumpress1063.b-cdn.net/_demoimagesv10//framework/layouts/_es/chocolate/hero1.jpg"> </div>
  </section> --}}

@include('utils.utils')


 @if($ads)
<section data-ppt-blockid="listings99" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
  <div class="container">
    <div class="row">
          <div class="col-lg-12">
        <div class="d-flex justify-content-between">
          <h2 class="mb-5" data-ppt-title="">Annonces En Vedettes</h2>
          <div>
                        <a href="{{ route('ads.list') }}" data-ppt-btn="" data-ppt-btn-link="" class="btn-system">Voir Plus</a>
                      </div>
        </div>
      </div>
    <div class="col-12">
        <div class='row'>
	 	@php
					shuffle($ads);
				@endphp
	@forelse($ads as $ad)
	  	@if ($loop->index == 9)
						@break
					@endif
	<div class="col-6 col-sm-6 col-md-4 col-lg-4">

	<div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" 
	data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

		  <figure>



		<div class="buttons-wrap">



		<div class="button-new" style="background-color: #DA9DDC">{{ $ad['user']['escort'][0]['age'] }} Ans</div>

		</div>
		  <a href="{{ route('ads.details', ['id' => $ad['id']]) }}">

		  <div ppt-border1="" class="p-1">

			<div class="search-gradient"> </div>

			<div class="bg-light position-relative overflow-hidden" style="height:360px;">
			  <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
				<div class="text-white fs-4 text-600">
				 {{ ucfirst($ad['user']['username']) }}
							<span class="text-online">•</span>
						  </div>
				<div class="fs-sm text-white opacity-5 text-400">
				  {{ ucfirst($ad['town']['town_name']) }}  
				</div>
			  </div>
			  <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['path']] )}}">
				 
			  </div>

		<div ppt-search-badges="" style="z-index:1" class="right">
			<div class="badge" style="color:#fff;background-color:#ED5858;">
			<span class="fal fa fa-star" style="color:#000"> </span>   </div>

		</div>


			</div>

			 <div class="p-4 bg-white"  style="min-height:220px;">
			  <div class="d-sm-flex flex-sm-column">
				<div class="fs-6  mb-2">

				  <a href="{{ route('ads.details', ['id' => $ad['id']]) }}" class="text-dark _adtitle">
            {{ truncate($ad['title'],40) }}

					</a>

				</div>

			   <nav ppt-nav="" class="seperator pl-0 text-muted mb-3">

					<ul class="list-unstyled">

						<li> <span style="font-weight:bold"><i class="fa fa-map-marker"></i> </span>
              &nbsp; {{ ucfirst($ad['quarter']['quarter_name']) }}, &nbsp;{{ ucfirst($ad['town']['town_name']) }}
              </li>

					</ul>
					<span style="font-weight:bold">Client accepté :</span> {{ $ad['accepted'] }} <br>
					<span style="font-weight:bold">Lieu :</span> {{ $ad['location'] }}

				</nav>

				<div style="min-height:60px;">
				  <span class="shortcode_excerpt"> {{ substr($ad['description'],0,100) }}...</span>
				</div>




			   </div>


			  </div>
		  </div>
		</a>


		</figure>

		</div>




		<div class="show-mobile">
		  <div class="position-relative mb-3">
			<a href="{{ route('ads.details', ['id' => $ad['id']]) }}">
			<div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
			  <div class="h-100 position-relative">
				<figure>
					<div class="buttons-wrap">



		<div class="button-new" style="background-color: #DA9DDC">{{ $ad['user']['escort'][0]['age'] }} Ans</div>

		</div>
		<div ppt-search-badges="" style="z-index:1" class="right">
			

		</div>           <div class="bg-image z-0" data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['path']] )}}"> </div>
				</figure>
			  </div>
			</div>
			</a>
			<div class="lh-20 text-700" style="margin-top:20px;">
					<span class="text-online">•</span>
					<a href="{{ route('ads.details', ['id' => $ad['id']]) }}" class="text-dark">{{ truncate($ad['title'],15) }}</span></a>
			</div>
			<div class="lh-20" style="margin-top:0px;">
					<a href="{{ route('ads.details', ['id' => $ad['id']]) }}" 
						class="text-dark lh-20 text-300">{{ substr($ad['description'],0,50) }}</span></a>
			</div>
		  </div>
		</div>



	</div>
	@empty
	@endforelse

</div>
      </div>
    </div>
  </div>
</section>
@endif

<section data-ppt-blockid="text102" data-ppt-blocktype="text" data-ppt-section="" class="section-60">
  <div class="container">
    <div class="row  y-middle">
      <div class="col-md-6 pr-lg-5 pe-lg-5" style="overflow: hidden; max-height:400px">
        <img data-src="{{ asset('assets/images/nake-girl.jpg') }}" 
		class="img-fluid lazy rounded shadow-sm  mobile-mb-2" alt="image" data-ppt-image="">
      </div>
      <div class="col-md-6 pl-xl-5 ps-xl-5">

        <h2 data-ppt-title="">Nous vous mettons en contact avec des filles et des gars à proximité !</h2>

        <p class="my-3" data-ppt-subtitle="">Lorem ipsum dolor sit amet, consectetur
          adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque
          nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique
          neque consequat.</p>


                <a href="{{ route('ads.list') }}" class="btn-lg btn-primary  mt-2" data-ppt-btn="" data-ppt-btn-txt="">Annonces</a>
                        <a href="{{ route('escort.list') }}" class="btn-lg btn-primary  mt-2" data-ppt-btn="" data-ppt-btn2-txt="">Escorts</a>


      </div>
    </div>
  </div>
</section>

@if ($escorts)
<section data-ppt-blockid="listings100" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
  <div class="container">
    <div class="row">
		<div class="col-lg-12">
					<div class="d-flex justify-content-between">
					  <h2 class="mb-5" data-ppt-title="">Escorts En Vedettes</h2>
					  <div>
									<a href="{{ route('escort.list') }}" data-ppt-btn="" data-ppt-btn-link="" class="btn-system">Voir Plus</a>
								  </div>
					</div>
		</div>
		<div class="col-12">
			<div class='row'>
				@php
					shuffle($escorts);
				@endphp
				@forelse ($escorts as $escort)
					@if ($loop->index == 8)
						@break
					@endif
				<div class="col-6 col-sm-6 col-md-4 col-lg-3"><html>
				  <body><div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow" data-pid="43" data-lat="40.72211057045409" data-long="-73.87108987305908" data-address="">

				  <figure>

				<div class="button-featured-new-wrap es">
				<div class="button-featured-new">En Vedette</div>
				</div>


				<div class="buttons-wrap">



				<div class="button-new">{{ $escort['town']}}</div>





				</div>
				  <a href="{{ route('escort.details', ['id' => $escort['id']]) }}">

				  <div ppt-border1="" class="p-1">

					<div class="search-gradient"> </div>

					<div class="bg-light position-relative overflow-hidden" style="height:360px;">
					  <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
						<div class="text-white fs-4 text-600">
						{{ ucfirst($escort['user']['username'])}}
									<span class="text-online">•</span>
								  </div>
						<div class="fs-sm text-white opacity-5 text-400">
						  {{ $escort['quarter']}}  
						</div>
					  </div>
					  <div class="bg-image"
					  data-bg="{{ route('display.profil',['id'=>$escort['id'], 'path'=>$escort['photo']] )}}">
						 
					  </div>

				<div ppt-search-badges="" style="z-index:1" class="right">
				

				</div>

					  <div class="list-info-pop bg-black hide-mobile">
						<ul class="list-unstyled ">
											  <li class="d-flex justify-content-between"> <span>Age</span>
											  {{ ($escort['age']) }} Ans </li>
											  <li class="d-flex justify-content-between"> <span>Ville</span> {{ $escort['town']}}</li>
											  <li class="d-flex justify-content-between"> <span>Sexualité</span> {{ $escort['sexuality']}}</li>
											</ul>
					  </div>
					</div>

				  </div>
				</a></figure></div>


				<div class="show-mobile">
				  <div class="position-relative mb-3">
					<a href="{{ route('escort.details', ['id' => $escort['id']]) }}">
					<div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
					  <div class="h-100 position-relative">
						<figure>
                       <div class="buttons-wrap">



				<div class="button-new">{{ $escort['town']}}</div>





				</div>
				<div ppt-search-badges="" style="z-index:1" class="right">
					

				</div>           <div class="bg-image z-0"
				data-bg="{{ route('display.profil',['id'=>$escort['id'], 'path'=>$escort['photo']]) }}"> </div>
						</figure>
					  </div>
					</div>
					</a>
					<div class="lh-20 text-700 " style="margin-top:20px;">
							<span class="text-online">•</span>
							<a href="#" class="text-dark">{{ $escort['quarter']}}  ,
                <span class="fs-sm opacity-5">
                  {{ ($escort['age']) }}</span></a>
					</div>
				  </div>
				</div>
				</body>
				</html>
				</div>
				@empty
				@endforelse

			</div>
				  </div>
</div>
  </div>
</section>
@endif
 <div class="bg-light ppt-page-body">
<div class="border-bottom">
<div class="container py-4">

<h1 class=" h3 mb-0 pb-0">LES MEILLEURES ESCORTES DU CAMEROUN SONT ICI !</h1>


    <p class="mt-2 opacity-5">Probablement plus d'un homme et plus d'une fois ont dû rechercher des escortes Camerounaises. Ici vous trouverez rapidement la bonne escorte dans le catalogue trié par services, prix, paramètres parmi les meilleurs de votre région.</p>

    <div class="d-flex justify-content-between mt-4 tablist hide-mobile">
        @if($locations != null)
         <div class="tab tab-all active"><a href="javascript:void(0);" onclick="filterLetters('all');">Tout</a></div>

        @forelse ($locations as $location)

            <div class="tab tab-{{ $location['town_name'] }}"><a href="javascript:void(0);" onclick="filterLetters('{{ $location['town_name'] }}');">{{ $location['town_name'] }}({{ $location['numberEscort'] }})</a></div>
        @empty

        @endforelse
         @endif
</div>
</div>

<div class="bg-white">
<div class="container py-4">

    @if ($locations)


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
      @endif
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
</div>


<section data-ppt-blockid='text122' data-ppt-blocktype='text' data-ppt-section="" class="bg-primary section-40 hide-mobile">
  <div class="container">
    <div class="row align-items-center  text-center text-md-right">
      <div class="col-md-8 mobile-mb-2">

        <div class="text-md-left">

          <h2 class="text-light m-0" data-ppt-title="">Créez votre compte gratuit aujourd'hui !</h2>

       </div>
      </div>
      <div class="col-10 mx-auto col-md-4 text-center text-md-right">

        <a href="/register" class="btn-rounded-25  font- btn-xl btn-light  mt-0  btn-icon icon-after" data-ppt-btn="" data-ppt-btn-link="">
          <span data-ppt-btn-txt="">Inscription</span> <i class="fa fa-long-arrow-alt-right">&nbsp;</i> </a>

      </div>
    </div>
  </div>
</section>



@endsection
