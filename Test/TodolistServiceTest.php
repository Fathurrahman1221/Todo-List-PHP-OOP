<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use Entity\Todolist;
function testShowTodolist():void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistRepository->todolist[1] = new Todolist("PHP");
    $todolistRepository->todolist[2] = new Todolist("PHP OOP");
    $todolistRepository->todolist[3] = new Todolist("PHP Database");

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->showTodolist();
}

function testAddTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();
}

function testRemoveTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();

    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistService->removeTodolist(3);

    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);

    $todolistService->showTodolist();

    $todolistService->removeTodolist(3);

    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);

    $todolistService->showTodolist();
}

testRemoveTodolist();