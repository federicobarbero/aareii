<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Chat</title>
		<meta   name="description" content="This is page-header (.page-header &gt; h1)" />
		<meta   name="viewport" content="width=device-width, initial-scale=1.0" />

		<link 	rel="stylesheet"	href="../../lib/bootstrap/css/bootstrap.min.css" 				 		 />
		<link 	rel="stylesheet"	href="../../lib/bootstrap/css/bootstrap-responsive.min.css" 			 />
		<link 	rel="stylesheet" 	href="../../features/themes/font-awesome/css/font-awesome.min.css" 		 />
		<link 	rel="stylesheet"	href="../../css/empresaStyles.css"  									 /> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js">                 </script>

	</head>

	<body style="background-color: #B10B0B">
    	<div class="wrapperMedium">
            <div id="header">
                <img class="logo" src="images/fiat-web.png" width="25%">
                <img class="rightSide" id="aareiiLogo" src="../../features/images/AAREII-logo.png" width="5.5%">
            </div>

    		<?php include '../sideMenu.html'; ?>

    		<div id="content" style="height:450px;">
    			<div style="margin-left:5%; margin-top:5%">
    				<script id="sid0020000056189548579">
    				(function()
    				{
    					function async_load()
    					{
    						s.id="cid0020000056189548579";
    						s.src='http://st.chatango.com/js/gz/emb.js';
    						s.style.cssText="width:95%;height:350px";
    						s.async=true;
    						s.text='{"handle":"aareii","arch":"js","styles":{"a":"B10B0B","b":100,"c":"FFFFFF","d":"FFFFFF","k":"B10B0B","l":"B10B0B","m":"B10B0B","n":"FFFFFF","q":"B10B0B","r":100,"cvbg":"CC0000","cvw":75,"cvh":40}}';
    						var ss = document.getElementsByTagName('script');
    						for (var i=0, l=ss.length; i < l; i++)
    						{
    							if (ss[i].id=='sid0020000056189548579')
    							{
    								ss[i].id +='_';
    								ss[i].parentNode.insertBefore(s, ss[i]);
    								break;
    							}
    						}
    					}
    					var s=document.createElement('script');
    					if (s.async==undefined)
    					{
    						if (window.addEventListener)
    						{
    							addEventListener('load',async_load,false);
    						}
    						else if (window.attachEvent) 
    						{
    							attachEvent('onload',async_load);
    						}
    					}
    					else 
    					{
    						async_load();
    					}
    				})();
    				</script>
     				
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
<!-- testferiavirtual / feriavirtual

<script>var __v='barc-user-federico.90';</script>
					<script type="text/javascript"> 
					  (function(d){ 
					    var b = d.createElement("script"); b.type = "text/javascript"; b.async = true; 

					    b.src = ("https:" == d.location.protocol ? "https" : "http") + "://barc.com/js/libs/barc/barc.js"; 

					    var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(b, s); 
					  })(document); 
					</script>

-->