<?php

  interface DatabaseInterface{
    public function getOrder() :array;
    public function getOrderById( int $id );
    public function createOrder(array $data ) :bool;
    public function updateOrder( int $id , array $data ) : bool;
    public function deleteOrder( int $id) : bool;
  }


  class MysqlDb implements DatabaseInterface{
    public function getOrder() : array
    {
      echo "Calling Method  " . __METHOD__  ;
      return [];
    }
    public function getOrderById(int $id)
    {
      echo "Calling Method " . __METHOD__;
      return $id;
    }
    public function createOrder(array $data): bool
    {
      echo "Calling Method " . __METHOD__;
      return 1;
    }

    public function updateOrder(int $id, array $data): bool
    {
      echo "Calling Method " . __METHOD__;
      return true;
    }
    public function deleteOrder(int $id): bool
    {
      echo "Calling Method " . __METHOD__;
      return true;
    }
  }

  class sqliteDb implements DatabaseInterface{
    public function getOrder() : array
    {
      echo "Calling Method  " . __METHOD__  ;
      return [];
    }
    public function getOrderById(int $id)
    {
      echo "Calling Method " . __METHOD__;
      return $id;
    }
    public function createOrder(array $data): bool
    {
      echo "Calling Method " . __METHOD__;
      return 1;
    }

    public function updateOrder(int $id, array $data): bool
    {
      echo "Calling Method " . __METHOD__;
      return true;
    }
    public function deleteOrder(int $id): bool
    {
      echo "Calling Method " . __METHOD__;
      return true;
    }
  }
  
  class RESTDB implements DatabaseInterface{
    public function getOrder() : array
    {
      echo "Calling Method  " . __METHOD__  ;
      return [];
    }
    public function getOrderById(int $id)
    {
      echo "Calling Method " . __METHOD__;
      return $id;
    }
    public function createOrder(array $data): bool
    {
      echo "Calling Method " . __METHOD__;
      return 1;
    }

    public function updateOrder(int $id, array $data): bool
    {
      echo "Calling Method " . __METHOD__;
      return true;
    }
    public function deleteOrder(int $id): bool
    {
      echo "Calling Method " . __METHOD__;
      return true;
    }
  }

  class Application{
    public $db;

    public function __construct( DatabaseInterface $db )
    {
      $this->db = $db;
    }
  }

  $app = new Application(
    // new MysqlDb()
    // new sqliteDb()
    new RESTDB()
  );

  $app->db->getOrder();
  echo "<br>";
  $app->db->getOrderById(1);
  echo "<br>";
  $app->db->createOrder([]);
  echo "<br>";
  $app->db->updateOrder(1 ,[]);
  echo "<br>";
  $app->db->deleteOrder(1);

?>