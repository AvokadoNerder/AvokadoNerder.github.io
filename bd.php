<?php
    $db = mysql_connect("localhost","root","");
    mysql_select_db("my_base",$db);
	CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `login` VARCHAR(15) NOT NULL,
    `password` VARCHAR(15) NOT NULL,
    PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=cp1251 AUTO_INCREMENT=1 ;
?>