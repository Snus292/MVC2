<?php


class Controller
{
    public function StartSite()
    {
        include "view/main.php";
    }

    public function BookList()
    {
        require_once "./model/Model_db.php";
        require_once "./config/config.php";

        $model = new Model_db($db);

        $booksList = $model->getBookList();
        include "view/bookList.php";
    }

    public function bookOne($title)
    {
        require_once "./model/Model_db.php";
        require_once "./config/config.php";

        $model = new Model_db($db);

        $test = $model->getBook($title);
        if ($test[0] == true) {
            $book = $test[1];
            include "view/bookOne.php";
        } else {
            include "view/error404.php";
        }
    }

    public function error404()
    {
        include "view/error404.php";
    }
}
