<?php
/*
print_r('Hello');
print_r([1,2,3]);
class Person {
 public $name;
 public $age;
}
$person = new Person();
$person->name = "Alice";
$person->age = 25;

Question 1: What is the output of print_r($person);?
Answer:
    HelloArray ([0] => 1 
                [1] => 2 
                [2] => 3 )
*/


/*
var_dump('Hello');
var_dump([1,2,3]);

var_dump($person);
/*
Question 2: What is the output of var_dump($person);?
answer:
    string(5) "Hello" array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
*/

/*
$name = 'Brad'; 
$age = 40; 
$hasKids = true; 
$cashOnHand = 10.5;
var_dump($cashOnHand);

Question 3: What is the output of var_dump($cashOnHand);?
answer:
    float(10.5)
*/

/*
$name = 'Brad'; 
$age = 40; 
echo "$name is $age years old";
echo "${name} is ${age} years old";
echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';
Question 4: What character is used to concatenate strings?
answer:
    all of that are correct but one that have a string  depreacted that is a second echo, the first one is totaly correct 
    and the last one is base a condition in html but it is also working 
*/

/*
define("CONSTANT_NAME", "constant_value");

define('HOST', 'localhost');
define('USER', 'root');
echo HOST;
    //Question 5: What is the output of echo HOST;?
    //answer: localhost

//Question 6: How will you define in PHP the variable PI with value 3.1416?
//answer;
define("PI","3.1416");
echo PI;
*/

/*
$colors = ["red", "green", "blue"];
echo $colors[3];
$numbers = [1, 2, 3, 4, 5];
echo $numbers[3] + $numbers[4];
//Question 7: What is the output of echo $numbers[3] + $numbers[4];?
    //answer: 9

//Question 8: What is the output of echo $colors[3];?
     //answer: nothing, because the index 3 has no value 

*/

/*
$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
   ];
echo $person["first_name"];
//Question 9: What are the keys in $person array?
    //answer:"first_name", "last_name" and "age"
*/

/*
$colors = [
    1 => 'red',
    2 => 'green',
    3 => 'blue',
   ];
$colors[2] = "white";
echo $colors[2];
//Question 10: In PHP, how will you change the green into white in $colors?
   //answer: $colors[2] = "white"; set the colors array number 2 to the value of white
            // and try to print or echo the var colors and set to value of array 2
*/

/*
$hex = [
    'red' => '#f00',
    'green' => '#0f0',
    'blue' => '#00f',
   ];
echo $hex['red'];
//Question 11: What is the output of echo $hex['red'];?
   //anwer: #f00
*/

/*
$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
   ];
echo $matrix[1][2];
//Question 12: What is the output of echo $matrix[1][2];?
   //answer: 6
*/

/*
$person1 = [
    'first_name' => 'Maeve',
    'last_name' => 'Reid',
    'email' => 'reid@gmail.com',
   ];

   $people = [
    $person1, 
    [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
    ],
    [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
    ],
   ];
echo $people[0]['first_name'];
//Question 13: What is the output of echo $people[0]['first_name'];?
   //answer: Maeve

echo $people[2]['email'];
//Question 14: What is the output of echo $people[2]['email'];?
   //answer: jane@gmail.com
*/

/*
$fruits = ['apple', 'banana', 'orange'];
echo count($fruits);

$fruits = ['apple', 'banana', 'orange'];
echo in_array('banana', $fruits);
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); 
array_pop($fruits); 
array_shift($fruits); 
unset($fruits[2]);
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);
//Question 15: What is the output of var_dump($chunkedArray);?
    answer: array(3) {
  [0] =>
  array(2) {
    [0] =>
    string(5) "apple"
    [1] =>
    string(6) "banana"
  }
  [1] =>
  array(2) {
    [0] =>
    NULL
    [1] =>
    string(5) "grape"
  }
  [2] =>
  array(1) {
    [0] =>
    string(5) "mango"
  }
}
*/
?>