/* ARRAY DE IMAGENES */
ads = new Array(3);
ads[0] = "http://www.encontramas.com.ar/virtual/pages/Empresas/DJV/images/tv1.png";
ads[1] = "http://www.encontramas.com.ar/virtual/pages/Empresas/DJV/images/tv2.png";
ads[2] = "http://www.encontramas.com.ar/virtual/pages/Empresas/DJV/images/tv3.png";

/* ARRAY DE URLs 
arrayURLs = new Array(3);
arrayURLs[0] = ""
arrayURLs[1] = ""
arrayURLs[2] = ""*/

//variable para llevar la cuenta de las imagenes
var longuitudArray = ads.length;
var contador = 0

// Cojemos un numero aleatorio
contador = Math.floor((Math.random() * longuitudArray))

// Cambia la imagen cada segundo en este ejemplo
var tiempo = 4// En segundos
var timer = tiempo * 1000;

function banner() {
	contador++;
	contador = contador % longuitudArray
	$("#TvD").fadeOut(300, function() {
        	$("#TvD").attr('src',ads[contador]);
    	}).fadeIn(300);
    	
	setTimeout("banner()", timer);
}

function ponerURL() {
	contador2 = contador;
	url = window.open(arrayURLs[contador2]);
	return false;
}