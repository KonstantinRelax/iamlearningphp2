<?
function render($template, $data){
	$loader = new Twig_Loader_Filesystem('templates');
	$twig = new Twig_Environment($loader);
	$template = $twig->loadTemplate($template . '.tmpl'); 

	return $template->render($data);
}
