@extends('layouts.Frontend.master')
@section('title','step One')

@section('content')
<div id="ppt-add-listing-form" class="my-5 ppt-forms style3" data-step="1">


    <section class="container px-0 add-block block1 active">

     <div class="ppt-add-listing-error"></div>

    <div class="add-block-wrap">

        <div class="row no-gutters">

        <div class="col-lg-4 bg-primary hide-mobile position-relative overflow-hidden tipsidebar">

        <div class="bg-image" data-bg="https://premiummod.com/demoimages/img.php?sidebar=sform_basic&t=es"></div>

        <div class="card h-100 bg-none border-0">

            <div class="card-body">



            </div>

            <div class="card-footer bg-none">



            <div class="bg-white shadow text-dark mb-4 p-3 rounded-lg">


            <div class="text-700 mb-2"><i class="fa fa-info-circle mr-2"></i> Quick Tip</div>
            <p>Already a member? <a href='#' onclick='processLogin(0);'>Sign in</a></p>
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

        <div class="_title"><span class="title-number bg-secondary">01</span> Create a new profile</div>




    <div class="form-group mt-4">








    <label class="">Create a display name for your profile. <span class="text-danger">*</span> </label>


      <input type="input" name="form[post_title]" id="form_post_title" data-key="title" maxlength="150" placeholder="Sexy Jane" class="form-control  big required-field" tabindex="1" value="">

    </div>







    <div class="row mb-2">

    <div class="col-md-6">

        <label>I'm a <span class="text-danger">*</span> </label>

        <div class="mt-2">

            <div class="usertry gender checked gender-39" onclick="processGender('39');">

            <div><i class="fa fa-check-circle"></i> Female Escort</div>

        </div>
            <div class="usertry gender  gender-40" onclick="processGender('40');">

            <div><i class="fa fa-check-circle"></i> Male Escort</div>

        </div>
            </div>

    </div>





    <div class="col-md-6">

        <label>I work for <span class="text-danger">*</span> </label>

        <div class="mt-2">

            <div class="usertry ingender checked ingender-1" onclick="processSwitch('1');">

            <div><i class="fa fa-check-circle"></i> Myself (Independent)</div>

        </div>
            <div class="usertry ingender  ingender-2" onclick="processSwitch('2');">

            <div><i class="fa fa-check-circle"></i> Agency</div>

        </div>
            </div>

        <div class="switchValDiv" style="display:none;">
        <select class="form-control mb-4" name="tax[store]" id="storelist" onchange="CheckNewStore(this.value)"></select>

        </div>

        <div style="display:none;" id="switchNewStore">
        <label>Agency Name</label>
        <input type="text" name="custom[storename]" value="">
        </div>

    </div>

    <input type="hidden" class="form-control" name="custom[lookinggen]" id="switchVal" value="">



    <input type="hidden" class="form-control" name="tax[dagender]" id="gender" value="39">


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
@endsection
