<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="todo, app, tasks, to, do, plan, organize, organise, schedule">

    <title>To-do app | by Genadi Kozarev</title>

    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Lato:300'>

    <style>
        html {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            width: 100%;
        }

        body {
            margin: 5% auto 0 auto;
            width: 90%;
            max-width: 1125px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            color: #aaa;
            font-size: 18px;
        }

        h1 {
            color: #4CAF50;
            font-family: 'Lato', sans-serif;
            font-size: 96px;
            margin-bottom: 20px;
        }

        li {
            color: #000;
            font-family: 'Verdana', sans-serif;
            text-decoration: line-through;
        }

        ul.no-bullets {
            list-style-type: none;
            padding: 0;
            margin: 15px 0 15px 0;
        }

        a {
            text-decoration: none;
            color: #555555;
        }

        .button {
            background-color: #dc6565;
            border: none;
            color: #fff;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: #fff;
            color: black;
            border: 2px solid #dc6565;
        }

        .button1:hover {
            background-color: #dc6565;
        }

        .back {
            background-color: #4CAF50;
            border: none;
            color: #fff;
            padding: 8px 16px;
            text-align: center;
            font-size: 16px;
            margin: 4px 2px;
            opacity: 0.6;
            transition: 0.3s;
            display: inline-block;
            text-decoration: none;
            cursor: pointer;
        }

        .back:hover {opacity: 1}
    </style>
</head>
<body>
    <h1>Completed tasks</h1>
    <ul class="no-bullets">
        <?php
            foreach($data as $task) {
                echo '<li>';
                echo $task['title'] . ' - ';
                echo '<button class="button button1"><a href="/delete/'. $task['id'] . '">delete</a></button>';
                echo '</li>';
            }
        ?>
    </ul>
    <button class="back"><a href="/">back to home page</a></button>
</body>
</html>
