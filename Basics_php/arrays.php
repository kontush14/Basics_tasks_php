<?php
     //Arrays

     /*
     1.Create an array with elements 'a', 'b' and 'c'. 
     Print it to the screen with the echo command and with the var_dump function.

     $arr = ['a', 'b', 'c'];
     echo $arr[0] . $arr[1] . $arr[2];
     var_dump($arr);
     */

     /*
     2.Create an array with elements 'a', 'b' and 'c'. Display each of these elements.

     $arr = ['a', 'b', 'c'];
     echo $arr[0] . $arr[1] . $arr[2];
     */

     /*
     3.Create an array with elements array with elements 'a', 'b' and 'c', 'd'. 
     Use it to display the string 'a+b+c+d' on the screen.

     $arr = ['a', 'b', 'c', 'd'];
     echo $arr[0] . "+" . $arr[1] . "+" . $arr[2] . "+" . $arr[3];
     */

     /*
     4.Create an array with elements 1, 2 and 3. Display the sum of these elements.

     $arr = ['1', '2', '3'];
     $a = $arr[0];
     $b = $arr[1];
     $c = $arr[2];
     echo $d = $a + $b + $c;
     */ 

     /*
     5.Create an array with elements 2, 5, 3, 9. Multiply the first element of the array by the 
     second and the third element by the fourth. Add the results, assign the variable $result. 
     Display the value of this variable.

     $arr = ['2', '5', '3', '9'];
     $a = $arr[0] * $arr[1];
     $b = $arr[2] * $arr[3];
     echo $c = $a + $b;
     */

     /*
     6.Create an array with keys 1, 2 and 3 and values ​​'a', 'b' and 'c'. 
     Display all of its elements on the screen.

     $arr = [
          '1'=>'a', 
          '2'=>'b',
          '3'=>'c'
     ];
     echo $arr[1] . $arr[2] . $arr[3];
     */

     /*
     7.Make an array with the names of the months. Let January have key 1 in it.

     $arr = [
          '1'=>'January',
          '2'=>'February',
          '3'=>'March',
          '4'=>'April',
          '5'=>'May',
          '6'=>'June',
          '7'=>'July',
          '8'=>'August',
          '9'=>'September',
          '10'=>'October',
          '11'=>'November',
          '12'=>'December',
     ];
     */

     /*
     8.Create an array $user with keys 'name', 'surname', 'patronymic' and some arbitrary values. 
     Display the last name, first name and patronymic separated by a space.

     $user = [
          'name'=>'Tom',
          'surname'=>'White',
          'patronymic'=>'Green'
     ];
     echo $user['name'] . ' ' . $user['surname'] . ' ' . $user['patronymic'];
     */

     /*
     9.Create an array $date with keys 'year', 'month' and 'day' and values ​​corresponding to the current day. 
     Display the created date on the screen in year-month-day format.

     $date = [
          'year'=>'2022',
          'month'=>'4',
          'day'=>'4'
     ];
     echo $date['year'] . "-" . $date['month'] . "-" . $date['day'];
     */

     /*
     10.Display the number of elements in this array.

     $arr = ['a', 'b', 'c', 'd', 'e'];
     echo count($arr);
     */

     /*
     11.Display the number of elements in this array.

     $arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
     echo count($arr);
     */

     /*
     12.Display the last element of this array.

     $arr = ['a', 'b', 'c', 'd', 'e'];
     echo array_pop($arr);
     */

     /*
     13.Modify the previous task so that the penultimate element of the array is displayed.

     $arr = ['a', 'b', 'c', 'd', 'e'];
     echo $arr[3];
     */

     /*
     14.Change the value of each of the elements of this array.

     $arr = ['a' => 1, 'b' => 2, 'c' => 3];
     $arr['a'] = 11;
     $arr['b'] = 22;
     $arr['c'] = 33;
     var_dump($arr);
     */

     /*
     15.Add the number 3 to each element of the array. Display the modified array.

     $arr = ['a' => 1, 'b' => 2, 'c' => 3];
     $arr['a'] = $arr['a'] + 3;
     $arr['b'] = $arr['b'] + 3;
     $arr['c'] = $arr['c'] + 3;
     var_dump($arr);
     */

     /*
     16.As described, fill this array with elements with values ​​1, 2, 3, 4, and 5.

     $arr = ['1', '2', '3', '4', '5'];
     var_dump($arr);
     */

     /*
     17.Let this array be given: Add elements 4 and 5 to the end of it.

     $arr = [1, 2, 3];
     array_push($arr, 4, 5);
     var_dump($arr);
     */

     /*
     18.Let the following array be given: Write the current year into the 'year' key in the described way,
     the current month into the 'month' key, and the current day into the 'day' key.

     $arr = [
          'year'=>2022,
          'month'=>4,
          'day'=>4
     ];
     var_dump($arr);
     */

     /*
     19.Given an array like this: Given a variable $key1 with value 1 and variable $key2 with value 2. 
     Find the sum of the elements whose keys are stored in our variables.

     $arr = [1, 2, 3, 4, 5];
     $key1 = 1;
     $key2 = 2;

     echo $arr[$key1] + $arr[$key2];
     */

     /*
     20.Let the following array be given: Given the variable $key, which stores one of the keys of our array. 
     Use this variable to display the corresponding element of the array.

     $arr = ['a' => 1, 'b' => 2, 'c' => 3];
     $key = 'a';
     echo $arr[$key];
     */
?>