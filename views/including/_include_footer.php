


<?php
if (isset($_POST['addRecordsButton'])) {
    $title="Create new record";
    include_once (ROOT . '/views/blog/addingRecordsPage.php');
    echo (
    "<script>

document.getElementById('hide-block').style.display='none';
</script>"
    );
}
?>

<footer>

</footer>
</body>
</html>