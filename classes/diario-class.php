<?php 



class Diario{

    public function getDiario(){
        $array = array();
        global $pdo;

        $sql = $pdo->prepare("SELECT * FROM anuncios");
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }

        return $array;
    }


    public function addDiario($data,$texto){

    	global $pdo;

    	$sql = $pdo->prepare("INSERT INTO anuncios SET data = :data, texto = :texto");
    	$sql->bindValue(":data",$data);
    	$sql->bindValue(":texto",$texto);
    	$sql->execute();

    }

    public function excluirDiario($id){
        global $pdo;

        $sql = $pdo->prepare("DELETE FROM anuncios WHERE id = :id");
        $sql->bindValue(":id",$id);
        $sql->execute();
    }



}



?>