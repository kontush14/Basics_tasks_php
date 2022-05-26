<?php
     //Loops

     /*
     1.Display numbers from 1 to 100 on the screen.

     $num = 1;
     while ($num <= 100) {
          echo $num++ . "<br>";
     }
     */

     /*
     2.Print the numbers 11 to 33 on the screen.

     $num = 11;
     while ($num <= 33) {
          echo $num++ . "<br>";
     }
     */

     /*
     3.Print even numbers between 0 and 100 on the screen.

     $num = 0;
     while ($num <= 100) {
          $num++;
          if($num %2 == 0)
          {
               echo $num . "<br>";
          }
     }
     */

     /*
     4.Print odd numbers between 1 and 99 on the screen.

     $num = 0;
     while ($num <= 99) {
          $num++;
          if($num %2 != 0)
          {
               echo $num . "<br>";
          }
     }
     */

     /*
     5.Print numbers from 30 to 0 on the screen.

     $num = 30;
     while ($num >= 0) {
          echo $num-- . "<br>";
     }
     */

     /*
     6.Use a for loop to display numbers from 1 to 100.

     for ($i=1; $i <= 100; $i++) { 
          echo $i . "<br>";
     }
     */

     /*
     7.Use a for loop to print the numbers from 11 to 33 on the screen.

     for ($i=11; $i <= 33; $i++) { 
          echo $i . "<br>";
     }
     */

     /*
     8.Use a for loop to display even numbers between 0 and 100.

     for ($i=0; $i <= 100;) { 
          $i++;
          if($i %2 == 0)
          {
               echo $i . "<br>";
          }
     }
     */

     /*
     9.Use a for loop to display odd numbers between 1 and 99.

     for ($i=0; $i < 100;) { 
          $i++;
          if($i %2 != 0)
          {
               echo $i . "<br>";
          }
     }
     */

     /*
     10.Use a for loop to print the numbers from 100 to 0 on the screen.

     for ($i=100; $i > 0 ; $i--) { 
          echo $i . "<br>";
     }
     */

     /*
     11.Find the sum of even numbers from 2 to 100.

     $sum = 0;
     for ($i=1; $i <= 100; $i++) { 
          if($i %2 == 0)
          {
               $sum = $sum + $i;
          }
     }
     echo $sum;
     */

     /*
     12.Find the sum of odd numbers from 1 to 99.

     $sum = 0;
     for ($i=1; $i < 100; $i++) { 
         if($i %2 != 0)
         {
              $sum = $sum + $i;
         }
     }
     echo $sum;
     */

     /*
     13.Given an array: Print a column of elements from this array to the screen.

     $arr = ['a', 'b', 'c', 'd', 'e'];
     foreach ($arr as $key => $value) {
          echo $value . "<br>";
     }
     */

     /*
     14.Given an array: Find the sum of the elements of this array and display it on the screen.

     $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
     $sum = 0;
     foreach ($arr as $key => $value) {
          $sum = $sum + $value;
     }
     echo $sum;
     */

     /*
     15.Given an array: Find the arithmetic mean of its elements.

     $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
     $sum = 0;
     $count = count($arr);
     foreach ($arr as $key => $value) {
          $sum = $sum + $value;
     }
     echo $result = $sum / $count;
     */

     /*
     16.Given an array: Use a foreach loop to display a column of keys and elements in green format.

     $arr = ['green' => 'зелений', 'red' => 'червоний','blue' => 'синій'];
     foreach ($arr as $key => $value) {
          echo $key . " - " . $value . "<br>"; 
     }
     */

     /*
     17.Given an array: Use a foreach loop to display a column of strings in the following format:
     user1 - age 30.

     $arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
     foreach ($arr as $key => $value) {
          echo $key . " - age " . $value . "<br>";
     }
     */

     /*
     18.Given an array: Use a foreach loop and an if statement to print the odd 
     elements of the array to the console.

     $arr = [1, 2, 3, 4, 5];
     foreach ($arr as $key => $value) {
          if($value %2 == 0)
          {
               echo $value . "<br>";
          }
     }
     */

     /*
     19.Given an array: Using a foreach loop and an if statement, 
     print to the console those elements of the array that are greater than 3 but less than 10.

     $arr = [2, 5, 9, 15, 1, 4];
     foreach ($arr as $key => $value) {
          if($value > 3 && $value < 10)
          {
               echo $value . "<br>";
          }
     }
     */

     /*
     20.Given an array of numbers. Numbers can be positive or negative. Find the sum of positive array elements.

     $arr = [-1, 2, -3, 4, -5, 6];
     $sum = 0;
     foreach ($arr as $key => $value) {
          if($value > 0)
          {
               $sum = $sum + $value;
          }
     }
     echo $sum;
     */

     /*
     21.Make up an array of days of the week. Use a foreach loop to print all the days of the week,
     and output the weekends in bold.

     $arr = [
          'Monday',
          'Tuesday',
          'Wednesday',
          'Thursday',
          'Friday',
          'Saturday',
          'Sunday'
     ];

     foreach ($arr as $key => $value) {
          if($key < 5)
          {
               echo $value . "<br>";
          }
          else
          {
               echo "<b>" . $value . "</b><br>"; 
          }
     }
     */

     /*
     22.Make up an array of days of the week. Use a foreach loop to print all the days of the week, 
     and print the current day in italics. The current day number must be stored in the $day variable.

     $arr = [
          'Monday',
          'Tuesday',
          'Wednesday',
          'Thursday',
          'Friday',
          'Saturday',
          'Sunday'
     ];
     $day = 'Friday'; 
     foreach ($arr as $key => $value) {
          if($value == $day)
          {
               echo "<i>" . $value . "</i><br>";
          }
          else
          {
               echo $value . "<br>";
          }
     }
     */

     /*
     23.Given an array of numbers. Run a loop that prints the elements of this array to the console
     one by one until an element with a value of 0 is encountered. The loop should then exit.

     $arr = [
          '2',
          '3',
          '23',
          '-4',
          '8',
          '0',
          '12'
     ];

     foreach ($arr as $key => $value) {
          if($value != 0)
          {
               echo $value . "<br>";
          }
          else
          {
               echo $value . "<br>";
               break;
          }
     }
     */

     /*
     24.Given an array of numbers. Find the sum of the elements from the beginning 
     of the array to the first negative number.

     $arr = [
          '2',
          '3',
          '23',
          '4',
          '8',
          '-1',
          '12'
     ];
     $sum = 0;

     foreach ($arr as $key => $value) {
          if($value > 0)
          {
               $sum = $sum + $value;
          }
          else
          {
               break;
          }
     }
     echo $sum;
     */

     /*
     25.Given an array of numbers. Find the position of the first number 3 in this array 
     (we assume that this number must be in the array).

     $arr = [
          '2',
          '33',
          '23',
          '4',
          '3',
          '-1',
          '12'
     ];

     $search = 3;

     foreach ($arr as $key => $value) {
          if($value == $search)
          {
               echo array_search($search, $arr);
               break;
          }
     }
    */

    /*
    26.Determine how many integers, starting with the number 1, must be added to make the sum greater than 100.

    $sum = 0;
    $i = 1;
    
    while ($sum < 100) {
        $sum += $i;
        $i++;
    }
    echo $i - 1;
    */

    /*
    27.Check that this array contains element 'c'. If yes, print 'yes', and if not, print 'no'.

    $arr = ['a', 'b', 'c', 'd', 'e'];
    foreach ($arr as $key => $value) {
        if($value == 'c')
        {
            echo 'Yes';
        }
        else
        {
            echo 'No';
        }
    }
    */

    /*
    28.Given a number $num with some initial value. Multiply it by 3 so many times until the result
    of multiplication becomes more than 1000. What number will you get? Count the number of iterations
    required for this.

    $num = 3;
    $sum = 1;
    $count = 0;
    while ($sum < 1000) {
        $sum = $sum * $num;
        $count++;
    }
    echo $count;
    */

    /*
    29.Solve the previous problem with a for loop.

    $num = 3;
    $sum = 1;
    $count = 0;
    for ($sum=1; $sum < 1000;) { 
        $sum = $sum * $num;
        $count++;
    }
    echo $count;
    */

    /*
    30.Using the loop, form a string filled with 5 zeros.

    $str = '';
    for ($i=0; $i < 5; $i++) { 
        $str = $str . '0';
    }
    echo $str;
    */

    /*
    31.Use the loop to form the string '123456789' and write it to the $str variable. 
    Print the value of this variable to the screen.

    $str = '';
    $int = '1';
    for ($i=1; $i < 10; $i++) { 
        $str = $str . $int;
        $int++;
    }
    echo $str;
    */

    /*
    32.Use the loop to form the string '987654321' and write it to the $str variable. 
    Print the value of this variable to the screen.

    $str = '';
    $int = '9';
    for ($i=9; $i > 0 ; $i--) { 
        $str = $str . $int;
        $int--;
    }
    echo $str;
    */

    /*
    33.Use a loop to form the string '-1-2-3-4-5-6-7-8-9' and write it to the $str variable. 
    Print the value of this variable to the screen.

    $str = '';
    $int = '1';
    for ($i=1; $i < 10; $i++) { 
        $str = $str . '-' . $int;
        $int++;
    }
    echo $str;
    */

    /*
    34.With two nested loops, print the following line to the screen: 111222333444555666777888999

    for ($i = 1; $i <= 9; $i++) {
		for ($j = 1; $j <= 3; $j++) {
			echo $i;
		}
	}
    */

    /*
    35.With two nested loops, print the following line to the screen: 11 12 13 21 22 23 31 32 33

    for ($i = 10; $i <= 33; $i += 10){
		for ($j = 1; $j <= 3; $j++) {
            $num = $i + $j;
			echo $num . " ";
		}
	}
    */

    /*
    36. Declare an empty array and then fill it with numbers from 1 to 10.

    $arr = [];
    for ($i=1; $i <= 10 ; $i++) { 
        $arr[] = $i;
    }
    var_dump($arr);
    */

    /*
    37.Declare an empty array and then fill it with 5 x.

    $arr = [];
    for ($i=0; $i < 5; $i++) { 
        $arr[] = 'x';
    }
    var_dump($arr);
    */

    /*
    38.Fill the array with numbers from 1 to 100 using a loop.

    $arr = [];
    for ($i=1; $i <= 100 ; $i++) { 
        $arr[] = $i;
    }
    var_dump($arr);
    */

    /*
    39.Use a loop to fill the array with odd numbers between 1 and 99.

    $arr = [];
    for ($i=1; $i < 100; $i++) { 
        if($i % 2 != 0)
        {
            $arr[] = $i;
        }
    }
    var_dump($arr);
    */

    /*
    40.Use a for loop to display all of these elements on the screen.

    $arr = ['a', 'b', 'c', 'd', 'e'];
    for ($i=0; $i < 5; $i++) { 
        echo $arr[$i] . "<br>";
    }
    */

    /*
    41.Use a for loop to display all the elements of this array except the last one.
    $arr = ['a', 'b', 'c', 'd', 'e'];
    $array = array_pop($arr);
    for ($i=0; $i < 4; $i++) { 
        echo $arr[$i] . "<br>";
    }
    */

    /*
    42.Use a for loop to display the first half of the elements in this array.

    $arr = [1, 2, 3, 4, 5, 6, 7, 8];
    for ($i=0; $i < 4; $i++) { 
        echo $arr[$i] . "<br>";
    }
    */

    /*
    43.In the following code, some programmer finds the sum of all elements of an array except zero: 
    What is wrong with this code? Please fix the code author's mistake.

    $arr = [1, 2, 3, 4, 5, 6, 7, 8];
	$sum = 0;
	
	for ($i = 1; $i < count($arr); $i++) {
		$sum += $arr[$i];
	}
	
	echo $sum;
    */

    /*
    44.Given an array of numbers. Loop through this array and square each element of this array.

    $arr = [1, 2, 3, 4, 5];
    for ($i=0; $i < 5; $i++) { 
        $arr[$i] = $arr[$i] * $arr[$i];
    }
    var_dump($arr);
    */

    /*
    45.Given an array of numbers. Loop through this array and subtract one from each element.

    $arr = [1, 2, 3, 4, 5];
    for ($i=0; $i < 5; $i++) { 
        $arr[$i] = $arr[$i] - 1;
    }
    var_dump($arr);
    */

    /*
    46.Given an array of numbers. Loop through this array and add 10 to each element.

    $arr = [1, 2, 3, 4, 5];
    for ($i=0; $i < 5; $i++) { 
        $arr[$i] = $arr[$i] + 10;
    }
    var_dump($arr);
    */

    /*
    47.Given the following array with employees and their salaries: Increase the salary of each employee by 10%.

     $arr = [
		'employee1' => 100,
		'employee2' => 200,
		'employee3' => 300,
		'employee4' => 400,
		'employee5' => 500,
		'employee6' => 600,
		'employee7' => 700,
	];
    
     foreach ($arr as $key => $value) {
          $arr[$key] = $value * 1.1;
     }

     var_dump($arr);
     */

     /*
     48.Modify the previous problem so that the salary increases only for those workers who have it less 
     than or equal to 400.

     $arr = [
          'employee1' => 100,
          'employee2' => 200,
          'employee3' => 300,
          'employee4' => 400,
          'employee5' => 500,
          'employee6' => 600,
          'employee7' => 700,
     ];

     foreach ($arr as $key => $value) {
          if($value <= 400)
          {
               $arr[$key] = $value * 1.1;
          }
     }
     */

     /*
     49.Find the sum of the keys of this array and divide it by the sum of the values.

     $arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
     $sum_keys = 0;
     $sum_values = 0;
     foreach ($arr as $key => $value) {
          $sum_keys = $sum_keys + $key;
          $sum_values = $sum_values + $value;
     }
     echo $sum_keys / $sum_values;
     */

     /*
     50.Write the keys of this array to one array and the values ​​to another.

     $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
     $arr_keys = [];
     $arr_values = [];
     foreach ($arr as $key => $value) {
          $arr_keys[] = $key;
          $arr_values[] = $value; 
     }
     */

     /*
     51.Write in the new array the elements whose value starts with the number 1 or the number 2. 
     That is, you will end up with the following array:

     $arr = [
          1 => 125,
          2 => 225,
          3 => 128,
          4 => 356,
          5 => 145,
          6 => 281,
          7 => 452,
     ];

     $arr_new = [];

     foreach ($arr as $key => $value) {
          if($value < 300)
          {
               $arr_new[] = $value;
          }
     }
     var_dump($arr_new);
     */

     /*
     52.Given an array of numbers. Iterate over it in a loop and in each iteration of the loop print 
     the next element of the array.

     $arr = [
          '1' => 1,
          '2' => 2,
          '3' => 3,
          '4' => 4,
          '5' => 5
     ];

     $length = count($arr);
	
	for ($i = 1; $i <= $length; $i++) {
		echo $arr[$i];
	}
     */

     /*
     53.Getting Fibonacci numbers in PHP

     $one = 0;
     $two = 1;
    
     for ($i = 1; $i <= 10; $i++) {
         $current = $one + $two;
         
         $one = $two;
         $two = $current;
         
         echo $current . '<br>';
     }
     */

     /*
     54.Solve the problem of finding a series of numbers, each of which is equal to the sum of the 
     previous three, and the first three numbers are 0, 1 and 2.

     $one = 0;
     $two = 1;
     $three = 2;
     for ($i=1; $i <= 10 ; $i++) { 
          $current = $one + $two + $three;

          $one = $two;
          $two = $three;
          $three = $current;

          echo $current. "<br>";
     }
     */

     /*
     55.Display the following pyramid: 
     xx
     xxxx
     xxxxxx
     xxxxxxxx
     xxxxxxxxxx 

     $x = '';
     $x2 = 'xx';
     for ($i=0; $i < 5; $i++) { 
          $current = $x;

          $x = $x . $x2;

          echo $current = $current . 'xx' . "<br>";
     }

     */

     /*
     56.Display the following pyramid:
     xxxxxxxxxx
     xxxxxxxx
     xxxxxx
     xxxx
     xx 

     for ($i = 5; $i >= 1; $i--) {
		$str = '';
		
		for ($j = 0; $j < $i; $j++) {
			$str .= 'xx';
		}
		
		echo $str . '<br>';
	}
     */

     /*
     57.Use a loop to form the following array: ['xx', 'xxxx', 'xxxxxx', 'xxxxxxxx', 'xxxxxxxxxx']

     $arr = [];
     $c = '';

     
     for ($i=0; $i < 5; $i++) { 
     
          $c = $c . 'xx';
          $arr[$i] = $c;
     }
     var_dump($arr);
     */

     /*
     58. Use a loop to output a column of numbers from 1 to 100.

     for ($i=1; $i <=100 ; $i++) { 
          echo $i . "<br>";
     }
     */

     /*
     59.Use a loop to output a column of numbers from 100 to 1.

     for ($i=100; $i >=1 ; $i--) { 
          echo $i . "<br>";
     }
     */

     /*
     60.Use a loop to output a column of even numbers from 1 to 100.

     for ($i=1; $i <= 100 ; $i++) { 
          if($i %2 == 0)
          {
               echo $i . "<br>";
          }
     }
     */

     /*
     61.Fill the array with 10 x's using a loop.

     $arr = [];
     $x = 'x';

     for ($i=0; $i < 10; $i++) { 
          $arr[$i] = $x;
     }
     var_dump($arr);
     */

     /*
     62.Fill an array with numbers from 1 to 10 using a loop.

     for ($i=1; $i <=10 ; $i++) { 
          $arr[$i] = $i;
     }
     var_dump($arr);
     */

     /*
     63.Given an array of numbers. Using a loop, print only those elements of the array that are 
     greater than zero and less than 10.

     $arr = [1, -2, 3, -4, 5, -6, 7, -8, 9, -10];
     foreach ($arr as $key => $value) {
          if($value > 0 && $value < 10)
          {
               echo $value . "<br>";
          }
     }
     */

     /*
     64.Given an array of numbers. Use a loop to check that it has an element with value 5.

     $arr = [1, -2, 3, -4, 5, -6, 7, -8, 9, -10];
     $search = array_search(5, $arr);
     foreach ($arr as $key => $value) {
          if($value == 5)
          {
               echo 'yes';
          }
     }
     */

     /*
     65.Given an array of numbers. Use a loop to find the sum of the elements of this array.

     $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
     $sum = 0;
     foreach ($arr as $key => $value) {
          $sum = $sum + $value;
     }
     echo $sum;
     */

     /*
     66.Given an array of numbers. Use a loop to find the sum of the squares of the elements of this array.

     $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
     $sum = 0;
     foreach ($arr as $key => $value) {
          $sum = $sum + pow($value, 2);
     }
     echo $sum;
     */

     /*
     67.Given an array of numbers. Find the arithmetic mean of its elements (the sum of the elements 
     divided by the number).

     $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
     $sum = 0;

     foreach ($arr as $key => $value) {
          $sum = $sum + $value;
     }
     echo $mean = $sum / count($arr);
     */

     /*
     68.Write a script that will find the factorial of a number. A factorial is the product of all integers 
     less than a given number and itself.

     $num = 4;  
     $factorial = 1;  
     for ($i=$num; $i>=1; $i--)   
     {  
          $factorial = $factorial * $i;  
     }  
     echo "Factorial of $num is $factorial";
     */  
?>

