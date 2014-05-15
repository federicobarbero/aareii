$(document).ready(function(){
  // we call the function
  getJobOffers();
});

function getJobOffers()
  {
    var offers;
    var company_id = getSession();
    $.ajax({ 
      url: '../../../logic/php/getCompanyJobOffers.php',
      data: 
      {
          companyid : company_id,
      },
        type: 'POST',
        success: function(output) 
        {
        	if(output == "No hay ofertas"){
        	
        	}else{
	          offers = JSON.parse(output);
	          fillOffers(offers);
          	}
        }
      });
  }

function fillOffers(offers)
{
  $('#tableOutput tbody').empty();

  for(var i=0;i<offers.jobOffers.length;i++)
      $('#tableOutput tbody').append(''+
      '<tr><td width="6%" class="cellCompany">'+
      '<a>' + offers.jobOffers[i].empresa + '</a>'+
      '</td>'+
      '<td class="cellTitle">'+
        '<a>' + offers.jobOffers[i].titulo + '</a>'+
      '</td>'+
      '<td class="cellDescription">'+
        offers.jobOffers[i].descripcion +
      '</td>'+                
      '<td class="cellWide">'+
        offers.jobOffers[i].areasEstudio +
      '</td>'+
      '<td>'+
        offers.jobOffers[i].estudiosMinimos +      
      '</td>'+
      '<td class="cellWide">'+
        offers.jobOffers[i].lenguajes +          
      '</td>'+
      '<td>'+
        offers.jobOffers[i].tipoContrato +                      
      '</td>'+
      '<td>'+
        offers.jobOffers[i].jornadaTrabajo +                            
      '</td>'+         
      /*'<td class="cellDate">'+
        offers.jobOffers[i].fechaPublicacion +                            
      '</td>'+ 
      '<td class="cellDate">'+
        offers.jobOffers[i].fechaCierre + 
      '</td>'+*/
      '<td class="cellId" style="display:none;">'+ 
        offers.jobOffers[i].id +
      '</td>'+
      /*'<td>'+
      '<a href="postularse.php?idOferta="+offers.jobOffers[i].id+""><input type="button" class="button" value="Postúlese"></a>'+
    '</td>*/'</tr>');
}