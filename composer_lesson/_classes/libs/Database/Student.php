<?php

namespace Libs\Database;

use PDOException;

class UsersTable
{
    private $db = null;

    public function __construct(MySQL $db)
    {
        $this->db = $db->connect();
    }
  public function getAll()
  {
    $statement = $this->db->query("
            SELECT *  FORM students
        ");

    return $statement->fetchAll();
  }

 }