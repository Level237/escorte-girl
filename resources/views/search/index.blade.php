@extends('layouts.Frontend.master')
@section('title', __('Résultats de recherche'))
@section('content')
<style>
    .LC20lb {
    display: inline-block;
    line-height: 1.3;
    margin-bottom: 3px;
}
.MBeuO {
    font-family: arial,sans-serif;
    font-size: 20px;
    font-weight: 400;
}
.DKV0Md {
    margin-top: 18px;
}

.lEBKkf {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    overflow: hidden;
        color: #70757a;
    -webkit-line-clamp: 2;
}
</style>
<div id="ppt-register" class="ppt-forms bg-white">
  <div class="container-fluid px-0">
    <div class="row g-0 min-vh-100">
      <div class="col-md-4 bg-light hide-mobile">
        <div class="overlay-inner">
        </div>
        <div class="bg-image" data-bg="{{ asset('assets/images/nake-girl.jpg') }}">
        </div>
      </div>
      <div class="col-md-8 col-lg-8 col-xl-7 d-md-flex flex-column align-items-center">
        <div class="container pt-4">
          <div class="row g-0">
            <div class="col-12 col-xl-10 mx-auto">
              <div class="logo">
               <a href="/">

            <div class='textlogo navbar-brand-dark'></div>
          </a>
              </div>
            </div>
          </div>
        </div>
        <div class="container my-auto py-5">
          <div class="row g-0">
            <div class="col-12 col-xl-10 mx-auto">


		<div class="" >

		  <div class="">


			<div class="clearfix mb-3">


			 <h2 class="text-600 mb-3">
				<span class="smilecode float-right" style="font-size: 40px;">&#x1F600;</span> {{ count($results) }} Résultats de recherche </h2>

			 <p>Résultats de recherche pour : {{ $term }} </p>



			</div>



		

		<div class="">
		<div>
		

            @foreach($types as $key=>$value)
                <h2>{{ $value }}</h2> <br>
                @foreach($results as $result)
                
                    @if ($result['type'] == $key)
                        
                        @switch($result['type'])
                                @case('escorts')
                                    <li class="LC20lb MBeuO"><a href="{{ route('escort.details', ['id'=>$result['searchable']['id']]) }}">{{ $result['title'] }}</a></li>
                                    <p class="lEBKkf">{{ $result['searchable']['description'] }}</p> 
                                    <br>

                                    @break
                                
                                @case('announcements')
                                    <li class="LC20lb MBeuO"><a href="{{ route('escort.details', ['id'=>$result['searchable']['id']]) }}">{{ $result['title'] }}</a></li>
                                     <p class="lEBKkf">{{ $result['searchable']['description'] }}</p>
                                     <br>
                                    @break

                                @case('towns')
                                    <li class="LC20lb MBeuO"><a href="{{ route('ads.town', ['id'=>$result['searchable']['id']]) }}">{{ $result['title'] }}</a></li>
                                    <br>
                                    @break

                                @case('quarters')
                                    <li class="LC20lb MBeuO"><a href="{{ route('ads.town', ['id'=>$result['searchable']['id']]) }}">{{ $result['title'] }}</a></li>
                                    <br>
                                    @break
                            
                                @default
                                    
                            @endswitch
                    @endif
                        
                            

                @endforeach
                <hr />
            @endforeach
		   

			


		  </div>
		</div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
  </div>
</div>

</main>
</div>
@endsection