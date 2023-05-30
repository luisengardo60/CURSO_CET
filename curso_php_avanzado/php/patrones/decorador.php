
<?php
class PrettyPrint
{
    protected $book = null;

    public function __construct($book_object)
    {
        $this->book = $book_object;
    }

    public function getAuthor()
    {
        return $this->book->author_first_name . " " . $this->book->author_last_name;
    }

    public function getAuthorSortable()
    {
        return $this->book->author_last_name . ", " . $this->book->author_first_name;
    }
}
class estandarClass
{
public $title;
public $author_first_name;
public $author_last_name;
public function __construct($titulo,$nombre,$apellido)
{
$this->title=$titulo;
$this->author_first_name=$nombre;
$this->author_last_name=$apellido;
}
}

?>