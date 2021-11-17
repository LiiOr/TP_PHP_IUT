<h2>Affichage des posts</h2>


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


   //$posts = retournerLesPosts();
   
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
        '<td>' . '<a href="?action=comments-list&post_id=' . $post['id'] . '"> Voir </a>' . '</td>' .

       '</tr>'; 

    } ?> 

    </table>