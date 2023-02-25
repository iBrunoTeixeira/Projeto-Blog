<?php 

require_once("db.php");

$query = "SELECT nome_tag FROM tags";

$stmt = $conn->prepare($query);

$stmt->execute();

$tags = $stmt->fetchAll();

if(!empty($_GET['id'])){

    $id = $_GET['id'];

    $query = "SELECT * FROM post WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id",$id);

    $stmt->execute();

    $post = $stmt->fetch(PDO::FETCH_ASSOC);

    $rowCount = $stmt->rowCount();


    if($rowCount > 0 ){
        $query = "SELECT * FROM relacao WHERE id_post = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id",$id);

        $stmt->execute();

        $dados = $stmt->fetch();

        

        $id_tag = $dados["id_tag"];

        if(!empty($id_tag)){
            $query = "SELECT nome_tag FROM tags WHERE id_tag = :id_tag";

            $stmt = $conn->prepare($query);

            $stmt->bindParam("id_tag", $id_tag);

            $stmt->execute();

            $tag = $stmt->fetch(PDO::FETCH_ASSOC); 
        }
    }

}else{
    $query = "SELECT * FROM post";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $posts = $stmt->fetchAll();
}


?>
