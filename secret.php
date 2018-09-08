<?php

if(isset($_POST["mdp"]) AND $_POST['mdp'] === "blanquettedeveau"){
  echo "Le secret de la vie : 42";
} else{
  echo "accès refusé";
}

?>
