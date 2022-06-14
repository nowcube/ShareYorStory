<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bulma.min.css">
    <title>故事来喽</title>
</head>

<body>


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
?>

    <div class="container is-max-desktop">
        <section class="hero">
          <div class="hero-body has-text-centered">
            <p class="title">
                请欣赏精彩的故事集
            </p>
            <p class="subtitle">
            在下面展示各位的故事
            </p>
            </div>
        </section>
        <div class="hero-foot">
        <a class="button is-info is-light is-outlined" href="index.php">
          <span class="icon">
            🏡
          </span>
          <span>回首页</span>
        </a>

        <a class="button is-success is-light is-outlined" href="write_story.php">
          <span class="icon">
            ✍️
          </span>
          <span>开始写</span>
        </a>
      </div>
        <hr />
    </div>

    <?php
    $sql="select * from story";
    $result = $conn->query($sql);
 
    if ($result->num_rows > 0) {
        // 输出数据
        while($row = $result->fetch_assoc()) {
            

            echo "
                <div class=\"container is-max-desktop\">
                    <article class=\"media\">
                        <div class=\"media-content\">
                            <div class=\"content\">
                                <p>
                                    <strong>#".$row["story_id"]." ".$row["story_title"]." </strong> <small>@".$row["story_author"]."</small> <small>".$row["story_date"]."</small>
                                    <br>
                                    ".$row["story_content"]."
                                </p>
                            </div>
                    </article>
                    <hr />
                </div>
            ";

            // echo "编号: " . $row["story_id"]. "";
            // echo "<br />";
            // echo "标题: " . $row["story_title"]. "";
            // echo "<br />";
            // echo "作者：" . $row["story_author"] . "";
            // echo "<br />";
            // echo "故事内容：" . $row["story_content"] . "";
            // echo "<br />";
            // echo "日期：" . $row["story_date"] ."";
            // echo "<hr />";
        }
    } else {
        echo "0 结果";
    }
    $conn->close();
?>


</body>

</html>