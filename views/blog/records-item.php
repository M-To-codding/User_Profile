<?php
require_once(ROOT . '/views/including/_include_header.php');
?>

    <main class="main-page">
        <div class="heading-bg"></div>
        <section class="s-blog container-wrapper">

            <div class="s-blog-heading">
                <a href="#">
                    <span class="heading-color">Blog</span>
                </a>
            </div>

            <div class="blog-block">

                <div class="blog-text white-text">
                    <h3 class="records-title-color">
                        <?= $recordsItem['name'];?>
                    </h3>
                    <p class="content-color">
                        <?= $recordsItem['content'];?>
                    </p>
                    <p class="reg-date-color">
                        <?= date("d-M-Y H:i:s",$recordsItem['reg_date']);?>
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