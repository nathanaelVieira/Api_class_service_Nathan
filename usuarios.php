<?php
    require_once 'config.php';
    class usuarios {
        
        public static function select(int $id) {

            $tabela = "usuarios";
            $coluna = "id";

            $conexaoEmPdo = new \PDO(dbDrive.': host='.dbHost.'; dbname='. dbName, bdUser, dbPass);
            $comandoSelecaoSQL = "select * from $tabela where $coluna = id" ;

            $stmt = $conexaoEmPdo->prepare( $comandoSelecaoSQL);
            $stmt->bindValue(':id',, $id);
            $stmt->execute();

            /* rowCount = Contagem de Linhas */
            if ( $stmt->rowCount() > 0) {
                var_dump( $stmt -> fetch( \PDO::FECTH_ASSOC));
                return $stmt -> fetch( \PDO::FETCH_ASSOC);
            } else {
                throw new \Exception("Sem registros");
            }

        }

        public static function selectAll() {
            $tabela = 'usuarios';

            $conexaoEmPdo = new \PDO(dbDrive.': host='.dbHost.'; dbname='. dbName, bdUser, dbPass);
            $comandoSelecionarTodos = "select * from $tabela";
            
            $stmt = $comandoSelecionarTodos -> prepare($conexaoEmPdo);
            $stmt -> execute();

            if ($stmt -> rowCount() > 0)
                return $stmt -> fetchAll(\PDO::FECTH_ASSOC);
            else
                throw new \Exception("Sem registros");
        }




    }



?>