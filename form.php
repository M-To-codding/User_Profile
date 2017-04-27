<!DOCTYPE html>
<html>
<body>

<h1>Sum form</h1>
<form method="post" name="sum" action="<?php echo $_SERVER['PHP_SELF'];?>">
    a <input type="text" name="a">
    +
    b <input type="text" name="b">
    <button type="submit" >
    =
    </button>
</form>

</body>
</html>