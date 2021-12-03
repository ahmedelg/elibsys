<?php

namespace db\Database;

use mysqli;

class Database
{
  private $_conn;
  private static $_instnc;
  private $_hst = 'localhost';
  private $_username = 'root';
  private $_userpass = '';
  private $_schema = 'libsys';
  // ------
  function __construct()
  {
    $this->_conn = new mysqli($this->_hst, $this->_username, $this->_userpass, $this->_schema);
    if (mysqli_connect_error()) {
      trigger_error('failure connection...', E_USER_ERROR);
    }
  }
  // ------
  static function DB_INSTANCE()
  {
    if (!(self::$_instnc)) {
      self::$_instnc = new self();
    }
    return self::$_instnc;
  }
  // ------
  function DB_CONN()
  {
    return $this->_conn;
  }
}