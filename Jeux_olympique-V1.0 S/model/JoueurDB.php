<?php

    class JoueurDB extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function add($nom,$prenom,$idEntraineur,$idD)
        {
            $sql = "INSERT INTO joueur VALUES (null ,'$nom','$prenom',$idEntraineur,$idD)";

            if($this->db != null)
            {
                $this->db->exec($sql);

                return $this->db->lastInsertId();
            }
            else
            {
                return null;
            }
        }

        public function getJoueurByID($id)
        {
            $sql= "SELECT * FROM joueur WHERE id = $id  ";

            if($this->db != null)
            {
                return $this->db->query($sql)->fetchAll();
            }
            else
            {
                return null;
            }
        }

        public function nbreJoueur()
        {
            $sql= "SELECT COUNT(*) AS nb FROM joueur WHERE idEntraineur IS NOT NULL";
            if($this->db != null)
            {
                $nbre = $this->db->query($sql)->fetch();
                return $nbre['nb'];
            }
            else
            {
                return null;
            }
        }

        public function getEntraineurByID($id)
        {
            $sql= "SELECT * FROM joueur WHERE id = $id AND idEntraineur IS NOT NULL ";

            if($this->db != null)
            {
                return $this->db->query($sql)->fetch();
            }
            else
            {
                return null;
            }
        }

        public function listeJoueur()
        {
            $sql = "SELECT * FROM joueur WHERE idEntraineur IS NOT NULL ";

            if($this->db != null)
            {
                return $this->db->query($sql)->fetchAll();
            }
            else
            {
                return null;
            }
        }

        public function listeEntraineur()
        {
            $sql = "SELECT * FROM joueur WHERE idEntraineur IS NULL ";

            if($this->db != null)
            {
                return $this->db->query($sql)->fetchAll();
            }
            else
            {
                return null;
            }
        }

        public function update($id,$nom,$prenom,$idEntraineur,$idD)
        {
            if($this->db != null)
            {
                $sql = "UPDATE joueur SET nom='$nom', prenom = '$prenom', idEntraineur = $idEntraineur,idD = $idD WHERE id = $id";
                return $this->db->exec($sql);
            }
            else
            {
                return null;
            }
        }


    }


?>