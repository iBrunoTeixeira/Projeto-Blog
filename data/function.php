<?php 





function chamarTag($id){

    require_once("db.php");

    $query = "SELECT * FROM relacao WHERE id_post = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id",$id);

    $stmt->execute();

    $relacao = $stmt->fetch(PDO::FETCH_ASSOC);

    print_r($relacao);
};