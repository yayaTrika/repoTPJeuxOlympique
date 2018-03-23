<?php

    class Discipline extends Controller
    {
        public function __construct()
        {
            parent::__construct();
            require_once 'model/DisciplineDB.php';
           // require_once 'menu.php';
        }

        public function index()
        {
            return $this->view->load("discipline/index");
        }

        public function add()
        {
            $db = new DisciplineDB();

            if(isset($_POST['envoyer']))
            {
                extract($_POST);
                if(!empty($libD))
                {
                    $ok = $db->add($libD);
                    $data['ok'] = $ok;
                }
                return $this->view->load('discipline/add', $data);
            }
            else
            {
                return $this->view->load('discipline/add');
            }

        }

        public function edit($id)
        {
            $db = new DisciplineDB();

            $data['discipline'] = $db->getDisciplineByID($id);

            return $this->view->load("discipline/update",$data);
        }

        public function update()
        {
            $db = new DisciplineDB();

            if(isset($_POST['modifier']))
            {
                if(!empty($_POST['val2']) )
                {
                    extract($_POST);
                      $db->update($val1,$val2);

                    return $this->liste();

                }
            }
           // return $this->view->load("discipline/liste");
        }

        public function liste()
        {
            $db = new DisciplineDB();

            $data['liste'] = $db->listeDiscipline();

            return $this->view->load("discipline/liste",$data);
        }
    }


?>