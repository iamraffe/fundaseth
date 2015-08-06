<?php	
	require_once("lib/streams.php");
	require_once("lib/gettext.php");

	ini_set('arg_separator.output', '&amp;');
	ini_set("url_rewriter.tags","a=href,area=href,frame=src,iframe=src,input=src");

	
	session_start();
	header('Cache-control: private'); // IE 6 FIX
	 
	if(isSet($_GET['lang']))
	{
		$locale_lang = $_GET['lang'];
	 
		// register the session and set the cookie
		$_SESSION['lang'] = $locale_lang;
	 
		setcookie('lang', $locale_lang, time() + (3600 * 24 * 30));
	}
	else if(isSet($_SESSION['lang']))
	{
		$locale_lang = $_SESSION['lang'];
	}
	else if(isSet($_COOKIE['lang']))
	{
		$locale_lang = $_COOKIE['lang'];
	}
	else
	{
		$locale_lang = 'es';
	}
	
	$title = array(
		0 => "Inicio | Tu camino a Santiago",
		1 => "Sobre Santiago | Tu camino a Santiago",
		2 => "Itinerario | Tu camino a Santiago",
		3 => "Camino | Tu camino a Santiago",
		4 => "Quienes somos | Tu camino a Santiago",
		5 => "Galería | Tu camino a Santiago",
		6 => "Clausula de protección de datos | Tu camino a Santiago",
		7 => "Reserva | Tu camino a Santiago",
	);
	
	$description = array(
		0 => "Tu camino a Santiago te ofrece una propuesta de ocio diferente. El Camino de Santiago es la ruta de peregrinación más importante de Europa.",
		1 => "El Camino de Santiago ha sido y es un fenómeno cultural, religioso y sociológico posiblemente sin parangón en el mundo.",
		2 => "Realizaremos las etapas de los últimos cien kilómetros del Camino de Santiago Francés. Este es sin duda el itinerario con mayor tradición histórica y el más reconocido.",
		3 => "En Fundaseth somos artesanos del ocio, buscamos recorridos y lugares apropiados para el momento, persona o grupo.",
		4 => "En Fundaseth somos artesanos del ocio, buscamos recorridos y lugares apropiados para el momento, persona o grupo.",
		5 => "Conoce la ruta del camino francés en imagenes.",
		6 => "Clausula de protección de datos.",
		7 => "Reserva tu puesto en nuestro Camino.",
	);
	
	$keywords = array(
		0 => "Camino de Santiago, way of saint james, semana santa, Santiago de Compostela, easter",
	);
	
	if($locale_lang != 'es'){
		$lang = "en";
	}
	else{
		$lang = "es";
	}
	
	$locale_file = new FileReader("locale/$locale_lang/LC_MESSAGES/messages.mo");
	
	$locale_fetch = new gettext_reader($locale_file);
	
	function translator($text){
		global $locale_fetch;
		
		return $locale_fetch->translate($text);	
	}
?>
