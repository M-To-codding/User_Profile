<!DOCTYPE html>
<html>
<body>

<h1>Sum form</h1>
<form method="post" name="sum" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="login">Login
    <input type="text" name="login">
    </label>
    <label for="mail">E-mail
    <input type="text" name="mail">
    </label>
    <label for="passw">Password
    <input type="text" name="passw">
    </label>
    <button type="submit" >
    Submit
    </button>
</form>

</body>
</html>