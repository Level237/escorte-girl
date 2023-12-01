@extends('layouts.backoffice.escort.app')
@section('title', __('Tableau de bord'))

@section('content')

	<div class="fs-lg text-600 mb-4">Mon Profil</div>

<p class="mb-4">Ici, vous pouvez afficher, modifier et gérer les détails de votre profil.</p>


<label class="text-600">Photo Profil</label>


<form method="post" action="" onsubmit="return ValidateStore();" class="save_store_form" >

<input type="hidden" class="form-control" name="store[image]" value="" id="storeimg" />

<div class="row mb-4">

    <div class="col-md-3 mb-4 storeimage">


<input type="hidden"
               id="storeimage_735_aid"
               name="admin_values[storeimage_735_aid]"
               value=""  />
<input
               name="admin_values[storeimage_735]"
               type="hidden"
               id="storeimage_735_src"
               value="https://es10.premiummod.com/wp-content/uploads/sites/5/2022/11/9-1-1.jpeg" />


<div id="storeimage_735_upload" class="shadow-sm border " data-aid=""></div>


<script>

jQuery(document).ready(function(){
setTimeout(function() {

_meidaUploadFormstoreimage_735("https://es10.premiummod.com/wp-content/uploads/sites/5/2022/11/9-1-1.jpeg", );

},5000);


});



function _meidaUploadFormstoreimage_735(src, aid){


	divid = "storeimage_735_upload";

	var cropper = new Slim(document.getElementById(divid), {

				service: 'https://es10.premiummod.com/index.php',
				download: false,
				//instantEdit: true,
				push: true,

				willRemove: function(data, ready) {

					// GET ATTACHMENT ID
					thisaid  = jQuery("#"+divid).attr("data-aid");

					// AJAX
										 jQuery.ajax({
						   type: "POST",
						   url: 'https://es10.premiummod.com/',
						data: {
							slim: "delete",
							eid: 0,
							aid: thisaid,
							custom:1,

						   }
					   });

					    jQuery("#storeimage_735_aid").val('');
						jQuery("#storeimage_735_src").val('');

						if(jQuery('#admin_save_form').length > 0){
						document.admin_save_form.submit();
						}


					   ready(data);
				},

								didUpload: function(data,t, t2) {

						jQuery("#storeimage_735_aid").val(t2.aid);
						jQuery("#storeimage_735_src").val(t2.src);

				},


				label: "<i class='fal fa-3x btn-block fa-image-polaroid opacity-5 mb-3'></i> <span class='small font-weight-bold opacity-5'>Select Photo " + "</span>",
				buttonConfirmLabel: 'Ok',
				meta: {
					eid:'0',
					aid: aid,

										type: "custom",

				}


			});


			// load in image
			if(src != ""){
				cropper.load(src, { blockPush:true }, function(error, data) {
					// image load done!
				});

			}
}


</script>

    </div>
    <div class="col-md-9"></div>


    <div class="col-md-6 mb-3">
    <label class="text-600">Nom d'utilisateur <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="store[name]" data-required="1" value="{{ ucfirst($user->username) }}" />
    </div>

    <div class="col-md-6 mb-3">
    <label class="text-600">Email <span class="text-danger">*</span></label>
    <input type="text" class="form-control" name="store[email]" data-type="email" data-required="1" value="{{ $user->email }}" />
    </div>

    <div class="col-md-6 mb-3">
    <label class="text-600">Phone</label>
    <input type="text" class="form-control" name="store[phone]" value="{{ $user->phone_number }}" />
    </div>

    <div class="col-md-6 mb-3">
    <label class="text-600">Facebook</label>
    <input type="text" class="form-control" name="store[link]" value="#" />
    </div>


<div class="col-12">

<label class="text-600">Description <span class="text-danger">*</span> </label>

<textarea class="form-control" style="height:150px!important;" data-required="1" name="store[desc]">slot maxwin anti rungkad
slot garansi kekalahan tanpa to</textarea>

<div ppt-flex-between>
<button type="submit" data-ppt-btn class="btn-primary mt-4">Enregistrer</button>

<a href="#" target="_blank" class="btn-system" data-ppt-btn>Voir le Profil</a>
</div>

</div>

</div>
</form>

<script>


function ValidateStore(){

	result = ppt_form_validation('.save_store_form');
	if(result == 0){

		return false;

	}else{


		storimg = jQuery("#storeimage_735_src").val();

		if(storimg.length > 0){

			jQuery("#storeimg").val(storimg );

		}

		jQuery(".storeimage").html('');


		return true;

	}
}


</script>

@endsection
