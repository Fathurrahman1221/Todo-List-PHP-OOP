<?php
require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

function testViewShowTodolist(): void
{
    $todolistRepository = new \Repository\TodolistRepositoryImpl();
    $todolistService = new \Service\TodolistServiceImpl($todolistRepository);
    $todolistView = new \View\TodolistView($todolistService);

    $todolistService->addTodolist("PHP");
    $todolistService->addTodolist("PHP OOP");
    $todolistService->addTodolist("PHP Dasar");

    $todolistView->showTodolist();
}

function testAddShowTodolist(): void
{
    $todolistRepository = new \Repository\TodolistRepositoryImpl();
    $todolistService = new \Service\TodolistServiceImpl($todolistRepository);
    $todolistView = new \View\TodolistView($todolistService);

    $todolistService->addTodolist("PHP");
    $todolistService->addTodolist("PHP OOP");
    $todolistService->addTodolist("PHP Dasar");

    $todolistView->showTodolist();

    $todolistView->addTodolist();

    $todolistView->showTodolist();

    $todolistView->addTodolist();
}

function testRemoveShowTodolist(): void
{
    $todolistRepository = new \Repository\TodolistRepositoryImpl();
    $todolistService = new \Service\TodolistServiceImpl($todolistRepository);
    $todolistView = new \View\TodolistView($todolistService);

    $todolistService->addTodolist("PHP");
    $todolistService->addTodolist("PHP OOP");
    $todolistService->addTodolist("PHP Dasar");

    $todolistView->showTodolist();

    $todolistView->removeTodolist();

    $todolistView->showTodolist();

}

testRemoveShowTodolist();