<?php
require_once(ROOT . '/views/including/_include_head.php');
?>
<span id="top"></span>

<main class="main-page">

    <section class="s-blog container-wrapper">

        <div class="heading">
            <a href="#">
                <span class="brown">Blog</span>
            </a>
        </div>

        <div class="blog-block">

            <?php foreach ($recordsList as $recordsItem):?>
                <div class="blog-text white-text">
                    <h3>
                        <a href="/blog/<?= $recordsItem['id'];?>">
                            <?= $recordsItem['name'];?>
                        </a>
                    </h3>
                    <p>
                        <?= $recordsItem['content'];?>
                    </p>
                    <p class="reg_date">
                        <?= @$reg_date;?>
                    </p>
                    <p>
                        <a href="/blog/<?= $recordsItem['id'];?>">Read more</a>
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