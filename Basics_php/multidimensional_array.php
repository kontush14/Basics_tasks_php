<?php
     //Multidimensional Arrays

     /*
     1.Given the following array: Use it to display elements with text 'l', 'e', ​​'g' and 'a'.

     $arr = [
          ['a', 'b', 'c'],
          ['d', 'e', 'f'],
          ['g', 'h', 'i'],
          ['j', 'k', 'l'],
     ];

     echo $arr[3][2] . "<br>";
     echo $arr[1][1] . "<br>";
     echo $arr[2][0] . "<br>";
     echo $arr[0][0] . "<br>";
     */

     /*
     2.Given the following array: the visibility of all its elements.

     $arr = [[1, 2], [3, 4], [5, 6]];

     $sum = $arr[0][0] + $arr[0][1] + $arr[1][0] + $arr[1][1] + $arr[2][0] + $arr[2][1];
     echo $sum;
     */

     /*
     3.Given the following array: the visibility of all its elements.

     $arr = [
     [
          [1, 2],
          [3, 4],
     ],
     [
          [5, 6],
          [7, 8],
     ],
     ];
     $sum = $arr[0][0][0] + $arr[0][0][1] + $arr[0][1][0] + $arr[0][1][1] + $arr[1][0][0] + $arr[1][0][1] + $arr[1][1][0] + $arr[1][1][1];
     echo $sum;
     */

     /*
     4.Given the following array: Use this array to output the name of the first boy and the name of 
     the second girl.

     $arr = [
          'boys'  => [1 => 'Viktor', 2 => 'Vasyl', 3 => 'Borys'],
          'girls' => [1 => 'Dasha', 2 => 'Katya', 3 => 'Inna'],
     ];

     echo $arr['boys'][1] . "<br>";
     echo $arr['girls'][2];
     */

     /*
     5.Use this array to output the English name of the environment.

     $arr = [
          'ua' => ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'нд'],
          'en' => ['mn', 'ts', 'wd', 'th', 'fr', 'st', 'sn'],
     ];

     echo $arr['en'][2];
     */

     /*
     6.Use this array to display the sum of the salaries of the first and third user.

     $arr = [
          [
               'name'   => 'user1',
               'age'    => 30,
               'salary' => 1000,
          ],
          [
               'name'   => 'user2',
               'age'    => 31,
               'salary' => 2000,
          ],
          [
               'name'   => 'user3',
               'age'    => 32,
               'salary' => 3000,
          ],
     ];

     echo $arr[0]['salary'] + $arr[2]['salary'];
     */

     /*
     7.Find the sum of all elements of the given array. Treat each element individually, without a loop.

     $arr = [
          [1, 2, 3, [4, 5, [6, 7]]],
          [8, [9, 10]]
     ];
     echo $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3][0] + $arr[0][3][1] + $arr[0][3][2][0]
     + $arr[0][3][2][1] + $arr[1][0] + $arr[1][1][0] + $arr[1][1][1];
     */
     
     /*
     8.Use two nested loops to find the sum of the elements of this array.

     $arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];

     $sum = 0;
     foreach ($arr as $key => $items) {
          foreach ($items as $k => $value) {
               $sum = $sum + $items[$k];
          }
     }

     echo $sum;
     */

     /*
     9.Use three nested loops to find the sum of the elements of this array.

     $arr = [
          [
               [1, 2, 3],
               [6, 7, 8],
               [3, 8, 4],
               [6, 7, 9],
          ],
          [
               [9, 1, 2],
               [4, 5, 6],
          ],
          [
               [9, 1, 2],
               [4, 5, 6],
               [5, 6, 3],
          ],
     ];

     $sum = 0;
     foreach ($arr as $key => $items) {
          foreach ($items as $k => $value) {
               foreach ($value as $icon => $int) {
                    $sum = $sum + $value[$icon];
               }
          }
     }
     echo $sum;
     */

     /*
     10.Print the elements of this array in key-value format.

     $arr = [
          [
               'name'   => 'user1',
               'age'    => 30,
               'salary' => 1000,
          ],
          [
               'name'   => 'user2',
               'age'    => 31,
               'salary' => 2000,
          ],
          [
               'name'   => 'user3',
               'age'    => 32,
               'salary' => 3000,
          ],
     ];

     foreach ($arr as $key => $items) {
          foreach ($items as $k => $value) {
               echo $k . " - " . $value . "<br>"; 
          }
     }
     */

     /*
     11.Using two nested loops, output the elements of this array in the format group name - user name.

     $arr = [
          'group1'  => ['user11', 'user12', 'user13', 'user43'],
          'group2'  => ['user21', 'user22', 'user23'],
          'group3'  => ['user31', 'user32', 'user33'],
          'group4'  => ['user41', 'user42', 'user43'],
          'group5'  => ['user51', 'user52'],
     ];

     foreach ($arr as $key => $items) {
          foreach ($items as $k => $value) {
               echo $key . " - " . $value . "<br>";
          }
     }
     */

     /*
     12.Form the following array using two nested loops: 
     [[1, 2, 3, 4, 5], [1, 2, 3, 4, 5], [1, 2, 3, 4, 5]]

     $arr = [];
     for ($i=0; $i < 3; $i++) { 
          for ($j=0; $j < 5; $j++) { 
               $arr[$i][$j] = $j + 1;
          }
     }
     var_dump($arr);
     */

     /*
     13.Form the following array using two nested loops:
     [['x', 'x', 'x', 'x'], ['x', 'x', 'x', 'x'], ['x', 'x', 'x', 'x']]

     $arr = [];
     $x = 'x';
     for ($i=0; $i < 3; $i++) { 
          for ($j=0; $j < 4; $j++) { 
               $arr[$i][$j] = $x;
          }
     }
     var_dump($arr);
     */

     /*
     14.Form the following array using three nested loops:
     [
          [
               [1, 2, 3, 4, 5],
               [1, 2, 3, 4, 5],
          ],
          [
               [1, 2, 3, 4, 5],
               [1, 2, 3, 4, 5],
          ],
          [
               [1, 2, 3, 4, 5],
               [1, 2, 3, 4, 5],
          ],
     ]


     $arr = [];
     for ($i=0; $i < 3; $i++) { 
          for ($j=0; $j < 2; $j++) { 
               for ($k=0; $k < 5; $k++) { 
                    $arr[$i][$j][$k] = $k + 1;
               }
          }
     }
     var_dump($arr);
     */

     /*
     15.Form the following array using two nested loops:
     [[1, 2], [3, 4], [5, 6], [7, 8]]

     $arr = [];
     $k = 1;
     for ($i=0; $i < 4 ; $i++) { 
          for ($j=0; $j < 2; $j++) { 
               $arr[$i][$j] = $k;
               $k++;
          }
     }
     var_dump($arr);
     */

     /*
     16.Form the following array using two nested loops:
     [[2, 4, 6], [8, 10, 12], [14, 16, 18], [20, 22, 24]

     $arr = [];
     $k = 1;
     for ($i=0; $i < 4; $i++) { 
          for ($j=0; $j < 3; $j++) { 
               $arr[$i][$j] = $k + $k;
               $k++;
          }
     }
     var_dump($arr);
     */

     /*
     17.Form the following three-dimensional array using three nested loops:
     [
          [
               [1, 2], 
               [3, 4]
          ], 
          [
               [5, 6], 
               [7, 8]
          ]
     ]

     $arr = [];
     $int = 1;
     for ($i=0; $i < 2; $i++) { 
          for ($j=0; $j < 2; $j++) { 
               for ($k=0; $k < 2; $k++) { 
                    $arr[$i][$j][$k] = $int;
                    $int++;
               }
          }
     }
     var_dump($arr);
     */

     /*
     18.Use this array to output a column of products in some format you've come up with.

     $products = [
          [
               'name'   => 'meat',
               'price'  => 100,
               'amount' => 5,
          ],
          [
               'name'   => 'vegetavles',
               'price'  => 200,
               'amount' => 6,
          ],
          [
               'name'   => 'fruits',
               'price'  => 300,
               'amount' => 7,
          ],
     ];

     foreach ($products as $key => $items) {
          foreach ($items as $k => $value) {
               echo $items['name'] . " - price - $" . $items['price'] . " - $" . $items['amount'] . "<br>"; 
          }
     }
     */

     /*
     19.Add one more product to the array with the product from the complex task.

     $products = [
          [
               'name'   => 'meat',
               'price'  => 100,
               'amount' => 5,
          ],
          [
               'name'   => 'vegetavles',
               'price'  => 200,
               'amount' => 6,
          ],
          [
               'name'   => 'fruits',
               'price'  => 300,
               'amount' => 7,
          ],
     ];
     $products[3]['name'] = 'potatoes';
     $products[3]['price'] = 50;
     $products[3]['amount'] = 2;
     var_dump($products);
     */

     /*
     20.Given a list of cities and their countries, stored in the following structure:
     Write a code that will remake the data structure like this:
     [
          'USA'=> [
               'Chicago', 'Houston', 'Los Angeles',
          ],
          'Poland'=> [
               'Krakow', 'Warsaw'
          ],
          'Ukraine'=> [
               'Kyiv', 'Kharkiv'
          ],
     ]

     $arr = [
               [
                    'country' => 'USA',
                    'city' =>    'Chicago',
               ],
               [
                    'country' => 'USA',
                    'city' =>    'Houston',
               ],
               [
                    'country' => 'USA',
                    'city' =>    'Los Angeles',
               ],
               [
                    'country' => 'Poland',
                    'city' =>    'Krakow',
               ],
               [
                    'country' => 'Poland',
                    'city' =>    'Warsaw',
               ],
               [
                    'country' => 'Ukraine',
                    'city' =>    'Kyiv',
               ],
               [
                    'country' => 'Ukraine',
                    'city' =>    'Kharkiv',
               ],
          ];
          $result = [];
          for ($i=0; $i < 7; $i++) { 
               if($arr[$i]['country'] == 'USA')
               {
                    $result['USA'][] = $arr[$i]['city'];
               }
               elseif($arr[$i]['country'] == 'Poland')
               {
                    $result['Poland'][] = $arr[$i]['city'];
               }
               elseif($arr[$i]['country'] == 'Ukraine')
               {
                    $result['Ukraine'][] = $arr[$i]['city'];
               }
          }
          var_dump($result);
     */

     /*
     21.The list of events in connection with the ascertainment is given, stored in the items to be excluded:
     Write a code that will remake the data structure like this:
     [
	'2019-12-29'=> ['name1', 'name3', 'name5', 'name7'],
	'2019-12-30'=> ['name4', 'name8', 'name9'],
	'2019-12-31'=> ['name2', 'name6'],
     ]

     $arr = [
               [
                    'date'  => '2019-12-29',
                    'event' => 'name1'
               ],
               [
                    'date'  => '2019-12-31',
                    'event' => 'name2'
               ],
               [
                    'date'  => '2019-12-29',
                    'event' => 'name3'
               ],
               [
                    'date'  => '2019-12-30',
                    'event' => 'name4'
               ],
               [ 
                    'date'  => '2019-12-29',
                    'event' => 'name5'
               ],
               [
                    'date'  => '2019-12-31',
                    'event' => 'name6'
               ],
               [
                    'date'  => '2019-12-29',
                    'event' => 'name7'
               ],
               [
                    'date'  => '2019-12-30',
                    'event' => 'name8'
               ],
               [
                    'date'  => '2019-12-30',
                    'event' => 'name9'
               ],
            ];
     $result = [];
     for ($i=0; $i < 9; $i++) { 
          if($arr[$i]['date'] == '2019-12-29')
          {
               $result['2019-12-29'][] = $arr[$i]['event'];
          }
          elseif($arr[$i]['date'] == '2019-12-30')
          {
               $result['2019-12-30'][] = $arr[$i]['event'];
          }
          elseif($arr[$i]['date'] == '2019-12-31')
          {
               $result['2019-12-31'][] = $arr[$i]['event'];
          }
     }
     var_dump($result);
     */

     /*
     22.Given a list of events for specific dates, stored in the following structure:
     Write a code that will remake the data structure like this:
     [
          [
               'date'  => '2019-12-29',
               'event' => 'name1'
          ],
          [
               'date'  => '2019-12-29',
               'event' => 'name2'
          ],
          [
               'date'  => '2019-12-29',
               'event' => 'name3'
          ],
          [
               'date'  => '2019-12-29',
               'event' => 'name4'
          ],
          [
               'date'  => '2019-12-30',
               'event' => 'name5'
          ],
          [
               'date'  => '2019-12-30',
               'event' => 'name6'
          ],
          [
               'date'  => '2019-12-30',
               'event' => 'name7'
          ],
          [
               'date'  => '2019-12-31',
               'event' => 'name8'
          ],
          [
               'date'  => '2019-12-31',
               'event' => 'name9'
          ],
     ]

     $arr = [
          '2019-12-29'=> ['name1', 'name2', 'name3', 'name4'],
          '2019-12-30'=> ['name5', 'name6', 'name7'],
          '2019-12-31'=> ['name8', 'name9'],
     ];

     $result = [];
     $result2 = [];
     $result3 = [];

     for ($i=0; $i < 4; $i++) { 
          $result[$i]['date'] = '2019-12-29';
          $result[$i]['event'] = $arr['2019-12-29'][$i];
     }

     for ($k=0; $k < 3; $k++) { 
          $result2[$k]['date'] = '2019-12-30';
          $result2[$k]['event'] = $arr['2019-12-30'][$k];
     }

     for ($j=0; $j < 2; $j++) { 
          $result3[$j]['date'] = '2019-12-31';
          $result3[$j]['event'] = $arr['2019-12-31'][$j];
     }

     $arr_merge = array_merge($result, $result2);
     $arr_merge = array_merge($arr_merge, $result3);
     var_dump($arr_merge);
     */
?>