<?php
class Book {
    public $title;
    public $author;

    function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
        echo "Book '{$this->title}' by {$this->author} created.<br>";
    }

    function __destruct() {
        echo "Goodbye! Book '{$this->title}' is being destroyed.<br>";
    }
}

$book1 = new Book("PHP Programming", "John Smith");
?>
