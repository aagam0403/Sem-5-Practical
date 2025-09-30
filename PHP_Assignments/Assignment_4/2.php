<?php
    class Book {
        public $title;
        public $author;

        function __construct($title, $author) {
            $this->title = $title;
            $this->author = $author;
            echo "Book Created: $this->title by $this->author<br>";
        }

        function __destruct() {
            echo "Goodbye from book: $this->title<br>";
        }
    }

    $book1 = new Book("Learning PHP", "Jane Smith");
?>