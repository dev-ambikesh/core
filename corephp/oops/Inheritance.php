<?php
/**
 * What inheritance :- When any class extents the property of an other class is called Inheritance ,from which class ,the property are inheriting is called parent class and extenting class is called,child class.
 */

  class ParentClass {
    public $property1 = '1';
    public $property2 = '2';
    private $property3 = '3';

    public function getProperty2(){
      //Is this returnig method $this is not in the parent class it is in the child class. this will print 22 , value of 22 property 22
      return $this->property2;
    }

    public function printText( $text ){
      echo $text;
    }

    // Overriding constant
    protected const MYCONSTANT = 'Parent Contant';

  }
/**
 * Note :- You can override the methods and property in the child class , but won't be able to change the visiblity of the property and classes.
 */ 
  class ChildClass extends ParentClass{
    public $property1 = '11';
    public $property2 = '22';
    /**
     * You can not change the visibility of the method you can override the methods in the child class.
     *
     * @return void
     */
    public function getProperty2()
    {
      $result = ParentClass::getProperty2();
      return 'Something : ' . $result;
    }

    public function printText($text)
    {
      echo $text;
    }

    // const MYCONSTANT = 'Child constant';
    public static function getConstant(){
      return self::MYCONSTANT;
    }
  }

  // $obj =  new ChildClass();
  // echo $obj->getProperty2();
  // echo ChildClass::getConstant(); // Output will be Parent Constant

  class Person {
    protected $name;
    protected $age;
    private $phone;

    public function __construct($name , $age , $phone )
    {
      $this->name = $name;
      $this->age  = $age;
      $this->phone = $phone;
    }
    public function getPhone(){
      return $this->phone;
    }
    public function getAge(){
      return $this->age;
    }
    public function getName(){
      return $this->name;
    }

    public function Hello(){
      echo 'Hello from Person Class';
    }
  }
  class Employee extends Person{
    private $salary;
    public function __construct( $name , $age , $phone , $salary )
    {
      parent::__construct( $name , $age ,$phone );
      $this->salary = $salary;
    }

    public function Hello()
    {
      echo 'This is from child Class :' . $this->name;
    }
  }

  class Student extends Person{
    public $studentNumber;
    public function __construct( $name , $age , $phone , $studentNo ){
        parent::__construct($name ,$age , $phone );
        $this->studentNumber = $studentNo;
    }

    public function hello(){
      return "Hello I'm student : $this->name . with No : $this->studentNumber";
    }
  }

  $Emp = new Employee( 'ramsmujh' , '26' , '11111111' , '$200k' );
  $St = new Student( 'Ambikesh' , '26' , '222222' , '11111' );
  echo $St->Hello();
?>