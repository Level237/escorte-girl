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
@include('utils.utils')




</div>


@if($vipAds)
<section data-ppt-blockid="hero3" data-ppt-blocktype="hero" data-ppt-section=""
    class="position-relative " data-overlay="gradient-left">


    <div class="container position-relative z-10 py-0 py-sm-5 _contents">
            <div class="row align-items-center">





                            <div class="col-lg-12 text-light">
                                <h1 data-ppt-title="">Annonces ULTRA VIP
                                </h1> <br/>
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                @php
                                                    $countVip=count($vipAds);
                                                    $numberCaroussel=$countVip/2;

                                                @endphp
                                                @if($countVip%2===1)
                                                @php
                                                    $numberCaroussel=($numberCaroussel+1) - 0.5;
                                                @endphp

                                                @endif

                                                @for($i = 1; $i < $numberCaroussel; $i++)
                                                @if($i===1)
                                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}" class="active"></li>
                                                @endif

                                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $i }}"></li>
                                                @endfor

                                            </ol>
                                            <div class="carousel-inner">

                                                        <div class="carousel-item active">
                                                        <section data-ppt-blockid="listings99" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
                                                            <div class="container">
                                                                <div class="row">

                                                                <div class="col-12">
                                                                    <div class='row'>

                                                                @forelse($vipAds as $ad)
                                                                    @if ($loop->index == 2)
                                                                                    @break
                                                                                @endif
                                                                <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                                                                <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                                                                data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                                                                    <figure>

                                                                    <div class="button-featured-new-wrap es">
                                                                        <div class="button-featured-new">ULTRA VIP</div>
                                                                    </div>

                                                                    <div class="buttons-wrap">



                                                                    <div class="button-new" style="background-color: #DA9DDC">{{ $ad['age'] }} Ans</div>

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
                                                                            {{ truncate($ad['title'],30) }}  
                                                                            </div>
                                                                        </div>
                                                                        <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['path']] )}}">
                                                                             
                                                                        </div>

                                                                    <div ppt-search-badges="" style="z-index:1" class="right">


                                                                        <div class="badge" style="color:#000000;background-color:#FFC300;">
                                                                        <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($ad['town']['town_name']) }}   </div>

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

                                                                                    <div class="button-new"
                                                                                    style="background-color: #DA9DDC; font-size:10px;">{{ $ad['age'] }} Ans</div>

                                                                                </div>
                                                                                <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                                                            <div class="fs-sm text-white  text-600">
                                                                                            {{ ucfirst($ad['town']['town_name']) }}  
                                                                                            </div>
                                                                                </div>
                                                                                <div class="bg-image z-0"
                                                                                data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['path']] )}}"> 
                                                                                </div>
                                                                                <div ppt-search-badges="" style="z-index:1, border-radius:80%" class="right">
                                                                                            <div class="badge" style="color:#fff;background-color:red;">
                                                                                            <span class="fal fa fa-star" style="color:#000000"> </span> ULTRA </br> VIP  </div>


                                                                                        </div>
                                                                                </figure>
                                                                            </div>
                                                                        </div>
                                                                        </a>
                                                                        <div class="lh-20 " style="margin-top:20px;">
                                                                                <span class="text-online">•</span>
                                                                                <a href="{{ route('ads.details', ['id' => $ad['id']]) }}"
                                                                                    class="text-white">{{ truncate($ad['title'],15) }}</span></a>
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
                                                        </div>

                                                        @if(count($vipAds) > 2)
                                                            @for($i=count($vipAds); $i >2 ; $i=$i-2)
                                                                <div class="carousel-item">
                                                                    <section data-ppt-blockid="listings99" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
                                                                        <div class="container">
                                                                            <div class="row">

                                                                            <div class="col-12">
                                                                                <div class='row'>

                                                                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                                                                                        <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                                                                                        data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                                                                                            <figure>

                                                                                            <div class="button-featured-new-wrap es">
                                                                                                <div class="button-featured-new">ULTRA VIP</div>
                                                                                            </div>

                                                                                            <div class="buttons-wrap">



                                                                                            <div class="button-new" style="background-color: #DA9DDC">{{ $ads[$i]['age'] }} Ans</div>

                                                                                            </div>
                                                                                            <a href="{{ route('ads.details', ['id' => $ads[$i]['id']]) }}">

                                                                                            <div ppt-border1="" class="p-1">

                                                                                                <div class="search-gradient"> </div>

                                                                                                <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                                                                                                <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                                                                                    <div class="text-white fs-4 text-600">
                                                                                                    {{ ucfirst($ads[$i]['user']['username']) }}
                                                                                                                <span class="text-online">•</span>
                                                                                                            </div>
                                                                                                    <div class="fs-sm text-white opacity-5 text-400">
                                                                                                    {{ truncate($ads[$i]['title'],30) }}  
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ads[$i]['id'], 'path'=>$ads[$i]['images'][0]['path']] )}}">
                                                                                                     
                                                                                                </div>

                                                                                            <div ppt-search-badges="" style="z-index:1" class="right">


                                                                                                <div class="badge" style="color:#000000;background-color:#FFC300;">
                                                                                                <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($ads[$i]['town']['town_name']) }}   </div>

                                                                                            </div>


                                                                                                </div>


                                                                                            </div>
                                                                                            </a>


                                                                                            </figure>

                                                                                            </div>



                                                                                            <div class="show-mobile">
                                                                                            <div class="position-relative mb-3">
                                                                                                <a href="{{ route('ads.details', ['id' => $ads[$i]['id']]) }}">
                                                                                                <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                                                                                                <div class="h-100 position-relative">
                                                                                                    <figure>


                                                                                                        <div class="buttons-wrap">

                                                                                                            <div class="button-new"
                                                                                                            style="background-color: #DA9DDC; font-size:10px;">{{ $ads[$i]['age'] }} Ans</div>

                                                                                                        </div>
                                                                                                        <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                                                                                    <div class="fs-sm text-white  text-600">
                                                                                                                    {{ ucfirst($ads[$i]['town']['town_name']) }}  
                                                                                                                    </div>
                                                                                                        </div>
                                                                                                        <div class="bg-image z-0"
                                                                                                        data-bg="{{ route('display.ads.image',['id'=>$ads[$i]['id'], 'path'=>$ads[$i]['images'][0]['path']] )}}"> 
                                                                                                        </div>
                                                                                                        <div ppt-search-badges="" style="z-index:1, border-radius:80%" class="right">
                                                                                                        <div class="badge" style="color:#fff;background-color:red;">
                                                                                                        <span class="fal fa fa-star" style="color:#000000"> </span> ULTRA </br> VIP  </div>


                                                                                                    </div>
                                                                                                        </figure>
                                                                                                    </div>
                                                                                                </div>
                                                                                                </a>
                                                                                                <div class="lh-20 " style="margin-top:20px;">
                                                                                                        <span class="text-online">•</span>
                                                                                                        <a href="{{ route('ads.details', ['id' => $ads[$i]['id']]) }}"
                                                                                                            class="text-white">{{ truncate($ads[$i]['title'],15) }}</span></a>
                                                                                                </div>

                                                                                            </div>
                                                                                            </div>

                                                                                    </div>

                                                                                    <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                                                                                        <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                                                                                        data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                                                                                            <figure>


                                                                                            <div class="button-featured-new-wrap es">
                                                                                                <div class="button-featured-new">ULTRA VIP</div>
                                                                                            </div>


                                                                                            <div class="buttons-wrap">



                                                                                            <div class="button-new" style="background-color: #DA9DDC">{{ $ads[$i+1]['age'] }} Ans</div>

                                                                                            </div>
                                                                                            <a href="{{ route('ads.details', ['id' => $ads[$i+1]['id']]) }}">

                                                                                            <div ppt-border1="" class="p-1">

                                                                                                <div class="search-gradient"> </div>

                                                                                                <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                                                                                                <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                                                                                    <div class="text-white fs-4 text-600">
                                                                                                    {{ ucfirst($ads[$i+1]['user']['username']) }}
                                                                                                                <span class="text-online">•</span>
                                                                                                            </div>
                                                                                                    <div class="fs-sm text-white opacity-5 text-400">
                                                                                                    {{ truncate($ads[$i+1]['title'],30) }}  
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ads[$i+1]['id'], 'path'=>$ads[$i+1]['images'][0]['path']] )}}">
                                                                                                     
                                                                                                </div>

                                                                                            <div ppt-search-badges="" style="z-index:1" class="right">


                                                                                                <div class="badge" style="color:#000000;background-color:#FFC300;">
                                                                                                <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($ads[$i+1]['town']['town_name']) }}   </div>

                                                                                            </div>


                                                                                                </div>


                                                                                            </div>
                                                                                            </a>


                                                                                            </figure>

                                                                                            </div>



                                                                                            <div class="show-mobile">
                                                                                            <div class="position-relative mb-3">
                                                                                                <a href="{{ route('ads.details', ['id' => $ads[$i+1]['id']]) }}">

                                                                                                <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                                                                                                <div class="h-100 position-relative">
                                                                                                    <figure>


                                                                                                        <div class="buttons-wrap">

                                                                                                            <div class="button-new"
                                                                                                            style="background-color: #DA9DDC; font-size:10px;">{{ $ads[$i+1]['age'] }} Ans</div>

                                                                                                        </div>
                                                                                                        <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                                                                                    <div class="fs-sm text-white  text-600">
                                                                                                                    {{ ucfirst($ads[$i+1]['town']['town_name']) }}  
                                                                                                                    </div>
                                                                                                        </div>
                                                                                                        <div class="bg-image z-0"
                                                                                                        data-bg="{{ route('display.ads.image',['id'=>$ads[$i+1]['id'], 'path'=>$ads[$i+1]['images'][0]['path']] )}}"> 
                                                                                                        </div>
                                                                                                        <div ppt-search-badges="" style="z-index:1, border-radius:80%" class="right">
                                                                                                        <div class="badge" style="color:#fff;background-color:red;">
                                                                                                        <span class="fal fa fa-star" style="color:#000000"> </span> ULTRA </br> VIP  </div>


                                                                                                    </div>
                                                                                                        </figure>

                                                                                                    </div>
                                                                                                </div>
                                                                                                </a>
                                                                                                <div class="lh-20 " style="margin-top:20px;">
                                                                                                        <span class="text-online">•</span>
                                                                                                        <a href="{{ route('ads.details', ['id' => $ads[$i+1]['id']]) }}"
                                                                                                            class="text-white">{{ truncate($ads[$i+1]['title'],15) }}</span></a>
                                                                                                </div>

                                                                                            </div>
                                                                                            </div>

                                                                                    </div>



                                                                                </div>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            @endfor
                                                        @endif

                                    </div>
                                    @if(count($vipAds) >2)
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    @endif

                            </div>







            </div>
            </div>
    </div>

        <div class="bg-image" style="background-image:url('{{ asset('assets/images/hero/hero4.png') }}');" data-ppt-image-bg=""
        data-bg="{{ asset('assets/images/hero/hero4.png') }}"> </div>

</section>
@endif
<div class="container mt-5">
    <div class="row">
          <div class="col-lg-12">
        <div class="d-flex justify-content-between">
          <h2 class="mb-1" data-ppt-title="">Annonces GOLD</h2>
          <div>
                        <a href="index-13.htm?s=" data-ppt-btn="" data-ppt-btn-link="" class="btn-system">Tout Voir</a>
                      </div>
        </div>
      </div>

	  </div>
</div>


<div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel" data-interval="10000">
  <ol class="carousel-indicators">
    @php
        $countgold=count($goldAds);
        $numberCarousselGold=$countgold/2;

    @endphp
    @if($countgold%2===1)
    @php
        $numberCarousselGold=($numberCarousselGold+1) - 0.5;
    @endphp

    @endif

    @for($i = 1; $i < $numberCarousselGold; $i++)
    @if($i===1)
        <li data-target="#carouselExampleIndicators1" data-slide-to="{{ $i }}" class="active"></li>
    @endif

        <li data-target="#carouselExampleIndicators1" data-slide-to="{{ $i }}"></li>
    @endfor

</ol>
  <div class="carousel-inner">
    @php
		shuffle($goldAds);
	@endphp
    <div class="carousel-item active">
	   <section data-ppt-blockid="listings99" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
		  <div class="container">
			<div class="row">

			<div class="col-12">
				<div class='row'>

			@forelse($goldAds as $ad)
				@if ($loop->index == 4)
								@break
							@endif
			<div class="col-6 col-sm-6 col-md-3 col-lg-3">

			<div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
			data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

				  <figure>


				<div class="buttons-wrap">

								<div class="button-new">GOLD</div>

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
						  {{ truncate($ad['title'],30) }}  
						</div>
					  </div>
					  <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['path']] )}}">
						 
					  </div>

				<div ppt-search-badges="" style="z-index:1" class="right">


					<div class="badge" style="color:#000000;background-color:#FFC300;">
					<span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($ad['town']['town_name']) }}   </div>

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

								<div class="button-new"
								style="background-color: #DA9DDC; font-size:10px;">{{ $ad['age'] }} Ans</div>

							</div>
							<div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

										<div class="fs-sm text-white  text-600">
										 {{ ucfirst($ad['town']['town_name']) }}  
										</div>
							</div>
							<div class="bg-image z-0"
							data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['path']] )}}"> 
							</div>
							<div ppt-search-badges="" style="z-index:1" class="right">
								<div class="badge" style="color:#000000;background-color:#FFC300;">
								<span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

							</div>
							</figure>
						</div>
					</div>
					</a>
					<div class="lh-20 " style="margin-top:20px;">
							<span class="text-online">•</span>
							<a href="{{ route('ads.details', ['id' => $ad['id']]) }}"
								class="text-dark">{{ truncate($ad['title'],15) }}</span></a>
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
    </div>

    @if(count($goldAds) > 4)
    @for($i=count($goldAds); $i > 4; $i=$i-4)
    <div class="carousel-item">
        <section data-ppt-blockid="listings99" data-ppt-blocktype="listings" data-ppt-section="" class="section-old-60 section-40">
      <div class="container">
        <div class="row">

        <div class="col-12">
            <div class='row'>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                    <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                    data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                          <figure>


                        <div class="buttons-wrap">

                            <div class="button-new">GOLD</div>

                        </div>
                          <a href="{{ route('ads.details', ['id' => $ads[$i]['id']]) }}">

                          <div ppt-border1="" class="p-1">

                            <div class="search-gradient"> </div>

                            <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                              <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                <div class="text-white fs-4 text-600">
                                 {{ ucfirst($ads[$i]['user']['username']) }}
                                            <span class="text-online">•</span>
                                          </div>
                                <div class="fs-sm text-white opacity-5 text-400">
                                  {{ truncate($ads[$i]['title'],30) }}  
                                </div>
                              </div>
                              <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ads[$i]['id'], 'path'=>$ads[$i]['images'][0]['path']] )}}">
                                 
                              </div>

                        <div ppt-search-badges="" style="z-index:1" class="right">


                            <div class="badge" style="color:#000000;background-color:#FFC300;">
                            <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($ads[$i]['town']['town_name']) }}   </div>

                        </div>


                            </div>


                          </div>
                        </a>


                        </figure>

                        </div>



                        <div class="show-mobile">
                          <div class="position-relative mb-3">
                            <a href="{{ route('ads.details', ['id' => $ads[$i]['id']]) }}">
                            <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                              <div class="h-100 position-relative">
                                <figure>


                                    <div class="buttons-wrap">

                                        <div class="button-new"
                                        style="background-color: #DA9DDC; font-size:10px;">{{ $ads[$i]['age'] }} Ans</div>

                                    </div>
                                    <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                <div class="fs-sm text-white  text-600">
                                                 {{ ucfirst($ads[$i]['town']['town_name']) }}  
                                                </div>
                                    </div>
                                    <div class="bg-image z-0"
                                    data-bg="{{ route('display.ads.image',['id'=>$ads[$i]['id'], 'path'=>$ads[$i]['images'][0]['path']] )}}"> 
                                    </div>
                                    <div ppt-search-badges="" style="z-index:1" class="right">
                                        <div class="badge" style="color:#000000;background-color:#FFC300;">
                                        <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

                                    </div>
                                    </figure>
                                </div>
                            </div>
                            </a>
                            <div class="lh-20 " style="margin-top:20px;">
                                    <span class="text-online">•</span>
                                    <a href="{{ route('ads.details', ['id' => $ads[$i]['id']]) }}"
                                        class="text-dark">{{ truncate($ads[$i]['title'],15) }}</span></a>
                            </div>

                          </div>
                        </div>

                </div>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                    <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                    data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                          <figure>

                        <div class="buttons-wrap">

                            <div class="button-new">GOLD</div>

                        </div>
                          <a href="{{ route('ads.details', ['id' => $ads[$i+1]['id']]) }}">

                          <div ppt-border1="" class="p-1">

                            <div class="search-gradient"> </div>

                            <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                              <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                <div class="text-white fs-4 text-600">
                                 {{ ucfirst($ads[$i+1]['user']['username']) }}
                                            <span class="text-online">•</span>
                                          </div>
                                <div class="fs-sm text-white opacity-5 text-400">
                                  {{ truncate($ads[$i+1]['title'],30) }}  
                                </div>
                              </div>
                              <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ads[$i+1]['id'], 'path'=>$ads[$i+1]['images'][0]['path']] )}}">
                                 
                              </div>

                        <div ppt-search-badges="" style="z-index:1" class="right">


                            <div class="badge" style="color:#000000;background-color:#FFC300;">
                            <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($ads[$i+1]['town']['town_name']) }}   </div>

                        </div>


                            </div>


                          </div>
                        </a>


                        </figure>

                        </div>



                        <div class="show-mobile">
                          <div class="position-relative mb-3">
                            <a href="{{ route('ads.details', ['id' => $ads[$i+1]['id']]) }}">

                            <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                              <div class="h-100 position-relative">
                                <figure>


                                    <div class="buttons-wrap">

                                        <div class="button-new"
                                        style="background-color: #DA9DDC; font-size:10px;">{{ $ads[$i+1]['age'] }} Ans</div>

                                    </div>
                                    <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                <div class="fs-sm text-white  text-600">
                                                 {{ ucfirst($ads[$i+1]['town']['town_name']) }}  
                                                </div>
                                    </div>
                                    <div class="bg-image z-0"
                                    data-bg="{{ route('display.ads.image',['id'=>$ads[$i+1]['id'], 'path'=>$ads[$i+1]['images'][0]['path']] )}}"> 
                                    </div>
                                    <div ppt-search-badges="" style="z-index:1" class="right">
                                        <div class="badge" style="color:#000000;background-color:#FFC300;">
                                        <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

                                    </div>
                                    </figure>

                                </div>
                            </div>
                            </a>
                            <div class="lh-20 " style="margin-top:20px;">
                                    <span class="text-online">•</span>
                                    <a href="{{ route('ads.details', ['id' => $ads[$i+1]['id']]) }}"
                                        class="text-dark">{{ truncate($ads[$i+1]['title'],15) }}</span></a>
                            </div>

                          </div>
                        </div>

                </div>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                    <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                    data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                          <figure>

                        <div class="buttons-wrap">

                            <div class="button-new">GOLD</div>

                        </div>
                          <a href="{{ route('ads.details', ['id' => $ads[$i+2]['id']]) }}">

                          <div ppt-border1="" class="p-1">

                            <div class="search-gradient"> </div>

                            <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                              <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                <div class="text-white fs-4 text-600">
                                 {{ ucfirst($ads[$i+2]['user']['username']) }}
                                            <span class="text-online">•</span>
                                          </div>
                                <div class="fs-sm text-white opacity-5 text-400">
                                  {{ truncate($ads[$i+2]['title'],30) }}  
                                </div>
                              </div>
                              <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ads[$i+2]['id'], 'path'=>$ads[$i+2]['images'][0]['path']] )}}">
                                 
                              </div>

                        <div ppt-search-badges="" style="z-index:1" class="right">


                            <div class="badge" style="color:#000000;background-color:#FFC300;">
                            <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($ads[$i+2]['town']['town_name']) }}   </div>

                        </div>


                            </div>


                          </div>
                        </a>


                        </figure>

                        </div>



                        <div class="show-mobile">
                          <div class="position-relative mb-3">
                            <a href="{{ route('ads.details', ['id' => $ads[$i+2]['id']]) }}">

                            <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                              <div class="h-100 position-relative">
                                <figure>


                                    <div class="buttons-wrap">

                                        <div class="button-new"
                                        style="background-color: #DA9DDC; font-size:10px;">{{ $ads[$i+2]['age'] }} Ans</div>

                                    </div>
                                    <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                <div class="fs-sm text-white  text-600">
                                                 {{ ucfirst($ads[$i+2]['town']['town_name']) }}  
                                                </div>
                                    </div>
                                    <div class="bg-image z-0"
                                    data-bg="{{ route('display.ads.image',['id'=>$ads[$i+2]['id'], 'path'=>$ads[$i+2]['images'][0]['path']] )}}"> 
                                    </div>
                                    <div ppt-search-badges="" style="z-index:1" class="right">
                                        <div class="badge" style="color:#000000;background-color:#FFC300;">
                                        <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

                                    </div>
                                    </figure>

                                </div>
                            </div>
                            </a>
                            <div class="lh-20 " style="margin-top:20px;">
                                    <span class="text-online">•</span>
                                    <a href="{{ route('ads.details', ['id' => $ads[$i+2]['id']]) }}"
                                        class="text-dark">{{ truncate($ads[$i+2]['title'],15) }}</span></a>
                            </div>

                          </div>
                        </div>

                </div>

                <div class="col-6 col-sm-6 col-md-3 col-lg-3">

                    <div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
                    data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

                          <figure>

                        <div class="buttons-wrap">

                            <div class="button-new">GOLD</div>

                        </div>
                          <a href="{{ route('ads.details', ['id' => $ads[$i+3]['id']]) }}">

                          <div ppt-border1="" class="p-1">

                            <div class="search-gradient"> </div>

                            <div class="bg-light position-relative overflow-hidden" style="height:360px;">
                              <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">
                                <div class="text-white fs-4 text-600">
                                 {{ ucfirst($ads[$i+3]['user']['username']) }}
                                            <span class="text-online">•</span>
                                          </div>
                                <div class="fs-sm text-white opacity-5 text-400">
                                  {{ truncate($ads[$i+3]['title'],30) }}  
                                </div>
                              </div>
                              <div class="bg-image" data-bg="{{ route('display.ads.image',['id'=>$ads[$i+3]['id'], 'path'=>$ads[$i+3]['images'][0]['path']] )}}">
                                 
                              </div>

                        <div ppt-search-badges="" style="z-index:1" class="right">


                            <div class="badge" style="color:#000000;background-color:#FFC300;">
                            <span class="fal fa fa-star" style="color:#000000"> </span> {{ ucfirst($ads[$i+3]['town']['town_name']) }}   </div>

                        </div>


                            </div>


                          </div>
                        </a>


                        </figure>

                        </div>



                        <div class="show-mobile">
                          <div class="position-relative mb-3">
                            <a href="{{ route('ads.details', ['id' => $ads[$i+3]['id']]) }}">

                            <div style="height:190px; width:150px; min-width:65px;" class="position-relative" ppt-border1="">
                              <div class="h-100 position-relative">
                                <figure>


                                    <div class="buttons-wrap">

                                        <div class="button-new"
                                        style="background-color: #DA9DDC; font-size:10px;">{{ $ads[$i+3]['age'] }} Ans</div>

                                    </div>
                                    <div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

                                                <div class="fs-sm text-white  text-600">
                                                 {{ ucfirst($ads[$i+3]['town']['town_name']) }}  
                                                </div>
                                    </div>
                                    <div class="bg-image z-0"
                                    data-bg="{{ route('display.ads.image',['id'=>$ads[$i+3]['id'], 'path'=>$ads[$i+3]['images'][0]['path']] )}}"> 
                                    </div>
                                    <div ppt-search-badges="" style="z-index:1" class="right">
                                        <div class="badge" style="color:#000000;background-color:#FFC300;">
                                        <span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

                                    </div>
                                    </figure>

                                </div>
                            </div>
                            </a>
                            <div class="lh-20 " style="margin-top:20px;">
                                    <span class="text-online">•</span>
                                    <a href="{{ route('ads.details', ['id' => $ads[$i+3]['id']]) }}"
                                        class="text-dark">{{ truncate($ads[$i+3]['title'],15) }}</span></a>
                            </div>

                          </div>
                        </div>

                </div>



            </div>
          </div>
        </div>
      </div>
    </section>
    </div>
@endfor
    @endif

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




 @if($homeAds)
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

	@forelse($homeAds as $ad)

	<div class="col-6 col-sm-6 col-md-4 col-lg-4">

	<div ppt-box="" class="list-info-pop-wrap hide-mobile search-zoom rounded-lg mb-4 border-0 shadow"
	data-pid="46" data-lat="40.70155172662101" data-long="-73.81881898377685" data-address="">

		  <figure>



		<div class="buttons-wrap">



		<div class="button-new" style="background-color: #DA9DDC">{{ $ad['age'] }} Ans</div>

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


			@if($ad['subscribe_id'] ===2)
								<div class="badge" style="color:#000000;background-color:#FFC300;">
								<span class="fal fa fa-star" style="color:#000000"> </span> GOLD </div>
                            @endif
                            @if($ad['subscribe_id'] ===3)
                            <div class="badge" style="color:#000000;background-color:#FFC300;">
                            <span class="fal fa fa-star" style="color:#000000"> </span> ULTRA VIP  </div>
                        @endif

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

						<div class="button-new"
						style="background-color: #DA9DDC; font-size:10px;">{{ $ad['age'] }} Ans</div>

					</div>
					<div style="z-index: 1; bottom:10px; position: absolute;left:10px;">

								<div class="fs-sm text-white  text-600">
								 {{ ucfirst($ad['town']['town_name']) }}  
								</div>
					</div>
					<div class="bg-image z-0"
					data-bg="{{ route('display.ads.image',['id'=>$ad['id'], 'path'=>$ad['images'][0]['path']] )}}"> 
				    </div>
					<div ppt-search-badges="" style="z-index:1" class="right">
								<div class="badge" style="color:#000000;background-color:#FFC300;">
								<span class="fal fa fa-star" style="color:#000000"> </span> Gold  </div>

							</div>
					</figure>
			    </div>
			</div>
			</a>
			<div class="lh-20 text-700" style="margin-top:20px;">
					<span class="text-online">•</span>
					<a href="{{ route('ads.details', ['id' => $ad['id']]) }}"
						class="text-dark">{{ truncate($ad['title'],10) }}</span></a>
			</div>
			<div class="lh-20" style="margin-top:0px;">
					<a href="{{ route('ads.details', ['id' => $ad['id']]) }}"
						class="text-dark lh-20 text-300">{{ truncate($ad['description'],40) }}</span></a>
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


      </div>
    </div>
  </div>
</section>


 <div class="bg-light ppt-page-body">
<div class="border-bottom">

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
