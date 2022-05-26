<?php
     // Standard Features

     //Math Functions in PHP

     /*
     1.Raise 2 to the 10th power.

     $a = 2;
     $a = pow($a, 10);
     echo $a;
     */

     /*
     2.Find the square root of 245.

     $a = 245;
     $a = sqrt($a);
     echo $a;
     */

     /*
     3.Given an array: Find the root sum of the squares of its elements. Use a foreach loop to solve.

     $arr = [4, 2, 5, 19, 13, 0, 10];
     $sum = 0;
     foreach ($arr as $key => $value) {
          $sum = $sum + $value;
     }
     $square = sqrt($sum);
     echo $square;
     */

     /*
     4.Find the square root of 379. Round the result to integers, to tenths, to hundredths.

     $a = 379;
     $a = sqrt($a);
     $a_1 = round($a);
     echo $a_1 . "<br>";
     $a_2 = round($a, 1);
     echo $a_2 . "<br>";
     $a_3 = round($a, 2);
     echo $a_3 . "<br>";
     */

     /*
     5.Find the square root of 587. Round the result up and down, write the rounding results to 
     an associative array with the keys 'floor' and 'ceil'.
     $a = 587;
     $arr = [];
     $a = sqrt($a);
     $a1 = floor($a);
     $a2 = ceil($a);
     $arr['fllor'] = $a1;
     $arr['ceil'] = $a2;
     var_dump($arr);
     */

     /*
     6.Given an array: Find the minimum and maximum number.

     $arr = [4, -2, 5, 19, -130, 0, 10];
     $min = min($arr);
     $max = max($arr);
     echo "Min number  " . $min . "<br>" . "Max number " . $max;
     */

     /*
     7.Print a random integer from 1 to 100 on the screen.

     echo $a = mt_rand(1, 100);
     */

     /*
     8.Loop fill the array with 10 random integers.

     $arr = [];
     for ($i=0; $i < 10; $i++) { 
          $a = mt_rand(1, 100);
          $arr[$i] = $a;
     }
     var_dump($arr);
     */

     /*
     9.Variables $a and $b are given. Find the modulus of the difference between $a and $b. 
     Test the script yourself for different $a and $b.

     $a = -3;
     $b = -5;
     $c = $a - $b;
     echo $c = abs($c);
     */

     //PHP String Functions

     /*
     1.Given the string 'php'. Make it the string 'PHP'.

     $string = 'php';
     $string = strtoupper($string);
     echo $string;
     */

     /*
     2.The string 'PHP' is given. Make it a 'php' link.

     $string = 'PHP';
     $string = strtolower($string);
     echo $string;
     */

     /*
     3.Given the string 'london'. Make it the string 'London'.

     $string = 'london';
     $string = ucfirst($string);
     echo $string;
     */

     /*
     4.Given the string 'London'. Make it the string 'london'.

     $string = 'London';
     $string = lcfirst($string);
     echo $string;
     */

     /*
     5.Given the string 'london is the capital of great britain'. Make it into the string 
     'London Is The Capital Of Great Britain'.

     $string = 'london is the capital of great britain';
     $string = ucwords($string);
     echo $string;
     */

     /*
     6.The string 'LONDON' is given. Make it the string 'London'.

     $string = 'LONDON';
     $string = strtolower($string);
     $string = ucfirst($string);
     echo $string;
     */

     /*
     7.Given the string 'html css php'. Find the number of characters in this string.

     $string = 'html css php';
     $string = strlen($string);
     echo $string;
     */

     /*
     8.The variable $password is given, which stores the user's password. If the number of password 
     characters is more than 5 and less than 10, then display a message to the user that the 
     password is suitable, otherwise a message that you need to come up with another password.

     $password = '123456aa';
     $strlen = strlen($password);
     if($strlen > 5 && $strlen < 10 )
     {
          echo 'the password is suitable';
     }
     else
     {
          echo 'you need to come up with another password';
     }
     */

     /*
     9.Given the string 'html css php'. Cut it out and display the word 'html', the word 'css' 
     and the word 'php'.

     $string = 'html css php';
     echo $html = substr($string, 0, 4) . "<br>";
     echo $css = substr($string, 5, -4) . "<br>";
     echo $php = substr($string, 8, 12);
     */

     /*
     10.Given a line. Cut and print the last 3 characters of this string.

     $string = 'abcd abcd';
     echo $last3 = substr($string, 6, 9);
     */ 

     /*
     11.Given a line. Make sure it starts with 'http://'.

     $string = 'http://abcdabcd';
     $start = substr($string, 0, 7);
     if($start == 'http://')
     {
          echo 'yes';
     }
     else
     {
          echo 'no';
     }
     */

     /*
     12.Given a line. Make sure it starts with 'http://' or 'https://'.

     $string = 'https://abcdabcd';
     $start = substr($string, 0, 7);
     $start1 = substr($string, 0, 8);
     if($start == 'http://' || $start1 == 'https://')
     {
         echo 'yes';
     }
     else
     {
         echo 'no';
     }
     */

     /*
     13.Given a line. Make sure it ends with '.png'.

     $string = 'abcd.png';
     $end = substr($string, -4);
     if($end == '.png')
     {
          echo 'yes, string ends with .png';
     }
     else
     {
          echo 'no, string no ends with .png';
     }
     */

     /*
     14.Given a line. Make sure it ends with '.png' or '.jpg'.

     $string = 'abcd.jpg';
     $end = substr($string, -4);
     if($end == '.png' || $end == '.jpg')
     {
          echo 'yes, string ends with .png or .jpg';
     }
     else
     {
          echo 'no, string no ends with .png or .jpg';
     }
     */

     /*
     15.Given a line. If there are more than 5 characters in this line - cut out the first 5 characters 
     from it, add an ellipsis to the end and display it on the screen. If there are 5 or less characters 
     in this line, just print this line to the screen.

     $string = 'abcd';
     $strlen = strlen($string);
     if($strlen > 5)
     {
          $cut = substr($string, 5);
          echo $cut . "...";
     }
     elseif($strlen < 5)
     {
          echo $string;
     }
     */

     /*
     16.The string '12/31/2013' is given. Replace all dots with hyphens.

     $string = '12.31.2013';
     $string = str_replace( '.' , '-' , $string  );
     echo $string;
     */

     /*
     17.Given a line. Replace all the 'a' letters in it with the number 1, the 'b' letters with 2, and the 'c' 
     letters with 3.

     $string = 'agrcdbete';
     $string = str_replace('a', '1', $string);
     $string = str_replace('b', '2', $string);
     $string = str_replace('c', '3', $string);
     echo $string;
     */

     /*
     18.Given a string with letters and numbers, for example, '1a2b3c4b5d6e7f8g9h0'. Remove all numbers from it. 
     That is, in our case, the string 'abcbdefgh' should be obtained.

     $string = '1a2b3c4b5d6e7f8g9h0';
     for ($i=0; $i < 10; $i++) { 
          $string = str_replace($i, '', $string);
     }
     echo $string;
     */

     /*
     19.Given a string $str. Replace all 'a's in it with the number 1, the letters 'b' with 2, and the letters 'c' 
     with 3. Solve the problem in two ways with the strtr function (an array of replacements and two strings of 
     replacements).

     $string = '1a2b3c4b5d6e7f8g9h0';
     $string = strtr($string, ['a'=>'1', 'b'=>'2', 'c'=>'3']);
     echo $string;
     */

     /*
     20.Given a string $str. Cut out a substring from it starting from the 3rd character (counting from zero), 
     5 pieces and insert '!!!' instead.

     $string = '1234567890';
     echo substr_replace($string, '!!!', 3, 5);
     */

     /*
     21.Given the string 'abc abc abc'. Determine the position of the first letter 'b'.

     $string = 'abc abc abc';
     echo strpos($string, 'b', 0);
     */

     /*
     22.Given the string 'abc abc abc'. Determine the position of the last letter 'b'.

     $string = 'abc abc abc';
     echo strrpos($string, 'b', 0);
     */

     /*
     23.Given the string 'abc abc abc'. Determine the position of the first found letter 'b' 
     if you start the search not from the beginning of the string, but from position 3.

     $string = 'abc abc abc';
     echo strpos($string, 'b', 3);
     */

     /*
     24.Given the string 'aaa aaa aaa aaa aaa'. Determine the position of the second space.

     $string = 'aaa aaa aaa aaa aaa';
     echo strpos($string, ' ', 6);
     */

     /*
     25.Check that there are two consecutive dots in the string.

     $string = '12345..12345';
     $a = strpos($string, '..');
     if($a == true)
     {
          echo 'yes';
     }
     else 
     {
          echo 'no';
     }
     */

     /*
     26.Check that the string starts with 'http://'.

     $string = 'http://google.com';
     $str = strpos($string, 'http://');
     if($str == 0)
     {
          echo 'yes';
     }
     else
     {
          echo 'no';
     }
     */

     /*
     27.Given the string 'html css php'. Write each word of this string to a separate array element.

     $string = 'html css php';
     $string = explode(' ', $string);
     var_dump($string);
     */

     /*
     28.Given an array with elements 'html', 'css', 'php'. Use implode to create a comma-separated 
     string of these elements.

     $string = ['html','css','php'];
     echo $string = implode(' ', $string);
     */

     /*
     29.The $date variable contains a date in year-month-day format. Convert this date to day.month.year 
     format.

     $string = '23-04-2022';
     $string = explode('-', $string);
     echo implode('.', $string);
     */

     /*
     30.Given the string '1234567890'. Break it into an array with elements '12', '34', '56', '78', '90'.

     $string = '1234567890';
     $string = str_split($string, 2);
     */

     /*
     31.Given the string '1234567890'. Split it into an array with elements '1', '2', '3', '4', '5', 
     '6', '7', '8', '9', '0'.

     $string = '1234567890';
     $string = str_split($string, 1);
     var_dump($string);
     */

     /*
     32.Given the string '1234567890'. Make it the string '12-34-56-78-90' without using a loop.

     $string = '1234567890';
     $string = str_split($string, 2);
     $string = implode('-', $string);
     */

     /*
     33.Given a line. Clean it of trailing spaces.

     $string = '12345  ';
     $string = rtrim($string);
     */

     /*
     34.Given the string '/php/'. Make the string 'php' out of it, removing the trailing slashes.

     $string = '/php/';
     $string = trim($string, '/');
     */

     /*
     35.Given the string 'words words words.'. This line may or may not end with a period. 
     Make sure that there is a dot at the end of this line. That is: if this point does not exist, 
     it must be added, and if there is, do nothing. Solve the problem through rtrim without any ifs.

     $string = 'words words words.';
     $string = trim($str, '.').'.';
     */

     /*
     36.The string '12345' is given. Make it the string '54321'.

     $string = '12345';
     $string = strrev($string);
     echo $string;
     */

     /*
     37.Check if the word is a palindrome (it reads the same in all directions, examples of such 
     words are: madam, otto, kayak, nun, level).

     $string = 'madam';
     $string1 = strrev($string);
     if($string == $string1)
     {
          echo 'yes, this word is palindrome';
     }
     else
     {
          echo 'no, this word isn`t palindrome';
     }
     */

     /*
     38.Given a line. Shuffle the characters of this string randomly.

     $string = '12345678';
     echo str_shuffle($string);
     */

     /*
     39.Create a string of 6 random small Latin letters so that the letters do not repeat. 
     We need to make sure that our string can contain any Latin letter, and not a limited set.

     $string = 'abcdefghiklmnopqrstvxyz';
     $shuffle = str_shuffle($string);
     echo substr($shuffle, 0, 6);
     */

     /*
     40.Given the string '12345678'. Make it the string '12 345 678'.

     $string = '12345678';
     echo number_format($string, 0, ' ', ' ');
     */

     /*
     41.With a single loop and the str_repeat function, display the following pyramid on the screen:
     x
     xx
     xxx
     xxxx
     xxxxx
     xxxxxx
     xxxxxxx
     xxxxxxxx
     xxxxxxxxx

     $string = 'x';
     for ($i=1; $i < 10; $i++) { 
          echo str_repeat($string, $i) . "<br>";
     }
     */

     /*
     42.With a single loop and the str_repeat function, display the following pyramid on the screen:
     1
     22
     333
     4444
     55555
     666666
     7777777
     88888888
     999999999

     $string = '1';
     for ($i=1; $i < 10; $i++) { 
          echo str_repeat($string++, $i) . "<br>";
     }
     */

     /*
     43.Given the string 'html, <b>php</b>, js'. Remove tags from this line.

     $string = 'html, <b>php</b>, js';
     echo strip_tags($string);
     */

     /*
     44.Given a string $str. Remove all tags from this line, except for the <b> and <i> tags.

     $str = 'html, <b>php</b>, js, <i>php2</i>';
     echo strip_tags($str, '<b>,<i>')
     */

     /*
     45.Given the string 'html, <b>php</b>, js'. Display it 'as is': that is, the browser should not convert the <b> to bold.

     $string = 'html, <b>php</b>, js';
     echo htmlspecialchars($string);
     */

     /*
     46.Find out the character code of 'a', 'b', 'c', space.

     $arr = ['a', 'b', 'c', ' '];
     for ($i=0; $i < 4; $i++) { 
          echo ord($arr[$i]) . "<br>";
     }
     */
    
     /*
     47.Display the symbol with code 33 on the screen.

     echo chr(33);
     */

     /*
     48.Given the string 'ab-cd-ef'. Use the strchr function to print the string '-cd-ef' to the screen.

     $string = 'ab-cd-ef';
     echo strchr($string, '-');
     */

     /*
     49.Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'.
    
     $string = 'ab-cd-ef';
     echo strrchr($string, '-');
     */

     /*
     50.The string 'ab--cd--ef' is given. Use the strstr function to display the string '--cd--ef'.

     $string = 'ab--cd--ef';
     echo strstr($string, '--');
     */

     //Functions for arrays in PHP

     /*
     1.Given an array: Check that it has an element with value 3.

     $arr = [1, 2, 3, 4, 5];
     var_dump(in_array(3, $arr));
     */

     /*
     2.Find the sum of the elements of the given array.

     $arr = [1, 2, 3, 4, 5];
     echo array_sum($arr);
     */

     /*
     3.Find the product (multiplication) of the elements of the given array.

     $arr = [1, 2, 3, 4, 5];
     echo array_product($arr);
     */

     /*
     4.Use the array_sum and count functions to find the arithmetic mean of the elements 
     (the sum of the elements divided by their number) of the given array.

     $arr = [1, 2, 3, 4, 5];
     $sum = array_sum($arr);
     $count = count($arr);
     echo $sum / $count;
     */

     /*
     5.Create an array filled with numbers from 1 to 100.

     $arr = range(1, 100);
     var_dump($arr);
     */

     /*
     6.Create an array filled with letters from 'a' to 'z'.

     $arr = range('a', 'z');
     var_dump($arr);
     */

     /*
     7.Find the sum of numbers from 1 to 100 without using a loop.

     $arr = range(1, 100);
     $sum = array_sum($arr);
     echo $sum;
     */

     /*
     8.Find the product of numbers from 1 to 10 without using a loop.

     $arr = range(1, 10);
     $product = array_product($arr);
     echo $product;
     */

     /*
     9.Given arrays: Make them an array:
     [1, 2, 3, 'a', 'b', 'c']

     $arr1 = [1, 2, 3];
     $arr2 = ['a', 'b', 'c'];
     $arr = array_merge($arr1, $arr2);
     var_dump($arr);
     */

     /*
     10.Given arrays: Use the array_slice function to make the following array out of it:
     [2, 3, 4]

     $arr = [1, 2, 3, 4, 5];
     $arr = array_slice($arr, 1, 3);
     var_dump($arr);
     */

     /*
     11.Given arrays: Use the array_splice function to make the following array out of it:
     [1, 4, 5]

     $arr = [1, 2, 3, 4, 5];
     $array = array_splice($arr, 1, 2);
     var_dump($arr);
     */

     /*
     12.Given arrays: Use the array_splice function to make the following array out of it:
     [2, 3, 4]

     $arr = [1, 2, 3, 4, 5];
     $array = array_splice($arr, 1, 3);
     var_dump($array);
     */

     /*
     13.Given arrays: Use the array_splice function to make the following array out of it:
     [1, 2, 3, 'a', 'b', 'c', 4, 5]

     $arr = [1, 2, 3, 4, 5];
     $array_1 = ['a', 'b', 'c'];
     $array = array_splice($arr, 0, 3);
     $result = array_merge($array, $array_1);
     $result = array_merge($result, $arr);
     var_dump($result);
     */

     /*
     14.Given arrays: Put the keys from this array in the $keys array, and the values ​​in $values.

     $arr = ['a' => 1, 'b' => 2, 'c' => 3];
     $keys = array_keys($arr);
     $values = array_values($arr);
     var_dump($keys);
     var_dump($values);
     */

     /*
     15.Given an array: Use them to create the following array:
     ['a' => 1, 'b' => 2, 'c' => 3]

     $arr1 = ['a', 'b', 'c'];
     $arr2 = [1, 2, 3];
     $result = array_combine($arr1, $arr2);
     var_dump($result);
     */

     /*
     16.Given an array: Swap keys and values ​​in it.

     $arr = ['a' => 1, 'b' => 2, 'c' => 3];
     $arr = array_flip($arr);
     var_dump($arr);
     */

     /*
     17.Given an array: Make it into the following array:
     [5, 4, 3, 2, 1]

     $arr = [1, 2, 3, 4, 5];
     $arr = array_reverse($arr);
     var_dump($arr);
     */

     /*
     18.Given an array: Find the position of the first element '-'.

     $arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
     $search = array_search('-', $arr);
     echo $search;
     */

     /*
     19.Given an array: Change the element with key 0 to '!' and the element with key 3 to '!!'.

     $arr = ['a', 'b', 'c', 'd', 'e'];
     $arr = array_replace($arr, [0=>'!', 3=>'!!']);
     var_dump($arr);
     */

     /*
     20.Given an array: Display a random key from the given array.

     $arr = ['a' => 1, 'b' => 2, 'c' => 3];
     echo array_rand($arr);
     */

     /*
     21.Given an array: Display a random element of the given array.

     $arr = ['a' => 1, 'b' => 2, 'c' => 3];
     $key = array_rand($arr);
	echo $arr[$key];
     */

     /*
     22.Given an array: Shuffle its elements randomly.

     $arr = [1, 2, 3, 4, 5];
     shuffle($arr);
     var_dump($arr);
     */
     
     /*
     23.Fill an array with numbers from 1 to 25 using range and then shuffle its elements randomly.

     $arr = range(1, 25);
     shuffle($arr);
     var_dump($arr);
     */

     /*
     24.Create an array filled with letters from 'a' to 'z' so that the letters are random and not repeated.

     $arr = range('a', 'z');
     shuffle($arr);
     var_dump($arr);
     */

     /*
     25.Make a string 6 characters long, consisting of small English letters in random order. 
     Letters must not be repeated.

     $arr = range('a', 'f');
     shuffle($arr);
     $array = implode($arr);
     echo $array;
     */

     /*
     26.Remove duplicate elements from this array.

     $arr = ['a', 'b', 'c', 'b', 'a'];
     $array = array_unique($arr);
     var_dump($array);
     */

     /*
     27.Display its first and last elements so that they disappear from the original array.

     $arr = [1, 2, 3, 4, 5];
     $one = array_shift($arr);
     $pop = array_pop($arr);
     echo $one . "<br>" . $pop;
     */

     /*
     28.Given an array: Add element 0 to the beginning and element 6 to the end.

     $arr = [1, 2, 3, 4, 5];
     array_unshift($arr, 0);
     array_push($arr, 6);
     var_dump($arr);
     */

     /*
     29.Given an array: Make it into the following array:
     ['a', 'b', 'c', '-', '-', '-']

     $arr = ['a', 'b', 'c'];
     $array = array_pad($arr, 6, '-');
     var_dump($array);
     */

     /*
     30.Fill the array with 10 'x' letters.

     $arr = array_fill( 0, 10, 'x');
     var_dump($arr)
     */

     /*
     31.Create an array filled with integers from 1 to 20. Use the array_chunk function to split 
     this array into 4 sub-arrays of five elements each.

     $arr = range(1, 20);
     $arr = array_chunk($arr, 5);
     var_dump($arr);
     */

     /*
     32.Given an array: Count how many times each letter occurs.

     $arr = ['a', 'b', 'c', 'b', 'a'];
     $count = array_count_values($arr);
     var_dump($count);
     */

     /*
     33.Given an array: Create a new array that will contain the square roots of the given elements.

     $arr = [1, 2, 3, 4, 5];
     $result = array_map('sqrt', $arr);
	var_dump($result);
     */

     /*
     34.Given an array: Write to the new array the elements that are in both arrays.

     $arr1 = [1, 2, 3, 4, 5];
     $arr2 = [3, 4, 5, 6, 7];

     $array = array_intersect($arr1, $arr2);
     var_dump($array);
     */

     /*
     35.Write to the new array elements that are not present in both arrays at the same time.

     $arr1 = [1, 2, 3, 4, 5];
     $arr2 = [3, 4, 5, 6, 7];
     $array = array_diff($arr1, $arr2);
     var_dump($array);
     */

     //Time-Date Functions in PHP

     /*
     1.Print the current time in timestamp format.
     */
?>

