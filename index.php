<?php 


    require('database.php');
    require('fonctions.php');


    // si on clique la variable d'url qui se trouve au niveau de la page index.view.php
    if (isset($_GET['palmer'])) {
       $requete = $db->query('SELECT * FROM personnes WHERE last_name="palmer"');
       $requete->execute();

       $palmer = $requete->fetchAll(PDO::FETCH_OBJ);
    }else  if (isset($_GET['femme'])) {
        $requete = $db->query('SELECT * from personnes where gender="female"');
        $requete->execute();
 
        $femme = $requete->fetchAll(PDO::FETCH_OBJ);
     }else  if (isset($_GET['paysN'])) {
        $requete = $db->query('select * from personnes where country_code like "N%"');
        $requete->execute();
 
        $paysN = $requete->fetchAll(PDO::FETCH_OBJ);
     }else  if (isset($_GET['google'])) {
        $requete = $db->query('SELECT * from personnes where email like "%google%"');
        $requete->execute();
 
        $google = $requete->fetchAll(PDO::FETCH_OBJ);
     }
     else  if (isset($_GET['parPays'])) {
        $requete = $db->query('SELECT country_code, count(country_code) as nombre from personnes group by country_code');
        $requete->execute();
 
        $parPays = $requete->fetchAll(PDO::FETCH_OBJ);
     }else  if (isset($_GET['age'])) {
        $requete = $db->query('SELECT first_name as prenom, last_name as nom, year(now())-right(birth_date,4) as age from personnes');
        $requete->execute();
 
        $age = $requete->fetchAll(PDO::FETCH_OBJ);
     }else  if (isset($_GET['genre'])) {
        $requete = $db->query('SELECT gender, count(gender) as nombre from personnes group by gender');
        $requete->execute();
 
        $genre = $requete->fetchAll(PDO::FETCH_OBJ);
     }else  if (isset($_GET['dept'])) {
         $requete = $db->query('SELECT nom,prenom, nom_departement from dep NATURAL JOIN membreACS');
         $requete->execute();

         $dept = $requete->fetchAll(PDO::FETCH_OBJ);
   }





    require('index.view.php');
?>