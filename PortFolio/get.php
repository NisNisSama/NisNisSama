<?php

    class Connexion{
        protected function connect_db(){
            try {
                $connexion = new PDO('mysql:host=127.0.0.1; dbname=visitors; charset=utf8', 'root', '');
                return $connexion;
            }
            catch (PDOException $connex_error){
                die($connex_error->getMessage());
            }
        }
    }

    class Visitor extends Connexion {

        public function get_info($name, $alias){
            try{
                $connexion_check = $this->connect_db();
                $request = 'SELECT name FROM Visitor WHERE name = "'.$name.'" AND alias = "'.$alias.'"';
                $result = $connexion_check->prepare($request);
                $result->execute();
                return $result;
            }
            catch(PDOException $error){
                return $error->getMessage();
            }
        }

        public function sign_up($name, $category, $alias){
            try{
                $connexion_check = $this->connect_db();
                $request = 'INSERT INTO Visitor(name, alias, category, nb_visit) VALUES(?, ?, ?, 1)';
                $result = $connexion_check->prepare($request);
                $result->bindValue(1, $name, PDO::PARAM_STR);
                $result->bindValue(2, $alias, PDO::PARAM_STR);
                $result->bindValue(3, $category, PDO::PARAM_STR);

                $result->execute();
                return $result;
            }
            catch(PDOException $data_error){
                return $data_error->getMessage();
            }
        }

        public function visit($name, $alias){
            try{
                $connexion_check = $this->connect_db();
                $request = 'UPDATE Visitor SET nb_visit=nb_visit+1 WHERE name="'.$name.'" AND alias = "'.$alias.'"';
                $result = $connexion_check->prepare($request);

                $result->execute();
                return $result;
            }
            catch(PDOException $request_error){
                return $request_error->getMessage();
            }
        }
    }



?>