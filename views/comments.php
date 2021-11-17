<h2>Affichage des commentaires</h2>

<table class='table mt-5 text-center'>
    <tr>
    <th>ID</th>
    <th>Description</th>
    <th>Post_Id</th>
    <th>Créé le</th>
    </tr>

   <?php 

   foreach ($comments as $commentaire) {


    echo '<tr>' . 

       '<td>' . $commentaire['id'] . '</td>' .
       '<td>' . $commentaire['description'] . '</td>' .
       '<td>' . $commentaire['post_id'] . '</td>' .
       '<td>' . $commentaire['created_at'] . '</td>' .

       '</tr>'; 

    } ?> 

    </table>

    <a class="btn btn-primary" href="/index.php" role="button">Retour aux posts</a>
