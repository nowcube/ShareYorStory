-- 使用本程序之前请先创库，创表

CREATE DATABASE storys;

USE storys;

CREATE TABLE IF NOT EXISTS `story`(
   `story_id` INT UNSIGNED AUTO_INCREMENT,
   `story_title` VARCHAR(255) NOT NULL,
   `story_author` VARCHAR(255) NOT NULL,
   `story_content` VARCHAR(4096) NOT NULL,
   `story_date` VARCHAR(255) NOT NULL,
   PRIMARY KEY ( `story_id` )
)CHARSET=utf8;