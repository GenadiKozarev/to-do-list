<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    // homepage controller
    $app->get('/', function ($request, $response, $args) use ($container) {
        // display all the tasks on the page
        $renderer = $container->get('renderer');
        $taskModel = $container->get('taskModel');
        $tasks = $taskModel->getIncompleteTasks();

        return $renderer->render($response, "index.php", $tasks);
    });

    // completed tasks page controller
    $app->get('/completed', function ($request, $response, $args) use ($container) {
        $renderer = $container->get('renderer');
        $taskModel = $container->get('taskModel');
        $tasks = $taskModel->getCompletedTasks();

        return $renderer->render($response, "completed.php", $tasks);
    });

    // add task controller
    $app->post('/addtask', function($request, $response, $args) use ($container) {
        $taskModel = $container->get('taskModel');
        $newTask = $request->getParsedBody()['newTask'];
        $taskModel->addTask($newTask);
        return $response->withHeader('Location', './');
    });

    // mark as completed controller
    $app->get('/markascompleted/{id}', function ($request, $response, $args) use ($container) {
        $taskModel = $container->get('taskModel');
        $taskId = $args['id'];
        $taskModel->markTaskAsCompleted($taskId);
        return $response->withHeader('Location', '/');
    });

    // delete task controller
    $app->get('/delete/{id}', function ($request, $response, $args) use ($container) {
        $taskModel = $container->get('taskModel');
        $taskId = $args['id'];
        $taskModel->deleteTask($taskId);
        return $response->withHeader('Location', '/completed');
    });
};
