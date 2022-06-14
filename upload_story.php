<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bulma.min.css">
    <title>上传故事ing...</title>
</head>
<body>


<?php
$title=$_POST["title"];
$author=$_POST["author"];
$content=$_POST["story"];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "storys";
 
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO story (story_title, story_author,story_content,story_date)
VALUES ('".$title."', '".$author."', '".$content."','".date('Y-m-d H:i:s')."')";
 
// echo $sql;

if (mysqli_query($conn, $sql)) {
    echo "故事分享成功！";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);

?>
<div><a href="index.php">回到首页</a></div>
<?php
    $url='index.php';
    //立即跳转至目标页面
    echo "<script>window.location.href='$url';</script>";
?>    
</body>
</html>