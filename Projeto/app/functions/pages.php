

<?php

function load(){

  $filtrar_pagina = filter_input(INPUT_GET,'page');
  $page = strip_tags($filtrar_pagina);  
  /*
  echo("<pre>");
  var_dump($_SERVER["REQUEST_URI"]);
  echo("</pre>");
  echo("<br>");
  echo("<br>");

  switch($_SERVER["REQUEST_URI"]) {
    case '/projeto/public/':
        $page = 'pages/home.php';
        break;
    case '/projeto/teste':
        $page = "./teste.php";
        break;
    case '/projeto/criar':
        $page = "pages/create_user.php";
        break;
    default:
        $page = "pages/{$page}.php";
}
*/

   if (empty($page)) {
    $page = 'pages/home.php';
    
   } else {
     $page = "pages/{$page}.php";
   }

 
  if (!file_exists($page)) {
    throw new \exception("Algo de errado esta acontecendo");


  } 
  return $page;
  
}

?>
