@extends('layouts.Frontend.escort.profile.master')

@section('content')

<script src="{{ asset('assets/js/jquery.min.js?ver=3.7.0') }}" id="jquery-core-js"></script>
 <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
<style>
.cardbox.closed {
    box-shadow: none;
    background: #fafafb;
    border: 2px dashed #ddd;
}

.cardbox i { font-size:35px;   }
.cardbox.closed i { opacity: 0.1; }
.cardbox .small { font-weight:600; margin-top:5px; overflow: hidden;    text-overflow: ellipsis;    white-space: nowrap; }
.cardbox.closed { box-shadow:none; background: #fafafb;    border: 2px dashed #ddd; }

.cardbox.closed .on { display:none; }
.cardbox.closed .off { display:inline-block; }

.cardbox .on, .cardbox .on i { display:inline-block; opacity: 1!important; }
.cardbox .off { display:none; }
.cardbox {
    box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.035);
    border: 1px solid #dee2e6;
    text-align: center;
    border-radius: 8px;
    cursor: pointer;
    margin-bottom: 20px;
}

</style>
<div class="p-5 overflow-hidden w-100">
    <h3 class="text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-5xl dark:text-white text-center">Completer votre profil</h3>
    <div class="p-2">
        <div class="flex items-center">
            <div class="flex items-center text-teal-600 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600">
                    <p class="flex justify-center">1</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">Informations personnel</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-300"></div>
            <div class="flex items-center text-white relative">
                <div class=" text-teal-600 border-teal-600 rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 ">
                    <p class="flex justify-center">2</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600 text-gray-500">Corpulence</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-300"></div>
            <div class="flex items-center text-teal-500 relative">

                <div class=" rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-300">
                    <p class="flex justify-center">3</p>
                </div>
                <div class="absolute top-0 -ml-1 text-center mt-16 w-25 text-xs font-medium uppercase text-gray-500">Profil Escorte</div>
            </div>
            <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-300"></div>
            <div class="flex items-center text-gray-500 relative">
                <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300">
                    <p class="flex justify-center">4</p>
                </div>
                <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">Confirmation</div>
            </div>
        </div>
    </div>
    <div class="mt-8 p-4">

        <div id="ppt-invalid-fields" style="display:none;">
            <div class="container text-white" >
                <div class="alert alert-danger p-3  alert-dismissible fade show" role="alert">
                    <strong><i class="fas fa-exclamation-triangle mr-2"></i>  Erreur : </strong> <span id="ppt-invalid-fields-text"></span>
                </div>
            </div>
        </div>
         <script>
            // Note that the name "myDropzone" is the camelized
            // id of the form.
            Dropzone.options.myDropzone = {
                    paramName: "file", // The name that will be used to transfer the file
                    maxFilesize: 2, // MB
                    maxFiles : 10,
                    acceptedFiles: ".jpeg,.jpg,.png",
                    Name: "Chargez vos fichiers ici",
                    init: function() {
                    this.on("addedfile", file => {
                        //Check number of added photos
                        if(this.files.length > 5){
                            this.removeFile(file);
                            return;
                        }
                    if (this.files.length) {
                        var _i, _len;
                        for (_i = 0, _len = this.files.length; _i < _len - 1; _i++) // -1 to exclude current file
                        {
                            if(this.files[_i].name === file.name && this.files[_i].size === file.size && this.files[_i].lastModified.toString() === file.lastModified.toString())
                            {
                                this.removeFile(file);
                            }
                        }
                    }
                    });
                }
            };
        </script>
    <div class="row">
        <div class="col-md-12 mobile-mb-2">
            <div >
                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 text-white">Photos (10 maximum)
                    <span class="text-danger">*</span> (.png, .jpg, .jpeg), La première sera utilisée pour votre profil</label>
                <div class="cardbox closed">

                       <div class="small">
                        <form action="{{ route('profile-images') }}" class="dropzone" id="my-dropzone" name="file" files="true" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
                        </form>
                      </div>
                </div>
            </div>
        </div>
    </div>

        <form method="POST" action="{{ route('step-three-store') }}" enctype="multipart/form-data" id="global-form">
            @csrf
            <div>
				<input type="hidden" name="user_id" id="user_id" value="{{ $user->id }}">
                <div class="flex flex-col md:flex-row">

                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <div class="mb-6">

                            <label for="description" class="block mb-2 text-sm font-medium text-gray-900 text-white">Decrivez vous en quelque ligne.</label>
                            <textarea id="description" name="description" data-key="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500" placeholder="Donnez une brève description de vous"></textarea>

                        </div>
                        @error('description')
                        <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                    @enderror
                    </div>



                </div>
                <div class="flex flex-col md:flex-row">

                    <div class="w-full flex-1 mx-2 svelte-1l8159u">
                        <label for="height" class="block mb-2 text-sm font-medium text-gray-900 text-white">Selectionnez un ou plusieurs Services</label>

                        <select id="services" data-key="services" name="services[]" multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">

                            @foreach ($listServices as $service)
                            @foreach ($service as $s)
                            <option value="{{ $s->id }}">{{ $s->service_name }}</option>
                            @endforeach

                        @endforeach
                        </select>
                        @error('services[]')
                        <p class="mt-2 text-sm text-red-600 text-red-500"><span class="font-medium">Oops! </span>{{ $message }}</p>
                    @enderror
                    </div>



                </div>




            </div>
            <div class="flex  mt-6 mx-4">
                <fieldset>
                    <legend class="sr-only">Checkbox variants</legend>

                    <div class="flex items-center mb-4">
                        <input checked id="checkbox-1" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600" >
                        <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 text-gray-300">I agree to the <a href="#" class="text-blue-600 hover:underline text-blue-500">terms and conditions</a>.</label>
                    </div>

                    <div class="flex items-center mb-4">
                        <input id="checkbox-2" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-blue-600 ring-offset-gray-800 focus:ring-offset-gray-800 focus:ring-2 bg-gray-700 border-gray-600">
                        <label for="checkbox-2" class="ml-2 text-sm font-medium text-white">Je Sousigne avoir +18 ans </label>
                    </div>
                </fieldset>

            </div>
            <div class="flex-auto flex flex-row-reverse">
                <button type="button" class="text-base  ml-2  hover:scale-110 focus:outline-none  px-4 py-2 rounded font-bold cursor-pointer
        hover:bg-teal-600
        bg-teal-600
        text-teal-100
        border duration-200 ease-in-out
        border-teal-600 transition" onclick="processSubmitForm()">Sauvegardez</button>

            </div>
        </form>



    </div>
</div>
@endsection
<script>
    function processSubmitForm(){


	canContinue = true;

	jQuery('#ppt-invalid-fields').hide();

	jQuery(".form-control").removeClass('required-active');



	if(!canContinue){
	return;
	}

	//Validating title

	if(jQuery('#description').val() === "" || jQuery('#description').val() === undefined){
			// steps('5','this');
			jQuery('[data-key="description"]').addClass('required-active');
			jQuery('#ppt-invalid-fields').show();
			jQuery('#ppt-invalid-fields-text').html("Veuillez renseigné la description");
			return false;
	}


 console.log(jQuery('#services').val().length)

    	if(jQuery('#services').val().length === 0 ){
			// steps('5','this');
			jQuery('[data-key="services"]').addClass('required-active');
			jQuery('#ppt-invalid-fields').show();
			jQuery('#ppt-invalid-fields-text').html("Sélectionnez vos différents services");
			return false;
	}

	//Checking if at least 4 images has been successfully uploaded
	let adsDropzone = document.getElementById("my-dropzone");
	let children = adsDropzone.children;
	var numberUpload = 0;
	for (let i = 0; i < children.length; i++) {

		if (Array.from(children[i].classList).includes('dz-success')){
			numberUpload++;
		}
	}

	if(numberUpload < 4){
		jQuery('#ppt-invalid-fields').show();
		jQuery('#ppt-invalid-fields-text').html("Veuillez renseigné au moins 4 images de qualité");
		return false;
	}


		// BUSINESS HOURS PLUGIN
	jQuery('.startTime').attr('name', 'startTime[]');
	jQuery('.endTime').attr('name', 'endTime[]');
	jQuery('.isActive').attr('name', 'isActive[]');


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

		document.getElementById('global-form').submit()

	}

}
</script>
