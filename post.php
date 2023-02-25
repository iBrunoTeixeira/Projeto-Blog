<body>
    <?php 

    include_once "templates/header.php";
    require_once("data/function.php");

    if(isset($_GET['id'])){

        $postId = $_GET['id'];
        $currentPost;

        
    }
    ?>
    <main id="post-container">
        <div class="content-container">
            <h1 id="main-title"><?= $post['titulo']; ?></h1>
            <p id="post-description"><?= $post['descricao'] ?></p>
            <div class="img-container">
                <img src="img/<?= $post['img'] ?>" alt="<?= $post['titulo']; ?>">
            </div>
            <p id="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim recusandae illo aliquam beatae asperiores iusto, debitis eligendi? Nobis labore vel similique debitis placeat officia nemo ad quod, tempora voluptates delectus.
            Fugiat magnam, officiis maiores dolore incidunt quae harum. Nostrum asperiores illum cum quam non porro voluptatum expedita sit, doloribus laboriosam consequuntur minima, qui error laudantium eum, ipsa perspiciatis aut totam.
            Fugit molestiae qui reiciendis, reprehenderit nostrum optio. Illo provident, quibusdam ipsa explicabo assumenda, cupiditate numquam veritatis fuga dolores delectus maxime maiores dolorum molestias nisi vel nam cumque quas qui quia.
            Aut id debitis dolor cupiditate illo quod nam doloribus quasi nobis porro, natus doloremque exercitationem similique, voluptas reprehenderit qui! Culpa tempora veniam voluptatibus dignissimos esse nam reprehenderit voluptas architecto eum.
            Numquam amet officiis, quo aperiam commodi magnam aspernatur quisquam error eligendi fugiat possimus. Earum debitis nesciunt, similique aliquam unde aliquid maxime ex, praesentium, perferendis magni provident amet adipisci. Libero, provident?</p>
        </div>
        <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">

            <!-- TAGS -->
            <a href="categoria.php"><?php print_r($tag["nome_tag"]); ?></a>


        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">

            <!-- CATEGORIAS -->


        </ul>
    </aside>
    </main>
    <?php include_once "templates/footer.php"; ?>
</body>
</html>