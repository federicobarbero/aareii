<?php 
	session_start(); 
	$_SESSION['company'] = neobiz; 
	$_SESSION['company_id'] = ; 
?> 
<!DOCTYPE html>
<html>
	<head>
		<title>Agenda</title>

    	<?php include '../_empresasImports.html'; ?>
   		<link 	rel="stylesheet" 	href="../../../css/agenda.css"											/>
	</head>

	<body>
    	<div class="wrapperMedium">
       		<?php include '../_empresasHeader.html'; 	?>

    		<?php include '../_empresasMenu.html'; 		?>

    		<?php include '../_empresasAgenda.html'; 	?>

    		<?php include '../_empresasFooter.html'; 	?>

    	</div>
	</body>
</html>
