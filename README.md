## 分享您身边的故事 使用说明

使用本程序之前请先创库，创表

这里说明几个量,默认密码是空，账户是root，数据库名是storys
```php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "storys";
```

```SQL
CREATE DATABASE storys;

USE storys;

CREATE TABLE IF NOT EXISTS `story`(
   `story_id` INT UNSIGNED AUTO_INCREMENT,
   `story_title` VARCHAR(100) NOT NULL,
   `story_author` VARCHAR(40) NOT NULL,
   `story_content` VARCHAR(500) NOT NULL,
   `story_date` DATE,
   PRIMARY KEY ( `story_id` )
)CHARSET=utf8;
```