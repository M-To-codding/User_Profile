<?php
require_once(ROOT . '/views/including/_include_header.php');
?>
    <span id="top"></span>

    <main class="main-page">

        <section class="s-blog container-wrapper">

            <div class="s-blog-heading">
                <a href="#">
                    <span class="heading-color">Blog</span>
                </a>
            </div>

            <div class="blog-block">

                <?php foreach ($recordsList as $recordsItem):?>
                    <div class="blog-text white-text">
                        <h3>
                            <a href="/blog/<?= $recordsItem['id'];?>"  class="records-title-color">
                                <?= $recordsItem['name'];?>
                            </a>
                        </h3>
                        <p class="content-color">
                            <?= $recordsItem['content'];?>
                        </p>
                        <p class="reg-date-color">
                            <?= @date("d-M-Y H:i:s",$recordsItem['reg_date']);?>
                        </p>
                        <p>
                            <a href="/blog/<?= $recordsItem['id'];?>" class="more-button-color">Read more</a>
                        </p>
                    </div>
                <?php endforeach;?>


            </div>
        </section>

    </main>

    <script>
        $(document).ready(function () {

            $(window).scroll(function () {
                if ($(this).scrollTop() > 100) {
                    $('.back-to-top-btn').fadeIn();
                } else {
                    $('.back-to-top-btn').fadeOut();
                }
            });

            $('.back-to-top-btn').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 700);
                return false;
            });

        });
    </script>

<?php
require_once(ROOT . '/views/including/_include_footer.php');
?>