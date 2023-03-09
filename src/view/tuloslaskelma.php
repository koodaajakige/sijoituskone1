<?php $this->layout('template', ['title' => 'Tuloslaskelma']) ?>


<!DOCTYPE html>
<meta charset="UTF-8">
<h1>Yrityksen tuloslaskelma</h1>

<p>Syötä alle yrityksen tiedot:</p>
<form method=POST action=tuloslaskelma.php>
Yrityksen nimi:
<br><textarea rows=1 cols=40 name=nimi></textarea><br><br>
Vuosi:
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
<input type=submit value='LASKE'><br><br>
Liikevoitto/tappio:
<p>TÄHÄN LASKELMA<p>
</form>

<form>
<br>
Rahoitustuotot ja -kulut:
<br><textarea rows=1 cols=40 name=rkulut></textarea><br><br>
<input type=submit value='LASKE'><br><br>
Voitto/tappio ennen tilinpäätössiirtoja ja veroja:
<p>TÄHÄN LASKELMA<p>
</form>

<form>
<br>
Tuloverot:
<br><textarea rows=1 cols=40 name=verot></textarea><br><br>
Liiketoiminnan muut kulut:
<br><textarea rows=1 cols=40 name=muut></textarea><br><br>
<input type=submit value='LASKE'><br><br>
Tilikauden voitto/tappio:
<p>TÄHÄN LASKELMA<p>
<br><br>
</form>

</body></html>
