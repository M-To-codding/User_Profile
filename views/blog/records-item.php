<?php
require_once(ROOT . '/views/including/_include_head.php');
?>

    <main class="main-page">

        <section class="s-blog container-wrapper">

            <div class="heading">
                <a href="#">
                    <span class="brown">Blog</span>
                </a>
            </div>

            <div class="blog-block">

                <div class="blog-text white-text">
                    <h3>
                        <?= $recordsItem['name'];?>
                    </h3>
                    <p>
                        <?= $recordsItem['content'];?>
                    </p>
                    <p class="reg_date">
                        <?= @$reg_date;?>
                    </p>
                </div>

                <div class="back-to-list">
                    <a href="/blog">< Back </a>
                </div>
            </div>
        </section>

    </main>


<?php
require_once(ROOT . '/views/including/_include_footer.php');
?>