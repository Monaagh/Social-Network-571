<?php
$dsn = getenv('MYSQL_DSN');
$user = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');


echo "Hello!";
if (!isset($dsn, $user) || false === $password) {
    throw new Exception("set MYSQL_DSN, MYSQL_USER, MYSQL_PASSWORD environment variable");
}

try {
$db = new PDO($dsn, $user, $password);
$sql = sprintf('INSERT INTO Recipes VALUES (1, "pasta", "10 min")');
$statement = $db->prepare($sql);
$statement->execute();
} catch (Exception $e) {
    echo $e->getMessage();
}
echo "We connected";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* Style the side navigation */
        .sidenav {
            height: 100%;
            width: 200px;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #1157;
            overflow-x: hidden;
            flex: 3 1 80%;
        }


        /* Side navigation links */
        .sidenav a {
            color: white;
            padding: 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color on hover */
        .sidenav a:hover {
            background-color: #ddd;
            color: teal;
        }

        /* Style the content */
        .content {
            margin-left: 200px;
            padding-left: 20px;
            float: right;
            position: relative;
            flex: 3 1 80%;
        }
        .page-name {
            text-align:center;
            font-size: 40px;
        }

        Table.food-table{
            margin :auto;
            width: 500px;
            border-collapse: separate;
        }

        Table.food-table tr {
            width:200px;
            height: 200px;
            text-align:center;
            outline: 1px solid #6f753e;
        }

        Table.food-table td {

        }

        .recipe-name {
            padding: 10px;
            height: 150px;
            font-size: 25px;
        }

        .creator {
            height: 50px;
            font-size: 20px;
        }

        .home {
            display: flex;
            flex-direction: row;
        }
    </style>
</head>
<body>
<div class="home">
    <div class="sidenav">
        <a href="#">Home</a>
        <a href="#">Profile</a>
        <a href="#">Search</a>
        <a href="#">Settings</a>
        <a href="#">Logout</a>
    </div>

    <div class="content">
        <h2 class="page-name">Activity Feed</h2>
        <Table class="food-table", cellspacing="20">
            <tr>
                <td>
                    <div class="recipe-name">Name of Recipe</div>
                    <div class="creator">Created by</div>
                </td>
                <td><a href="focaccia.html"><img src="https://www.homecookingadventure.com/images/recipes/tn2_focaccia_main.jpg" width="180" height="180" alt="Food1"/></a><br>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="recipe-name">Name of Recipe</div>
                    <div class="creator">Created by</div>
                </td>
                <td><a href="focaccia.html"><img src="https://www.homecookingadventure.com/images/recipes/tn2_focaccia_main.jpg" width="180" height="180" alt="Food1"/></a><br>
                </td>
            </tr>
        </Table>
    </div>
</div>

</body>
</html>