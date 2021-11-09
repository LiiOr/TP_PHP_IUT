<?php include ('models/database.php'); ?>


<DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier TP php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="m-5 text-center">
    <h1>Premier TP PHP - Affichage des commentaires </h1>
    
    <table class='table mt-5 text-center'>
    <tr>
    <th>ID</th>
    <th>Description</th>
    <th>Post_Id</th>
    <th>Créé le</th>
    </tr>

   <?php 

    $postid = $_GET["postid"];

    $commentaires = retournerLesCommentaires($postid);

   foreach ($commentaires as $commentaire) {


    echo '<tr>' . 

       '<td>' . $commentaire['id'] . '</td>' .
       '<td>' . $commentaire['description'] . '</td>' .
       '<td>' . $commentaire['post_id'] . '</td>' .
       '<td>' . $commentaire['created_at'] . '</td>' .

       '</tr>'; 

    } ?> 

    </table>

    <a class="btn btn-primary" href="/index.php" role="button">Retour aux posts</a>

</body>
</html>