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
                <div>
                    <label for="title">Add title</label>
                    <input type="text" id="title"/>
                </div>
                <div>
                    <label for="content">Add content</label>
                    <textarea id="content" name="content"></textarea>
                </div>
                <button type="submit">
                    Save
                </button>
            </form>
        </section>
    </main>


<?php
require_once(ROOT . '/views/including/_include_footer.php');
?>