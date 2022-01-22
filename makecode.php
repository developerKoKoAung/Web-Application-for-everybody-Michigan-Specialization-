<?php
$error = false;
$md5 = false;
$code = "";
if (isset($_GET['code'])){
    $code = $_GET['code'];
    if(strlen($code)!= 2){
        $error = "Input must be exactly two character";
    }
    else if($code[0]<"a" || $code[0]>"z" ||
            $code[1]<"a" || $code[1]>"z")
    {
        $error = "Input must be two lower case letters";
    }
    else{
        $md5 = hash('md5', $code);
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Ko Ko Aung MD5</title></head>
<body>
<h1>MD5 cracker</h1>
<?php
if($error != false){
    print '<p style="color:red">';
    print htmlentities($error);
    print "</p>\n";
}
?>
<?php
if($md5 == true){
    echo "<p>MD5 value: ". htmlentities($md5). "</p>";
}
?>
<form action="">
    <input type="text" name="code" value="<?= htmlentities($code) ?>">
    <input type="submit" value="Computer MD5 for CODE" />
</form>
</body>
</html>