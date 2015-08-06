<?php
	require_once("lib/streams.php");
	require_once("lib/gettext.php");

	ini_set('arg_separator.output', '&amp;');
	ini_set("url_rewriter.tags","a=href,area=href,frame=src,iframe=src,input=src");

	session_start();
	header('Cache-control: private'); // IE 6 FIX

	if(isset($_GET['lang']))
	{
		$locale_lang = $_GET['lang'];

		// register the session and set the cookie
		$_SESSION['lang'] = $locale_lang;

		setcookie('lang', $locale_lang, time() + (3600 * 24 * 30));
	}
	elseif(isset($_SESSION['lang']))
	{
		$locale_lang = $_SESSION['lang'];
	}
	elseif(isset($_COOKIE['lang']))
	{
		$locale_lang = $_COOKIE['lang'];
	}
	else
	{
		$locale_lang = 'es';
	}

	$title = array(
		0 => "Inicio | Fundaseth, S.L.",
		1 => "¿Quienes somos? | Fundaseth, S.L. ",
		2 => "Servicios | Fundaseth, S.L.",
		3 => "Valor Social | Fundaseth, S.L.",
		4 => "Contacto | Fundaseth, S.L.",
		5 => "Condiciones de uso | Fundaseth, S.L"
	);
	$description = array(
		0 => "Fundaseth, S.L. Trabajamos codo a codo con nuestros clientes, grandes, medianas, pequeñas empresas o autónomos, entendiendo sus necesidades y maximizando sus recursos.",
		1 => "En Fundaseth aportamos nuestro granito de arena favoreciendo la integración laboral de los pacientes con cáncer y apoyando iniciativas que buscan mejorar su calidad de vida.",
		2 => "Servicios que ofrece Fundaseth, S.L. Cada proyecto es tan variado como los clientes detras de ellos.",
		3 => "En Fundaseth promovemos la integración laboral de los pacientes y sus cuidadores y empezamos por nosotros mismos: somos un equipo en el que el 80% de nuestros miembros son supervivientes de cáncer.",
		4 => "No sea tímido, contáctenos. Podría ser el comienzo de algo grande.",
		5 => "En cumplimiento de la Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y de Comercio Electrónico (LSSI-CE), FUNDASETH SL informa que es titular del sitio web WWW.FUNDASETH.ES. "
	);

	$keywords = array(
		0 => "Fundaseth",
	);

	if(strcmp($locale_lang,'es') != 0){
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
