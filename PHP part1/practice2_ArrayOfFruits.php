<?php
// i create a array of fruits
$fruits = array ('Apple', 'Banana', 'Orange', 
'cherry', 'Mango');

//starting og ordered list 
echo "<ol>";

//now we use 'for' in our loop
for ($i = 0; $i < count($fruits); $i++){ //this ++ use to increment the value
    echo "<li>" , $fruits[$i], "</li>"; // to display a list of fruits
}

echo "</ol>";// printing the result

?>


