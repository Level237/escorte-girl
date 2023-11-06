@extends('layouts.backoffice.escort.app')
@section('title', __('Tableau de bord'))

@section('content')
	
        
<div class="fs-lg text-600 mb-2">Vos Annonces </div>

<p class="mb-4">Vous avez un total de <span class="  ">35</span> annonces. 

  </p>
   

      <div id="ajax_makepayment_form"></div>
            <div class="card mb-5" id="myinvoicesform">
  
        <div class="card-body p-0">
          <div class="overflow-auto"> 
          <table class="table small table-orders">
            <thead>
              <tr>
                <th>Titre</th>
                <th class="text-center">Description</th>
                <th class="text-center">Catégorie</th>
               
                <th class="text-center">Status</th>
                <th class="text-center dashhideme">Actions</th>
              </tr>
            </thead>
            <tbody>
                            <tr class="row-14889" >
                <td><span class="font-weight-bold">
                
                <a href="#" target="_blank">Baiseuse de luxe</a>
                
                
                </span> </td>
                <td class="text-center text-muted">Cc mes bebe d'amour...</td>
                <td class="text-center">Rencontres Sexuelles</td>
            
                <td class="text-center">
				
				
				                
                
                <span class="inline-flex items-center font-weight-bold order-status-icon status-1"> <span class="dot mr-2"></span> 
                <span>Publié</span> </span>
                
                  
                  
                  
                   </td>
                  
                  
                <td class="text-center dashhideme">		<a href="#" ><i class="fa fa-edit me-2 font-success"></i></a>
							<a href="#" data-bs-toggle="modal" data-original-title="test" data-bs-target=""><i class="fa fa-trash font-danger"></i></a>
                                  </td>
              </tr>              
                            <tr class="row-14465" >
                <td><span class="font-weight-bold">
                
                <a href="#" target="_blank">Croqueuse de bits</a>
                
                
                </span> </td>
                <td class="text-center text-muted">Je pine tres fort....</td>
                <td class="text-center">Rencontres Sexuelles</td>
            
                <td class="text-center">
				
				
				                
                
                <span class="inline-flex items-center font-weight-bold order-status-icon status-2"> <span class="dot mr-2"></span> 
                <span>Non Publié</span> </span>
                
                  
                  
                  
                   </td>
                  
                  
                <td class="text-center dashhideme">
							<a href="#" ><i class="fa fa-edit me-2 font-success"></i></a>
							<a href="#" data-bs-toggle="modal" data-original-title="test" data-bs-target=""><i class="fa fa-trash font-danger"></i></a>
                          
                </td>
              </tr>              
                            
                                      
                          </tbody>
          </table>
          </div>
       
                    
    
        </div>
      </div>
      
      
      
                    
          

<script>


jQuery(document).ready(function(){

jQuery(".count-invoices-total").html('76'); 
jQuery(".count-invoices-unpaid").html('0'); 
 

jQuery(".count-balance").html("$2,222,400,798.52");

});




   function CheckFormData()
   { 
   	 
   	var amount = document.getElementById("cashout-amount");
   	var message = document.getElementById("cashout-message");	
    
   
   	if(message.value == '')
   	{
   		alert("Please provide payment method details.");
   		message.focus();
		jQuery("#pdetails").show();
   		message.style.border = 'thin solid red';
   		return false;
   	} 		
   	
   
   	if(amount.value == '')
   	{
   		alert("Please enter a valid amount.");
   		amount.focus();
   		amount.style.border = 'thin solid red';
   		return false;
   	} 
	
	  if(amount.value > 2222400798.52)
   	{
   		alert("Please enter a valid amount.");
   		amount.focus();
   		amount.style.border = 'thin solid red';
   		return false;
   	} 
	
	jQuery("[data-btn-submit]").prop('disabled', true);	
	
	
	
     jQuery.ajax({
           type: "POST",
           url: 'https://es10.premiummod.com/',		
   		data: {
            action: "cashout_new",
			total: 	amount.value,
			msg: 	message.value,
			method: jQuery('#cashout-method').val(),
           },
           success: function(response) {   			 
			
			jQuery('.cashoutformmsg').hide();
   			jQuery('#cashoutform').html('').hide();
   			jQuery('#cashoutnew').show();			
   			
           },
           error: function(e) {
               alert("error "+e)
           }
       });
   	
   	return false;
   }
   
   
</script>
@endsection