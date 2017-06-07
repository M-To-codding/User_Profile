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
                    <textarea id="content" name="content" class="textarea-props" contentEditable="true"></textarea>
                </div>
                <button type="submit">
                    Save
                </button>
            </form>
        </section>
    </main>

    <script>
        document.getElementById('content').style.backgroundColor='#e8e9ea';
        document.getElementById('content').style.resize='none';

    </script>
    <script>

        var textarea = document.querySelector('textarea');

        textarea.addEventListener('keydown', autosize);

        function autosize() {
            var element = this;
            setTimeout(function () {
                element.style.sccText = 'height:auto; padding:0';
                element.style.cssText = 'height:' + element.scrollHeight + 'px';
            },0);

        }
    </script>


<?php
require_once(ROOT . '/views/including/_include_footer.php');
?>