<?php

namespace View {

    use Helper\InputHelper;
    use Service\TodolistService;

    class TodolistView {

        private TodolistService $todolistService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todolistService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todolistService->showTodolist();

                echo "Menu : " . PHP_EOL;
                echo <<<MENU
                1. Tambah Data
                2. Hapus Data
                x. Keluar
                MENU . PHP_EOL;
                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1"){
                    $this->addTodolist();
                } else if ($pilihan == "2"){
                    $this->removeTodolist();
                } else if ($pilihan == "x"){
                    break;
                } else {
                    echo "Pilihan tidak dimengerti" . PHP_EOL;
                }
            }
            echo "Sampai Jumpa Lagi . . .";
        }

        function addTodolist(): void
        {
            echo "MENAMBAH TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal)");

            if ($todo == "x") {
                echo "Batal menambah todo" . PHP_EOL;
            } else {
                $this->todolistService->addTodolist($todo);
            }
        }

        function removeTodolist(): void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor(0 untuk batal)");

            if ($pilihan == 0){
                echo "Batal menghapus todo" . PHP_EOL;
            } else {
                $this->todolistService->removeTodolist($pilihan);
            }
        }

    }

}