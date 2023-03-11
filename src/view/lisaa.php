<?php $this->layout('template', ['title' => 'Yrityksen tietojen lisäys']) ?>

<!DOCTYPE html>
<meta charset="UTF-8">

<?php
$dsn = "mysql:host=localhost;dbname=knykanen";
$user = "db_knykanen";
$pass = getenv("DB_PASSWORD");
$options = [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false, 
];

//hae data lomakkeelta
$nimi = $_POST['nimi'];
$liikev = $_POST['liikev'];
$materia = $_POST['materia'];
$henkilo = $_POST['henkilo'];
$poistot = $_POST['poistot'];
$muut = $_POST['muut'];
$rkulut = $_POST['rkulut'];
$verot = $_POST['verot'];
$osakelkm = $_POST['osakelkm'];
$osakeh = $_POST['osakeh'];

//tai: vekkuli silmukkajippo, luo muuttuja joille tulee sama nimi
//kuin HTML-lomakkeen lomakekentillä
//ja antaa uusille muuttujille lomakekentissä olevat arvot

//foreach($_POST as $key => $value) {
//	$$key = $value;
//}

try {
	$yhteys = new PDO($dsn, $user, $pass, $options);
	if (!$yhteys) { die(); }
	
	//tyhjaa ei lisata
	if (isset($_POST['nimi'])) 
	{
        $stmt = $yhteys->prepare("INSERT INTO firma
        (nimi, liikev, materia, henkilo, poistot, muut, rkulut, verot, osakelkm, osakeh)
        VALUES (?,?,?,?,?,?,?,?,?,?)");
        $stmt->execute([$nimi, $liikev, $materia, $henkilo, $poistot, $muut, $rkulut, $verot, $osakelkm, $osakeh]);
        $id = $yhteys->lastInsertId();
       		
		//tyhjennetään muuttujat (jottei F5 lisaa samaa rivia yha uudelleen
		//fiksumpi tapa $_SESSION
		unset($nimi);
        unset($liikev);
		unset($materia);
        unset($henkilo);
        unset($poistot);
		unset($muut);
		unset($rkulut);
        unset($verot);
        unset($osakelkm);
		unset($osakeh);
		unset($_POST);
		unset($_REQUEST);
		//header("Location: index.php?id=$id");	
		header("Location: sijoitukset");
	}
	
}catch (PDOException $e){
	echo $e->getMessage();
	die();
}

?>

</body></html>
