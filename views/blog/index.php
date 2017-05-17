<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <!-- bxSlider CSS file -->
    <link href="styles/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../../template/css/style.css">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- bxSlider Javascript file -->
    <script src="javascript/jquery.bxslider.min.js"></script>
    <title></title>
</head>
<body>
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
                        <?= $reg_date;?>
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
</body>
</html>