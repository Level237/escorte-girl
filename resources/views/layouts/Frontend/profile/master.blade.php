<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="en-US">
<!--[if lte IE 8 ]><html lang="en" class="ie ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="ie"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->
    <title>@yield('title')</title>

    <style>.preload-hide { display:none; }</style><meta name='robots' content='max-image-preview:large'>
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<script src="../wp-includes/js/jquery/jquery.min.js?ver=3.7.0" id="jquery-core-js"></script>
<script src="../js/js.plugins-upload.js?ver=1" id="ppt-upload-js"></script>
<script src="../js/js.plugins-selectpicker.js?ver=1" id="ppt-selectpicker-js"></script>


</head>
<body class="page-template page-template-templates page-template-tpl-add page-template-templatestpl-add-php page page-id-16 body-hide-footer theme-es tall-images innerpage">

<div id="wrapper" style="display:none;" class="">

<div id="sidebar-wrapper" style="display:none; " class="shadow">
</div>

<main id="page-content-wrapper" class="with-mobilemenu">

<html>
  <body>
    @include('layouts.Frontend.header')
</body>
</html>



<div id="ppt-add-listing-save" style="display:none;">
    <div class="container py-5 my-5">
        <div class="alert alert-primary p-3 alert-dismissible fade show" role="alert">
            <strong><i class="fa fa-spin fa-sync mr-3"></i>  Saving Your Changes</strong> - This may take a few minutes, please wait...
        </div>
    </div>
</div>



<div id="ppt-add-listing-form" class="my-5 ppt-forms style3" data-step="1">


@yield('content')


<script>

function CheckNewStore(val){

if(val == "-1"){
jQuery('#switchNewStore').show();
jQuery('#switchNewStore').find('input').addClass('form-control');
}

}

function processGender(id){
	jQuery('.gender').removeClass('checked');
	jQuery('.gender-'+id).addClass('checked');
	jQuery("#gender").val(id);
	jQuery("#reg_field_tax_dagender").val(id);
}
function processSwitch(id){

	jQuery(".switchValDiv").hide()
	if(id == 2){
		jQuery(".switchValDiv").show();
		LoadStoreList();
	}
	jQuery('.ingender').removeClass('checked');
	jQuery('.ingender-'+id).addClass('checked');
	jQuery("#switchVal").val(id);

}
function processInterested(id){
	jQuery('.ingender1').removeClass('checked');
	jQuery('.ingender1-'+id).addClass('checked');
	jQuery("#ingender").val(id);

}

jQuery(document).ready(function() {
	jQuery('#reg_field_tax_dagender').on('change', function () {
		processGender(jQuery("#reg_field_tax_dagender").val());
	});
});

jQuery(document).ready(function() {
	processSwitch();
});



function LoadStoreList(){

	jQuery.ajax({
		type: "POST",
		url: 'http://escort.test/',
		dataType: 'json',
		data: {
				action: "load_store_list",
				selected: "",
		},
		success: function(response) {

		 	if(response.total > 0){

				jQuery("#storelist").html(response.output);

			}

		},
		error: function(e) {
			console.log(e)
		}
	});

}

</script>
</div>



<label>Where do you want your ad displayed? <span class="text-danger">*</span> </label>


<div class="my-2">

  <div class="usertry checked dashed" onclick="processEditData('category');" id="cataddnew">


        <span> <i class="fa fa-plus text-dark"></i> Category</span>

    	</div>



</div>




<div id="default_map_data">
<input type="hidden" name="custom[map-country]" value=""><input type="hidden" name="custom[map-city]" value="">
		<input type="hidden" name="custom[map-log]" value="0"><input type="hidden" name="custom[map-lat]" value="0"></div>

<label class="mt-2">Where are you located? </label>

<div class="row mt-2">

<div class="col-6 col-md-4 col-xl-3 data-map-country-wrap" style="display:none;">

	<div class="cardbox" onclick="processEditData('map');">

        <i class="fal fa-flag"></i>

        <div class="small data-map-country"></div>

	</div>

</div>

<div class="col-6 col-md-4 col-xl-3 data-map-city-wrap" style="display:none;">

        <div class="cardbox" onclick="processEditData('map');">

        <i class="fal fa-map-marker"></i>

        <div class="small data-map-city"></div>

    </div>

</div>
<div class="col-6 col-md-4 col-xl-3 data-map-zip-wrap" style="display:none;">

        <div class="cardbox" onclick="processEditData('map');">

        <i class="fal fa-map-pin"></i>

        <div class="small data-map-zip"></div>

    </div>

</div>


<div class="col-6 col-md-4 col-xl-3 map-blankbox">

        <div class="cardbox closed ppt-js-map-trigger filterbox-distance" onclick="processEditData('map');">

        <i class="fal fa-map-marker-plus"></i>

        <div class="small">Change</div>

    </div>

</div>

</div>


    </div>
    <div class="card-footer">


    <div class="d-flex justify-content-between p-2 text-600">

    <div><button data-ppt-btn="" class=" btn-system btn-back btn-lg scroll-top-quick" type="button" onclick="steps('1','back')"><i class="fa fa-arrow-left mr-2"></i> Back</button></div>

    <div>
    <button data-ppt-btn="" class=" btn-system btn-forward btn-lg scroll-top-quick text-600" type="button" onclick="steps('1','forward')">Next <i class="fa fa-arrow-right ml-2"></i> </button>


    <button data-ppt-btn="" class=" btn-secondary btn-block btn-lg text-600 btn-save" type="button">Save</button>


    </div>


    </div>

     </div>

    </div>

    </div>

    </div>


</div>





 <div class="row overflow-hidden mt-4 steps-box hide-mobile">


       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('1','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">01</span> Basics
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('2','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">02</span> Description
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('3','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">03</span> Details
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('4','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">04</span> Media
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('5','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">05</span> Finish
       </span>

      </div>

</div>



</section>







<section class="container px-0 add-block block2 ">

 <div class="ppt-add-listing-error"></div>

<div class="add-block-wrap">

    <div class="row no-gutters">

    <div class="col-lg-4 bg-primary hide-mobile position-relative overflow-hidden tipsidebar">

    <div class="bg-image" data-bg=""></div>

    <div class="card h-100 bg-none border-0">

        <div class="card-body">



        </div>

        <div class="card-footer bg-none">



        <div class="bg-white shadow text-dark mb-4 p-3 rounded-lg">


		<div class="text-700 mb-2"><i class="fa fa-info-circle mr-2"></i> Quick Tip</div>
		<p>Make your description easy to read. Focus on benefits and features and includes lot's of detail for best results.</p>
        </div>




        <div class="ppt-add-listing-payment" style="display:none;">
            <div class="container px-0 mb-4">
                <div class="bg-black rounded p-3 text-light">
                    <div class="d-flex justify-content-between text-700">

                    <div>Total</div>

                    <div class="totalPriceDisplay"><span class="ppt-price">0</span></div>

                    </div>
                </div>
            </div>

        </div>


       <button data-ppt-btn="" class=" btn-secondary btn-block btn-lg text-600 btn-save" type="button">Save</button>

        </div>

    </div>



    </div>


    <div class="col-lg-8">

    <div class="card card-add-block mb-0"><div class="card-body">

    <div class="_title"><span class="title-number bg-secondary">02</span> Description</div>


<div class="form-group">
  <div id="textarea_counter" class="text-muted small float-right">
    <span></span>
  </div>
  <input type="hidden" name="textarea_counter_hidden" value="100" id="textarea_counter_hidden">
    <label class="w-100">About Me <span class="text-danger">*</span>



  </label>
    <textarea name="form[post_content]" class="form-control rounded-0 required-field" tabindex="2" id="field-post_content"></textarea>
  </div>

 <script>
function ChekBadge(div){

			if (jQuery(div+'check').is(':checked')) {
				jQuery(div+'add').val(1);
			}else{
				jQuery(div+'add').val(0);
			}

		}
</script>

    <div class="row">
      <div class="col-12 mb-2">


      <div class="block-header mt-4">
<h3 class="block-header__title"> Services</h3>
<div class="block-header__divider"></div>
</div>

      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="108">
        <span class="custom-control-label"></span>  Balls licking</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="109">
        <span class="custom-control-label"></span>  Cum in mouth</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="110">
        <span class="custom-control-label"></span>  Cum on body</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="111">
        <span class="custom-control-label"></span>  Deep French kissing</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="112">
        <span class="custom-control-label"></span>  Double penetration</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="113">
        <span class="custom-control-label"></span>  Disabled clients</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="98">
        <span class="custom-control-label"></span>  sensual massage only</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="114">
        <span class="custom-control-label"></span>  Doggy style</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="99">
        <span class="custom-control-label"></span>  Affectionate cuddling</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="115">
        <span class="custom-control-label"></span>  Girlfriend experience</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="100">
        <span class="custom-control-label"></span>  Affectionate kissing</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="116">
        <span class="custom-control-label"></span>  Happy ending</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="101">
        <span class="custom-control-label"></span>  Sexy lingerie</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="117">
        <span class="custom-control-label"></span>  Massage</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="102">
        <span class="custom-control-label"></span>  Light bondage</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="118">
        <span class="custom-control-label"></span>  Overnight stays</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="103">
        <span class="custom-control-label"></span>  Dirty talk</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="119">
        <span class="custom-control-label"></span>  Passionate kissing</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="104">
        <span class="custom-control-label"></span>  Costumes</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="105">
        <span class="custom-control-label"></span>  Strip tease</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="106">
        <span class="custom-control-label"></span>  body slide</label>
      </div>
            <div class="col-md-4 mb-3">
        <label class="checkbox custom-control custom-checkbox">
        <input type="checkbox" class="form-control custom-control-input" data-toggle="checkbox" name="tax[features][]" value="107">
        <span class="custom-control-label"></span>  Blow job</label>
      </div>
          </div>



    </div>
    <div class="card-footer">


    <div class="d-flex justify-content-between p-2 text-600">

    <div><button data-ppt-btn="" class=" btn-system btn-back btn-lg scroll-top-quick" type="button" onclick="steps('2','back')"><i class="fa fa-arrow-left mr-2"></i> Back</button></div>

    <div>
    <button data-ppt-btn="" class=" btn-system btn-forward btn-lg scroll-top-quick text-600" type="button" onclick="steps('2','forward')">Next <i class="fa fa-arrow-right ml-2"></i> </button>


    <button data-ppt-btn="" class=" btn-secondary btn-block btn-lg text-600 btn-save" type="button">Save</button>


    </div>


    </div>

     </div>

    </div>

    </div>

    </div>


</div>





 <div class="row overflow-hidden mt-4 steps-box hide-mobile">


       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick active" onclick="steps('1','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">01</span> Basics
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('2','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">02</span> Description
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('3','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">03</span> Details
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('4','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">04</span> Media
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('5','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">05</span> Finish
       </span>

      </div>

</div>



</section>







<section class="container px-0 add-block block3 ">

 <div class="ppt-add-listing-error"></div>

<div class="add-block-wrap">

    <div class="row no-gutters">

    <div class="col-lg-4 bg-primary hide-mobile position-relative overflow-hidden tipsidebar">

    <div class="bg-image" data-bg=""></div>

    <div class="card h-100 bg-none border-0">

        <div class="card-body">



        </div>

        <div class="card-footer bg-none">




        <div class="ppt-add-listing-payment" style="display:none;">
            <div class="container px-0 mb-4">
                <div class="bg-black rounded p-3 text-light">
                    <div class="d-flex justify-content-between text-700">

                    <div>Total</div>

                    <div class="totalPriceDisplay"><span class="ppt-price">0</span></div>

                    </div>
                </div>
            </div>

        </div>


       <button data-ppt-btn="" class=" btn-secondary btn-block btn-lg text-600 btn-save" type="button">Save</button>

        </div>

    </div>



    </div>


    <div class="col-lg-8">

    <div class="card card-add-block mb-0"><div class="card-body">

    <div class="_title"><span class="title-number bg-secondary">03</span> Details</div>


<div class="block-header mt-4">
  <h3 class="block-header__title">My Rates</h3>
  <div class="block-header__divider">
  </div>
</div>
<div class="row" id="ratesbit">
  <div class="col-6 col-md-4 col-lg-3">
    <div class="cardbox closed" onclick="jQuery('#ratesbox, #ratesbit').toggle();">
      <i class="fal fa-comments-dollar"></i>
      <div class="small">
        manage      </div>
    </div>
  </div>
</div>
<div id="ratesbox" style="display:none">
  <i class="fa fa-times float-right" onclick="jQuery('#ratesbox, #ratesbit').toggle();" style="cursor:pointer;"></i>
    <div class="row">
        <div class="col-lg-12 border-bottom mb-3 pb-3">
      <div class="row">
        <div class="col-md-4 y-middle">
          <div class="h6">
            1 Hour          </div>
        </div>
        <div class="col-md-4">
          <label class="small">Incall</label>
          <div class="input-group">
            <span class="input-group-text rounded-0 border-right-0"><i class='fab fa-bitcoin'>&nbsp;</i></span>
            <input type="text" name="custom[rate_incall1]" maxlength="10" class="form-control rounded-0 val-numeric required" value="0">
          </div>
        </div>
        <div class="col-md-4">
          <label class="small">Outcall</label>
          <div class="input-group">
            <span class="input-group-text rounded-0 border-right-0"><i class='fab fa-bitcoin'>&nbsp;</i></span>
            <input type="text" name="custom[rate_outcall1]" maxlength="10" class="form-control rounded-0 val-numeric required" value="0">
          </div>
        </div>
      </div>
    </div>
        <div class="col-lg-12 border-bottom mb-3 pb-3">
      <div class="row">
        <div class="col-md-4 y-middle">
          <div class="h6">
            2 Hours          </div>
        </div>
        <div class="col-md-4">
          <label class="small">Incall</label>
          <div class="input-group">
            <span class="input-group-text rounded-0 border-right-0"><i class='fab fa-bitcoin'>&nbsp;</i></span>
            <input type="text" name="custom[rate_incall2]" maxlength="10" class="form-control rounded-0 val-numeric required" value="0">
          </div>
        </div>
        <div class="col-md-4">
          <label class="small">Outcall</label>
          <div class="input-group">
            <span class="input-group-text rounded-0 border-right-0"><i class='fab fa-bitcoin'>&nbsp;</i></span>
            <input type="text" name="custom[rate_outcall2]" maxlength="10" class="form-control rounded-0 val-numeric required" value="0">
          </div>
        </div>
      </div>
    </div>
        <div class="col-lg-12 border-bottom mb-3 pb-3">
      <div class="row">
        <div class="col-md-4 y-middle">
          <div class="h6">
            3 Hours          </div>
        </div>
        <div class="col-md-4">
          <label class="small">Incall</label>
          <div class="input-group">
            <span class="input-group-text rounded-0 border-right-0"><i class='fab fa-bitcoin'>&nbsp;</i></span>
            <input type="text" name="custom[rate_incall3]" maxlength="10" class="form-control rounded-0 val-numeric required" value="0">
          </div>
        </div>
        <div class="col-md-4">
          <label class="small">Outcall</label>
          <div class="input-group">
            <span class="input-group-text rounded-0 border-right-0"><i class='fab fa-bitcoin'>&nbsp;</i></span>
            <input type="text" name="custom[rate_outcall3]" maxlength="10" class="form-control rounded-0 val-numeric required" value="0">
          </div>
        </div>
      </div>
    </div>
        <div class="col-lg-12 border-bottom mb-3 pb-3">
      <div class="row">
        <div class="col-md-4 y-middle">
          <div class="h6">
            6 Hours          </div>
        </div>
        <div class="col-md-4">
          <label class="small">Incall</label>
          <div class="input-group">
            <span class="input-group-text rounded-0 border-right-0"><i class='fab fa-bitcoin'>&nbsp;</i></span>
            <input type="text" name="custom[rate_incall4]" maxlength="10" class="form-control rounded-0 val-numeric required" value="0">
          </div>
        </div>
        <div class="col-md-4">
          <label class="small">Outcall</label>
          <div class="input-group">
            <span class="input-group-text rounded-0 border-right-0"><i class='fab fa-bitcoin'>&nbsp;</i></span>
            <input type="text" name="custom[rate_outcall4]" maxlength="10" class="form-control rounded-0 val-numeric required" value="0">
          </div>
        </div>
      </div>
    </div>
        <div class="col-lg-12 border-bottom mb-3 pb-3">
      <div class="row">
        <div class="col-md-4 y-middle">
          <div class="h6">
            12 Hours          </div>
        </div>
        <div class="col-md-4">
          <label class="small">Incall</label>
          <div class="input-group">
            <span class="input-group-text rounded-0 border-right-0"><i class='fab fa-bitcoin'>&nbsp;</i></span>
            <input type="text" name="custom[rate_incall5]" maxlength="10" class="form-control rounded-0 val-numeric required" value="0">
          </div>
        </div>
        <div class="col-md-4">
          <label class="small">Outcall</label>
          <div class="input-group">
            <span class="input-group-text rounded-0 border-right-0"><i class='fab fa-bitcoin'>&nbsp;</i></span>
            <input type="text" name="custom[rate_outcall5]" maxlength="10" class="form-control rounded-0 val-numeric required" value="0">
          </div>
        </div>
      </div>
    </div>
      </div>
  </div>

<div class="block-header mt-4">
<h3 class="block-header__title">When can we meet?</h3>
<div class="block-header__divider"></div>
</div>

<div id="wbts">

<a href="#" class="btn btn-system btn-md" onclick="jQuery('#workinghoursb, #wbts').toggle();">

        <i class="fa fa-plus mr-1"></i>

        <span>Manage Schedule</span>

</a>
</div>



<div style="display:none;" id="workinghoursb">
<i class="fa fa-times float-right" onclick="jQuery('#workinghoursb, #wbts').toggle();" style="cursor:pointer;"></i>
<div class="row" id="businessHoursContainer3"></div>
</div>
<script>

			jQuery(document).ready(function(){

						var operationTime;




			(function($) {
    $.fn.businessHours = function(opts) {
        var defaults = {
            preInit: function() {
            },
            postInit: function() {
            },
            inputDisabled: false,
            checkedColorClass: "WorkingDayState",
            uncheckedColorClass: "RestDayState",
            colorBoxValContainerClass: "colorBoxContainer",
            weekdays: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            operationTime: [
                {},
                {},
                {},
                {},
                {},
                {isActive: false},
                {isActive: false}
            ],
            defaultOperationTimeFrom: '9:00',
            defaultOperationTimeTill: '18:00',
            defaultActive: true,
            //labelOn: "Working day",
            //labelOff: "Day off",
            //labelTimeFrom: "from:",
            //labelTimeTill: "till:",
            containerTmpl: '',
            dayTmpl: ''
        };

        var container = $(this);

        function initTimeBox(timeBoxSelector, time, isInputDisabled) {
            timeBoxSelector.val(time);

            if(isInputDisabled) {
                timeBoxSelector.prop('readonly', true);
            }
        }

        var methods = {
            getValueOrDefault: function(val, defaultVal) {
                return (jQuery.type(val) === "undefined" || val == null) ? defaultVal : val;
            },
            init: function(opts) {
                this.options = $.extend(defaults, opts);
                container.html("");

                if(typeof this.options.preInit === "function") {
                    this.options.preInit();
                }

                this.initView(this.options);

                if(typeof this.options.postInit === "function") {
                    //$('.operationTimeFrom, .operationTimeTill').timepicker(options.timepickerOptions);
                    this.options.postInit();
                }

                return {
                    serialize: function() {
                        var data = [];

                        container.find(".operationState").each(function(num, item) {
                            var isWorkingDay = $(item).prop("checked");
                            var dayContainer = $(item).parents(".dayContainer");

                            data.push({
                                isActive: isWorkingDay,
                                timeFrom: isWorkingDay ? dayContainer.find("[name='startTime']").val() : null,
                                timeTill: isWorkingDay ? dayContainer.find("[name='endTime']").val() : null
                            });
                        });

                        return data;
                    }
                };
            },
            initView: function(options) {
                var stateClasses = [options.checkedColorClass, options.uncheckedColorClass];
                var subContainer = container.append($(options.containerTmpl));
                var $this = this;

                for(var i = 0; i < options.weekdays.length; i++) {
                    subContainer.append(options.dayTmpl);
                }

                $.each(options.weekdays, function(pos, weekday) {
                    // populate form
                    var day = options.operationTime[pos];
                    var operationDayNode = container.find(".dayContainer").eq(pos);
                    operationDayNode.find('.weekday').html(weekday);

                    var isWorkingDay = $this.getValueOrDefault(day.isActive, options.defaultActive);
                    operationDayNode.find('.operationState').prop('checked', isWorkingDay);

                    var timeFrom = $this.getValueOrDefault(day.timeFrom, options.defaultOperationTimeFrom);
                    initTimeBox(operationDayNode.find('[name="startTime"]'), timeFrom, options.inputDisabled);

                    var endTime = $this.getValueOrDefault(day.timeTill, options.defaultOperationTimeTill);
                    initTimeBox(operationDayNode.find('[name="endTime"]'), endTime, options.inputDisabled);
                });

                container.find(".operationState").change(function() {
                    var checkbox = $(this);
                    var boxClass = options.checkedColorClass;
                    var timeControlDisabled = false;


					checkbox.parents(".dayContainer").find(".isActive").val(1);

                    if(!checkbox.prop("checked")) {
                        // disabled
                        boxClass = options.uncheckedColorClass;
                        timeControlDisabled = true;

						checkbox.parents(".dayContainer").find(".isActive").val(0);
                    }

                    checkbox.parents(".colorBox").removeClass(stateClasses.join(' ')).addClass(boxClass);
                    //checkbox.parents(".dayContainer").find(".operationTime").toggle(!timeControlDisabled);
                }).trigger("change");

                if(!options.inputDisabled) {
                    container.find(".colorBox").on("click", function() {
                        var checkbox = $(this).find(".operationState");
                        checkbox.prop("checked", !checkbox.prop('checked')).trigger("change");
                    });
                }
            }
        };

        return methods.init(opts);
    };
})(jQuery);


			 jQuery("#businessHoursContainer3").businessHours({

			 		operationTime: operationTime,
                    postInit:function(){
                         /*jQuery('.operationTimeFrom, .operationTimeTill').timepicker({
                            'timeFormat': 'H:i',
                            'step': 15
                            });*/
                    },

                    dayTmpl:'<div class="col-12 border-bottom pb-3 mb-3"><div class="dayContainer row"> <input type="hidden" class="isActive form-control" name="isActive" value="1"> <div class="weekday col-md-4 y-middle"></div>' +
                        '<div data-original-title="" class="colorBox col-md-4"><input type="checkbox" class="invisible operationState"><span class="off">Unavailable</span><span class="on">Available</span></div>' +
                        '' +
                        '<div class="operationDayTimeContaine col-md-4">' +
                        '<div class="input-group"><div class="operationTime w-100 input-group-prepend"><span class="input-group-addon input-group-text"><i class="fa fa-sun"></i></span><input type="text" name="startTime" class="startTime mini-time form-control operationTimeFrom " value=""></div></div>' +
                        '<div class="input-group"><div class="operationTime w-100 input-group input-group-prepend"><span class="input-group-addon input-group-text"><i class="fa fa-moon"></i></span><input type="text" name="endTime" class="endTime mini-time form-control operationTimeTill" value=""></div></div>' +
                        '</div></div></div>'
                });

			});


			</script>
<style>


.colorBox {    cursor: pointer;text-align: center;    line-height: 70px;    font-weight: 600;    border: 2px solid #888;}
.colorBox.WorkingDayState {    border: 2px solid #4E8059;    background-color: #8ade8f;}
.colorBox input { display:none; }
.colorBox.RestDayState .off { display:block; }
.colorBox.RestDayState .on { display:none; }
.colorBox.WorkingDayState .off { display:none; }
.colorBox.WorkingDayState .on { display:block; }
.colorBox.RestDayState {    border: 2px solid #7a1c44;    background-color: #de5962;}
.operationTime .mini-time {    padding: 3px;    font-size: 12px;    font-weight: normal;	text-align:center;}
.operationDayTimeContaine .form-control , .operationDayTimeContaine .input-group-text { border-radius:0px !important; }
.dayContainer .add-on {    padding: 4px 2px;}
.colorBoxLabel {    clear: both;    font-size: 12px;    font-weight: bold;}
.operationTime {    margin-top: 5px;}
.ui-timepicker-wrapper{overflow-y:auto;max-height:150px;width:6.5em;background:#fff;border:1px solid #ddd;-webkit-box-shadow:0 5px 10px rgba(0,0,0,.2);-moz-box-shadow:0 5px 10px rgba(0,0,0,.2);box-shadow:0 5px 10px rgba(0,0,0,.2);outline:0;z-index:10001;margin:0}.ui-timepicker-wrapper.ui-timepicker-with-duration{width:13em}.ui-timepicker-wrapper.ui-timepicker-with-duration.ui-timepicker-step-30,.ui-timepicker-wrapper.ui-timepicker-with-duration.ui-timepicker-step-60{width:11em}.ui-timepicker-list{margin:0;padding:0;list-style:none}.ui-timepicker-duration{margin-left:5px;color:#888}.ui-timepicker-list:hover .ui-timepicker-duration{color:#888}.ui-timepicker-list li{padding:3px 0 3px 5px;cursor:pointer;white-space:nowrap;color:#000;list-style:none;margin:0}.ui-timepicker-list:hover .ui-timepicker-selected{background:#fff;color:#000}li.ui-timepicker-selected,.ui-timepicker-list li:hover,.ui-timepicker-list .ui-timepicker-selected:hover{background:#1980EC;color:#fff}li.ui-timepicker-selected .ui-timepicker-duration,.ui-timepicker-list li:hover .ui-timepicker-duration{color:#ccc}.ui-timepicker-list li.ui-timepicker-disabled,.ui-timepicker-list li.ui-timepicker-disabled:hover,.ui-timepicker-list li.ui-timepicker-selected.ui-timepicker-disabled{color:#888;cursor:default}.ui-timepicker-list li.ui-timepicker-disabled:hover,.ui-timepicker-list li.ui-timepicker-selected.ui-timepicker-disabled{background:#f2f2f2}
 </style>

<div class="block-header mt-4">
<h3 class="block-header__title">Details</h3>
<div class="block-header__divider"></div>
</div>
<div class="row">
<div class="col-md-6 clearfix form-group" id="form-row-rapper-phone">


			<label class="">Contact Number</label>

			<div class="field_wrapper">

        <input type="input" name="custom[phone]" class="form-control " tabindex="12" value="" id="field-phone">


        </div></div><div class="col-md-6 clearfix form-group" id="form-row-rapper-daage">


			<label class="">Age</label>

			<div class="field_wrapper">


        		<select name="custom[daage]" class="form-control " tabindex="13" id="field-daage">


							<option value="18">18</option>
                    					<option value="19">19</option>
                    					<option value="20">20</option>
                    					<option value="21">21</option>
                    					<option value="22">22</option>
                    					<option value="23">23</option>
                    					<option value="24">24</option>
                    					<option value="25">25</option>
                    					<option value="26">26</option>
                    					<option value="27">27</option>
                    					<option value="28">28</option>
                    					<option value="29">29</option>
                    					<option value="30">30</option>
                    					<option value="31">31</option>
                    					<option value="32">32</option>
                    					<option value="33">33</option>
                    					<option value="34">34</option>
                    					<option value="35">35</option>
                    					<option value="36">36</option>
                    					<option value="37">37</option>
                    					<option value="38">38</option>
                    					<option value="39">39</option>
                    					<option value="40">40</option>
                    					<option value="41">41</option>
                    					<option value="42">42</option>
                    					<option value="43">43</option>
                    					<option value="44">44</option>
                    					<option value="45">45</option>
                    					<option value="46">46</option>
                    					<option value="47">47</option>
                    					<option value="48">48</option>
                    					<option value="49">49</option>
                    					<option value="50">50</option>
                    					<option value="51">51</option>
                    					<option value="52">52</option>
                    					<option value="53">53</option>
                    					<option value="54">54</option>
                    					<option value="55">55</option>
                    					<option value="56">56</option>
                    					<option value="57">57</option>
                    					<option value="58">58</option>
                    					<option value="59">59</option>
                    					<option value="60">60</option>
                    					<option value="61">61</option>
                    					<option value="62">62</option>
                    					<option value="63">63</option>
                    					<option value="64">64</option>
                    					<option value="65">65</option>
                    					<option value="66">66</option>
                    					<option value="67">67</option>
                    					<option value="68">68</option>
                    					<option value="69">69</option>
                    					<option value="70">70</option>
                    					<option value="71">71</option>
                    					<option value="72">72</option>
                    					<option value="73">73</option>
                    					<option value="74">74</option>
                    					<option value="75">75</option>
                    					<option value="76">76</option>
                    					<option value="77">77</option>
                    					<option value="78">78</option>
                    					<option value="79">79</option>
                    					<option value="80">80</option>
                    					<option value="81">81</option>
                    					<option value="82">82</option>
                    					<option value="83">83</option>
                    					<option value="84">84</option>
                    					<option value="85">85</option>
                    					<option value="86">86</option>
                    					<option value="87">87</option>
                    					<option value="88">88</option>
                    					<option value="89">89</option>
                    					<option value="90">90</option>
                    					<option value="91">91</option>
                    					<option value="92">92</option>
                    					<option value="93">93</option>
                    					<option value="94">94</option>
                    					<option value="95">95</option>
                    					<option value="96">96</option>
                    					<option value="97">97</option>
                    					<option value="98">98</option>
                    					<option value="99">99</option>
                    					<option value="100">100</option>
                    		</select>


        </div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeykey2"><label>Ethnicity</label>

					<div class="field_wrapper"><select name="tax[dathnicity]" class="form-control" tabindex="3" id="reg_field_tax_dathnicity"><option value='46'>African</option><option value='47'>American</option><option value='48'>Arab</option><option value='49'>Asian</option><option value='50'>Caucasian</option><option value='51'>Hispanic</option><option value='52'>Indian</option><option value='53'>Mixed</option><option value='54'>Native</option><option value='55'>Other</option></select></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeykey3"><label>Sexuality</label>

					<div class="field_wrapper"><select name="tax[dasexuality]" class="form-control" tabindex="4" id="reg_field_tax_dasexuality"><option value='41'>Straight</option><option value='42'>Gay</option><option value='43'>Lesbian</option><option value='44'>Bisexual</option><option value='45'>Other</option></select></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeykey4"><label>Gender</label>

					<div class="field_wrapper"><select name="tax[dagender]" class="form-control" tabindex="5" id="reg_field_tax_dagender"><option value='39'>Female Escort</option><option value='40'>Male Escort</option></select></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeymap-city"><label>Location</label>

					<div class="field_wrapper"><input type="text" name="custom[map-city]" value="" id="reg_field_map-city" tabindex="6" class="form-control "></div></div><div class="col-md-12 customfield customid-0 " style=''><div>


				 <div class="block-header mt-4">
<h3 class="block-header__title">What do I look like?</h3>
<div class="block-header__divider"></div>
</div>
				<div></div></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeykey6"><label>My Eyes</label>

					<div class="field_wrapper"><select name="tax[daeyes]" class="form-control" tabindex="8" id="reg_field_tax_daeyes"><option value='56'>Amber</option><option value='57'>Brown</option><option value='58'>Green</option><option value='59'>Blue</option><option value='60'>Gray</option><option value='61'>Hazel</option><option value='62'>Other</option></select></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeykey7"><label>My Hair</label>

					<div class="field_wrapper"><select name="tax[dahair]" class="form-control" tabindex="9" id="reg_field_tax_dahair"><option value='63'>Blond</option><option value='64'>Brown</option><option value='65'>Red</option><option value='66'>Black</option><option value='67'>Gray</option><option value='68'>Other</option></select></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeykey8"><label>My Body</label>

					<div class="field_wrapper"><select name="tax[dabody]" class="form-control" tabindex="10" id="reg_field_tax_dabody"><option value='69'>Slim</option><option value='70'>Average</option><option value='71'>A little plump</option><option value='72'>Big and lovely</option><option value='73'>Other</option></select></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeyheight"><label>My Height</label>

					<div class="field_wrapper"><input type="text" name="custom[height]" value="" id="reg_field_height" tabindex="11" class="form-control "></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeydresssize"><label>Dress Size</label>

					<div class="field_wrapper"><input type="text" name="custom[dresssize]" value="" id="reg_field_dresssize" tabindex="12" class="form-control "></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeybustsize"><label>Bust size</label>

					<div class="field_wrapper"><input type="text" name="custom[bustsize]" value="" id="reg_field_bustsize" tabindex="13" class="form-control "></div></div><div class="col-md-12 customfield customid-0 " style=''><div>


				 <div class="block-header mt-4">
<h3 class="block-header__title">My Habbits</h3>
<div class="block-header__divider"></div>
</div>
				<div></div></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeykey10"><label>Drinking</label>

					<div class="field_wrapper"><select name="tax[dadrink]" class="form-control" tabindex="15" id="reg_field_tax_dadrink"><option value='80'>Never</option><option value='81'>Rarely</option><option value='82'>Quit</option><option value='83'>Socially</option><option value='84'>Often</option><option value='85'>Very often</option></select></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeykey11"><label>Smoking</label>

					<div class="field_wrapper"><select name="tax[dasmoke]" class="form-control" tabindex="16" id="reg_field_tax_dasmoke"><option value='74'>Never</option><option value='75'>Rarely</option><option value='76'>Quit</option><option value='77'>Socially</option><option value='78'>Often</option><option value='79'>Very often</option></select></div></div><div class="col-md-6 clearfix customfield mb-4 customid-0 " style='' id="fkeywhatsapp"><label>WhatsApp Number</label>

					<div class="field_wrapper">  <div class="form-group ">
<input name="custom[whatsapp]" type="text" class="form-control required" id="whatsapp-input" value="">
</div>
</div></div><script> function ValidateCoreRegFields(){  }</script></div>




    </div>
    <div class="card-footer">


    <div class="d-flex justify-content-between p-2 text-600">

    <div><button data-ppt-btn="" class=" btn-system btn-back btn-lg scroll-top-quick" type="button" onclick="steps('3','back')"><i class="fa fa-arrow-left mr-2"></i> Back</button></div>

    <div>
    <button data-ppt-btn="" class=" btn-system btn-forward btn-lg scroll-top-quick text-600" type="button" onclick="steps('3','forward')">Next <i class="fa fa-arrow-right ml-2"></i> </button>


    <button data-ppt-btn="" class=" btn-secondary btn-block btn-lg text-600 btn-save" type="button">Save</button>


    </div>


    </div>

     </div>

    </div>

    </div>

    </div>


</div>





 <div class="row overflow-hidden mt-4 steps-box hide-mobile">


       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick active" onclick="steps('1','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">01</span> Basics
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick active" onclick="steps('2','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">02</span> Description
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('3','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">03</span> Details
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('4','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">04</span> Media
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('5','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">05</span> Finish
       </span>

      </div>

</div>



</section>







<section class="container px-0 add-block block4 ">

 <div class="ppt-add-listing-error"></div>

<div class="add-block-wrap">

    <div class="row no-gutters">

    <div class="col-lg-4 bg-primary hide-mobile position-relative overflow-hidden tipsidebar">

    <div class="bg-image" data-bg=""></div>

    <div class="card h-100 bg-none border-0">

        <div class="card-body">



        </div>

        <div class="card-footer bg-none">



        <div class="bg-white shadow text-dark mb-4 p-3 rounded-lg">


		<div class="text-700 mb-2"><i class="fa fa-info-circle mr-2"></i> Quick Tip</div>
		<p>Upload your best photos for maximum results. You can resize and crop images after you've uploaded them.</p>
        </div>




        <div class="ppt-add-listing-payment" style="display:none;">
            <div class="container px-0 mb-4">
                <div class="bg-black rounded p-3 text-light">
                    <div class="d-flex justify-content-between text-700">

                    <div>Total</div>

                    <div class="totalPriceDisplay"><span class="ppt-price">0</span></div>

                    </div>
                </div>
            </div>

        </div>


       <button data-ppt-btn="" class=" btn-secondary btn-block btn-lg text-600 btn-save" type="button">Save</button>

        </div>

    </div>



    </div>


    <div class="col-lg-8">

    <div class="card card-add-block mb-0"><div class="card-body">

    <div class="_title"><span class="title-number bg-secondary">04</span> Media</div>

    <div id="photo535047-globalWrapper">

<div class="block-header mt-4">
<h3 class="block-header__title">My Photos <span class="position-absolute bg-white px-3" style="right:10px;" id="photo535047-countbox"><span class="_left"></span><span class="opacity-5 text-500">/</span> <span class="_total"></span></span></h3>
<div class="block-header__divider"></div>
</div>

 <style>
 .custom-file-label::after {
    background-color: #343a40 !important;
    color: #fff !important;
	}
 </style>




<form id="photo535047-fileupload" action="http://escort.test/index.php" method="POST" enctype="multipart/form-data">



<div class="row">

    <div class="col-6 col-md-4 col-lg-3 photo535047new" id="addnew-photo">

        <div class="cardbox closed mb-0" onclick="jQuery('#photo535047add, .photo-extras, #addnew-photo').toggle();">

        <i class="fal fa-image-polaroid"></i>

        <div class="small">add new</div>

    	</div>

    </div>

    <div class="col" style="display:none;" id="photo535047add">

    <i class="fa fa-times float-right p-3" style="cursor:pointer;" onclick="jQuery('#photo535047add, .photo-extras, #addnew-photo').toggle();"></i>

        <div class="py-4 p-4 bg-light" id="dropzonephoto535047">

            <div class="d-flex">
            <i class="fa fa-3x hide-mobile text-dark fa-image-polaroid"></i>

            <div class="ml-md-5">


                <div class="custom-file">
            <input type="file" name="files[]" id="photo535047_upload_field" class="custom-file-input" multiple="">
            <label class="custom-file-label"><span class="hide-mobile">Add New Photo</span></label>
          </div>


            <div class="small mt-3 text-dark">Photos are set private until you go live. We support .jpg, .jpeg and .png images only.</div>

            </div>

            </div>

        </div>

      <div class="photo535047-fileupload-loading"></div>
      <div class="photo535047-fileupload-buttonbar"></div>

</div>




 <div class="col-md-12">

  <div id="photo535047-mediatablelist" class="files mt-4 row">






              </div><!-- end media table -->






    </div>
</div>

</form>

</div>


<form method="post" action="http://escort.test/index.php" target="core_delete_photo535047_attachment_iframe" name="core_delete_photo535047_attachment" id="core_delete_photo535047_attachment">
      <input type="hidden" name="core_delete_photo535047_attachment" value="gogo">
      <input type="hidden" id="attachement_idphoto535047" name="attachement_id" value="">
    </form>
    <iframe frameborder="0" style="display:none;" scrolling="auto" name="core_delete_photo535047_attachment_iframe" id="core_delete_photo535047_attachment_iframe"></iframe>

<script id="template-upload-photo535047" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
{% if (file.error) { %}
<div class="alert alert-danger">{%=file.error%}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
{% } else { %}
<div class="uploaditem template-upload notuploaded mx-3 w-100"><div class="row"><div class="col-md-9"><span class="fname">{%=file.name%}</span>
<progress class="progress progress-success progress-striped active w-100 mr-4 mb-4" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" value="0" max="100" style="height:15px !important;"></progress>
</div>
<div class="col-md-3 text-center mt-4">
{% if (!o.options.autoUpload) { %}
<span class="start"><button class="btn btn-system btn-md shadow-sm btn-sm "><i class="fa fa-check m-0 px-2"></i></button></span>
{% } %}
{% if (!i) { %}
<span class="cancel"><button class="btn btn-system btn-md shadow-sm btn-sm btndeleteme"><i class="fa fa-trash m-0 px-2"></i></button></span>
{% } %}
</div>
<div class="clearfix"></div>
</div></div>
{% } %}
</div>
{% } %}
</script>
<script id="template-download-photo535047" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
{% if (file.error) { %}
{% } else { %}
{% } %}
{% } %}
</script>

<button style="display:none" class="updatespaceleft" onclick="_spaceLeftphoto535047()"></button>
<script>


function StartAutoUploadphoto535047(){

	jQuery('#photo535047-mediatablelist .start').each(function(i, obj) {
		jQuery(obj).find('button').trigger('click').hide();
	});
}

jQuery(document).ready(function(){


	// CREATE DROP ZONE
	   var obj = jQuery("#dropzonephoto535047");
        obj.on('dragenter', function (e)
        {
            e.stopPropagation();
            e.preventDefault();

        });
        obj.on('dragover', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
        });
        obj.on('drop', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
        });
        obj.on('click', function (e)
        {

           //jQuery('#photo535047_upload_field').trigger('click');

        });

		// SPACE LEFT
		_spaceLeftphoto535047();



	// HANDLE FILE UPLOAD
    jQuery('#photo535047-fileupload').fileupload({

        url: 'http://escort.test/index.php',
		type: 'POST',
		paramName: 'core_attachments',

		maxNumberOfFiles: 20,

		uploadTemplateId: "template-upload-photo535047",
		downloadTemplateId:  "template-download-photo535047",

		formData: {  name: 'core_post_id', value: 0, type: "photo",    },

		change: function (e, data) {

				if (!(/\.(jpg|jpeg|png|svg)$/i).test(data.files[0].name)) {
                    alert("This file format is not supported. Please try a different file.");
                    return false;
                }


			setTimeout(function(){ StartAutoUploadphoto535047(); }, 500 );

         },

	    success: function(response) {

		//console.log(response);

		  if(typeof response['error'] == "undefined" ){

										jQuery('#SUBMISSION_FORM').append('<input type="hidden" class="form-control neweid" value="'+response[0]['pid']+'" name="eid" />');


					jQuery("#error_msg_reload_photo535047").show();
					jQuery("#dropzonephoto535047").hide();



						jQuery.ajax({
							type: "POST",
							url: ajax_site_url,
							data: {
								   action: "load_editlisting_form",
								   type: "photo",
								   eid: 0
							   },
							   success: function(response) {

																		 jQuery("#photo535047-globalWrapper").html(response);
									 									 	// avatars
										var a = jQuery(".bg-image");
										a.each(function (a) {
											if (jQuery(this).attr("data-bg")) jQuery(this).css("background-image", "url(" + jQuery(this).data("bg") + ")");
										});

							   },
							   error: function(e) {
								   console.log(e)
							   }
						   });




			} else {

			alert(response['error']);

			}

			},
			error: function(e) {
				console.log(e)
			}

	});


	jQuery('#photo535047-fileupload').bind('fileuploadadd', function (e, data) {

	});


	jQuery('#photo535047-fileupload').bind('fileuploaddestroy', function (e, data) {

		document.getElementById('attachement_idphoto535047').value= data.url;
		document.core_delete_photo535047_attachment.submit();
	});


});




var IsSetEdit = 0; var IsTotalLeftphoto535047 = 0;
jQuery(document).on("click",".processChangephoto535047", function (e) {

	var vid = jQuery(this).data("vid");
	var thisBox = jQuery('.vidbox-'+vid);

	if(!IsSetEdit){
	IsSetEdit = 1;
	jQuery('.vidbox-'+vid+' figure').hide();
	_imagephoto535047(jQuery(thisBox).data("divid"),jQuery(thisBox).data("src"), jQuery(thisBox).data("aid"), jQuery(thisBox).data("vid"));

	}else{
	IsSetEdit = 0;
	jQuery("#"+jQuery(thisBox).data("divid")).html('');
	jQuery('.vidbox-'+vid+' figure').show();
	}


});

jQuery(document).on("click",".processOrderphoto535047", function (e) {

jQuery(".processOrderphoto535047_show").toggle();

});

jQuery(document).on("click",".processPublishphoto535047", function (e) {

	var thisbo = jQuery(this);
	vid = jQuery(this).data('id');

	// CHECK FIRST
	_spaceLeftphoto535047();

	if(jQuery('.pub-'+vid).hasClass("btn-dark") && IsTotalLeftphoto535047 < 1){

	alert("You have reached your limit.");

	}else{


		if(jQuery('.pub-'+vid).hasClass("btn-success")){
			jQuery('.pub-'+vid).addClass("btn-dark").removeClass("btn-success").html("Go Live");
		}else{
			jQuery('.pub-'+vid).addClass("btn-success").removeClass("btn-dark").html("Live");
		}

		var postid = 0;

		if(postid == 0){
		postid = jQuery(".neweid").val();
		}

		jQuery.ajax({
			type: "POST",
			url: ajax_site_url,
			 dataType: 'json',
			data: {
				action: "ajax_media_publish",
				pid: postid,
				vid: vid,
				type: "photo",
			},
			success: function(response) {

				_spaceLeftphoto535047();

			},
			error: function(e) {
				console.log(e)
			}
		});

	}

});



function _spaceLeftphoto535047(){


	var eid = "0";
	if(jQuery("#neweid").length > 0){
		eid = jQuery("#neweid").val();
	}

	pakID = "";
	if(jQuery("#packageID").val() != ""){
	pakID = jQuery("#packageID").val();
	}
	//console.log(pakID+'<--');

   jQuery.ajax({
           type: "POST",
           url: 'http://escort.test/',
		   dataType: 'json',
   		data: {
            action: "ajax_get_image_space_used",
			pid: eid,
			packageid: pakID,
           },
           success: function(response) {

		   		if(eid == "0"){

				var total = jQuery(".vidbox-photo").length;

				//jQuery('#photo535047-countbox ._total').html(response.total);
				jQuery('#photo535047-countbox ._left').html(total);
				jQuery('#photo535047-countbox ._total').html(response.left);
				IsTotalLeftphoto535047 = response.left - response.published;


				}else{

				//jQuery('#photo535047-countbox ._total').html(response.total);
				jQuery('#photo535047-countbox ._left').html(response.published);
				jQuery('#photo535047-countbox ._total').html(response.left);
				IsTotalLeftphoto535047 = response.left - response.published;

				}

				if(IsTotalLeftphoto535047 < 1){

					jQuery('#dropzonephoto535047').remove();
					jQuery('#photo535047add').remove();
					jQuery('.photo535047new').remove();
				}




           },
           error: function(e) {

		   return 0;

           }
       });

}

jQuery(document).on("click",".processDeletephoto535047", function (e) {

	vid = jQuery(this).data('id');

	if(confirm("Are you sure?")) {


		var total = jQuery("#photo535047-countbox ._left").text();
		jQuery('#photo535047-countbox ._left').html(parseFloat(total)-1);


		jQuery.ajax({
			type: "POST",
			url: ajax_site_url,
			data: {
				action: "delete_file",
				pid: 0,
				aid: vid,
				stopc:1,
			},
			success: function(response) {

				 jQuery(".vidbox-"+vid).html('').removeClass('vidbox');

				 //_spaceVideoLeft();

			},
			error: function(e) {
				console.log(e)
			}
		});

	}

});

function _imagephoto535047sort(aid, oid){

		if(aid != ""){

				jQuery.ajax({
					type: "POST",
					url: ajax_site_url,
					data: {
						action: "set_media_order",
						pid: 0,
						aid: aid,
						order: oid,

					},
					success: function(response) {


					jQuery.ajax({
							type: "POST",
							url: ajax_site_url,
							data: {
								   action: "load_editlisting_form",
								   type: "photo",
								   eid: 0
							   },
							   success: function(response) {

									 jQuery("#photo535047-globalWrapper").html(response);

									 	// avatars
										var a = jQuery(".bg-image");
										a.each(function (a) {
											if (jQuery(this).attr("data-bg")) jQuery(this).css("background-image", "url(" + jQuery(this).data("bg") + ")");
										});

							   },
							   error: function(e) {
								   console.log(e)
							   }
						   });


					},
					error: function(e) {
						//console.log("error settings order "+e);
					}
	});
	}
}

function _imagephoto535047(divid, src, aid, vid){


	// Create Image
	if(jQuery('#'+divid).length > 0){
	var cropper = new Slim(document.getElementById(divid), {

				service: 'http://escort.test/index.php',
				download: false,
				remove: false,
				//instantEdit: true,
				push: true,

				willRemove: function(data, ready) {

					// GET ATTACHMENT ID
					thisaid = data.meta.aid;
					if (typeof jQuery("#"+divid).data('aid') !== 'undefined'){
					thisaid  = jQuery("#"+divid).attr("data-aid");
					}

					// AJAX

					 jQuery.ajax({
						   type: "POST",
						   url: 'http://escort.test/',
						data: {
							slim: "delete",
							eid: data.meta.eid,
							aid: thisaid,

						   },
						   success: function(response) {

						   }
					   });

					   ready(data);
				},

				label: "<i class='fal fa-3x btn-block fa-video opacity-5 mb-3'></i> <span class='small font-weight-bold opacity-5'>Video Cover Image</span>",
				buttonConfirmLabel: 'Ok',
				meta: {
					eid:'0',
					aid: aid,
					type: "image",
					vid: vid,
				}


			});

			// load in image
			if(src != "" && aid != "0"){
				cropper.load(src, { blockPush:true }, function(error, data) {
					// image load done!
				});

			}

			jQuery('.slim-btn-remove').hide();
		}

}

</script>



    <div id="video230474-globalWrapper">

<div class="block-header mt-4">
<h3 class="block-header__title">My Videos <span class="position-absolute bg-white px-3" style="right:10px;" id="video230474-countbox"><span class="_left"></span><span class="opacity-5 text-500">/</span> <span class="_total"></span></span></h3>
<div class="block-header__divider"></div>
</div>

 <style>
 .custom-file-label::after {
    background-color: #343a40 !important;
    color: #fff !important;
	}
 </style>




<form id="video230474-fileupload" action="http://escort.test/index.php" method="POST" enctype="multipart/form-data">



<div class="row">

    <div class="col-6 col-md-4 col-lg-3 video230474new" id="addnew-video">

        <div class="cardbox closed mb-0" onclick="noUserAccess();">

        <i class="fal fa-file-video"></i>

        <div class="small">add new</div>

    	</div>

    </div>

    <div class="col" style="display:none;" id="video230474add">

    <i class="fa fa-times float-right p-3" style="cursor:pointer;" onclick="jQuery('#video230474add, .video-extras, #addnew-video').toggle();"></i>

        <div class="py-4 p-4 bg-light" id="dropzonevideo230474">

            <div class="d-flex">
            <i class="fa fa-3x hide-mobile text-dark fa-file-video"></i>

            <div class="ml-md-5">


                <div class="custom-file">
            <input type="file" name="files[]" id="video230474_upload_field" class="custom-file-input" multiple="">
            <label class="custom-file-label"><span class="hide-mobile">Add New Video</span></label>
          </div>


            <div class="small mt-3 text-dark">Videos are set private until you go live. We support .flv and .mp4 videos only.</div>

            </div>

            </div>

        </div>

      <div class="video230474-fileupload-loading"></div>
      <div class="video230474-fileupload-buttonbar"></div>

</div>




 <div class="col-md-12">

  <div id="video230474-mediatablelist" class="files mt-4 row">






              </div><!-- end media table -->






    </div>
</div>

</form>

</div>


<form method="post" action="http://escort.test/index.php" target="core_delete_video230474_attachment_iframe" name="core_delete_video230474_attachment" id="core_delete_video230474_attachment">
      <input type="hidden" name="core_delete_video230474_attachment" value="gogo">
      <input type="hidden" id="attachement_idvideo230474" name="attachement_id" value="">
    </form>
    <iframe frameborder="0" style="display:none;" scrolling="auto" name="core_delete_video230474_attachment_iframe" id="core_delete_video230474_attachment_iframe"></iframe>

<script id="template-upload-video230474" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
{% if (file.error) { %}
<div class="alert alert-danger">{%=file.error%}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
{% } else { %}
<div class="uploaditem template-upload notuploaded mx-3 w-100"><div class="row"><div class="col-md-9"><span class="fname">{%=file.name%}</span>
<progress class="progress progress-success progress-striped active w-100 mr-4 mb-4" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" value="0" max="100" style="height:15px !important;"></progress>
</div>
<div class="col-md-3 text-center mt-4">
{% if (!o.options.autoUpload) { %}
<span class="start"><button class="btn btn-system btn-md shadow-sm btn-sm "><i class="fa fa-check m-0 px-2"></i></button></span>
{% } %}
{% if (!i) { %}
<span class="cancel"><button class="btn btn-system btn-md shadow-sm btn-sm btndeleteme"><i class="fa fa-trash m-0 px-2"></i></button></span>
{% } %}
</div>
<div class="clearfix"></div>
</div></div>
{% } %}
</div>
{% } %}
</script>
<script id="template-download-video230474" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
{% if (file.error) { %}
{% } else { %}
{% } %}
{% } %}
</script>

<button style="display:none" class="updatespaceleft" onclick="_spaceLeftvideo230474()"></button>
<script>


function StartAutoUploadvideo230474(){

	jQuery('#video230474-mediatablelist .start').each(function(i, obj) {
		jQuery(obj).find('button').trigger('click').hide();
	});
}

jQuery(document).ready(function(){


	// CREATE DROP ZONE
	   var obj = jQuery("#dropzonevideo230474");
        obj.on('dragenter', function (e)
        {
            e.stopPropagation();
            e.preventDefault();

        });
        obj.on('dragover', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
        });
        obj.on('drop', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
        });
        obj.on('click', function (e)
        {

           //jQuery('#video230474_upload_field').trigger('click');

        });

		// SPACE LEFT
		_spaceLeftvideo230474();



	// HANDLE FILE UPLOAD
    jQuery('#video230474-fileupload').fileupload({

        url: 'http://escort.test/index.php',
		type: 'POST',
		paramName: 'core_attachments',

		maxNumberOfFiles: 20,

		uploadTemplateId: "template-upload-video230474",
		downloadTemplateId:  "template-download-video230474",

		formData: {  name: 'core_post_id', value: 0, type: "video",    },

		change: function (e, data) {

				if (!(/\.(flv|mp4)$/i).test(data.files[0].name)) {
                    alert("This file format is not supported. Please try a different file.");
                    return false;
                }


			setTimeout(function(){ StartAutoUploadvideo230474(); }, 500 );

         },

	    success: function(response) {

		//console.log(response);

		  if(typeof response['error'] == "undefined" ){

										jQuery('#SUBMISSION_FORM').append('<input type="hidden" class="form-control neweid" value="'+response[0]['pid']+'" name="eid" />');


					jQuery("#error_msg_reload_video230474").show();
					jQuery("#dropzonevideo230474").hide();



						jQuery.ajax({
							type: "POST",
							url: ajax_site_url,
							data: {
								   action: "load_editlisting_form",
								   type: "video",
								   eid: 0
							   },
							   success: function(response) {

																		 jQuery("#video230474-globalWrapper").html(response);
									 									 	// avatars
										var a = jQuery(".bg-image");
										a.each(function (a) {
											if (jQuery(this).attr("data-bg")) jQuery(this).css("background-image", "url(" + jQuery(this).data("bg") + ")");
										});

							   },
							   error: function(e) {
								   console.log(e)
							   }
						   });




			} else {

			alert(response['error']);

			}

			},
			error: function(e) {
				console.log(e)
			}

	});


	jQuery('#video230474-fileupload').bind('fileuploadadd', function (e, data) {

	});


	jQuery('#video230474-fileupload').bind('fileuploaddestroy', function (e, data) {

		document.getElementById('attachement_idvideo230474').value= data.url;
		document.core_delete_video230474_attachment.submit();
	});


});




var IsSetEdit = 0; var IsTotalLeftvideo230474 = 0;
jQuery(document).on("click",".processChangevideo230474", function (e) {

	var vid = jQuery(this).data("vid");
	var thisBox = jQuery('.vidbox-'+vid);

	if(!IsSetEdit){
	IsSetEdit = 1;
	jQuery('.vidbox-'+vid+' figure').hide();
	_imagevideo230474(jQuery(thisBox).data("divid"),jQuery(thisBox).data("src"), jQuery(thisBox).data("aid"), jQuery(thisBox).data("vid"));

	}else{
	IsSetEdit = 0;
	jQuery("#"+jQuery(thisBox).data("divid")).html('');
	jQuery('.vidbox-'+vid+' figure').show();
	}


});

jQuery(document).on("click",".processOrdervideo230474", function (e) {

jQuery(".processOrdervideo230474_show").toggle();

});

jQuery(document).on("click",".processPublishvideo230474", function (e) {

	var thisbo = jQuery(this);
	vid = jQuery(this).data('id');

	// CHECK FIRST
	_spaceLeftvideo230474();

	if(jQuery('.pub-'+vid).hasClass("btn-dark") && IsTotalLeftvideo230474 < 1){

	alert("You have reached your limit.");

	}else{


		if(jQuery('.pub-'+vid).hasClass("btn-success")){
			jQuery('.pub-'+vid).addClass("btn-dark").removeClass("btn-success").html("Go Live");
		}else{
			jQuery('.pub-'+vid).addClass("btn-success").removeClass("btn-dark").html("Live");
		}

		var postid = 0;

		if(postid == 0){
		postid = jQuery(".neweid").val();
		}

		jQuery.ajax({
			type: "POST",
			url: ajax_site_url,
			 dataType: 'json',
			data: {
				action: "ajax_media_publish",
				pid: postid,
				vid: vid,
				type: "video",
			},
			success: function(response) {

				_spaceLeftvideo230474();

			},
			error: function(e) {
				console.log(e)
			}
		});

	}

});



function _spaceLeftvideo230474(){


	var eid = "0";
	if(jQuery("#neweid").length > 0){
		eid = jQuery("#neweid").val();
	}

	pakID = "";
	if(jQuery("#packageID").val() != ""){
	pakID = jQuery("#packageID").val();
	}
	//console.log(pakID+'<--');

   jQuery.ajax({
           type: "POST",
           url: 'http://escort.test/',
		   dataType: 'json',
   		data: {
            action: "ajax_get_video_space_used",
			pid: eid,
			packageid: pakID,
           },
           success: function(response) {

		   		if(eid == "0"){

				var total = jQuery(".vidbox-video").length;

				//jQuery('#video230474-countbox ._total').html(response.total);
				jQuery('#video230474-countbox ._left').html(total);
				jQuery('#video230474-countbox ._total').html(response.left);
				IsTotalLeftvideo230474 = response.left - response.published;


				}else{

				//jQuery('#video230474-countbox ._total').html(response.total);
				jQuery('#video230474-countbox ._left').html(response.published);
				jQuery('#video230474-countbox ._total').html(response.left);
				IsTotalLeftvideo230474 = response.left - response.published;

				}

				if(IsTotalLeftvideo230474 < 1){

					jQuery('#dropzonevideo230474').remove();
					jQuery('#video230474add').remove();
					jQuery('.video230474new').remove();
				}




           },
           error: function(e) {

		   return 0;

           }
       });

}

jQuery(document).on("click",".processDeletevideo230474", function (e) {

	vid = jQuery(this).data('id');

	if(confirm("Are you sure?")) {


		var total = jQuery("#video230474-countbox ._left").text();
		jQuery('#video230474-countbox ._left').html(parseFloat(total)-1);


		jQuery.ajax({
			type: "POST",
			url: ajax_site_url,
			data: {
				action: "delete_file",
				pid: 0,
				aid: vid,
				stopc:1,
			},
			success: function(response) {

				 jQuery(".vidbox-"+vid).html('').removeClass('vidbox');

				 //_spaceVideoLeft();

			},
			error: function(e) {
				console.log(e)
			}
		});

	}

});

function _imagevideo230474sort(aid, oid){

		if(aid != ""){

				jQuery.ajax({
					type: "POST",
					url: ajax_site_url,
					data: {
						action: "set_media_order",
						pid: 0,
						aid: aid,
						order: oid,

					},
					success: function(response) {


					jQuery.ajax({
							type: "POST",
							url: ajax_site_url,
							data: {
								   action: "load_editlisting_form",
								   type: "video",
								   eid: 0
							   },
							   success: function(response) {

									 jQuery("#video230474-globalWrapper").html(response);

									 	// avatars
										var a = jQuery(".bg-image");
										a.each(function (a) {
											if (jQuery(this).attr("data-bg")) jQuery(this).css("background-image", "url(" + jQuery(this).data("bg") + ")");
										});

							   },
							   error: function(e) {
								   console.log(e)
							   }
						   });


					},
					error: function(e) {
						//console.log("error settings order "+e);
					}
	});
	}
}

function _imagevideo230474(divid, src, aid, vid){


	// Create Image
	if(jQuery('#'+divid).length > 0){
	var cropper = new Slim(document.getElementById(divid), {

				service: 'http://escort.test/index.php',
				download: false,
				remove: false,
				//instantEdit: true,
				push: true,

				willRemove: function(data, ready) {

					// GET ATTACHMENT ID
					thisaid = data.meta.aid;
					if (typeof jQuery("#"+divid).data('aid') !== 'undefined'){
					thisaid  = jQuery("#"+divid).attr("data-aid");
					}

					// AJAX

					 jQuery.ajax({
						   type: "POST",
						   url: 'http://escort.test/',
						data: {
							slim: "delete",
							eid: data.meta.eid,
							aid: thisaid,

						   },
						   success: function(response) {

						   }
					   });

					   ready(data);
				},

				label: "<i class='fal fa-3x btn-block fa-video opacity-5 mb-3'></i> <span class='small font-weight-bold opacity-5'>Video Cover Image</span>",
				buttonConfirmLabel: 'Ok',
				meta: {
					eid:'0',
					aid: aid,
					type: "image_video",
					vid: vid,
				}


			});

			// load in image
			if(src != "" && aid != "0"){
				cropper.load(src, { blockPush:true }, function(error, data) {
					// image load done!
				});

			}

			jQuery('.slim-btn-remove').hide();
		}

}

</script>











    <div id="audio396626-globalWrapper">

<div class="block-header mt-4">
<h3 class="block-header__title">My Audio Files <span class="position-absolute bg-white px-3" style="right:10px;" id="audio396626-countbox"><span class="_left"></span><span class="opacity-5 text-500">/</span> <span class="_total"></span></span></h3>
<div class="block-header__divider"></div>
</div>

 <style>
 .custom-file-label::after {
    background-color: #343a40 !important;
    color: #fff !important;
	}
 </style>




<form id="audio396626-fileupload" action="http://escort.test/index.php" method="POST" enctype="multipart/form-data">



<div class="row">

    <div class="col-6 col-md-4 col-lg-3 audio396626new" id="addnew-audio">

        <div class="cardbox closed mb-0" onclick="noUserAccess();">

        <i class="fal fa-file-audio"></i>

        <div class="small">add new</div>

    	</div>

    </div>

    <div class="col" style="display:none;" id="audio396626add">

    <i class="fa fa-times float-right p-3" style="cursor:pointer;" onclick="jQuery('#audio396626add, .audio-extras, #addnew-audio').toggle();"></i>

        <div class="py-4 p-4 bg-light" id="dropzoneaudio396626">

            <div class="d-flex">
            <i class="fa fa-3x hide-mobile text-dark fa-file-audio"></i>

            <div class="ml-md-5">


                <div class="custom-file">
            <input type="file" name="files[]" id="audio396626_upload_field" class="custom-file-input" multiple="">
            <label class="custom-file-label"><span class="hide-mobile">Add Music File</span></label>
          </div>


            <div class="small mt-3 text-dark">Music files are set private until you go live. We support .mp3 and .mpeg files only.</div>

            </div>

            </div>

        </div>

      <div class="audio396626-fileupload-loading"></div>
      <div class="audio396626-fileupload-buttonbar"></div>

</div>




 <div class="col-md-12">

  <div id="audio396626-mediatablelist" class="files mt-4 row">






              </div><!-- end media table -->






    </div>
</div>

</form>

</div>


<form method="post" action="http://escort.test/index.php" target="core_delete_audio396626_attachment_iframe" name="core_delete_audio396626_attachment" id="core_delete_audio396626_attachment">
      <input type="hidden" name="core_delete_audio396626_attachment" value="gogo">
      <input type="hidden" id="attachement_idaudio396626" name="attachement_id" value="">
    </form>
    <iframe frameborder="0" style="display:none;" scrolling="auto" name="core_delete_audio396626_attachment_iframe" id="core_delete_audio396626_attachment_iframe"></iframe>

<script id="template-upload-audio396626" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
{% if (file.error) { %}
<div class="alert alert-danger">{%=file.error%}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button></div>
{% } else { %}
<div class="uploaditem template-upload notuploaded mx-3 w-100"><div class="row"><div class="col-md-9"><span class="fname">{%=file.name%}</span>
<progress class="progress progress-success progress-striped active w-100 mr-4 mb-4" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" value="0" max="100" style="height:15px !important;"></progress>
</div>
<div class="col-md-3 text-center mt-4">
{% if (!o.options.autoUpload) { %}
<span class="start"><button class="btn btn-system btn-md shadow-sm btn-sm "><i class="fa fa-check m-0 px-2"></i></button></span>
{% } %}
{% if (!i) { %}
<span class="cancel"><button class="btn btn-system btn-md shadow-sm btn-sm btndeleteme"><i class="fa fa-trash m-0 px-2"></i></button></span>
{% } %}
</div>
<div class="clearfix"></div>
</div></div>
{% } %}
</div>
{% } %}
</script>
<script id="template-download-audio396626" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
{% if (file.error) { %}
{% } else { %}
{% } %}
{% } %}
</script>

<button style="display:none" class="updatespaceleft" onclick="_spaceLeftaudio396626()"></button>
<script>


function StartAutoUploadaudio396626(){

	jQuery('#audio396626-mediatablelist .start').each(function(i, obj) {
		jQuery(obj).find('button').trigger('click').hide();
	});
}

jQuery(document).ready(function(){


	// CREATE DROP ZONE
	   var obj = jQuery("#dropzoneaudio396626");
        obj.on('dragenter', function (e)
        {
            e.stopPropagation();
            e.preventDefault();

        });
        obj.on('dragover', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
        });
        obj.on('drop', function (e)
        {
            e.stopPropagation();
            e.preventDefault();
        });
        obj.on('click', function (e)
        {

           //jQuery('#audio396626_upload_field').trigger('click');

        });

		// SPACE LEFT
		_spaceLeftaudio396626();



	// HANDLE FILE UPLOAD
    jQuery('#audio396626-fileupload').fileupload({

        url: 'http://escort.test/index.php',
		type: 'POST',
		paramName: 'core_attachments',

		maxNumberOfFiles: 20,

		uploadTemplateId: "template-upload-audio396626",
		downloadTemplateId:  "template-download-audio396626",

		formData: {  name: 'core_post_id', value: 0, type: "audio",    },

		change: function (e, data) {

				if (!(/\.(mp3|mpeg)$/i).test(data.files[0].name)) {
                    alert("This file format is not supported. Please try a different file.");
                    return false;
                }


			setTimeout(function(){ StartAutoUploadaudio396626(); }, 500 );

         },

	    success: function(response) {

		//console.log(response);

		  if(typeof response['error'] == "undefined" ){

										jQuery('#SUBMISSION_FORM').append('<input type="hidden" class="form-control neweid" value="'+response[0]['pid']+'" name="eid" />');


					jQuery("#error_msg_reload_audio396626").show();
					jQuery("#dropzoneaudio396626").hide();



						jQuery.ajax({
							type: "POST",
							url: ajax_site_url,
							data: {
								   action: "load_editlisting_form",
								   type: "audio",
								   eid: 0
							   },
							   success: function(response) {

																		 jQuery("#audio396626-globalWrapper").html(response);
									 									 	// avatars
										var a = jQuery(".bg-image");
										a.each(function (a) {
											if (jQuery(this).attr("data-bg")) jQuery(this).css("background-image", "url(" + jQuery(this).data("bg") + ")");
										});

							   },
							   error: function(e) {
								   console.log(e)
							   }
						   });




			} else {

			alert(response['error']);

			}

			},
			error: function(e) {
				console.log(e)
			}

	});


	jQuery('#audio396626-fileupload').bind('fileuploadadd', function (e, data) {

	});


	jQuery('#audio396626-fileupload').bind('fileuploaddestroy', function (e, data) {

		document.getElementById('attachement_idaudio396626').value= data.url;
		document.core_delete_audio396626_attachment.submit();
	});


});




var IsSetEdit = 0; var IsTotalLeftaudio396626 = 0;
jQuery(document).on("click",".processChangeaudio396626", function (e) {

	var vid = jQuery(this).data("vid");
	var thisBox = jQuery('.vidbox-'+vid);

	if(!IsSetEdit){
	IsSetEdit = 1;
	jQuery('.vidbox-'+vid+' figure').hide();
	_imageaudio396626(jQuery(thisBox).data("divid"),jQuery(thisBox).data("src"), jQuery(thisBox).data("aid"), jQuery(thisBox).data("vid"));

	}else{
	IsSetEdit = 0;
	jQuery("#"+jQuery(thisBox).data("divid")).html('');
	jQuery('.vidbox-'+vid+' figure').show();
	}


});

jQuery(document).on("click",".processOrderaudio396626", function (e) {

jQuery(".processOrderaudio396626_show").toggle();

});

jQuery(document).on("click",".processPublishaudio396626", function (e) {

	var thisbo = jQuery(this);
	vid = jQuery(this).data('id');

	// CHECK FIRST
	_spaceLeftaudio396626();

	if(jQuery('.pub-'+vid).hasClass("btn-dark") && IsTotalLeftaudio396626 < 1){

	alert("You have reached your limit.");

	}else{


		if(jQuery('.pub-'+vid).hasClass("btn-success")){
			jQuery('.pub-'+vid).addClass("btn-dark").removeClass("btn-success").html("Go Live");
		}else{
			jQuery('.pub-'+vid).addClass("btn-success").removeClass("btn-dark").html("Live");
		}

		var postid = 0;

		if(postid == 0){
		postid = jQuery(".neweid").val();
		}

		jQuery.ajax({
			type: "POST",
			url: ajax_site_url,
			 dataType: 'json',
			data: {
				action: "ajax_media_publish",
				pid: postid,
				vid: vid,
				type: "audio",
			},
			success: function(response) {

				_spaceLeftaudio396626();

			},
			error: function(e) {
				console.log(e)
			}
		});

	}

});



function _spaceLeftaudio396626(){


	var eid = "0";
	if(jQuery("#neweid").length > 0){
		eid = jQuery("#neweid").val();
	}

	pakID = "";
	if(jQuery("#packageID").val() != ""){
	pakID = jQuery("#packageID").val();
	}
	//console.log(pakID+'<--');

   jQuery.ajax({
           type: "POST",
           url: 'http://escort.test/',
		   dataType: 'json',
   		data: {
            action: "ajax_get_music_space_used",
			pid: eid,
			packageid: pakID,
           },
           success: function(response) {

		   		if(eid == "0"){

				var total = jQuery(".vidbox-audio").length;

				//jQuery('#audio396626-countbox ._total').html(response.total);
				jQuery('#audio396626-countbox ._left').html(total);
				jQuery('#audio396626-countbox ._total').html(response.left);
				IsTotalLeftaudio396626 = response.left - response.published;


				}else{

				//jQuery('#audio396626-countbox ._total').html(response.total);
				jQuery('#audio396626-countbox ._left').html(response.published);
				jQuery('#audio396626-countbox ._total').html(response.left);
				IsTotalLeftaudio396626 = response.left - response.published;

				}

				if(IsTotalLeftaudio396626 < 1){

					jQuery('#dropzoneaudio396626').remove();
					jQuery('#audio396626add').remove();
					jQuery('.audio396626new').remove();
				}




           },
           error: function(e) {

		   return 0;

           }
       });

}

jQuery(document).on("click",".processDeleteaudio396626", function (e) {

	vid = jQuery(this).data('id');

	if(confirm("Are you sure?")) {


		var total = jQuery("#audio396626-countbox ._left").text();
		jQuery('#audio396626-countbox ._left').html(parseFloat(total)-1);


		jQuery.ajax({
			type: "POST",
			url: ajax_site_url,
			data: {
				action: "delete_file",
				pid: 0,
				aid: vid,
				stopc:1,
			},
			success: function(response) {

				 jQuery(".vidbox-"+vid).html('').removeClass('vidbox');

				 //_spaceVideoLeft();

			},
			error: function(e) {
				console.log(e)
			}
		});

	}

});

function _imageaudio396626sort(aid, oid){

		if(aid != ""){

				jQuery.ajax({
					type: "POST",
					url: ajax_site_url,
					data: {
						action: "set_media_order",
						pid: 0,
						aid: aid,
						order: oid,

					},
					success: function(response) {


					jQuery.ajax({
							type: "POST",
							url: ajax_site_url,
							data: {
								   action: "load_editlisting_form",
								   type: "audio",
								   eid: 0
							   },
							   success: function(response) {

									 jQuery("#audio396626-globalWrapper").html(response);

									 	// avatars
										var a = jQuery(".bg-image");
										a.each(function (a) {
											if (jQuery(this).attr("data-bg")) jQuery(this).css("background-image", "url(" + jQuery(this).data("bg") + ")");
										});

							   },
							   error: function(e) {
								   console.log(e)
							   }
						   });


					},
					error: function(e) {
						//console.log("error settings order "+e);
					}
	});
	}
}

function _imageaudio396626(divid, src, aid, vid){


	// Create Image
	if(jQuery('#'+divid).length > 0){
	var cropper = new Slim(document.getElementById(divid), {

				service: 'http://escort.test/index.php',
				download: false,
				remove: false,
				//instantEdit: true,
				push: true,

				willRemove: function(data, ready) {

					// GET ATTACHMENT ID
					thisaid = data.meta.aid;
					if (typeof jQuery("#"+divid).data('aid') !== 'undefined'){
					thisaid  = jQuery("#"+divid).attr("data-aid");
					}

					// AJAX

					 jQuery.ajax({
						   type: "POST",
						   url: 'http://escort.test/',
						data: {
							slim: "delete",
							eid: data.meta.eid,
							aid: thisaid,

						   },
						   success: function(response) {

						   }
					   });

					   ready(data);
				},

				label: "<i class='fal fa-3x btn-block fa-video opacity-5 mb-3'></i> <span class='small font-weight-bold opacity-5'>Video Cover Image</span>",
				buttonConfirmLabel: 'Ok',
				meta: {
					eid:'0',
					aid: aid,
					type: "image_music",
					vid: vid,
				}


			});

			// load in image
			if(src != "" && aid != "0"){
				cropper.load(src, { blockPush:true }, function(error, data) {
					// image load done!
				});

			}

			jQuery('.slim-btn-remove').hide();
		}

}

</script>




    </div>
    <div class="card-footer">


    <div class="d-flex justify-content-between p-2 text-600">

    <div><button data-ppt-btn="" class=" btn-system btn-back btn-lg scroll-top-quick" type="button" onclick="steps('4','back')"><i class="fa fa-arrow-left mr-2"></i> Back</button></div>

    <div>
    <button data-ppt-btn="" class=" btn-system btn-forward btn-lg scroll-top-quick text-600" type="button" onclick="steps('4','forward')">Next <i class="fa fa-arrow-right ml-2"></i> </button>


    <button data-ppt-btn="" class=" btn-secondary btn-block btn-lg text-600 btn-save" type="button">Save</button>


    </div>


    </div>

     </div>

    </div>

    </div>

    </div>


</div>





 <div class="row overflow-hidden mt-4 steps-box hide-mobile">


       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick active" onclick="steps('1','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">01</span> Basics
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick active" onclick="steps('2','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">02</span> Description
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick active" onclick="steps('3','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">03</span> Details
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('4','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">04</span> Media
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('5','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">05</span> Finish
       </span>

      </div>

</div>



</section>







<section class="container px-0 add-block block5 ">

 <div class="ppt-add-listing-error"></div>

<div class="add-block-wrap">

    <div class="row no-gutters">

    <div class="col-lg-4 bg-primary hide-mobile position-relative overflow-hidden tipsidebar">

    <div class="bg-image" data-bg=""></div>

    <div class="card h-100 bg-none border-0">

        <div class="card-body">



        </div>

        <div class="card-footer bg-none">




        <div class="ppt-add-listing-payment" style="display:none;">
            <div class="container px-0 mb-4">
                <div class="bg-black rounded p-3 text-light">
                    <div class="d-flex justify-content-between text-700">

                    <div>Total</div>

                    <div class="totalPriceDisplay"><span class="ppt-price">0</span></div>

                    </div>
                </div>
            </div>

        </div>


       <button data-ppt-btn="" class=" btn-secondary btn-block btn-lg text-600 btn-save" type="button">Save</button>

        </div>

    </div>



    </div>


    <div class="col-lg-8">

    <div class="card card-add-block mb-0"><div class="card-body">

    <div class="_title"><span class="title-number bg-secondary">05</span> Finish</div>


<div class="block-header mt-4">
<h3 class="block-header__title">New Account</h3>
<div class="block-header__divider"></div>
</div>

<div class="my-4">

<label>Create a username for your account. <span class="text-danger">*</span>

<div class="badge_tooltip" data-direction="top" style="display:inline-block">
	<div class="badge_tooltip__initiator">
   <i class="fal fa-info-circle" style="color:#000000"></i>
   </div>
    <div class="badge_tooltip__item" style="width:300px;">
     Your unique account name. Must be 3 to 10 characters and can include lowercase letters, numbers, and hyphens. Choose wisely - this can only be changed once after signup.     </div>
</div>

</label>

<div class="usernamevalid" data-valid=""></div></div>

<div class="position-relative">
<input type="text" name="myusername" class="form-control big val-nospaces" value="" data-key="username" maxlength="10">

</div>

<div id="ajax-username"></div>


</div>


<div class="row">

<div class="col-md-6 mobile-mb-2">
<label>Password <span class="text-danger">*</span> </label>
<input type="text" name="mypass" class="form-control big val-nospaces" data-key="mypass" value="" maxlength="20">


</div>

<div class="col-md-6 mobile-mb-2">

<label>Repeat Password <span class="text-danger">*</span> </label>
<input type="text" name="mypass1" class="form-control big val-nospaces" data-key="mypass1" value="" maxlength="20">


</div>

</div>


<label>Which email can we contact you on? <span class="text-danger">*</span> </label>

<div class="position-relative">

<input type="text" name="myemail" class="form-control big myemail mb-2" value="" maxlength="150">

</div>


<script>
function ChekME(div){
	if (jQuery(div+'check').is(':checked')) {
		jQuery(div+'add').val(1);
	}else{
		jQuery(div+'add').val(0);
	}

	updateTotal();

}
</script>

<div class="block-header mt-4" id="upgradestitle">
<h3 class="block-header__title">Upgrades</h3>
<div class="block-header__divider"></div>
</div>


<div class="py-3 border-bottom p-3 mb-4 rounded-lg shadow-sm border">

    <div class="d-flex justify-content-between">

    <div>
        <div class="d-flex">

        <div>


        <label class="custom-control custom-checkbox exta1a">
        <input type="checkbox" value="1" class="custom-control-input" id="addon_featuredcheck" onclick="ChekME('#addon_featured');">


        <input data-amount="10" type="hidden" name="addon_featured" id="addon_featuredadd" value="0" class="form-control">

        <span class="custom-control-label">&nbsp;</span> </label>


        </div>
                <div style="font-size: 30px; margin: -5px 20px;" class="hide-mobile">&#x1F642;</div>
                <div class="ml-3">

        <div class="text-600">Featured</div>

        </div>

        </div>
    </div>


        <div class="text-700 h4">

          <span class="ppt-price"><i class='fab fa-bitcoin'>&nbsp;</i>10</span>


               <div class="badge_tooltip text-center float-right ml-3" data-direction="top">
                <div class="badge_tooltip__initiator"> <i class="fal fa-clock"></i></div>
                <div class="badge_tooltip__item"> This addon will remain active for 30 days.</div>
       </div>


     </div>


</div>


<div class="opacity-5 pak-desc">Featured ads are highlighted in search results and shown 10x more often than standard ads.</div>



</div>


<div class="py-3 border-bottom p-3 mb-4 rounded-lg shadow-sm border">

    <div class="d-flex justify-content-between">

    <div>
        <div class="d-flex">

        <div>


        <label class="custom-control custom-checkbox exta1a">
        <input type="checkbox" value="1" class="custom-control-input" id="addon_sponsoredcheck" onclick="ChekME('#addon_sponsored');">


        <input data-amount="30" type="hidden" name="addon_sponsored" id="addon_sponsoredadd" value="0" class="form-control">

        <span class="custom-control-label">&nbsp;</span> </label>


        </div>
                <div style="font-size: 30px; margin: -5px 20px;" class="hide-mobile">&#x1F917;</div>
                <div class="ml-3">

        <div class="text-600">Sponsored</div>

        </div>

        </div>
    </div>


        <div class="text-700 h4">

          <span class="ppt-price"><i class='fab fa-bitcoin'>&nbsp;</i>30</span>


               <div class="badge_tooltip text-center float-right ml-3" data-direction="top">
                <div class="badge_tooltip__initiator"> <i class="fal fa-clock"></i></div>
                <div class="badge_tooltip__item"> This addon will remain active for 30 days.</div>
       </div>


     </div>


</div>


<div class="opacity-5 pak-desc">Sponsored ads are shown on rotation at the top of the search results page.</div>



</div>


<div class="py-3 border-bottom p-3 mb-4 rounded-lg shadow-sm border">

    <div class="d-flex justify-content-between">

    <div>
        <div class="d-flex">

        <div>


        <label class="custom-control custom-checkbox exta1a">
        <input type="checkbox" value="1" class="custom-control-input" id="addon_homepagecheck" onclick="ChekME('#addon_homepage');">


        <input data-amount="50" type="hidden" name="addon_homepage" id="addon_homepageadd" value="0" class="form-control">

        <span class="custom-control-label">&nbsp;</span> </label>


        </div>
                <div style="font-size: 30px; margin: -5px 20px;" class="hide-mobile">&#x1F60E;</div>
                <div class="ml-3">

        <div class="text-600">Homepage</div>

        </div>

        </div>
    </div>


        <div class="text-700 h4">

          <span class="ppt-price"><i class='fab fa-bitcoin'>&nbsp;</i>50</span>


               <div class="badge_tooltip text-center float-right ml-3" data-direction="top">
                <div class="badge_tooltip__initiator"> <i class="fal fa-clock"></i></div>
                <div class="badge_tooltip__item"> This addon will remain active for 30 days.</div>
       </div>


     </div>


</div>


<div class="opacity-5 pak-desc">Have your ad appear on our homepage and seen by thousands of people.</div>



</div>


    </div>
    <div class="card-footer">


    <div class="d-flex justify-content-between p-2 text-600">

    <div><button data-ppt-btn="" class=" btn-system btn-back btn-lg scroll-top-quick" type="button" onclick="steps('5','back')"><i class="fa fa-arrow-left mr-2"></i> Back</button></div>

    <div>
    <button data-ppt-btn="" class=" btn-system btn-forward btn-lg scroll-top-quick text-600" type="button" onclick="steps('5','forward')">Next <i class="fa fa-arrow-right ml-2"></i> </button>


    <button data-ppt-btn="" class=" btn-secondary btn-block btn-lg text-600 btn-save" type="button">Save</button>


    </div>


    </div>

     </div>

    </div>

    </div>

    </div>


</section></div>





 <div class="row overflow-hidden mt-4 steps-box hide-mobile">


       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick active" onclick="steps('1','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">01</span> Basics
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick active" onclick="steps('2','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">02</span> Description
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick active" onclick="steps('3','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">03</span> Details
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick active" onclick="steps('4','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">04</span> Media
       </span>

      </div>



       <div class="col-md-5ths col-lg-5ths mobile-mb-2 scroll-top-quick " onclick="steps('5','this')">

       <span class="number-box px-xl-3 text-tuncate">

      		<span class="number bg-secondary">05</span> Finish
       </span>

      </div>

</div>










<div class="ppt-add-listing-payment mb-4 show-mobile" style="display:none;">

    <div class="container mt-4">
        <div class="bg-black rounded p-3 text-light">
            <div class="d-flex justify-content-between text-700">

            <div>Total</div>

            <div class="totalPriceDisplay"><span class="ppt-price">0</span></div>

            </div>
        </div>
    </div>

</div>

<section class="mb-5  text-600 show-mobile">
<div class="container">

<button type="button" data-ppt-btn="" class=" btn-lg btn-secondary btn-save" id="mainSaveBtn">Save</button>

</div>
</section>




</main></div>


<input type="hidden" name="totaldue" id="totaldue" class="form-control" value="0">






<form method="post" enctype="multipart/form-data" id="SUBMISSION_FORM" onsubmit="return false;" style="display:none;"></form>


<script>
function showcustomfields(){

	jQuery('.customfield').addClass("hidden").hide();
	var sList = ""; var catid = -1;

	jQuery(".usercat").each(function() {
		catid = jQuery(this).attr('data-id');
		jQuery('.customid-' + catid).removeClass("hidden").show();
	});

	jQuery("#parent_category_list .active").each(function() {
		catid = jQuery(this).attr('data-id');
		jQuery('.customid-' + catid).removeClass("hidden").show();
	});

	jQuery("#subcategory_list .active").each(function() {
		catid = jQuery(this).attr('data-id');
		jQuery('.customid-' + catid).removeClass("hidden").show();
	});

	// SHOW ALL ALLOWED
	jQuery('.customid-0').show();

	// REMOVED REQUIRED FROM HIDDEN FIELDS
	jQuery(".customfield.hidden .required-field").each(function(i, obj) {
		jQuery(this).removeClass("required-field").addClass("required-field-xxx");
	});

	// SHOW SWITCHED FIELDS
	jQuery('.customid-' + catid+' .required-field-xxx').each(function(i, obj) {
		jQuery(this).removeClass("required-field-xxx").addClass("required-field");
	});

	jQuery('.customid-0 .required-field-xxx').each(function(i, obj) {
		jQuery(this).removeClass("required-field-xxx").addClass("required-field");
	});
}

function updateTotal(){

	var totaldue = 0;

	if(jQuery('[data-amount]').length > 0){

		var a = jQuery("[data-amount]");
		a.each(function (a) {

			var type = jQuery(this).attr('type');

			console.log(type);

			if(  ( type == "checkbox" || type == "radio"  ) && jQuery(this).prop("checked") ){

			amount = parseFloat(jQuery(this).attr("data-amount"));
			totaldue += amount;

			}else if(jQuery(this).val() == 1){

			amount = parseFloat(jQuery(this).attr("data-amount"));
			totaldue += amount;

			}

		});
	}

	jQuery("#totaldue").val(totaldue);
	jQuery(".totalPriceDisplay span").html(totaldue);
	UpdatePrices();

	if(totaldue > 0){

		jQuery(".ppt-add-listing-payment").show();

		jQuery(".btn-save").html("Pay Now");

	}else{

	jQuery(".btn-save").html("Save");

	}


}

jQuery(document).ready(function(){

	textarealimit();

	jQuery('.scroll-top-quick').click(function () {
			jQuery('body,html').animate({
				scrollTop: 0
			}, 100);
			return false;
	});


	jQuery('input[data-key="title"]').on('change', function () {
			username_generate(jQuery('input[data-key="title"]').val());

	});

	jQuery('input[data-key="username"]').on('change', function () {

		jQuery(this).val(jQuery(this).val().replace(/\s+/g, ''));

	});





	jQuery(".btn-save").on('click',function(e) {
		processSubmitForm();
	});

		setTimeout(function(){

			showcustomfields();

		}, 2000);



});





function username_generate(name){

	jQuery("#ajax-username").html('');

	jQuery.ajax({
                type: "POST",
				dataType: 'json',
                url: 'http://escort.test/',
         	data: {
                     action: "ajax_username_generate",
         			name: name,
                 },
               success: function(response) {

         			if(response.status == "ok"){

					 jQuery("#ajax-username").html('');

					jQuery.each(response.data, function(key, val) {

						jQuery("#ajax-username").append('<div class="usertry" data-block="block" data-parent="username" data-value="'+val+'">'+val+'</div>');

					});


					jQuery('.usertry').each(function () {

						jQuery(this).on('click',function(e) {

							var input = jQuery('input[data-key="username"]');

							 jQuery(".usertry").removeClass('checked');

							 jQuery(input).removeClass('required-active');

							jQuery(this).addClass('checked');

							input.val(jQuery(this).attr("data-value"));


						});

					});



         			}
                 },
                 error: function(e) {
                     alert("error "+e)
                 }
	});

}
function ValidateUsername(){

	var input = jQuery('[data-key="username"]');
	if(input.val().length < 3){
	return false;
	}

	jQuery.ajax({
                 type: "POST",
				 dataType: 'json',
                 url: 'http://escort.test/',
         		data: {
                     action: "validateUsername",
         			un: input.val(),
                 },
                 success: function(response) {

						if( response.status == "ok"){

						jQuery("#ajax-username").html('');

						return true;

						}else{

						 jQuery(input).addClass('required-active');

						 return false;
						}
                 },
                 error: function(e) {
                     alert("error "+e)
                 }
	});

	return true;

}

function noUserAccess(){

alert("You can add more media once you've saved this ad.");
return false;
}

function steps(id,action){

	jQuery('.add-block').removeClass('active');

	if(action == "this"){
		jQuery('.block'+id).addClass('active');
	}else if(action == "forward"){
		nxt = parseFloat(id)+1;
		console.log(nxt);
		jQuery('.block'+nxt).addClass('active');
	}else{
		console.log(id);
		nxt = parseFloat(id)-1;
		console.log(nxt);
		jQuery('.block'+nxt).addClass('active');
	}

}


function processEditData(btype){

	fd = btype;

	 if(btype != "map" && btype != "category" && jQuery(".modal-"+fd).length > 0){

		 jQuery(".modal-"+fd).remove();

	 }else{

	jQuery.ajax({
			type: "POST",
			url: ajax_site_url,
			data: {
				   action: "load_editlisting_form",
				   type: btype,
				   eid: 0,

			   },
			   success: function(response) {


			   pptModal(btype, response, "modal-bottom-rightxxx", "ppt-animate-fadein bg-white w-700 p-3", 0);

				if(btype == "map"){

				jQuery('head').append('<link rel="stylesheet" href="'+ CNDPath + 'css/css.plugins-flag.css" type="text/css" id="ppt-loaded-flags" />');

				}

				if(btype == "sms"){

					loadJS(CNDPath + 'js/js.mobileprefixU.js', 'ppt-mobile-sms', function(el) {

						var handleChange = function() {
							jQuery("#mobilenum-input").val(iti.getNumber());
						}

						var input = document.querySelector("#mobilenum-input");
						var iti = window.intlTelInput(input, {
						  utilsScript: "https://ppt1080.b-cdn.net/js/js.mobileprefixU.js",
						 // autoHideDialCode: false,
						  nationalMode: false,

						});

						input.addEventListener('change', handleChange);
						input.addEventListener('keyup', handleChange);

						jQuery(".iti__country-list li").click(function(e) {
							jQuery("#mobilenum-input").val( '+' + jQuery(this).data('dial-code') );

						});
					});

				}


			   },
			   error: function(e) {
				   console.log(e)
			   }
		   });

	}

}


function processSubmitForm(){

	canContinue = true;



	jQuery(".form-control").removeClass('required-active');
	jQuery(".ppt-add-listing-error").html('');

	// FIRE DEFAULT VALIDATION
	canContinue = js_validate_fields("Please completed all required fields.");

	// SWITCH TAB
	if(jQuery(".block1 .required-active").length > 0){
	steps('1','this');
	}else if(jQuery(".block2 .required-active").length > 0){
	steps('2','this');
	}else if(jQuery(".block3 .required-active").length > 0){
	steps('3','this');
	}else if(jQuery(".block4 .required-active").length > 0){
	steps('4','this');
	}else if(jQuery(".block5 .required-active").length > 0){
	steps('5','this');
	}

	if(!canContinue){
	return;
	}

 	if(jQuery('[data-key="username"]').length > 0){
		if(!ValidateUsername()){
			steps('5','this');
			jQuery('[data-key="username"]').addClass('required-active');
			alert("Please enter a valid username");
			return false;
		}
	}

 	if(jQuery('[data-key="mypass"]').length > 0){
		if(jQuery('[data-key="mypass"]').val() == "" || jQuery('[data-key="mypass1"]').val() == "" || ( jQuery('[data-key="mypass"]').val() != jQuery('[data-key="mypass1"]').val())){
			steps('5','this');
			jQuery('[data-key="mypass"]').addClass('required-active');
			alert("Please create a valid account password.");
			return false;
		}
	}


		// BUSINESS HOURS PLUGIN
	jQuery('.startTime').attr('name', 'startTime[]');
	jQuery('.endTime').attr('name', 'endTime[]');
	jQuery('.isActive').attr('name', 'isActive[]');



		if(jQuery('.myemail').val() == ""){
		jQuery('.myemail').addClass('required-active');
		steps('5','this');
		alert("Please enter your email address.");
		return false;

	}
	if(!isValidEmail(jQuery('.myemail').val())){
		jQuery('.myemail').addClass('required-active');
		steps('5','this');
		alert("Please enter a valid email address.");
		return false;
	}



	jQuery('.myemail').removeClass('required-active');



	// CHECK IF VALUE IS ON
	if(jQuery('#field-post_content').length){

		var text_length = jQuery('#field-post_content').val().length;
		if( text_length < 100 ){

			jQuery('#field-post_content').addClass('required-active').focus();

			alert("Please enter a bigger description.");
			steps('2','this');
			return false;
		}
	}


	 // GOOGLE RECAPTURE

	// MOVE ALL FORM DATA INTO PLACE
	jQuery('#SUBMISSION_FORM').html('');
	jQuery('.form-control').each(function(){

		var attr = jQuery(this).attr('name');
		if (typeof attr !== 'undefined' && attr !== false) {

			var type = jQuery(this).attr('type');

			if(  ( type == "checkbox" || type == "radio"  ) && !jQuery(this).prop("checked") ){

			 //console.log(type+' skipped '+attr);

			}else{

			jQuery('#SUBMISSION_FORM').append('<textarea type="text" name="'+jQuery(this).attr('name')+'">'+jQuery(this).val()+'</textarea>');

			}
		}

		//jQuery(this).html().clone().appendTo(jQuery('#SUBMISSION_FORM'));

	});

	// SHOW SPINNER
	if(canContinue){

		jQuery('#ppt-add-listing-form').hide();
		jQuery('#ppt-add-listing-save').show();

		// SAVE THE DATA
		jQuery.ajax({
			type: "POST",
			dataType: 'json',
			url: 'http://escort.test/',
			enctype: 'multipart/form-data',
			data: {
				action: "savelisting",
				formdata: jQuery('#SUBMISSION_FORM').serialize(),

			},
			success: function(response) {

				if(response.status == "error"){

					jQuery('#ppt-add-listing-save').hide();
					jQuery('#ppt-add-listing-form').show();
					jQuery(".ppt-add-listing-error").html('<div>'+response.msg+"</div>");

					if(response.type == "email" || response.type == "username" ){
					steps('5','this');
					}


				}else if(response.status == "payment"){


					processNewPayment(response.paymentdata);

					jQuery(".modal-category, .modal-map").hide();

					jQuery('#ppt-add-listing-save').hide();
					jQuery('#ppt-add-listing-form').show();

				}else{

				 window.location.replace(response.link);

				}

			}

		});

	}

}


function textarealimit(){


   	text_max = 100;

     if(text_max == 0 || text_max == ""){
   	  jQuery('#textarea_counter').hide();
	  jQuery('#textarea_counter_hidden').val('1');
   	  return;
     }

	 if(jQuery('#field-post_content').length){

     	var text_length = jQuery('#field-post_content').val().length;

		 var text_remaining = text_max - text_length;
		 if(text_remaining < 0){
		 jQuery('#textarea_counter').hide();
		 }

		 jQuery('#textarea_counter span').html( '<b>' + text_remaining + '</b> characters remaining');

		  jQuery('#field-post_content').keyup(function() {

			   var text_length = jQuery('#field-post_content').val().length;
			   var text_remaining = text_max - text_length;

			   jQuery('#textarea_counter span').html( '<b>' + text_remaining + '</b> characters remaining');

			if(text_remaining < 0){
				jQuery('#textarea_counter').hide();
				 jQuery('#textarea_counter_hidden').val('1');
			}else{
				jQuery('#textarea_counter').show();
				 jQuery('#textarea_counter_hidden').val('0');
			}

		  });

	 }

}

/* SCROLL */
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.PerfectScrollbar=e()}(this,function(){"use strict";function t(t){return getComputedStyle(t)}function e(t,e){for(var i in e){var r=e[i];"number"==typeof r&&(r+="px"),t.style[i]=r}return t}function i(t){var e=document.createElement("div");return e.className=t,e}function r(t,e){if(!v)throw new Error("No element matching method supported");return v.call(t,e)}function l(t){t.remove?t.remove():t.parentNode&&t.parentNode.removeChild(t)}function n(t,e){return Array.prototype.filter.call(t.children,function(t){return r(t,e)})}function o(t,e){var i=t.element.classList,r=m.state.scrolling(e);i.contains(r)?clearTimeout(Y[e]):i.add(r)}function s(t,e){Y[e]=setTimeout(function(){return t.isAlive&&t.element.classList.remove(m.state.scrolling(e))},t.settings.scrollingThreshold)}function a(t,e){o(t,e),s(t,e)}function c(t){if("function"==typeof window.CustomEvent)return new CustomEvent(t);var e=document.createEvent("CustomEvent");return e.initCustomEvent(t,!1,!1,void 0),e}function h(t,e,i,r,l){var n=i[0],o=i[1],s=i[2],h=i[3],u=i[4],d=i[5];void 0===r&&(r=!0),void 0===l&&(l=!1);var f=t.element;t.reach[h]=null,f[s]<1&&(t.reach[h]="start"),f[s]>t[n]-t[o]-1&&(t.reach[h]="end"),e&&(f.dispatchEvent(c("ps-scroll-"+h)),e<0?f.dispatchEvent(c("ps-scroll-"+u)):e>0&&f.dispatchEvent(c("ps-scroll-"+d)),r&&a(t,h)),t.reach[h]&&(e||l)&&f.dispatchEvent(c("ps-"+h+"-reach-"+t.reach[h]))}function u(t){return parseInt(t,10)||0}function d(t){return r(t,"input,[contenteditable]")||r(t,"select,[contenteditable]")||r(t,"textarea,[contenteditable]")||r(t,"button,[contenteditable]")}function f(e){var i=t(e);return u(i.width)+u(i.paddingLeft)+u(i.paddingRight)+u(i.borderLeftWidth)+u(i.borderRightWidth)}function p(t,e){return t.settings.minScrollbarLength&&(e=Math.max(e,t.settings.minScrollbarLength)),t.settings.maxScrollbarLength&&(e=Math.min(e,t.settings.maxScrollbarLength)),e}function b(t,i){var r={width:i.railXWidth},l=Math.floor(t.scrollTop);i.isRtl?r.left=i.negativeScrollAdjustment+t.scrollLeft+i.containerWidth-i.contentWidth:r.left=t.scrollLeft,i.isScrollbarXUsingBottom?r.bottom=i.scrollbarXBottom-l:r.top=i.scrollbarXTop+l,e(i.scrollbarXRail,r);var n={top:l,height:i.railYHeight};i.isScrollbarYUsingRight?i.isRtl?n.right=i.contentWidth-(i.negativeScrollAdjustment+t.scrollLeft)-i.scrollbarYRight-i.scrollbarYOuterWidth:n.right=i.scrollbarYRight-t.scrollLeft:i.isRtl?n.left=i.negativeScrollAdjustment+t.scrollLeft+2*i.containerWidth-i.contentWidth-i.scrollbarYLeft-i.scrollbarYOuterWidth:n.left=i.scrollbarYLeft+t.scrollLeft,e(i.scrollbarYRail,n),e(i.scrollbarX,{left:i.scrollbarXLeft,width:i.scrollbarXWidth-i.railBorderXWidth}),e(i.scrollbarY,{top:i.scrollbarYTop,height:i.scrollbarYHeight-i.railBorderYWidth})}function g(t,e){function i(e){b[d]=g+Y*(e[a]-v),o(t,f),R(t),e.stopPropagation(),e.preventDefault()}function r(){s(t,f),t[p].classList.remove(m.state.clicking),t.event.unbind(t.ownerDocument,"mousemove",i)}var l=e[0],n=e[1],a=e[2],c=e[3],h=e[4],u=e[5],d=e[6],f=e[7],p=e[8],b=t.element,g=null,v=null,Y=null;t.event.bind(t[h],"mousedown",function(e){g=b[d],v=e[a],Y=(t[n]-t[l])/(t[c]-t[u]),t.event.bind(t.ownerDocument,"mousemove",i),t.event.once(t.ownerDocument,"mouseup",r),t[p].classList.add(m.state.clicking),e.stopPropagation(),e.preventDefault()})}var v="undefined"!=typeof Element&&(Element.prototype.matches||Element.prototype.webkitMatchesSelector||Element.prototype.mozMatchesSelector||Element.prototype.msMatchesSelector),m={main:"ps",element:{thumb:function(t){return"ps__thumb-"+t},rail:function(t){return"ps__rail-"+t},consuming:"ps__child--consume"},state:{focus:"ps--focus",clicking:"ps--clicking",active:function(t){return"ps--active-"+t},scrolling:function(t){return"ps--scrolling-"+t}}},Y={x:null,y:null},X=function(t){this.element=t,this.handlers={}},w={isEmpty:{configurable:!0}};X.prototype.bind=function(t,e){void 0===this.handlers[t]&&(this.handlers[t]=[]),this.handlers[t].push(e),this.element.addEventListener(t,e,!1)},X.prototype.unbind=function(t,e){var i=this;this.handlers[t]=this.handlers[t].filter(function(r){return!(!e||r===e)||(i.element.removeEventListener(t,r,!1),!1)})},X.prototype.unbindAll=function(){var t=this;for(var e in t.handlers)t.unbind(e)},w.isEmpty.get=function(){var t=this;return Object.keys(this.handlers).every(function(e){return 0===t.handlers[e].length})},Object.defineProperties(X.prototype,w);var y=function(){this.eventElements=[]};y.prototype.eventElement=function(t){var e=this.eventElements.filter(function(e){return e.element===t})[0];return e||(e=new X(t),this.eventElements.push(e)),e},y.prototype.bind=function(t,e,i){this.eventElement(t).bind(e,i)},y.prototype.unbind=function(t,e,i){var r=this.eventElement(t);r.unbind(e,i),r.isEmpty&&this.eventElements.splice(this.eventElements.indexOf(r),1)},y.prototype.unbindAll=function(){this.eventElements.forEach(function(t){return t.unbindAll()}),this.eventElements=[]},y.prototype.once=function(t,e,i){var r=this.eventElement(t),l=function(t){r.unbind(e,l),i(t)};r.bind(e,l)};var W=function(t,e,i,r,l){void 0===r&&(r=!0),void 0===l&&(l=!1);var n;if("top"===e)n=["contentHeight","containerHeight","scrollTop","y","up","down"];else{if("left"!==e)throw new Error("A proper axis should be provided");n=["contentWidth","containerWidth","scrollLeft","x","left","right"]}h(t,i,n,r,l)},L={isWebKit:"undefined"!=typeof document&&"WebkitAppearance"in document.documentElement.style,supportsTouch:"undefined"!=typeof window&&("ontouchstart"in window||window.DocumentTouch&&document instanceof window.DocumentTouch),supportsIePointer:"undefined"!=typeof navigator&&navigator.msMaxTouchPoints,isChrome:"undefined"!=typeof navigator&&/Chrome/i.test(navigator&&navigator.userAgent)},R=function(t){var e=t.element,i=Math.floor(e.scrollTop);t.containerWidth=e.clientWidth,t.containerHeight=e.clientHeight,t.contentWidth=e.scrollWidth,t.contentHeight=e.scrollHeight,e.contains(t.scrollbarXRail)||(n(e,m.element.rail("x")).forEach(function(t){return l(t)}),e.appendChild(t.scrollbarXRail)),e.contains(t.scrollbarYRail)||(n(e,m.element.rail("y")).forEach(function(t){return l(t)}),e.appendChild(t.scrollbarYRail)),!t.settings.suppressScrollX&&t.containerWidth+t.settings.scrollXMarginOffset<t.contentWidth?(t.scrollbarXActive=!0,t.railXWidth=t.containerWidth-t.railXMarginWidth,t.railXRatio=t.containerWidth/t.railXWidth,t.scrollbarXWidth=p(t,u(t.railXWidth*t.containerWidth/t.contentWidth)),t.scrollbarXLeft=u((t.negativeScrollAdjustment+e.scrollLeft)*(t.railXWidth-t.scrollbarXWidth)/(t.contentWidth-t.containerWidth))):t.scrollbarXActive=!1,!t.settings.suppressScrollY&&t.containerHeight+t.settings.scrollYMarginOffset<t.contentHeight?(t.scrollbarYActive=!0,t.railYHeight=t.containerHeight-t.railYMarginHeight,t.railYRatio=t.containerHeight/t.railYHeight,t.scrollbarYHeight=p(t,u(t.railYHeight*t.containerHeight/t.contentHeight)),t.scrollbarYTop=u(i*(t.railYHeight-t.scrollbarYHeight)/(t.contentHeight-t.containerHeight))):t.scrollbarYActive=!1,t.scrollbarXLeft>=t.railXWidth-t.scrollbarXWidth&&(t.scrollbarXLeft=t.railXWidth-t.scrollbarXWidth),t.scrollbarYTop>=t.railYHeight-t.scrollbarYHeight&&(t.scrollbarYTop=t.railYHeight-t.scrollbarYHeight),b(e,t),t.scrollbarXActive?e.classList.add(m.state.active("x")):(e.classList.remove(m.state.active("x")),t.scrollbarXWidth=0,t.scrollbarXLeft=0,e.scrollLeft=0),t.scrollbarYActive?e.classList.add(m.state.active("y")):(e.classList.remove(m.state.active("y")),t.scrollbarYHeight=0,t.scrollbarYTop=0,e.scrollTop=0)},T={"click-rail":function(t){t.event.bind(t.scrollbarY,"mousedown",function(t){return t.stopPropagation()}),t.event.bind(t.scrollbarYRail,"mousedown",function(e){var i=e.pageY-window.pageYOffset-t.scrollbarYRail.getBoundingClientRect().top>t.scrollbarYTop?1:-1;t.element.scrollTop+=i*t.containerHeight,R(t),e.stopPropagation()}),t.event.bind(t.scrollbarX,"mousedown",function(t){return t.stopPropagation()}),t.event.bind(t.scrollbarXRail,"mousedown",function(e){var i=e.pageX-window.pageXOffset-t.scrollbarXRail.getBoundingClientRect().left>t.scrollbarXLeft?1:-1;t.element.scrollLeft+=i*t.containerWidth,R(t),e.stopPropagation()})},"drag-thumb":function(t){g(t,["containerWidth","contentWidth","pageX","railXWidth","scrollbarX","scrollbarXWidth","scrollLeft","x","scrollbarXRail"]),g(t,["containerHeight","contentHeight","pageY","railYHeight","scrollbarY","scrollbarYHeight","scrollTop","y","scrollbarYRail"])},keyboard:function(t){function e(e,r){var l=Math.floor(i.scrollTop);if(0===e){if(!t.scrollbarYActive)return!1;if(0===l&&r>0||l>=t.contentHeight-t.containerHeight&&r<0)return!t.settings.wheelPropagation}var n=i.scrollLeft;if(0===r){if(!t.scrollbarXActive)return!1;if(0===n&&e<0||n>=t.contentWidth-t.containerWidth&&e>0)return!t.settings.wheelPropagation}return!0}var i=t.element,l=function(){return r(i,":hover")},n=function(){return r(t.scrollbarX,":focus")||r(t.scrollbarY,":focus")};t.event.bind(t.ownerDocument,"keydown",function(r){if(!(r.isDefaultPrevented&&r.isDefaultPrevented()||r.defaultPrevented)&&(l()||n())){var o=document.activeElement?document.activeElement:t.ownerDocument.activeElement;if(o){if("IFRAME"===o.tagName)o=o.contentDocument.activeElement;else for(;o.shadowRoot;)o=o.shadowRoot.activeElement;if(d(o))return}var s=0,a=0;switch(r.which){case 37:s=r.metaKey?-t.contentWidth:r.altKey?-t.containerWidth:-30;break;case 38:a=r.metaKey?t.contentHeight:r.altKey?t.containerHeight:30;break;case 39:s=r.metaKey?t.contentWidth:r.altKey?t.containerWidth:30;break;case 40:a=r.metaKey?-t.contentHeight:r.altKey?-t.containerHeight:-30;break;case 32:a=r.shiftKey?t.containerHeight:-t.containerHeight;break;case 33:a=t.containerHeight;break;case 34:a=-t.containerHeight;break;case 36:a=t.contentHeight;break;case 35:a=-t.contentHeight;break;default:return}t.settings.suppressScrollX&&0!==s||t.settings.suppressScrollY&&0!==a||(i.scrollTop-=a,i.scrollLeft+=s,R(t),e(s,a)&&r.preventDefault())}})},wheel:function(e){function i(t,i){var r=Math.floor(o.scrollTop),l=0===o.scrollTop,n=r+o.offsetHeight===o.scrollHeight,s=0===o.scrollLeft,a=o.scrollLeft+o.offsetWidth===o.scrollWidth;return!(Math.abs(i)>Math.abs(t)?l||n:s||a)||!e.settings.wheelPropagation}function r(t){var e=t.deltaX,i=-1*t.deltaY;return void 0!==e&&void 0!==i||(e=-1*t.wheelDeltaX/6,i=t.wheelDeltaY/6),t.deltaMode&&1===t.deltaMode&&(e*=10,i*=10),e!==e&&i!==i&&(e=0,i=t.wheelDelta),t.shiftKey?[-i,-e]:[e,i]}function l(e,i,r){if(!L.isWebKit&&o.querySelector("select:focus"))return!0;if(!o.contains(e))return!1;for(var l=e;l&&l!==o;){if(l.classList.contains(m.element.consuming))return!0;var n=t(l);if([n.overflow,n.overflowX,n.overflowY].join("").match(/(scroll|auto)/)){var s=l.scrollHeight-l.clientHeight;if(s>0&&!(0===l.scrollTop&&r>0||l.scrollTop===s&&r<0))return!0;var a=l.scrollWidth-l.clientWidth;if(a>0&&!(0===l.scrollLeft&&i<0||l.scrollLeft===a&&i>0))return!0}l=l.parentNode}return!1}function n(t){var n=r(t),s=n[0],a=n[1];if(!l(t.target,s,a)){var c=!1;e.settings.useBothWheelAxes?e.scrollbarYActive&&!e.scrollbarXActive?(a?o.scrollTop-=a*e.settings.wheelSpeed:o.scrollTop+=s*e.settings.wheelSpeed,c=!0):e.scrollbarXActive&&!e.scrollbarYActive&&(s?o.scrollLeft+=s*e.settings.wheelSpeed:o.scrollLeft-=a*e.settings.wheelSpeed,c=!0):(o.scrollTop-=a*e.settings.wheelSpeed,o.scrollLeft+=s*e.settings.wheelSpeed),R(e),(c=c||i(s,a))&&!t.ctrlKey&&(t.stopPropagation(),t.preventDefault())}}var o=e.element;void 0!==window.onwheel?e.event.bind(o,"wheel",n):void 0!==window.onmousewheel&&e.event.bind(o,"mousewheel",n)},touch:function(e){function i(t,i){var r=Math.floor(h.scrollTop),l=h.scrollLeft,n=Math.abs(t),o=Math.abs(i);if(o>n){if(i<0&&r===e.contentHeight-e.containerHeight||i>0&&0===r)return 0===window.scrollY&&i>0&&L.isChrome}else if(n>o&&(t<0&&l===e.contentWidth-e.containerWidth||t>0&&0===l))return!0;return!0}function r(t,i){h.scrollTop-=i,h.scrollLeft-=t,R(e)}function l(t){return t.targetTouches?t.targetTouches[0]:t}function n(t){return!(t.pointerType&&"pen"===t.pointerType&&0===t.buttons||(!t.targetTouches||1!==t.targetTouches.length)&&(!t.pointerType||"mouse"===t.pointerType||t.pointerType===t.MSPOINTER_TYPE_MOUSE))}function o(t){if(n(t)){var e=l(t);u.pageX=e.pageX,u.pageY=e.pageY,d=(new Date).getTime(),null!==p&&clearInterval(p)}}function s(e,i,r){if(!h.contains(e))return!1;for(var l=e;l&&l!==h;){if(l.classList.contains(m.element.consuming))return!0;var n=t(l);if([n.overflow,n.overflowX,n.overflowY].join("").match(/(scroll|auto)/)){var o=l.scrollHeight-l.clientHeight;if(o>0&&!(0===l.scrollTop&&r>0||l.scrollTop===o&&r<0))return!0;var s=l.scrollLeft-l.clientWidth;if(s>0&&!(0===l.scrollLeft&&i<0||l.scrollLeft===s&&i>0))return!0}l=l.parentNode}return!1}function a(t){if(n(t)){var e=l(t),o={pageX:e.pageX,pageY:e.pageY},a=o.pageX-u.pageX,c=o.pageY-u.pageY;if(s(t.target,a,c))return;r(a,c),u=o;var h=(new Date).getTime(),p=h-d;p>0&&(f.x=a/p,f.y=c/p,d=h),i(a,c)&&t.preventDefault()}}function c(){e.settings.swipeEasing&&(clearInterval(p),p=setInterval(function(){e.isInitialized?clearInterval(p):f.x||f.y?Math.abs(f.x)<.01&&Math.abs(f.y)<.01?clearInterval(p):(r(30*f.x,30*f.y),f.x*=.8,f.y*=.8):clearInterval(p)},10))}if(L.supportsTouch||L.supportsIePointer){var h=e.element,u={},d=0,f={},p=null;L.supportsTouch?(e.event.bind(h,"touchstart",o),e.event.bind(h,"touchmove",a),e.event.bind(h,"touchend",c)):L.supportsIePointer&&(window.PointerEvent?(e.event.bind(h,"pointerdown",o),e.event.bind(h,"pointermove",a),e.event.bind(h,"pointerup",c)):window.MSPointerEvent&&(e.event.bind(h,"MSPointerDown",o),e.event.bind(h,"MSPointerMove",a),e.event.bind(h,"MSPointerUp",c)))}}},H=function(r,l){var n=this;if(void 0===l&&(l={}),"string"==typeof r&&(r=document.querySelector(r)),!r||!r.nodeName)throw new Error("no element is specified to initialize PerfectScrollbar");this.element=r,r.classList.add(m.main),this.settings={handlers:["click-rail","drag-thumb","keyboard","wheel","touch"],maxScrollbarLength:null,minScrollbarLength:null,scrollingThreshold:1e3,scrollXMarginOffset:0,scrollYMarginOffset:0,suppressScrollX:!1,suppressScrollY:!1,swipeEasing:!0,useBothWheelAxes:!1,wheelPropagation:!0,wheelSpeed:1};for(var o in l)n.settings[o]=l[o];this.containerWidth=null,this.containerHeight=null,this.contentWidth=null,this.contentHeight=null;var s=function(){return r.classList.add(m.state.focus)},a=function(){return r.classList.remove(m.state.focus)};this.isRtl="rtl"===t(r).direction,this.isNegativeScroll=function(){var t=r.scrollLeft,e=null;return r.scrollLeft=-1,e=r.scrollLeft<0,r.scrollLeft=t,e}(),this.negativeScrollAdjustment=this.isNegativeScroll?r.scrollWidth-r.clientWidth:0,this.event=new y,this.ownerDocument=r.ownerDocument||document,this.scrollbarXRail=i(m.element.rail("x")),r.appendChild(this.scrollbarXRail),this.scrollbarX=i(m.element.thumb("x")),this.scrollbarXRail.appendChild(this.scrollbarX),this.scrollbarX.setAttribute("tabindex",0),this.event.bind(this.scrollbarX,"focus",s),this.event.bind(this.scrollbarX,"blur",a),this.scrollbarXActive=null,this.scrollbarXWidth=null,this.scrollbarXLeft=null;var c=t(this.scrollbarXRail);this.scrollbarXBottom=parseInt(c.bottom,10),isNaN(this.scrollbarXBottom)?(this.isScrollbarXUsingBottom=!1,this.scrollbarXTop=u(c.top)):this.isScrollbarXUsingBottom=!0,this.railBorderXWidth=u(c.borderLeftWidth)+u(c.borderRightWidth),e(this.scrollbarXRail,{display:"block"}),this.railXMarginWidth=u(c.marginLeft)+u(c.marginRight),e(this.scrollbarXRail,{display:""}),this.railXWidth=null,this.railXRatio=null,this.scrollbarYRail=i(m.element.rail("y")),r.appendChild(this.scrollbarYRail),this.scrollbarY=i(m.element.thumb("y")),this.scrollbarYRail.appendChild(this.scrollbarY),this.scrollbarY.setAttribute("tabindex",0),this.event.bind(this.scrollbarY,"focus",s),this.event.bind(this.scrollbarY,"blur",a),this.scrollbarYActive=null,this.scrollbarYHeight=null,this.scrollbarYTop=null;var h=t(this.scrollbarYRail);this.scrollbarYRight=parseInt(h.right,10),isNaN(this.scrollbarYRight)?(this.isScrollbarYUsingRight=!1,this.scrollbarYLeft=u(h.left)):this.isScrollbarYUsingRight=!0,this.scrollbarYOuterWidth=this.isRtl?f(this.scrollbarY):null,this.railBorderYWidth=u(h.borderTopWidth)+u(h.borderBottomWidth),e(this.scrollbarYRail,{display:"block"}),this.railYMarginHeight=u(h.marginTop)+u(h.marginBottom),e(this.scrollbarYRail,{display:""}),this.railYHeight=null,this.railYRatio=null,this.reach={x:r.scrollLeft<=0?"start":r.scrollLeft>=this.contentWidth-this.containerWidth?"end":null,y:r.scrollTop<=0?"start":r.scrollTop>=this.contentHeight-this.containerHeight?"end":null},this.isAlive=!0,this.settings.handlers.forEach(function(t){return T[t](n)}),this.lastScrollTop=Math.floor(r.scrollTop),this.lastScrollLeft=r.scrollLeft,this.event.bind(this.element,"scroll",function(t){return n.onScroll(t)}),R(this)};return H.prototype.update=function(){this.isAlive&&(this.negativeScrollAdjustment=this.isNegativeScroll?this.element.scrollWidth-this.element.clientWidth:0,e(this.scrollbarXRail,{display:"block"}),e(this.scrollbarYRail,{display:"block"}),this.railXMarginWidth=u(t(this.scrollbarXRail).marginLeft)+u(t(this.scrollbarXRail).marginRight),this.railYMarginHeight=u(t(this.scrollbarYRail).marginTop)+u(t(this.scrollbarYRail).marginBottom),e(this.scrollbarXRail,{display:"none"}),e(this.scrollbarYRail,{display:"none"}),R(this),W(this,"top",0,!1,!0),W(this,"left",0,!1,!0),e(this.scrollbarXRail,{display:""}),e(this.scrollbarYRail,{display:""}))},H.prototype.onScroll=function(t){this.isAlive&&(R(this),W(this,"top",this.element.scrollTop-this.lastScrollTop),W(this,"left",this.element.scrollLeft-this.lastScrollLeft),this.lastScrollTop=Math.floor(this.element.scrollTop),this.lastScrollLeft=this.element.scrollLeft)},H.prototype.destroy=function(){this.isAlive&&(this.event.unbindAll(),l(this.scrollbarX),l(this.scrollbarY),l(this.scrollbarXRail),l(this.scrollbarYRail),this.removePsClasses(),this.element=null,this.scrollbarX=null,this.scrollbarY=null,this.scrollbarXRail=null,this.scrollbarYRail=null,this.isAlive=!1)},H.prototype.removePsClasses=function(){this.element.className=this.element.className.split(" ").filter(function(t){return!t.match(/^ps([-_].+|)$/)}).join(" ")},H});

</script>


<style>

.ppt-add-listing-error > div { color:#fff; background:red; padding:10px; margin-bottom:10px; font-weight:700; border-radius:4px; }

.usertry { cursor:pointer; display: inline-flex; border-radius: 0.25rem; border: 1px solid #dee2e6; font-weight: 500; font-size:14px; padding: 5px 10px; margin-bottom: 20px; margin-right:10px; }
.usertry.checked { background-color: #fafafb; box-shadow: 0 .125rem .25rem rgba(0,0,0,.035); }
.usertry:not(.checked) i {display:none;}
.usertry i {margin-right: 5px;    color: green; }

.usertry.dashed {     box-shadow: none;    border: 1px solid #ddd;    padding: 5px 10px;    background: #fff;}

.gig-box.active i { color:#ffc300; font-weight:700; opacity: 1; }

.step-check { text-align: center; border-radius: 100%;width: 20px;    height: 20px;    font-size: 11px;    display: inline-block;    line-height: 20px;    margin-right: 10px;	    background-color: #35853e;		color:#fff;	}
.step-check.white { background: none;    border: 1px solid #000; }
.step-check.white i { display:none; }


.step-text { cursor:pointer;display: inline-block;   width: 100%;    font-weight: 600; font-size: 18px; line-height:40px; }
.wp-admin .step-text { background: #f9f9f9!important; }


.tipsidebar .bg-image { opacity:0.1 }

.btn-save { font-weight:600!important; }
.card-add-block .btn-save { display:none!important; }
.block5 .card-add-block .btn-save {display:inline-block!important; }

.cardbox { box-shadow: 0 .125rem .25rem rgba(0,0,0,.035); border: 1px solid #dee2e6;    text-align: center; border-radius:8px; cursor:pointer; margin-bottom:20px; }
.cardbox i { font-size:35px;   }
.cardbox.closed i { opacity: 0.1; }
.cardbox .small { font-weight:600; margin-top:5px; overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap; }
.cardbox.closed { box-shadow:none; background: #fafafb;    border: 2px dashed #ddd; }

.cardbox.closed .on { display:none; }
.cardbox.closed .off { display:inline-block; }

.cardbox .on, .cardbox .on i { display:inline-block; opacity: 1!important; }
.cardbox .off { display:none; }


#ppt-add-listing-form .custom-control-label.input-lg { font-size:14px!important; }
#ppt-add-listing-form .custom-control-label.input-lg::before, #ppt-add-listing-form .custom-control-label.input-lg::after { width:20px; height:20px; top:0px; }
#ppt-add-listing-form .custom-control-label.input-lg::after {  top: 10px; left: -18px; }

#ppt-add-listing-form .card-add-block { border: 0px!important; }
#ppt-add-listing-form .card-add-block .card-footer {     background: linear-gradient(89deg,#fff 0,rgb(248 249 250) 100%); }
#ppt-add-listing-form .add-block:not(.block1) .card-add-block .card-footer {  }
#ppt-add-listing-form .block1 .btn-back {display:none; }

#ppt-add-listing-form .input-group-text { }
#ppt-add-listing-form ._title { margin-top:30px; font-size:28px; font-weight: 600; padding-left:60px; position:relative; margin-bottom: 50px; }
#ppt-add-listing-form .title-number { position: absolute; width:40px; height:40px; background:red; color:#fff; border-radius:100%;  left: 0px;  top: 0px; line-height: 40px; font-size: 16px; text-align:center; }

#ppt-add-listing-form ._subtitle { opacity:0.5; font-size:16px; margin-bottom:20px;   padding-bottom: 20px; }
#ppt-add-listing-form  label { font-size:16px; font-weight: 600; margin-bottom: 15px; }
#ppt-add-listing-form .description { opacity:0.5; font-size:12px; }



.steps-box .number  {  display: inline-block; width:25px; height:25px; background:red; color:#fff; border-radius:100%;     line-height: 25px; font-size: 12px;    margin-right: 10px; }
.steps-box  .number-box { cursor:pointer;      font-size: 14px;    display: inline-block;    margin-right: 10px;   text-align: center;    line-height: 50px;    font-weight: 600;    z-index: 2;    position: relative; background: #fafafb; }

.wp-admin .steps-box  .number-box { background:#f9f9f9; }
@media (min-width: 992px){
.steps-box [class*=col-]:after {    width: 100%;    position: absolute;    content: "";    height: 1px;    background: 0 0;    border-top: 1px solid rgba(164,174,198,.2);    top: 1.5rem;    z-index: 0;    left: 3rem;}
}

ul.timeline li.active a { font-weight:600; color:#000; }
ul.timeline li.active:before { background: #000;     z-index: 1; }
@media (min-width: 991.98px) {

.pak-desc { margin-left:125px; margin-right:100px; }
.pak-desc2 { margin-left:110px; margin-right:100px; }

#ppt-add-listing-form .add-block:not(.active) .card-footer { display:none; }
#ppt-add-listing-form .block5 .btn-forward { display:none; }
#ppt-add-listing-form .add-block:not(.active) { display:none; }
#ppt-add-listing-form .add-block-wrap { box-shadow: 0 .125rem .25rem rgba(0,0,0,.035)!important; background:#fff; border: 1px solid #ddd; border-radius:8px; }
#ppt-add-listing-form .form-control.big { font-size: 24px; margin-bottom: 30px; }


.card-add-block .card-body, .card-add-block .card-footer { padding-left:50px; }
.cardbox { padding:30px; }

#field-post_content { min-height:250px; }

.summarybox { font-size:16px; }
.summarybox .row { padding:10px 0px; }
.summarybox .row:last-child {   }

}
@media (max-width: 991.98px) {

#ppt-add-listing-form ._title { margin-top:0px; font-size:18px; font-weight: 600; }
#ppt-add-listing-form ._subtitle { opacity:0.5; font-size:14px; }

#ppt-add-listing-form .add-block .card-footer { display:none; }
#ppt-add-listing-form .stepsbox { display:none!important; }
.tipsidebar, .steps-box { display:none!important; }
#ppt-add-listing-form .card-add-block {   }
.paysection { padding:20px; }
.cardbox { padding:10px; }

}

@media (max-width: 600px) {
.card-footer-nav { position: absolute;  bottom: 30px;  width: 100%; }
.card-footer {position: absolute;  bottom: 0;  width: 100%; }
}


#ppt-add-listing-form label.checkbox { margin:0px!important; }
#ppt-add-listing-form label.checkbox .form-control { min-height:20px; box-shadow:none!important; }

#ppt-add-listing-form .exta1a .custom-control-label::before {
    background-color: #ffffff;
    border: #c9c9c9 solid 1px;
}

</style><html>
  <body>
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

        <div class="mb-4"> <div class='textlogo navbar-brand-light'>Sexy <span class='text-primary'>Escorts</span></div> </div>

        <div class="lh-30 mobile-mb-2" data-ppt-footerdesc="">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue.</div>

      </div>

      <div class="col-6 col-md-3 col-xl-2 text-center text-md-left mobile-mb-2">

        <div class="fs-5 mb-2 text-600" data-ppt-footer-menutitle1="">Useful Links</div>
        <div class="lh-30">        <ul>
                <li><a href="../index.htm">Home</a></li>
                <li><a href="../about-us/index.htm">About Us</a></li>
                <li><a href="../how-it-works/index.htm">How it works</a></li>
                <li><a href="../blog/index.htm">Blog</a></li>
                </ul>
        </div>

      </div>

      <div class="col-6 col-md-3 col-xl-2 text-center text-md-left mobile-mb-2">

        <div class="fs-5 mb-2 text-600" data-ppt-footer-menutitle2="">Quick Search</div>
        <div class="lh-30">        <ul>
                <li><a href="../index-13.htm?s=">Search</a></li>
                <li><a href="../index-14.htm?s=&sort=pop">Popular</a></li>
                <li><a href="../index-15.htm?s=&sort=id">Newly Added</a></li>
                <li><a href="../index-13.htm?s=">Most Relevant</a></li>
                </ul>
        </div>

      </div>


      <div class="col-md-4">

        <div class="fs-5 mb-2 text-600">Join our newsletter</div>
        <p class="opacity-8 mb-3">We write rarely, but only the best content.</p>




<script>

function ajax_newsletter_signup1321(){

    jQuery.ajax({
        type: "POST",
        url: 'http://escort.test/',
		dataType: 'json',
		data: {
            action: "newsletter_join",
			email: jQuery('#ppt_newsletter_mailme1321').val(),
        },
        success: function(r) {

			if(r.status == "ok"){
				jQuery('#newsletterthankyou1321').show();
				jQuery('#mailinglist-form1321').html('');
			}else{
				jQuery('#mailinglist-form1321').html("Invalid Email Address");
			}

        },
        error: function(e) {
            //console.log(e)
        }
    });

}
</script>

<div id="newsletterthankyou1321" style="display:none" class="newsletter-confirmation txt">
	<div class="h4">Email confirmation sent.</div>
	<p>Please check your email for a confirmation email.</p>
	<p class="small">Only once you've confirmed your email will you be subscribed to our newsletter.</p>
</div>

<form id="mailinglist-form1321" name="mailinglist-form1321" method="post" onsubmit="return IsEmailMailinglist1321();" class="footer-newsletter">


<div class="input-group">
<input type="text" name="ppt_newsletter_mailme1321" id="ppt_newsletter_mailme1321" value="" placeholder="Email Address Here.." style="height:46px;" class="form-control  rounded-0">
<div class="input-group-append">
<button type="submit" class="btn btn-primary px-3">Join</button>
</div>


</div>




 </form>
<script>
		function IsEmailMailinglist1321(){
		var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);
			var de4 	= document.getElementById("ppt_newsletter_mailme1321");

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
			ajax_newsletter_signup1321();

		  	return false;
		}
 </script>




        <div class="small opacity-8 mt-4">
          We'll never share your details. See our <a class="opacity-8" href="../privacy/index.htm">Privacy Policy</a>
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
  </body>
</html>



<div id="page-loading" style="height:400px; text-align:center; padding-top:300px;"> <img src="../images/loading.svg" alt="loading page" style="max-width:150px;"> </div>




<div class="footer-nav-area hidepage " style="display:none;" id="mobile-bottom-bar">
      <div class="container h-100 px-0">
        <div class="suha-footer-nav h-100">
          <ul class="h-100 list-unstyled d-flex align-items-center justify-content-between pl-0">


	<li><a href="../index.htm" class="">
        <i class="fal fa-house"></i> Home</a></li>


	<li><a href="../index-13.htm?s=" class="">
        <i class="fal fa-search"></i> Search</a></li>


     <li> <a href="index.htm" class="menu-add bg-primary "><i class="fa fa-plus text-white"></i> </a></li>


	<li><a href="../wp-login.php-2.htm" class="">
        <i class="fa fa-users-crown"></i> My Account</a></li>


	<li><a href="../blog/index.htm" class="">
        <i class="fal fa-sparkles"></i> Blog</a></li>



          </ul>
        </div>
      </div>
</div>

<link rel='stylesheet' id='ppt-up-css-css' href='../css/_up.css?ver=6.3.2' type='text/css' media='all'>
<link rel='stylesheet' id='ppt-submit-css-css' href='../css/_submitform.css?ver=6.3.2' type='text/css' media='all'>
<script src="../js/js.up.js?ver=1" id="ppt-up-js-js"></script>
<!-- PREMIUMPRESS THEMES V.10.8.9 -->



               <script>
				var ajax_img_url = "https://ppt1080.b-cdn.net/";
				var ajax_site_url = "http://escort.test/index.php";
				var ajax_framework_url = "http://escort.test/wp-content/themes/ES10/";
				var ajax_googlemaps_key = "";
				 </script>

				<input type="hidden" id="ppt-current-tho" value=",">
				<input type="hidden" id="ppt-current-dec" value=".">
				<input type="hidden" id="ppt-current-symbol" value="<i class='fab fa-bitcoin'>&nbsp;</i>">
				<input type="hidden" id="ppt-current-position" value="left">
                <input type="hidden" id="ppt-map-provider" value="mapbox">

                                  <script async="" src="../js/js.custom.js?v=10.8.9" id="premiumpress-js"></script>
                                  <script async="" src="../js/js.up-1.js?v=10.8.9" id="premiumpress-up-js"></script>
                                  <script async="" src="../js/js.search.js?v=10.8.9" id="premiumpress-submit-js"></script>

				<noscript id="deferred-styles">

								<link rel="stylesheet" type="text/css" id="boostrap-css" href="../css/_bootstrap.css?v=10.8.9">
								<link rel="stylesheet" type="text/css" id="theme-fonts" href="../css/css.theme-fonts.css?v=10.8.9">
								<link rel="stylesheet" type="text/css" id="theme-elementor" href="../css/css.theme-elementor.css?v=10.8.9">
								<link rel="stylesheet" type="text/css" id="theme-maps" href="../css/css.theme-maps.css?v=10.8.9">
								<link rel="stylesheet" type="text/css" id="theme-utilities" href="../css/css.theme-utilities.css?v=10.8.9">
								<link rel="stylesheet" type="text/css" id="premiumpress-css" href="../css/css.premiumpress.css?v=10.8.9">
								<link rel="stylesheet" type="text/css" id="premiumpress-chat" href="../css/_chat.css?v=10.8.9">
								<link rel="stylesheet" type="text/css" id="premiumpress-up" href="../css/_up-1.css?v=10.8.9">
								<link rel="stylesheet" type="text/css" id="premiumpress-submit" href="../css/_submitform-1.css?v=10.8.9">
								<link rel="stylesheet" type="text/css" id="premiumpress-mobileprefix" href="../css/_mobileprefix.css?v=10.8.9">
								<link rel="stylesheet" type="text/css" id="premiumpress-theme-es" href="../css/_theme_es.css?v=10.8.9">

                				<style>
				.bg-primary, .bg-primary:hover,.bg-primary:focus, a.bg-primary:focus, a.bg-primary:hover, button.bg-primary:focus, button.bg-primary:hover, .badge-primary { background:#FFC300 !important; } .btn-primary, .btn-primary:hover { color: #fff; background-color: #FFC300 !important; border-color: #FFC300 !important; } .text-primary, .filters_col .distance span { color: #FFC300 !important; } .btn-outline-primary { color: #FFC300 !important; border-color: #FFC300 !important; } .btn-outline-primary:hover { background:none !important; } .text-primary a { color: #FFC300 !important; } [ppt-nav].active-underline > ul > li.active > a { border-bottom: 2px solid #FFC300!important; }				</style>

				</noscript>




				<script>
				var loadDeferredStyles = function() {
						var addStylesNode = document.getElementById("deferred-styles");
						var replacement = document.createElement("div");
						replacement.innerHTML = addStylesNode.textContent;
						document.body.appendChild(replacement)
						addStylesNode.parentElement.removeChild(addStylesNode);
				};
				var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
						  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
					  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
					  else window.addEventListener('load', loadDeferredStyles);

				</script>
                <!----------------- -->
<div id="ppt-notice-new-custom" style="display:none;">

<div class="p-3 bg-white rounded shadow-lg position-relative" style="min-width: 250px; max-width:400px;">
  <div class="d-flex">
    <div>
      <div style="height:50px; width:50px;" class="rounded bg-light mr-4 position-relative">
        <div class="bg-image rounded bg-light">
        </div>
      </div>
    </div>
    <div class="pr-5">
      <div ppt-icon-24="" data-ppt-icon-size="24" class="btn-close position-absolute" style="right:10px; top:10px;cursor:pointer;">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>      </div>
      <a href="#" class="_link btn-close text-dark">
      <div class="_username">
        <strong>Sammy</strong> has updated her photo. Do you like it?
      </div>
      </a>
    </div>
  </div>
</div>

</div>

<div id="ppt-notice-new-notifications" style="display:none;">

<div ppt-box="" class="rounded">
  <div class="_content py-3">
    <div class="d-flex">
      <div style="width:150px;" class="hide-mobile">
        <div style="height:60px; width:60px;" class="bg-light rounded position-relative overflow-hidden" ppt-flex-middle="">
          <div ppt-icon-size="32" data-ppt-icon="" class="text-warning">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>          </div>
        </div>
      </div>
      <div class="w-100 mx-3" ppt-flex="">
        <div class="text-600 fs-5">
          New Notification        </div>
        <div class="lh-20 mt-2 fs-sm">
          You have a new notification.        </div>
      </div>
      <div ppt-flex-between="" ppt-flex-end="">
        <a href="#" class="btn-close _ok btn-warning" data-ppt-btn="">
        <div ppt-icon-size="24" data-ppt-icon="">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewbox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>        </div>
        </a> <a href="#" class="btn-system  _cancel btn-close hide-mobile" data-ppt-btn="">
        <div ppt-icon-size="24" data-ppt-icon="">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewbox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>        </div>
        </a>
      </div>
    </div>
  </div>
</div>
</div>

<div id="ppt-notice-new-message" style="display:none;">


<div class="bg-white p-3 rounded shadow" style="max-width:400px;">
          <div class="d-flex">
            <div>
              <div style="height:50px; width:50px;" class="rounded bg-light mr-4 position-relative">
                <div class="bg-image rounded" data-bg="">&nbsp;</div>
              </div>
            </div>
            <div class="fs-5">
              <strong class="_username">Mark</strong> Has sent you a message, take a look!            </div>
          </div>

        <div class="d-flex w-100 mt-4">
          <button class="_ok w-100 btn-primary btn-close" data-ppt-btn="">Read</button>
          <button class="_cancel w-100 btn-system btn-close" data-ppt-btn="">Cancel</button>
        </div>
      </div>
</div>


<div id="ppt-notice-new-login" style="display:none;">

    <div class="card-body">
          <div class="d-flex">
            <div>
              <div style="height:50px; width:50px;" class="rounded bg-light mr-4 position-relative">
                <div class="bg-image rounded" data-bg="">
                </div>
              </div>
            </div>
            <div class="_msg_login"><a href="#" class="_link"><strong class="_username">Mark</strong> Has just logged in. Say hello!</a></div>
            <div class="_msg_logout"><a href="#" class="_link"><strong class="_username">Mark</strong> Has just logged of. Say Goodbye.</a></div>
           <div class="_msg_upgrade"><a href="#" class="_link"><strong class="_username">Mark</strong> Has has just upgraded their account.</a></div>


          </div>
        </div>
</div>




<div id="locationMap">
</div>
<!--map-modal -->
<div class="map-modal-wrap shadow hidepage" style="display:none;">
  <div class="map-modal-wrap-overlay">
  </div>
  <div class="map-modal-item">
    <div class="map-modal-container">
      <div class="map-modal">
        <div id="singleMap" data-latitude="54.2890174" data-longitude="-0.4024484">
        </div>
      </div>
      <div class="card-body">
        <h3><a href="#" class="text-dark">&nbsp;</a></h3>
        <div class="address text-muted small letter-spacing-1">
        </div>
        <div class="map-modal-close bg-primary text-center">
          <i class="fal fa-times">&nbsp;</i>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>