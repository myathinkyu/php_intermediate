<?php

//include ".../app/config/db.php";

// $password = "123123";
// $hashpass = "$2y$10$9xTIpZKKqrA4.Nu5inE5WukDL2x0/oBEqrlocHdxzUBjcGw3AfnoG";

// $hashpass = password_hash($password, PASSWORD_DEFAULT, ['cost' => 10]);
// echo $hashpass;

// $con = password_verify($password,$hashpass);
// echo $con ? "TRUE" : "FALSE";

// $name = "maybel";
// $stmt = $db->prepare("SELECT * FROM users WHERE name=:name");
// $stmt->execute([
//     "name" => $name
// ]);

// $result=$stmt->fetchAll(PDO::FETCH_OBJ);
// echo "<pre>" . print_r($result,true) . "</pre>"

//echo "<pre>" . print_r($_SERVER, true) . "</pre>";
//ini_set("display_errors","off");
//     $stmt->bindValue(":name",$name,PDO::PARAM_STR);
//     echo $_GET['url'];  
// phpinfo();

?>

<!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
     <input type="text" name="name" id=""><br><br>
     <input type="submit" value="Login">
    </form> -->

<?php

include_once "db.php";

$date = new DateTime('+1day');
//echo $date->getTimestamp();
setcookie("token",time(),$date->getTimestamp());
$db = new DB();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    if($db->insert($name,$email,$comment))
        header("Location:index.php");
    else
        echo "<script>alert('Comment Insert Fail!');</script>";
}else{
    $comments = $db->getAllComment();
    
}
 
?>

<style>

    *{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-size: 16px;
    }

    .wrapper{
        width: 500px;
        height: 505px;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
        margin: auto;
        border:1px solid #ddd;
        padding: 20px;
    }

    form{
        width: inherit;
    }

    textarea, input:not([type="submit"]){
        width: inherit;
        padding: 5px; 
    }

    input[type="submit"]{
        background: darkgray;
        padding: 5px;
        font-size: 16px;
        color: white;
        float: right;
    }

    .pannel{
        height: 100px;
        background-color: #eee;
        overflow: scroll;
    }

    ul{
        list-style: none;   
        padding: 0;
    }

    li{
        border-bottom: 1px solid #ddd;
        padding: 5px 0;
    }

    li>span{
        padding-left: 10px;
    }

    .clear{
        clear: both;
    }

    h2{
        text-align: center;
        font-size: 18px;
    }

</style>

<div class="wrapper">
    <h2>Comment Below Sir!</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" id="name" placeholder="name"><br><br>
        <input type="email" name="email" id="email" placeholder="email"><br><br>
        <textarea name="comment" id="comment" rows="10"></textarea><br><br>
        <input type="submit" value="comment" >
        <div class="clear"></div>
    </form>

    <div class="pannel">
        <ul>
            <?php foreach ($comments as $comment) : ?>
                <li>
                    <span><?php echo $comment->name; ?></span>
                    <span><?php echo $comment->email; ?></span>
                    <span><?php echo $comment->comment; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div> 