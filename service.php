<?php

    include 'usuarios.php';
    class service {

        public function get( $id = null) {

            if ($id) 
                return usuarios::select($id);
            else
                return usuarios::selectAll(); 

        }



    }

?>