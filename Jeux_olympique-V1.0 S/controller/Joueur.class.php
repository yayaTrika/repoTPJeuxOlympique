<?php

    class Joueur extends Controller
    {
        public function __construct()
        {
            parent::__construct();
           // require_once 'menu.php';
            require_once 'model/JoueurDB.php';
            require_once 'model/DisciplineDB.php';
        }

        public function index()
        {

            return $this->view->load('joueur/index');
        }

        public function add()
        {
            if(isset($_POST['ajouter']))
            {
                $db = new JoueurDB();
                extract($_POST);
                $idEntraineur;
                if($type =='joueur')
                {
                       $nbre = $db->nbreJoueur();
                    echo 'nbre J= '.$nbre;
                    $idEntraineur = $nbre +1;
                }
                else
                {
                    $idEntraineur = 'NULL';
                }

                $ok = $db->add($nom,$prenom,$idEntraineur,$idD);

            }

                $db1 = new DisciplineDB();
                $data['liste'] = $db1->listeDiscipline();

                return $this->view->load("joueur/add",$data);


        }

        public function update()
        {
            if(isset($_POST['modifier']))
            {
                extract($_POST);
                $db = new JoueurDB();

                $ok = $db->update($id,'$nom','$prenom',$idEntraineur,$idD);
                 $data['ok'] = $ok;
                return $this->view->load("joueur/liste",$data);
            }
            else
            {
                if(isset($_GET['ok']))
                {
                    $db1 = new JoueurDB();
                    $data['listeJ'] = $db1->getJoueurByID($_GET['ok']);
                    return $this->view->load("joueur/update",$data);
                }

            }


        }

        public function liste()
        {
            $db = new JoueurDB();

           // $data['liste'] = $db->liste();

            return $this->view->load("joueur/liste");
        }

        public function scripte()
        {
            if(isset($_POST['value']))
            {
                if($_POST['value'] == 1)
                {
                    $db = new JoueurDB();
                    $dbD = new DisciplineDB();
                    $listeJ = $db->listeJoueur();
                  /* foreach( $listeJ as $lJ)
                   {
                       echo 'id= '.$lJ['id'];
                       echo 'nom= '.$lJ['nom'];
                       echo 'prenom= '.$lJ['prenom'];
                       //echo '<br><br>';
                   }*/

                    if($listeJ != null)
                    {

                        echo '<table class="table table-bordered table-responsive table-striped">
                                <tr>
                                    <th style="text-align: center">Identifiant</th>
                                    <th style="text-align: center">Nom</th>
                                    <th style="text-align: center">Prenom</th>
                                    <th style="text-align: center">Entrainneur</th>
                                    <th style="text-align: center">Discipline</th>
                                    <th style="text-align: center">Action</th>
                                </tr>';
                        foreach( $listeJ as $lj)
                        {
                            echo '<tr>
                                    <td style="text-align: center">'.$lj['id'].'</td>
                                    <td style="text-align: center">'.$lj['nom'].'</td>
                                    <td style="text-align: center">'.$lj['prenom'].'</td>
                                    <td style="text-align: center">'.$lj['idEntraineur'].'</td>';
                            $libelle = $dbD->getDisciplineByID($lj['idD']);
                            echo'  <td style="text-align: center">'.$libelle['libD'].'</td>';

                                    $ok1=$lj['id'];

                            echo '  <td style="text-align: center"><a href="{$url_base}/Joueur/update/$ok"><input class="btn btn-warning" type="submit" name="edit" value="Edit"/></a></td>
                            </tr>';
                        }
                        echo '</table>';
                    }


                }
                else
                 {
                     $db1 = new JoueurDB();
                     $dbDE= new DisciplineDB();
                     $listeE = $db1->listeEntraineur();

                     if($listeE != null)
                     {
                         echo '<table class="table table-bordered table-responsive table-striped">
                                 <tr>
                                     <th style="text-align: center">Identifiant</th>
                                     <th style="text-align: center">Nom</th>
                                     <th style="text-align: center">Prenom</th>
                                     <th style="text-align: center">Entrainneur</th>
                                     <th style="text-align: center">Discipline</th>
                                     <td style="text-align: center">Action</td>
                                 </tr>';
                         foreach( $listeE as $lj)
                         {
                             echo '<tr>
                                     <td style="text-align: center">'.$lj['id'].'</td>
                                     <td style="text-align: center">'.$lj['nom'].'</td>
                                     <td style="text-align: center">'.$lj['prenom'].'</td>
                                     <td style="text-align: center">'.$lj['idEntraineur'].'</td>';
                             $libelleE = $dbDE->getDisciplineByID($lj['idD']);
                             echo'   <td style="text-align: center">'.$libelleE['libD'].'</td>';
                                $ok = $lj['id'];
                             echo '        <td style="text-align: center"><a href="{$url_base}/Joueur/update/$ok"><input class="btn btn-warning" type="submit" name="edit" value="Edit"/></a></td>
                             </tr>';
                         }
                     }

                 }

            }
        }
    }
?>