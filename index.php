<?php 

include ('models/database.php'); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier TP php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="m-5 text-center">
    <h1>Premier TP PHP - Affichage des posts</h1>
    
    <table class='table mt-5'>
    <tr>
    <th>#</th>
    <th>Title</th>
    <th>Description</th>
    <th>Actif ?</th>
    <th>Créé le</th>
    <th>Commentaires</th>
    </tr>

   <?php 


   $posts = retournerLesPosts();
   
   foreach ($posts as $post) {

    echo '<tr>' . 

       '<td>' . $post['id'] . '</td>' .
       '<td>' . $post['title'] . '</td>' .
       '<td>' . $post['description'] . '</td>.
       <td>';
       
       // Traitement utilisateur actif ou non
       if ($post['active'] == 1) { echo 'Oui'; } else { echo 'Non'; }

    echo '</td>'.
        '<td>' . $post['created_at'] . '</td>' .
        '<td>' . '<a href="/commentaires.php/?postid=' . $post['id'] . '"> Voir </a>' . '</td>' .

       '</tr>'; 

    } ?> 

    </table>

</body>
</html>
