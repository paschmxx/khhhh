<?php
function renderArticle($articles){
    foreach ($articles as $article){
        $title = isset($article['title']) ? $article['title'] : '';
        $description = isset($article['description']) ? $article['description'] : '';
        $image = isset($article['image']) ? $article['image'] : '';
        ?>
            <article class="article">
              <header class="article__header">
                <img class="article__icon" src="<?php echo $image; ?>" alt="icon">
                <h3 class="article__title"><?php echo $title; ?></h3>
               </header>
                <p class="article__text"><?php echo $description; ?></p>
            </article>
        <?php
    }
}