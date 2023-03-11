<?php

  // Suoritetaan projektin alustusskripti.
  require_once '../src/init.php';

  // Siistitään polku urlin alusta ja mahdolliset parametrit urlin lopusta.
  $request = str_replace($config['urls']['baseUrl'],'',$_SERVER['REQUEST_URI']);
  $request = strtok($request, '?');

  // Luodaan uusi Plates-olio ja kytketään se sovelluksen sivupohjiin.
  $templates = new League\Plates\Engine(TEMPLATE_DIR); 
  
  // Selvitetään mitä sivua on kutsuttu ja suoritetaan sivua vastaava
  // käsittelijä.
  if ($request === '/' || $request === '/etusivu') {
    echo $templates->render('etusivu');
  } else if ($request === '/uusiyritys') {
    echo $templates->render('uusiyritys');
  } else if ($request === '/sijoitukset') {
    echo $templates->render('sijoitukset');
  } else if ($request === '/lisaa') {
    echo $templates->render('lisaa');
  } else if ($request === '/tallennusok') {
    echo $templates->render('tallennusok');
  } else {
    echo $templates->render('notfound');
  }

?> 
