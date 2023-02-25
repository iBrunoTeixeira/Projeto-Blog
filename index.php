<?php 

require_once("templates/header.php");



?>

<body>

    <main>
        <div id="title-container">
            <h1>Blog Codar</h1>
            <p>O seu Blog de Programação</p>
        </div>
        <div id="posts-container">
            <?php foreach($posts as $post): ?>
                <div class="post-box">
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