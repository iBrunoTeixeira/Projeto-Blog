<?php 

require_once("templates/header.php");



?>

<body>

    <main>
        <div id="title-container">
            <h1>Categoria / Blog Codar</h1>
        </div>
        <div id="posts-container-categoria">
            <?php foreach($posts as $post): ?>
                <div class="post-categoria">
                    <img src="<?= $BASE_URL ?>img/<?= $post['img'] ?>" alt=aaaaaaaaaaaaaaaaaaaaaaaaa">
                    <h2 class="post-title">
                        <a href="post.php?id=<?= $post['id'] ?>"><?= $post['titulo'] ?></a>
                    </h2> 
                    <p class="post-description"><?= $post['descricao'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    <?php include_once "templates/footer.php"; ?>
</body>
</html>