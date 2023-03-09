
<?php

if (isset($_POST)) {
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

include "database.php";

$sql = "INSERT INTO MENU (id, Entre, Plat, Dessert, Boisson, Prix) VALUES (null, :entree, :plat, :dessert, :boisson, :prix)"; 


$statment = $dbh->prepare($sql);

$errors=[];
$validationEntree = (strlen($_POST["entrée"]) >= 3);
$validationPlat = (strlen($_POST["plat"]) >= 3);
$validationDessert = (strlen($_POST["dessert"]) >= 3);
$validationBoisson = (strlen($_POST["boisson"]) >= 3);
if (!$validationEntree) {
    array_push($errors, 'Le nom d\'une entrée doit contenir au moins 3 caractères');
}
if (!$validationPlat) {
    array_push($errors, 'Le nom d\'un plat doit contenir au moins 3 caractères');
}
if (!$validationDessert) {
    array_push($errors, 'Le nom d\'un dessert doit contenir au moins 3 caractères');
}
if (! $validationBoisson){
    array_push($errors, 'Le nom d\'une boisson doit contenir au moins 3 caractères');
}

    if(count($errors) === 0) {
        try{
            $reponse = $statment->execute([
                'entree' => $_POST["entrée"],
                'plat' => $_POST["plat"],
                'dessert' => $_POST["dessert"],
                'boisson' => $_POST["boisson"],
                'prix' => $_POST["prix"],
            ]);

            if($reponse === true) {
                header("Location: index.html");
            }

            echo '<p>Votre menu a été ajouté avec succès</p>';
        } 
        catch(Exception $e){
            echo '<p>'. $e->getMessage().'</p>';
        }

    }
    else {
       foreach($errors as $error) {
        echo '<p>'.$error. '</p>';
       }

       echo "<a href='index.html'>Retourner au formulaire </a>";
    }


} 


// Afficher les menus quand statut est à 1 et 0 = désactivité

// Etapes suivantes : 

// Envoyer ce qu'on a récupère dans la base de donnée

    // Récupéré dans le tableau $_POST avec clé "" et la valeur de cette clé
    // Insert into ? dans la page de donné 

    
// Afficher les menus sur la page index.html
    // Inseréer des balises PHP en pour afficher certains menu ou non 
    // require ?? de quoi vers quoi ?
    // Quelles requêtes pour afficher et supprimer un menu en HTML

// Possibilité de mettre sur l'index 1 sectio en plus pour avoir 3 menus au lieu de 2 si ajout d'un nouveau menu à la carte

// Dans la section HTML où il y a les menus 
    // Comment varier les menus ? aller chercher dans le tableau $_POST les valeurs des clés que l'on souhaite ?

?>