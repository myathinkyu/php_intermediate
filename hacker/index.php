<?php

//echo "<pre>" . print_r($_SERVER, true) . "</pre>";

$db = new PDO("mysql:host=localhost;dbname=hacker","root","");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    //$query = $db->query("SELECT * FROM users WHERE name='$name'");
    $stmt = $db->prepare("SELECT * FROM users WHERE name=:name");
    //$stmt->bindParam(":name", $name);
    $stmt->bindValue(":name",$name,PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
    echo "<pre>". print_r($result,true). "</pre>";
}else{
    echo $_GET['url'];
    //$id =$_GET['id'];
    //echo "ID is " . $id . "<br>";
    // $query = $db->query("SELECT * FROM users WHERE id='$id'");
    // $query->execute();
    // $result = $query->fetchAll(PDO::FETCH_OBJ);
    // echo "<pre>". print_r($result,true). "</pre>";
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" id=""><br><br>
    <input type="submit" value="Login">
</form>