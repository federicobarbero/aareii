<!DOCTYPE html>
<html>
	<head>
	<title>Organización Techint - Stand - Encontrá+ Virtual 2014</title>
		<script type="text/javascript" src="js/rotativo.js"></script>
		<?php include '../_empresasImports.html'; ?>
		
		<!-- FANCYBOX --> 
	<link 	rel="stylesheet"		type="text/css"		href="../../../features/fancybox/source/jquery.fancybox.css"  media="screen"/>
	<script type="text/javascript" 	src="../../../features/fancybox/source/jquery.fancybox.pack.js"></script>
		
        <script type="text/javascript"	language="javascript">
	        jQuery(document).ready(function() {
		$(".videoStandTV").click(function() {
			$.fancybox({
				'padding'		: 0,
				'autoScale'		: false,
				'transitionIn'	: 'none',
				'transitionOut'	: 'none',
				'title'			: this.title,
				'width'			: 640,
				'height'		: 385,
				'href'			: this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
				'type'			: 'swf',
				'swf'			: {
				'wmode'				: 'transparent',
				'allowfullscreen'	: 'true'
				}
			});
	
			return false;
		});
	});
	</script> 
				
		 <script type="text/javascript">
		      $.ajax({ url: '../../../logic/php/saveVisit.php',
		            data: {
		            		place: 	"Techint",
		            },
		            type: 'POST',
		            success: function(output){
		                
		            }
		        });
	</script>
	</head>

	<body>
    	<div class="wrapperMedium">
			<?php include '../_empresasHeader.html';    ?>

 			<?php include '../_empresasMenuA.html';      ?>

    		<div id="content">

                <div align="center" style="position: relative;">
                <img src="images/stand.png">
                    
                    <a href="empresa.php"><img id="frontalTechint" src="images/frontal.png"></a>
                    <body onload="banner()">
                        <a href="javascript:ponerURL()" target="_blank">
                            <img id="topUnilever" src="" name="banner" >
                        </a>
                    </body>
                    <img id="middleTechint" src="images/s1mid1.png">

                    <a href="http://encontramas.com.ar/virtual/pages/Inscripcion/inscripcion.php" target="_blank"><img id="maletin_A"     src="../../../features/images/object/maletin_A.png"></a>
                    <a href="ofertasEmpleo.php"><img id="ofertas_A"    src="../../../features/images/object/ofertas_A.png"></a>
                    <a href="agenda.php"><img id="agenda_A"            src="../../../features/images/object/agenda_A.png"></a>
                
                <a class="videoStandTV" title="PEV 2013 - Testimonios" href="https://www.youtube.com/watch?v=IZPGvVxThAE">
			<img id="videoA" src="../../../features/images/play.png" />
		    </a>
		    		    
<!-- REDES SOCIALES -->
                    <div class="social" style="width: 12%">
                        <!-- Facebook -->
                        <a href="https://www.facebook.com/comunidadtjobs" target="_blank">
                            <img src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
                        </a>
                        <a href="https://twitter.com/ComunidadTJobs" target="_blank">
                            <img src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
                        </a>
                    </div>
                
                
                
                
                
                </div>

    		</div>
    		
    		<?php include '../_empresasFooter.html'; ?>
    	</div>
    	<script type='text/javascript'>
    		(function () { 
    			var done = false; 
    			var script = document.createElement('script'); 
    			script.async = true; 
    			script.type = 'text/javascript'; 
    			script.src = 'https://widget.purechat.com/VisitorWidget/WidgetScript'; 
    			document.getElementsByTagName('HEAD').item(0).appendChild(script); 
    			script.onreadystatechange = script.onload = function (e) { 
    				if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
    					var w = new PCWidget({ c: '35aa5837-54dc-4c34-ad17-e01095866708', f: true }); 
    					done = true; 
    				} 
    			}; 
    		})();
    	</script>


	</body>
</html>