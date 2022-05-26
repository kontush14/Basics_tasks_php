<?php
    require_once "test_db.php";

    //SELECT, WHERE
    /*
    1.Select an employee with id = 3.

    $sql = "SELECT * FROM `workers` WHERE `id`=3";
    $result = $link->query($sql); 
   
    while ($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    2.Select workers with a salary of $1000.

    $sql = "SELECT * FROM `workers` WHERE `salary`=1000";
    $result = $link->query($sql);
    while ($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    3.Select workers aged 23.

    $sql = "SELECT * FROM `workers` WHERE `age`=23";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    4.Select workers with a salary of more than $400.

    $sql = "SELECT * FROM `workers` WHERE `salary` > 400";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    5.Select workers with a salary equal to or greater than $500.

    $sql = "SELECT * FROM `workers` WHERE `salary` >= 500";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    6.Select workers with a salary NOT equal to $500.

    $sql = "SELECT * FROM `workers` WHERE `salary` != 500";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    7.Select workers with a salary equal to or less than $900.

    $sql = "SELECT * FROM `workers` WHERE `salary` <= 900";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    8.Find out Vasya's salary and age.

    $sql = "SELECT `age`, `salary` FROM `workers` WHERE `name` = 'Vasya' ";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo 'Age:' . $row['age'] . ' ';
        echo ' Salary:' . $row['salary'] . '$<br>';
    }
    */

    //OR and AND

    /*
    9.Select employees aged 25 (not included) to 28 (inclusive).

    $sql = "SELECT * FROM `workers` WHERE `age` > 25 AND `age` <= 28";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    10.Select worker Petro.

    $sql = "SELECT * FROM `workers` WHERE `name`='Petro'";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    11.Select workers Petro and Vasya.

    $sql = "SELECT * FROM `workers` WHERE `name`='Petro' OR `name`='Vasya'";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    12.Select all workers aged 27 or with a salary of $1000.

    $sql = "SELECT * FROM `workers` WHERE `age` = 27 OR `salary` = 1000";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    13.Select all, except for the worker Petro.

    $sql = "SELECT * FROM `workers` WHERE `name` != 'Petro'";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    14.Select all workers aged 23 (inclusive) to 27 (exclusive) or with a salary of $1000.

    $sql = "SELECT * FROM `workers` WHERE `age` >= 23 AND `age` < 27 OR `salary` = 1000";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    15.Select all workers between the ages of 23 and 27 or those with a salary between $400 and $1,000.

    $sql = "SELECT * FROM `workers` WHERE `age` BETWEEN 23 AND 27 OR `salary` BETWEEN 400 AND 1000";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    16.Select all workers aged 27 or with a salary not equal to $400.

    $sql = "SELECT * FROM `workers` WHERE `age` = 27 OR `salary` != 400";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    //INSERT

    /*
    17.Add a new worker Nikita, 26 years old, salary $300.

    $sql = "INSERT INTO `workers` SET `id`=8, `name`='Nikita', `age`=26, `salary`=300";
    $show_info = "SELECT * FROM `workers`";
    $result = $link->query($show_info);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    18.Add a new worker Svetlana with a salary of $1200.

    $sql = "INSERT INTO `workers` SET `id`=8, `name`='Svetlana', `age`=24, `salary`=1200";
    $result = $link->query($sql);
    */

    /*
    19.Add two new workers with one request: Yaroslav with $1200 salary and age 30, 
    Petro with $1000 salary and age 31.

    $sql = "INSERT INTO `workers`(`id`, `name`, `age`, `salary`) VALUES ('9', 'Yaroslav', '30', '1200'),
     ('10', 'Petro', '31', '1000')";
    $result = $link->query($sql);
    */

    //DELETE

    /*
    20.Delete the worker with id=7.

    $sql = "DELETE FROM `workers` WHERE `id`=7";
    $result = $link->query($sql);
    */

    /*
    21.Remove Mykola.

    $sql = "DELETE FROM `workers` WHERE `name`='Mykola'";
    $result = $link->query($sql);
    */

    /*
    22.Remove all employees who are 23 years old.

    $sql = "DELETE FROM `workers` WHERE `age`=23";
    $result = $link->query($sql);
    */


    //UPDATE
    /*
    23.Give Vasya a salary of $200.

    $sql = "UPDATE `workers` SET `salary`=200 WHERE `name`='Vasya'";
    $result = $link->query($sql);
    */

    /*
    24.Set the age of the employee with id=4 to 35 years.

    $sql = "UPDATE `workers` SET `age`=35 WHERE `id`=4";
    $result = $link->query($sql);
    */

    /*
    25.To everyone who has a salary of $500, make it $700.

    $sql = "UPDATE `workers` SET `salary`=700 WHERE `salary`=500";
    $result = $link->query($sql);
    */

    /*
    26.For employees with id greater than 2 and less than 5 inclusive, set the age to 23.

    $sql = "UPDATE `workers` SET `age`=23 WHERE `id`>2 AND `id`<=5";
    $result = $link->query($sql);
    */

    /*
    27.Swap Vasya for Zhenya and increase his salary up to $900.

    $sql = "UPDATE `workers` SET `name`='Zhenya', `salary`=900 WHERE `name`='Vasya'";
    $result = $link->query($sql);
    */

    //LIMIT

    /*
    28.Get the first 6 records from the workers table.
    
    $sql = "SELECT * FROM `workers` WHERE `id`>0 LIMIT 6";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    29.From the workers table, get records from the second, 3 pieces.

    $sql = "SELECT * FROM `workers` WHERE `id`>1 LIMIT 3";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    //ORDER BY
    /*
    30.From the workers table, get all the workers and sort them in ascending order of salary.

    $sql = "SELECT * FROM `workers` WHERE `id`>0 ORDER BY `salary`";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    31.From the workers table, get all the workers and sort them in descending order of salary.

    $sql = "SELECT * FROM `workers` WHERE `id`>0 ORDER BY `salary` DESC";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */

    /*
    32.From the workers table, extract workers 2 through 6 and sort them in ascending age.

    $sql = "SELECT * FROM `workers` WHERE `id`BETWEEN 2 AND 6 ORDER BY `age`";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '$<br>';
    }
    */


    //COUNT
    /*
    33.In the workers table, count all the workers.

    $sql = "SELECT COUNT(*) as count FROM `workers` WHERE `id`>0";
    $result = $link->query($sql);
    $count = mysqli_fetch_all($result);
    var_dump($count);
    */

    /*
    34.In the workers table, count all workers with a salary of $300.

    $sql = "SELECT COUNT(*) as count FROM `workers` WHERE `salary`=300";
    $result = $link->query($sql);
    $count = mysqli_fetch_all($result);
    var_dump($count);
    */


    //LIKE
    /*
    35.In the pages table, find rows where the author's last name ends with "ov".

    $sql = "SELECT * FROM `pages` WHERE `author` LIKE '%ov'";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['author'] . ' ';
        echo $row['article'] . '<br>';
    }
    */

    /*
    36.In the pages table, find rows that contain the word "element" (search for the article column only).

    $sql = "SELECT * FROM `pages` WHERE `article` LIKE '%element%'";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['author'] . ' ';
        echo $row['article'] . '<br>';
    }
    */

    /*
    37.In the workers table, find the rows where the worker's age starts with the number 3, 
    and then only one digit follows.

    $sql = "SELECT * FROM `workers` WHERE `age` LIKE '3_'";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '<br>';
    }
    */

    /*
    38.In the workers table, find the rows where the worker's name ends with "I".

    $sql = "SELECT * FROM `workers` WHERE `name` LIKE '%a'";
    $result = $link->query($sql);
    while($row = $result->fetch_assoc())
    {
        echo $row['id'] . ' ';
        echo $row['name'] . ' ';
        echo $row['age'] . ' ';
        echo $row['salary'] . '<br>';
    }
    */
?>