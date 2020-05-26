<?php
//array che contiene i nomi femminili
$nomi_femminili = array("Anna","Brigitta","Carmela","Evelina","Giovanna","Marta","Martina","Manuela","Michela","Monica","Pamela","Paola","Chiara","Eva","Marina","Maddalena","Lisa","Elisabetta","Giuliana");

// salvo campo GET letto dalla pagina precedente
$q = $_GET["stringa"];
$response = "";
// verifica se campo esiste
if (strlen($q) > 0){
  $risposta = "";
  // ciclo di ricerca nell'array
  for($i = 0; $i < count($nomi_femminili); $i++){
    // controllo se nome trasformato in minuscolo è stato trovato
    if (strtolower($q) == strtolower(substr($nomi_femminili[$i], 0, strlen($q)))){
      // viene aggiunto il nome alla stringa separandolo dal tag di invio a capo
      $risposta .= $nomi_femminili[$i] . "<BR>";
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

