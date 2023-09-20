<?php
echo'<hr/>';
echo'
NAME : SYED NUMAN AHMED </br>
Course: Web Development with PHP & Laravel </br>
Assignment: Module2 </br>
';

echo'<hr/>';

// Task 1: Looping with Increment using a Function
// Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
// step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
// should take the arguments like start as 1, end as 20 and step as 2. You must call the
// function to print.
// Also do the same using while loop and do-while loop also.

// For Loop
function printEvenNumbersFor($start, $end, $step) {
    // Check if the step is even, if not, then make it even number
    if ($step % 2 != 0) {
        $step++; 
    }

    // check that the start value is even or not 
    $start += ($start % 2 == 0) ? 0 : 1;
    echo '
    Task 1: Looping with Increment using a Function
Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also.
    ';
    echo '<hr>';
    echo 'For Loop </br>';

    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " </br>";
    }
}

printEvenNumbersFor(1, 20, 2); 

// While Loop
function printEvenNumbersWhile($start, $end, $step) {

    if ($step % 2 != 0) {
        $step++; 
    }

    // check that the start value is even or not 
    $start += ($start % 2 == 0) ? 0 : 1;

    echo '<hr>';
    echo 'while Loop </br>';

    $i = $start;
    while ($i <= $end) {
        if ($i % 2 == 0) {
            echo $i . "  </br>";
        }
        $i += $step;
    }
}

printEvenNumbersWhile(1, 20, 5);


// Do while Loop
function printEvenNumbersDoWhile($start, $end, $step) {

    if ($step % 2 != 0) {
        $step++; 
    }

    // check that the start value is even or not 
    $start += ($start % 2 == 0) ? 0 : 1;

    echo '<hr>';
    echo 'Do while Loop </br>';
    $i = $start;
    do {
        if ($i % 2 == 0) {
            
            echo $i . " </br> ";
        }
        $i += $step;
    } while ($i <= $end);
}

printEvenNumbersDoWhile(1, 20, 3);




// Task 2: Skip Multiples of 5
// Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
// loop encounters a multiple of 5, it should skip that number using the continue statement and
// continue to the next iteration.

echo '<hr>';
    echo '
    Task 2: Skip Multiples of 5
    Create a PHP script that prints numbers from 1 to 50 using a for loop. However, when the
    loop encounters a multiple of 5, it should skip that number using the continue statement and
    continue to the next iteration.   
    ';

    echo '<hr>';
for ($i = 1; $i <= 50; $i++) {
    // Check condition
    if ($i % 5 == 0) {
        // Skip and continue
        // now 5 will not count 
        continue;
    }
    
    
    echo $i . "</br>";
}

// Task 3: Break on Condition
// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.


echo '<hr>';
    echo '
    Task 3: Break on Condition
    Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
    Fibonacci number is greater than 100, break out of the loop using the break statement. 
    ';

    echo '<hr>';

// $limit = 10; // first 10
$previous = 0;
$current = 1;

for ($i = 1; $i <= 10; $i++) {
    // Print the current number
    echo $current . " <br/>";

    // Calculate the next number
    $next = $previous + $current;

    // Break the loop if greater then 100
    if ($next > 100) {
        break;
    }

    // Update previous and current values
    $previous = $current;
    $current = $next;
}



// Task 4: Fibonacci Series printing using a Function
// Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.



echo '<hr>';
    echo '
    Task 4: Fibonacci Series printing using a Function
    Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
    this 15 as an argument of a function and use a for loop to generate these numbers and print
    them by calling the function. 
    ';

    echo '<hr>';


function printFiboSeries($n) {

    $previous = 0;
    $current = 1;

    for ($i = 0; $i < $n; $i++) {
        // Print the current  number
        echo $previous . "</br> ";

        // Calculate the next  number
        $next = $previous + $current;

        // Update the values
        $previous = $current;
        $current = $next;
    }
}

// Call the function 
printFiboSeries(15);
