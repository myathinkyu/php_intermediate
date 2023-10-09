<?php
session_start();
?>

<h1>PHP File</h1>
<form action="post.php" method="post">
    <input type="hidden" name="_token" value="<?php echo $_SESSION["_token"]; ?>">
    <input type="text" name="name" id=""><br><br>
    <input type="email" name="email" id=""><br><br>
    <textarea name="comment" id="" cols="30" rows="10"></textarea><br><br>
    <input type="submit" value="Comment">
</form>