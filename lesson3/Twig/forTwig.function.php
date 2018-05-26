<?
/*Функция принимает 2 значение - строковое название шаблона и массив для передачи
НАЗВАНИЕ ШАБЛОНА УКАЗЫВАТЬ БЕЗ РАСШИРЕНИЯ*/
function forTwig($template, $data){
  $loader = new Twig_Loader_Filesystem('templates');
  $twig = new Twig_Environment($loader);
  $template = $twig->loadTemplate($template . '.tmpl');
  
  return $template->render($data);
}
