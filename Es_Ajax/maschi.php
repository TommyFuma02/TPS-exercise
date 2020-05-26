<?php
//array che contiene i nomi maschili
$nomi_maschili = array("Claudio","Franco","Luca","Matteo","Gabriele","Nanni","Paolo","Pietro","Vincenzo","Alessandro","Riccardo","Marco","Michelle","Antonio","Giuseppe","Arnoldo","Uberto","Umberto");

// salvo campo GET letto dalla pagina precedente
$q = $_GET["stringa"];
$response = "";
// verifica se campo esiste
if (strlen($q) > 0){
  $risposta = "";
  // ciclo di ricerca nell'array
  for($i = 0; $i < count($nomi_maschili); $i++){
    // controllo se nome trasformato in minuscolo è stato trovato
    if (strtolower($q) == strtolower(substr($nomi_maschili[$i], 0, strlen($q)))){
      // viene aggiunto il nome alla stringa separandolo dal tag di invio a capo
      $risposta .= $nomi_maschili[$i] . "<BR>";
    }
  }
}
// verifico se $risposta è vuota restituisco stringa "Nessun nome trovato"
if ($risposta == ""){
  $response = "Nessun nome trovato";
}
else{                       //assegnazione stringa di risposta
  $response = $risposta;
}
// invio risposta alla pagina chiamante
echo $response;
?>

