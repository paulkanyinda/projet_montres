<?php
try
 {
 $bdd = new PDO ('mysql : host = localhost ; dbname = montres ', 'root ', ''
);
 }
 catch ( Exception $e)
 {
 die ('Erreur : ' . $e -> getMessage ());
 }
 ?>