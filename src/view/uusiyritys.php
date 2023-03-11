<?php $this->layout('template', ['title' => 'Uusi yritys']) ?>

<!DOCTYPE html>
<meta charset="UTF-8">
<h1>Uusi yritys</h1>

<p>Syötä alle yrityksen tiedot:</p>
<form method=POST action=lisaa>
Yrityksen nimi:
<br><textarea rows=1 cols=40 name=nimi></textarea><br><br>
Liikevaihto:
<br><textarea rows=1 cols=40 name=liikev></textarea><br><br>
Materiaalit ja palvelut:
<br><textarea rows=1 cols=40 name=materia></textarea><br><br>
Henkilöstökulut:
<br><textarea rows=1 cols=40 name=henkilo></textarea><br><br>
Poistot ja arvonalennukset:
<br><textarea rows=1 cols=40 name=poistot></textarea><br><br>
Liiketoiminnan muut kulut:
<br><textarea rows=1 cols=40 name=muut></textarea><br><br>
Rahoitustuotot ja -kulut:
<br><textarea rows=1 cols=40 name=rkulut></textarea><br><br>
Tuloverot:
<br><textarea rows=1 cols=40 name=verot></textarea><br><br>

<h2>Tiedot osakkeista:</h2>
Osakkeiden lukumäärä:
<br><textarea rows=1 cols=40 name=osakelkm></textarea><br><br>

Osakkeen à-hinta:
<br><textarea rows=1 cols=40 name=osakeh></textarea><br><br>
<input type=submit value='TALLENNA'><br><br>
<br><br>
</form>

</body></html>
