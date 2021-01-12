<?php
include('utils\array_data.php');
include('utils\functions.php');


include('view\template\header.php');

include('view\form.php');
$portrait = '';    
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // attention il faudra bien sécuriser les données car la création de variable dynamique peut entrainer des failles de sécurité
  echo extract_data(${'portrait'.$_POST['profil']});
}

include('view\template\footer.php');

?>