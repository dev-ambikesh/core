<?php 

// function helloWorld(){
//   echo "Hello Word";
// }
// helloWorld();

$ambikesh = function(){
  return "This is lambda function";
};

echo $ambikesh();

function helloWorld( $function ){
  return $function;
}

echo helloWorld( function(){
    echo "helloWord";
});

?>