<?php

    require_once '../model/JoueurDB.php';
    if(isset($_POST['value']))
    {
        if($_POST['value'] == 1)
        {
            $db = new JoueurDB();
            $listeJ = $db->listeJoueur();
            if($listeJ != null)
            {
                echo 'vuuuuuuuuu';
                /*
                echo '<table>
                        <tr>
                            <th>Identifiant</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Entrainneur</th>
                            <th>Discipline</th>
                        </tr>';
                foreach( $listeJ as $lj)
                {
                    echo '<tr>
                            <td>'.$lj['id'].'</td>
                            <td>'.$lj['nom'].'</td>
                            <td>'.$lj['prenom'].'</td>
                            <td>'.$lj['idEntraineur'].'</td>
                            <td>'.$lj['idD'].'</td>
                    </tr>';
                }
                echo '</table>';  */
            }

        }
       /* else
        {
            $listeE = $db->listeEntraineur();

            if($listeE != null)
            {
                echo '<table>
                        <tr>
                            <th>Identifiant</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Entrainneur</th>
                            <th>Discipline</th>
                        </tr>';
                foreach( $listeE as $lj)
                {
                    echo '<tr>
                            <td>'.$lj['id'].'</td>
                            <td>'.$lj['nom'].'</td>
                            <td>'.$lj['prenom'].'</td>
                            <td>'.$lj['idEntraineur'].'</td>
                            <td>'.$lj['idD'].'</td>
                    </tr>';
                }
            }

        }  */
    }
?>