<?php
	
	if(isset($_POST['getAllOffers'])){

		$con = mysql_connect('localhost','root','C4ch0bs4s3124');
		mysql_select_db('encontramas_test',$con);
		mysql_query("SET NAMES 'utf8'", $con);
		
		if (!$con)
		{
		  	die('Could not connect: ' . mysql_error($con));
		}
  
			
		$sql="SELECT job_offer.id as id, jobTitle, jobDescription, jobStudiesAreas, jobMinimumStudies, jobLanguages, jobContractType, jobShift, jobDatePublished, jobDateClose, enabled, company_name
		FROM job_offer, company WHERE company.id = job_offer.companyid AND enabled = 1";
		$result = mysql_query($sql, $con);

		if(mysql_num_rows($result) == 0){
				echo "No hay ofertas";
				return;
		}
		else{
			$jsontext = '{"jobOffers":[';
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
		    
			    $jsontext .= "{";
			    $jsontext .= '"id":'.'"'.$row["id"].'",';
			    $jsontext .= '"titulo":'.'"'.$row["jobTitle"].'",';
			    $jsontext .= '"descripcion":'.'"'.$row["jobDescription"].'",';
			    $jsontext .= '"areasEstudio":'.'"'.$row["jobStudiesAreas"].'",';
			    $jsontext .= '"estudiosMinimos":'.'"'.$row["jobMinimumStudies"].'",';
			    $jsontext .= '"lenguajes":'.'"'.$row["jobLanguages"].'",';
			    $jsontext .= '"tipoContrato":'.'"'.$row["jobContractType"].'",';
			    $jsontext .= '"jornadaTrabajo":'.'"'.$row["jobShift"].'",';
			    $jsontext .= '"fechaPublicacion":'.'"'.$row["jobDatePublished"].'",';
			    $jsontext .= '"fechaCierre":'.'"'.$row["jobDateClose"].'",';
			    $jsontext .= '"habilitado":'.'"'.$row["enabled"].'",';
			    $jsontext .= '"empresa":'.'"'.$row["company_name"].'"';
			    $jsontext .= "},";
			}
			$jsontext = substr_replace($jsontext, '', -1);
			$jsontext .= "]}";
			echo $jsontext;
		}
	

		mysql_close($con);
	}
	else if(!isset($_POST['getAllOffers'])){
		$companyId = $_POST['companyid'];
		$con = mysql_connect('localhost','root','C4ch0bs4s3124');
		mysql_select_db('encontramas_test',$con);
		mysql_query("SET NAMES 'utf8'", $con);
		
		if (!$con)
		{
		  	die('Could not connect: ' . mysql_error($con));
		}

		$sql="SELECT job_offer.id as id, jobTitle, jobDescription, jobStudiesAreas, jobMinimumStudies, jobLanguages, jobContractType, jobShift, jobDatePublished, jobDateClose, enabled, company_name
			FROM job_offer, company WHERE company.id = job_offer.companyid AND job_offer.companyid = '$companyId' AND enabled = 1";
		$result = mysql_query($sql, $con);

		if(mysql_num_rows($result) == 0){
				echo "No hay ofertas";
				return;
		}
		else{
			$jsontext = '{"jobOffers":[';
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
			{
		    
			    $jsontext .= "{";
			    $jsontext .= '"id":'.'"'.$row["id"].'",';
			    $jsontext .= '"titulo":'.'"'.$row["jobTitle"].'",';
			    $jsontext .= '"descripcion":'.'"'.$row["jobDescription"].'",';
			    $jsontext .= '"areasEstudio":'.'"'.$row["jobStudiesAreas"].'",';
			    $jsontext .= '"estudiosMinimos":'.'"'.$row["jobMinimumStudies"].'",';
			    $jsontext .= '"lenguajes":'.'"'.$row["jobLanguages"].'",';
			    $jsontext .= '"tipoContrato":'.'"'.$row["jobContractType"].'",';
			    $jsontext .= '"jornadaTrabajo":'.'"'.$row["jobShift"].'",';
			    $jsontext .= '"fechaPublicacion":'.'"'.$row["jobDatePublished"].'",';
			    $jsontext .= '"fechaCierre":'.'"'.$row["jobDateClose"].'",';
			    $jsontext .= '"habilitado":'.'"'.$row["enabled"].'",';
			    $jsontext .= '"empresa":'.'"'.$row["company_name"].'"';
			    $jsontext .= "},";
			}
			$jsontext = substr_replace($jsontext, '', -1);
			$jsontext .= "]}";
			echo $jsontext;
		}
	

		mysql_close($con);
	}
?>