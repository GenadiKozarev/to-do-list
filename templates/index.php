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
            background-color: #4CAF50;
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
            border: 2px solid #4CAF50;
        }

        .button1:hover {
            background-color: #4CAF50;
        }

        input,
        span,
        label,
        textarea {
            font-family: 'Ubuntu', sans-serif;
            display: block;
            margin: 10px;
            padding: 5px;
            border: none;
            font-size: 22px;
        }

        textarea:focus,
        input:focus {
            outline: 0;
        }
        /* Question */

        input.question,
        textarea.question {
            font-size: 48px;
            font-weight: 300;
            margin: 0;
            border: none;
            width: 80%;
            background: rgba(0, 0, 0, 0);
            transition: padding-top 0.2s ease, margin-top 0.2s ease;
            overflow-x: hidden; /* Hack to make "rows" attribute apply in Firefox. */
        }
        /* Underline and Placeholder */

        input.question + label,
        textarea.question + label {
            display: block;
            position: relative;
            white-space: nowrap;
            padding: 0;
            margin: 0;
            width: 10%;
            border-top: 1px solid #f4511e;
            -webkit-transition: width 0.4s ease;
            transition: width 0.4s ease;
            height: 0px;
        }

        input.question:focus + label,
        textarea.question:focus + label {
            width: 80%;
        }

        input.question:focus,
        input.question:valid {
            padding-top: 35px;
        }

        textarea.question:valid,
        textarea.question:focus {
            margin-top: 35px;
        }

        input.question:focus + label > span,
        input.question:valid + label > span {
            top: -100px;
            font-size: 22px;
            color: #333;
        }

        textarea.question:focus + label > span,
        textarea.question:valid + label > span {
            top: -150px;
            font-size: 22px;
            color: #333;
        }

        input.question:valid + label,
        textarea.question:valid + label {
            border-color: #4CAF50;
        }

        input.question:invalid,
        textarea.question:invalid {
            box-shadow: none;
        }

        input.question + label > span,
        textarea.question + label > span {
            font-weight: 300;
            margin: 0;
            position: absolute;
            color: #8F8F8F;
            font-size: 33px;
            top: -66px;
            left: 0px;
            z-index: -1;
            -webkit-transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
            transition: top 0.2s ease, font-size 0.2s ease, color 0.2s ease;
        }

        input[type="submit"] {
            -webkit-transition: opacity 0.2s ease, background 0.2s ease;
            transition: opacity 0.2s ease, background 0.2s ease;
            display: block;
            opacity: 0;
            margin: 10px 0 0 0;
            padding: 10px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            color: #4CAF50;
        }

        input[type="submit"]:active {
            background: #999;
        }

        input.question:valid ~ input[type="submit"], textarea.question:valid ~ input[type="submit"] {
            -webkit-animation: appear 1s forwards;
            animation: appear 1s forwards;
        }

        input.question:invalid ~ input[type="submit"], textarea.question:invalid ~ input[type="submit"] {
            display: none;
        }

        @-webkit-keyframes appear {
            100% {
                opacity: 1;
            }
        }

        @keyframes appear {
            100% {
                opacity: 1;
            }
        }

        .view-completed {
            background-color: #f4511e;
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

        .view-completed:hover {opacity: 1}
    </style>
</head>

<body>
    <h1>My to-do list</h1>
    <form method="post" action="/addtask">
        <input type="text" name="newTask" class="question" id="nme" required autocomplete="off" />
        <label for="nme"><span>What needs to be done?</span></label>
        <input type="submit" value="Add task">
    </form>
    <ul class="no-bullets">
        <?php
        foreach($data as $task) {
            echo '<li>';
            echo $task['title'] . ' - ';
            echo '<button class="button button1"><a href="/markascompleted/' . $task['id'] . '">done</a></button>';
            echo '</li>';
        }
        ?>
    </ul>
    <button class="view-completed"><a href="/completed">view completed tasks</a></button>
</body>
</html>