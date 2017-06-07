<?php
require_once(ROOT . '/views/including/_include_header.php');
?>

    <main class="change-item-page">
        <div class="heading-bg"></div>
        <section class="container-wrapper">

            <div class="s-blog-heading">
                <a href="#">
                    <span class="heading-color"><?=$title?></span>
                </a>
            </div>

            <form action="" method="post"  class="blog-block">
                <label for="title">Title</label>
                <input type="text" id="title">
            </form>
        </section>
    </main>


<?php
require_once(ROOT . '/views/including/_include_footer.php');
?>