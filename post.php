<?php include_once("templates/header.php"); 
    
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;

        foreach ($posts as $post) {
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

<main>
    <div class="content-container">

        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>

        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, voluptates quia reprehenderit facere mollitia error. Suscipit, ex quidem assumenda, illo ab perferendis praesentium odit cumque vel nihil sint quo repudiandae.
            Recusandae ipsum consequatur, a, minima dicta laboriosam est exercitationem deserunt tempora fuga in molestiae natus mollitia consectetur facere! Odio tenetur obcaecati recusandae officiis illo cum voluptatum dolor eaque ipsum saepe?
            Enim magnam a architecto ipsa autem mollitia sit deleniti at doloremque, cum officia repudiandae odit numquam velit natus quo rerum delectus, optio aspernatur quod! Eum nam odio dolore quod fugiat?
        </p>

        <aside id="nav-container">
            <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
        </aside>
    </div>

</main>

<?php include_once("templates/footer.php"); ?>