<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="bulma.min.css">
  <title>分享你身边的故事</title>
</head>

<body>

  <div class="container is-max-desktop">

  <section class="hero">
      <div class="hero-body has-text-centered">
        <p class="title">
          分享您的精彩故事
        </p>
        <p class="subtitle">
          在下面表单中写下您的故事
        </p>
      </div>
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
    </section>

    <form action="upload_story.php" method="post">
      <br />
      <div>
        <label class="label" for="title">故事标题 </label>
        <input class="input" type="text" name="title" id="title" required>
      </div>
      <br />
      <div>
        <label class="label" for="author">您的昵称 </label>
        <input class="input" type="text" name="author" id="author" required>
      </div>
      <br />
      <div>
        <label class="label">内容 </label>
        <textarea class="textarea" id="story" name="story" rows="5" cols="50" required>
          "这是一个风雨交加的晚上"
        </textarea>
      </div>
      <br />
      <div>
        <input class="button is-primary is-light is-outlined" type="submit" value="分享你的故事">
      </div>
    </form>

  </div>


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

  <script>
    document.addEventListener('DOMContentLoaded', () => {

      // Get all "navbar-burger" elements
      const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

      // Add a click event on each of them
      $navbarBurgers.forEach(el => {
        el.addEventListener('click', () => {

          // Get the target from the "data-target" attribute
          const target = el.dataset.target;
          const $target = document.getElementById(target);

          // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
          el.classList.toggle('is-active');
          $target.classList.toggle('is-active');

        });
      });

    });
  </script>

</body>

</html>