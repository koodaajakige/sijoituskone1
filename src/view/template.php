<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>Sijoituskone - <?=$this->e($title)?></title>
    <meta charset="UTF-8">    
  </head>
  <body>
    <header>
      <h1>Sijoituskone</h1>
    </header>
    <div class="navigointi">
      <ul>
        <li><a href="etusivu" title="Etusivu">Etusivu</a></li>
        <li><a href="tuloslaskelma" title="Tuloslaskelma">Tuloslaskelma</a></li>
        <li><a href="sijoitukset" title="Sijoitukset">Sijoitukset</a></li>
      </ul>
    </div>
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>Sijoituskone by Koodaajat</div>
    </footer>
  </body>
</html>
