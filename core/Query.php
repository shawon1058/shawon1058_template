<?php
class Query {
  protected $connection;
  public function __construct($db)
  {
    $this->connection = $db;
  }
}