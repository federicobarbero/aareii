<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Ofertas de Empleo</title>
		<meta 	name="description" content="This is page-header (.page-header &gt; h1)" />
		<meta 	name="viewport" content="width=device-width, initial-scale=1.0" />

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js" 	type="text/javascript"> 								</script>
        <script src="../../js/completeOffers.js" 	type="text/javascript"> 								</script>

		<link 	rel="stylesheet"	href="../../lib/bootstrap/css/bootstrap.min.css" 				 				/>
		<link 	rel="stylesheet"	href="../../lib/bootstrap/css/bootstrap-responsive.min.css" 					/>
		<link 	rel="stylesheet" 	href="../../features/themes/font-awesome/css/font-awesome.min.css" 			/>
		<link 	rel="stylesheet"	href="../../css/empresaStyles.css"  											/> 
		<link 	rel="stylesheet" 	href="../../css/ofertasStyles.css"						/>
	</head>

	<body>
    	<div class="wrapperMedium">
            <div id="header">
                <img class="logo" src="images/fiat-web.png" width="25%">
                <img class="rightSide" id="aareiiLogo" src="../../features/images/AAREII-logo.png" width="5.5%">
            </div>


    		<?php include '../sideMenu.html'; ?>

    		<div id="content" style="padding-bottom:22%">
    			<div style="margin: 0 auto; padding: 0.5% 4%">
	                <table id="offerTable">
				        <thead>
					        <tr>
						        <th>Puesto</th><th>Descripcion</th><th>Fecha de Publicacion</th>
					        </tr>
				        </thead>
				        <tbody>
	                        <tr>
						        <td> <h5> <a onclick="myFunction()"> Pasante de Envasado </a></h5></td>
						        <td><h5 style="text-align: left">Nuestra busqueda esta orientada a estudiantes avanzados <br> de Ingenieria Quimica,
	                            <br>Ingenieria electromecanica, Ingenieria Mecanica, Ingenieria<br> Electronica o afines para desarrollarse en nuestra Planta<br> Mendoza. Los...</h5> </td>
						        <td><h5>25-Sep-2013</h5> </td>
					        </tr>
				        </tbody>
			        </table>

    			</div>
    		</div>
    		
    		<?php include '../footer.html'; ?>

    	</div>
	</body>

    <script>
	    function myFunction()
	    {
		    window.open("Postularse.html","popUpWindow",'width=300,height=400,toolbar=0,menubar=0,location=0,status=1,scrollbars=0,resizable=0,left=700,top=300');
		    return false;
	    }
	</script>
</html>
