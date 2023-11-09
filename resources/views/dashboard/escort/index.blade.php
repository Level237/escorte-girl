@extends('layouts.backoffice.escort.app')
@section('title', __('Tableau de bord'))
<style>


    /* Button used to open the contact form - fixed at the bottom of the page */
    .open-button {
      background-color: #000000;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      opacity: 0.8;
      position: fixed;
      bottom: 23px;
      right: 28px;
      width: 280px;
      z-index: 99;

    }

    /* The popup form - hidden by default */
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid red;

      z-index: 9;
      background-color: rgb(37, 37, 37);
    }

    /* Add styles to the form container */
    .form-container {
      width:300px;
      margin-top: 20px;
      padding-bottom: 70px;
      padding-left:30px;
      padding-top: :270px;
        padding-right: 30px;
      background-color: rgb(37, 37, 37);
    }

    /* Full-width input fields */
    .form-container input[type=text], .form-container input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      border: none;
      background: #f1f1f1;
    }

    /* When the inputs get focus, do something */
    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
      background-color: #ddd;
      outline: none;
    }

    /* Set a style for the submit/login button */
    .form-container .btn {
      background-color: #04AA6D;
      color: white;
      padding: 16px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      margin-bottom:10px;
      opacity: 0.8;
    }

    /* Add a red background color to the cancel button */
    .form-container .cancel {
      background-color: red;
      margin-bottom: 10px;

    }

    /* Add some hover effects to buttons */

    </style>
@section('content')

<button class="open-button" onclick="openForm()">Sécurisé votre compte</button>

<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <p style="color:white;text-align:center"> Votre compte n'est pas encore securisé...</p>
    <a class="btn" href="{{ route('selectQuestion') }}">
        Sécuriser maintenant
    </a>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>
<div class="fs-lg text-600 mb-2 hide-mobile">Bon Retour</div>

<p class="mb-4 hide-mobile">Voici un aperçu de votre compte.</p>

<div ppt-border1="" class="p-3 p-md-4  hide-mobile mt-2 mb-5">


<div class="d-md-flex justift-content-between">


    <div class="d-md-flex border-right pr-3 w-100 mr-3 ">
        <div ppt-icon-size="32" class="mr-3 hide-ipad show-desktop-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg></div>
         <a href="/dashboard//?tab=details&sub=username" class="text-black text-decoration-none">
        <span>
            <div class="text-600">Noms</div>
            <div class="small opacity-8" style="max-width:150px;">demo</div>
        </span>
        </a>
    </div>


    <div class="d-md-flex border-right pr-3 w-100 mr-3 ">
        <div ppt-icon-size="32" class="mr-3 hide-ipad show-desktop-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg></div>
        <a href="/dashboard/my-account//?tab=details&sub=address" class="text-black text-decoration-none">
        <span>
            <div class="text-600">Ma Position</div>
            <div class="small opacity-8" style="max-width:150px;">Douala</div>
        </span>
        </a>
    </div>

    <div class="d-md-flex w-100">
        <div ppt-icon-size="32" class="mr-3 hide-ipad show-desktop-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg></div>
        <a href="/dashboard/my-account//?tab=details&sub=contact" class="text-black text-decoration-none">
        <span>
            <div class="text-600">Mon WhatsApp</div>
            <div class="small opacity-8 text-truncate" style="max-width:150px;">+237 675824349</div>
        </span>
        </a>
    </div>
</div>

</div>


<div class="bg-light p-3 p-md-5 rounded-lg mb-4 position-relative mt-xl-n3" >


<div class="row">
<div class="col-md-6">

<div class="lh-30">
<div class="fs-5 text-600 mb-2">Bon Retour!</div>
Nous mettons constamment à jour et améliorons notre service. Si vous avez des questions ou des commentaires,
contactez-nous – nous serions ravis de les entendre.</div>

<div class="mt-3 fs-sm contactuslink"><a href="/contact/" class="btn-xs btn-system" data-ppt-btn>Contactez-nous</a></div>

</div>
<div class="col-md-6">
<div class="my-4 my-md-0">

<div class="position-relative">
<img src="{{ asset('assets/images/img.jpg') }}" class="img-fluid rounded-lg" alt="img" />

</div>

</div>
</div>

</div>



</div>
<script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
    </script>
@endsection
