<?php
class db {
  public static function connect($config)
  {
    return new PDO($config['dsn'], $config['username'], $config['password'], $config['options'] );
  }
}