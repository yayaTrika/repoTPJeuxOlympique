<?php

    class DisciplineDB extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function add($libD)
        {
            if($this->db != null)
            {
                $sql = "INSERT INTO discipline VALUES (NULL ,'$libD')";
                $this->db->exec($sql);
                return $this->db->lastInsertId();
            }
            else
            {
                return null;
            }
        }

        public function getDisciplineByID($idD)
        {
            if($this->db != null)
            {
                $sql = "SELECT * FROM discipline WHERE idD = $idD";
                return $this->db->query($sql)->fetch();
            }
            else
            {
                return null;
            }
        }

        public function update($idD,$libD)
        {
            $sql = "UPDATE discipline SET libD = '$libD' WHERE idD = $idD";
            if($this->db != null)
            {
                return $this->db->exec($sql);
            }
            else
            {
                return null;
            }
        }

        public function listeDiscipline()
        {
            if($this->db != null)
            {
                $sql = "SELECT * FROM discipline";

                return $this->db->query($sql)->fetchAll();
            }
            else
            {
                return null;
            }
        }
    }


?>