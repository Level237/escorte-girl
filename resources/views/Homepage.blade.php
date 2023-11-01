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
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<script src="{{ asset('assets/js/jquery.min.js') }}" id="jquery-core-js"></script>


</head>
<body class="home blog body-hide-footer theme-es tall-images">

<div id="wrapper" style="display:none;" class="">

<div id="sidebar-wrapper" style="display:none; " class="shadow">
</div>

<main id="page-content-wrapper" class="with-mobilemenu">

<html>
  <body><header class=" bg-white navbar-light border-bottom" data-block-id="header"> <nav class="py-2 elementor_topmenu bg-white border-bottom text-dark hide-mobile hide-ipad small text-500">
  <div class="container">
    <div class="row">
      <div class="col-md-6 pr-0">
        <nav ppt-nav="" class="ppt-top-menu pl-0">
        <ul>
        <li><a href="index-1.htm?reset=1">Home</a></li>

        <li><a href="about-us/index.htm">About Us</a></li>

         <li><a href="contact/index.htm">Contact</a></li>

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
                                <a class="dropdown-item" href="index-2.htm?c=USD">
                                <i class="fal fa-dollar-sign float-right mt-2"></i>
                                USD</a>
                                <a class="dropdown-item" href="index-3.htm?c=GBP">
                                <i class="fal fa-pound-sign float-right mt-2"></i>
                                GBP</a>
                                <a class="dropdown-item" href="index-4.htm?c=EUR">
                                <i class="fal fa-euro-sign float-right mt-2"></i>
                                EUR</a>
                                <a class="dropdown-item" href="index-5.htm?c=CAD">
                                <i class="fal fa-dollar-sign float-right mt-2"></i>
                                CAD</a>
                                <a class="dropdown-item" href="index-6.htm?c=AUD">
                                <i class="fal fa-dollar-sign float-right mt-2"></i>
                                AUD</a>
                                <a class="dropdown-item" href="index-7.htm?c=JPY">
                                <i class="fal fa-yen-sign float-right mt-2"></i>
                                JPY</a>
                                <a class="dropdown-item" href="index-8.htm?c=INR">
                                <i class="fal fa-rupee-sign float-right mt-2"></i>
                                INR</a>
                                <a class="dropdown-item" href="index-9.htm?c=RUB">
                                <i class="fal fa-ruble-sign float-right mt-2"></i>
                                RUB</a>
                                <a class="dropdown-item" href="index-10.htm?c=TRY">
                                <i class="fal fa-lira-sign float-right mt-2"></i>
                                TRY</a>
                                <a class="dropdown-item" href="index-11.htm?c=PTS">
                                <span class="float-right mt-1">&#8359;</span>
                                PTS</a>
                                <a class="dropdown-item" href="index-12.htm?c=BTC">
                                <i class="fab fa-bitcoin float-right mt-2"></i>
                                BTC</a>
                              </div>
            </li>
                                    <li> <a href="wp-login.php.htm">Sign In</a> </li>
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
        <a href="index.htm">
<div class='textlogo navbar-brand-light'>Sexy <span class='text-primary'>Escorts</span></div><div class='textlogo navbar-brand-dark'>Sexy <span class='text-primary'>Escorts</span></div></a>
      </div>
      <div class="col" ppt-flex-end="">
        <div class="d-flex ">
            <nav ppt-nav="" ppt-flex-end="" class="seperator spacing hide-mobile hide-ipad text-600">         <ul>



       <li><a href="index-1.htm?reset=1">Home</a></li>
        <li><a href="index-13.htm?s=">Search</a></li>
       <li><a href="contact/index.htm">Contact</a></li>

       <li><a href="blog/index.htm">Blog</a></li>


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



                        <a href="add-listing/index.htm" class="btn-secondary  rounded-pill text-600" data-ppt-btn="" data-ppt-btn-txt="">Add Profile</a>



          </div>
                  </div>
      </div>
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

    <div class="search-gradient"></div>

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
    <span class="fal fa fa-star" style="color:#000000"></span> Gold  </div>

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
    <span class="fal fa fa-star" style="color:#000000"></span> Gold  </div>

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

    <div class="search-gradient"></div>

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
    <span class="fal fa fa-star" style="color:#000000"></span> Gold  </div>

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
