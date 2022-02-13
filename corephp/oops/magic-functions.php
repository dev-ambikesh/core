<?php
/**
 * Magic functions are the , tools to make things easiar in php , you'll have to only use them and make things easiar :)
 * 
 */
  class Person{

    // public $name = "Ambikesh";
    // private $phone = 234435233;
    // public function __construct()
    // {
    //   echo "__Constructor is called <br>";
    // }
    // public function __destruct()
    // {
    //   echo "__Destructor is called <br>";
    // }

    /**
     * toSting is functino which can use to validate the, class's Strings and variable to show, without passing by the object as parameter.
     *
     * @return string
     */
    // public function __toString()
    // {
    //   echo "Person Name is :-" . $this->name . "and phone :-" . $this->phone . "<br>";
    // }

      /**
       * _get method are used to run when we want to access the undefined/Unexisting property of the object.
       *
       * @param [type] $name
       * @return void
       */
      // public function __get( $propName ) 
      // {
      //     if( $propName === 'username' ){
      //       return $this->name;
      //     }
      //     return "Porperty \"$propName\" does Not Exist";
      // }
      
      /**
       * __set method are use when propertyname and value both are not existing in class;
       *
       * @param [type] $name
       * @param [type] $value
       */
      // public function __set( $name, $value)
      // {
      //   if( $name === 'Myname' ){
      //     $this->name = $value;
      //   }
      // }

      /**
       * __call methods are when run , when you're calling undefine function which is not existing in the object and function in the created class , This will handl the exception and you can swap the the methos name with, existing method name.
       *
       * @param stating $name.
       * @param array $arguments Array of argument.
       * @return void
       */
      // public function __call( $name, $arguments )
      // {
      //   if($name === 'GetMobilePhone'){
      //     return $this->getPhone();
      //   } else if( $name === 'setMobilePhone'){
      //     $this->setPhone($arguments[0]);
      //     // If we want to send all argument of the Array. 
      //     call_user_func_array([$this, 'setPhone'] , $arguments );
      //   }
      // }

      // public function getPhone(){
      //   return $this->phone;
      // }
      // public function setPhone( $phone ){
      //   $this->phone = $phone;
      // }

     /**
      * This works in same way such as the call method does, but it's only for the static methods.
      *
      * @param string $name
      * @param array $arguments
      * @return void
      */
    //  public static function __callStatic($name, $arguments)
    //  {
    //    echo "\"$name\" Static methods was called ";
    //  }

    /**
     * This runs when class object is start to created 
     *
     * @return void
     */
    // public function __invoke()
    // {
    //   echo "This is call from Invoke";
    // }

    /**
     * Magic method __sleep is execute before the serialize and unserialize. 
     */

    //  public $name;
    //  private $phone;

    //  public function __construct( $name , $phone )
    //  {
    //    $this->name = $name;
    //    $this->phone = $phone;
    //  }

    //  public function __sleep()
    //  {
    //    unset($this->name);
    //    return ['name'];
    //  }

     /**
      * It runs after the unserialise functions
      */
      // public function __wakeup()
      // {
      //    echo "I am wakeup";
      // }


     public $name;
     private $phone;

     /**
      * It runs after the cloning the class into new object.
      *
      * @return void
      */
     public function __clone()
     {
       
     }


  }

  //Get method

  // $p = new Person();
  // echo $p->username;

  // Set method

  // $p = new Person();
  // echo $p->Myname = 'Ambikesh Set this';

  // Call method.

  // $p = new Person();
  // echo $p->GetMobilePhone();
  // $p->setPhone('11111111');
  // echo $p->GetMobilePhone();

  //  Call satic method.

  // $p = new Person();
  //   Person::hello();

  // Invoke method
  // $p = new Person();
  // echo $p;

  // Sleep function
  $p = new Person( 'ambikesh' , '1111');
  $serialized = serialize($p);
  $newPerson = unserialize($serialized);
  var_dump($newPerson );



?>