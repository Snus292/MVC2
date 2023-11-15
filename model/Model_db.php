<?php

class Model_db
{
    private $db;

    public function __construct(mysqli $db)
    {
        $this->db = $db;
    }

    public function getBookList()
    {
        $query = "SELECT * FROM books";
        $result = $this->db->query($query);

        if (!$result) {
            die("Ошибка запроса: " . $this->db->error);
        }

        $books = [];
        while ($row = $result->fetch_assoc()) {
            $books[] = $row;
        }
        return $books;
    }

    public function getBook($title)
    {
        $stmt = $this->db->prepare("SELECT * FROM books WHERE bookname = ?");
        $stmt->bind_param("s", $title);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $book = $result->fetch_assoc();
            return [true, $book];
        } else {
            return [false];
        }
    }
}

