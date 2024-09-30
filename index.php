<?php

// 1. Придумайте класс, который описывает любую сущность из предметной области библиотеки: книга, шкаф, комната и т.п.

abstract class Book implements GettingBook {
    /**
     * Название книги
     */
    protected string $title;
    /**
     * Язык книги
     */
    protected string $language;
    /**
     * Авторы книги
     */
    protected array $authors; // Можно через класс автор
    /**
     * Издательство книги
     */
    protected string $publisher; // Можно через класс издательство
    /**
     * ISBN книги
     */
    protected string $ISBN;
    /**
     * Артикул книги
     */
    protected string $article;
    /**
     * Описание книги
     */
    protected String $description;
    /**
     * Жанр книги
     */
    protected array $ganres; // Можно через класс жанр
    /**
     * Год выпуска книги
     */
    protected int $release_year;
    /**
     * Год написания книги
     */
    protected int $writing_year;
    /**
     * Количество страниц книги
     */
    protected int $page_count;
    /**
     * Общее количество всех прочитанных книги
     */
    public static int $total_readings_count = 0;

    public function __construct(string $title, string $language, array $authors, string $publisher, string $ISBN, string $article, string $description, array $ganres, int $release_year, int $writing_year, int $page_count) {
        $this->title = $title;
        $this->language = $language;
        $this->authors = $authors;
        $this->publisher = $publisher;
        $this->ISBN = $ISBN;
        $this->article = $article;
        $this->description = $description;
        $this->ganres = $ganres;
        $this->release_year = $release_year;
        $this->writing_year = $writing_year;
        $this->page_count = $page_count;
    }

    /**
     * Строковое представление объекта
     */
    public function __toString()
    {
        $authors_string = '';
        foreach ($this->authors as $key => $value) {
            $authors_string .= $value.', ';
        }
        return $this->title.', язык '.$this->language.', '.$authors_string.'издательство '.$this->publisher.', год выпуска '.$this->release_year.', '.$this->page_count.' стр.';
    }

    /**
     * Получить книгу
     * @return Int $total_readings_count
     */
    function getBook() : void {
        echo 'Всего прочитано книг: '.static::$total_readings_count++.PHP_EOL;
    }

    // методы: сеттеры и геттеры
    /**
     * Получить название книги
     * @return String $title
     */
    function getTitle() : string {
        return $this->title;
    }
    /**
     * Установить название книги
     * @param String $title
     */
    function setTitle(string $title) : void {
        $this->title = $title;
    }
    /**
     * Получить язык книги
     * @return String $language
     */
    function getLanguage() : string {
        return $this->language;
    }
    /**
     * Установить язык книги
     * @param String $language
     */
    function setLanguage(string $language) : void {
        $this->language = $language;
    }
    /**
     * Получить авторов книги
     * @return Array $authors
     */
    function getAuthors() : array {
        return $this->authors;
    }
    /**
     * Установить авторов книги
     * @param Array $authors
     */
    function setAuthors(array $authors) : void {
        $this->authors = $authors;
    }
    /**
     * Получить издательство книги
     * @return String $publisher
     */
    function getPublisher() : string {
        return $this->publisher;
    }
    /**
     * Установить издательство книги
     * @param String $publisher
     */
    function setPublisher(string $publisher) : void {
        $this->publisher = $publisher;
    }
    /**
     * Получить ISBN книги
     * @return String $ISBN
     */
    function getISBN() : string {
        return $this->ISBN;
    }
    /**
     * Установить ISBN книги
     * @param String $ISBN
     */
    function setISBN(string $ISBN) : void {
        $this->ISBN = $ISBN;
    }
    /**
     * Получить описание книги
     * @return String $description
     */
    function getDescription() : string {
        return $this->description;
    }
    /**
     * Установить описание книги
     * @param String $description
     */
    function setDescription(string $description) : void {
        $this->description = $description;
    }
    /**
     * Получить жанры книги
     * @return Array $ganres
     */
    function getGanres() : array {
        return $this->ganres;
    }
    /**
     * Установить жанры книги
     * @param Array $ganres
     */
    function setGanres(array $ganres) : void {
        $this->ganres = $ganres;
    }
    /**
     * Получить год выпуска книги
     * @return Int $release_year
     */
    function getReleaseYear() : int {
        return $this->release_year;
    }
    /**
     * Установить год выпуска книги
     * @param Int $release_year
     */
    function setReleaseYear(int $release_year) : void {
        $this->release_year = $release_year;
    }
    /**
     * Получить год написания книги
     * @return Int $writing_year
     */
    function getWritingYear() : int {
        return $this->writing_year;
    }
    /**
     * Установить год написания книги
     * @param Int $writing_year
     */
    function setWritingYear(int $writing_year) : void {
        $this->writing_year = $writing_year;
    }
    /**
     * Получить количество страниц книги
     * @return Int $page_count
     */
    function getPageCount() : int {
        return $this->page_count;
    }
    /**
     * Установить количество страниц книги
     * @param Int $page_count
     */
    function setPageCount(int $page_count) : void {
        $this->page_count = $page_count;
    }

    /**
     * Получить общее количество прочитанных книг
     * @return Int $total_readings_count
     */
    function getReadingsCount() : int {
        return static::$total_readings_count;
    }

}



// 2. Опишите свойства классов из п.1 (состояние).

// Ответ:
    /**
     * Название книги
     */
    // protected string $title;
    /**
     * Язык книги
     */
    // protected string $language;
    /**
     * Авторы книги
     */
    // protected array $authors; // Можно через класс автор
    /**
     * Издательство книги
     */
    // protected string $publisher; // Можно через класс издательство
    /**
     * ISBN книги
     */
    // protected string $ISBN;
    /**
     * Артикул книги
     */
    // protected string $article;
    /**
     * Описание книги
     */
    // protected String $description;
    /**
     * Жанр книги
     */
    // protected array $ganres; // Можно через класс жанр
    /**
     * Год выпуска книги
     */
    // protected int $release_year;
    /**
     * Год написания книги
     */
    // protected int $writing_year;
    /**
     * Количество страниц книги
     */
    // protected int $page_count;
    /**
     * Общее количество всех прочитанных книги
     */
    // public static int $total_readings_count = 0;



// 3. Опишите поведение классов из п.1 (методы).

// Ответ:
    /**
     * Строковое представление объекта
     */
    // public function __toString()

    /**
     * Получить книгу
     * @return Int $total_readings_count
     */
    // function getBook() : void

    // методы: сеттеры и геттеры
    /**
     * Получить название книги
     * @return String $title
     */
    // function getTitle() : string

    /**
     * Установить название книги
     * @param String $title
     */
    // function setTitle(string $title) : void

    /**
     * Получить язык книги
     * @return String $language
     */
    // function getLanguage() : string

    /**
     * Установить язык книги
     * @param String $language
     */
    // function setLanguage(string $language) : void

    /**
     * Получить авторов книги
     * @return Array $authors
     */
    // function getAuthors() : array

    /**
     * Установить авторов книги
     * @param Array $authors
     */
    // function setAuthors(array $authors) : void

    /**
     * Получить издательство книги
     * @return String $publisher
     */
    // function getPublisher() : string

    /**
     * Установить издательство книги
     * @param String $publisher
     */
    // function setPublisher(string $publisher) : void

    /**
     * Получить ISBN книги
     * @return String $ISBN
     */
    // function getISBN() : string

    /**
     * Установить ISBN книги
     * @param String $ISBN
     */
    // function setISBN(string $ISBN) : void

    /**
     * Получить описание книги
     * @return String $description
     */
    // function getDescription() : string

    /**
     * Установить описание книги
     * @param String $description
     */
    // function setDescription(string $description) : void

    /**
     * Получить жанры книги
     * @return Array $ganres
     */
    // function getGanres() : array

    /**
     * Установить жанры книги
     * @param Array $ganres
     */
    // function setGanres(array $ganres) : void.

    /**
     * Получить год выпуска книги
     * @return Int $release_year
     */
    // function getReleaseYear() : int

    /**
     * Установить год выпуска книги
     * @param Int $release_year
     */
    // function setReleaseYear(int $release_year) : void

    /**
     * Получить год написания книги
     * @return Int $writing_year
     */
    // function getWritingYear() : int

    /**
     * Установить год написания книги
     * @param Int $writing_year
     */
    // function setWritingYear(int $writing_year) : void

    /**
     * Получить количество страниц книги
     * @return Int $page_count
     */
    // function getPageCount() : int

    /**
     * Установить количество страниц книги
     * @param Int $page_count
     */
    // function setPageCount(int $page_count) : void

    /**
     * Получить общее количество прочитанных книг
     * @return Int $total_readings_count
     */
    // function getReadingsCount() : int



// 4. Придумайте наследников классов из п.1. Чем они будут отличаться?

// Ответ:
// Наследники абстрактного класса Book:
//     - PaperBook, у которого будет дополнительные поля вес и библиотека, где ее можно получить, а также соответсвующие методы геттеры и сеттеры
//     - ElectronicBook, у которого будет дополнительное поля ссылка на скачивание, где ее можно получить, а также соответсвующие методы геттеры и сеттеры

// 5. Создайте структуру классов ведения книжной номенклатуры.
// — Есть абстрактная книга.
// — Есть цифровая книга, бумажная книга.
// — У каждой книги есть метод получения на руки.

interface GettingBook {
    function getBook();
}

// У цифровой книги надо вернуть ссылку на скачивание, а у физической – адрес библиотеки, где ее можно получить. У всех книг формируется в конечном итоге статистика по кол-ву прочтений.
// Ответ: свойство $load_link это дополнительное поле ссылка на скачивание в классе ElectronicBook;
//        свойство $weight и $library_address это дополнительные поля вес книги и адрес библиотеки, в которой книгу можно получить в классе PaperBook;
//        У всех книг формируется в конечном итоге статистика по кол-ву прочтений с применением статической переменной $book_readings_count в методе getBook()

// Что можно вынести в абстрактный класс, а что надо унаследовать?
// Ответ: все общее оставляю в абстрактном классе, различия выношу в классы потомки

class PaperBook extends Book {
    public function __construct(string $title, string $language, array $authors, string $publisher, string $ISBN, string $article, string $description, array $ganres, int $release_year, int $writing_year, int $page_count, protected float $weight, protected string $library_address) {
        parent::__construct($title, $language, $authors, $publisher, $ISBN, $article, $description, $ganres, $release_year, $writing_year, $page_count);
        $this->weight = $weight;
        $this->library_address = $library_address;
    }

    public function __toString() {
        return parent::__toString().' в бумажном формате.'.PHP_EOL;
    }

    public function getBook() : void {
        static $book_readings_count = 0;
        parent::getBook();
        echo 'Получена бумажная книга (прочитана '.$book_readings_count++.' раз(а)): '.$this;
    }

    public function getWeight () : float {
        return $this->weight;
    }

    public function setWeight (int $weight) : void {
        $this->weight = $weight;
    }

    public function getLibraryAddress () : string {
        return $this->library_address;
    }

    public function setLibraryAddress (string $library_address) : void {
        $this->library_address = $library_address;
    }

}

class ElectronicBook extends Book {
    public function __construct(string $title, string $language, array $authors, string $publisher, string $ISBN, string $article, string $description, array $ganres, int $release_year, int $writing_year, int $page_count, protected string $load_link) {
        parent::__construct($title, $language, $authors, $publisher, $ISBN, $article, $description, $ganres, $release_year, $writing_year, $page_count);
        $this->load_link = $load_link;
    }

    public function __toString() {
        return parent::__toString().' в электронном формате.'.PHP_EOL;
    }

    public function getBook() : void {
        static $book_readings_count = 0;
        parent::getBook();
        echo 'Получена электронная книга (прочитана '.$book_readings_count++.' раз(а)): '.$this;
    }

    public function getLoadLink() : string {
        return $this->load_link;
    }

    public function setLoadLink(string $load_link) : void {
        $this->load_link = $load_link;
    }

}

$inhabited_island = new PaperBook('Обитаемый остров', 'русский', ['А.Н. Стругацкий', 'Б.Н. Стругацкий'], 'АСТ', '978-5-17-118866-5', '227779624', 
'В 2114 году человечество создает новую космическую группу — Группу Свободного Поиска. Теперь любой человек, получив космический корабль и зарегистрировав маршрут, может отправиться в открытый космос. Тысячи людей устремляются к звездам… Романтический порыв неудержим, но страшные и жестокие испытания ожидают молодых волонтеров ГСП. И человечеству не раз придется столкнуться с последствиями эпохи бурного покорения космоса…',
['научная фантастика', 'приключенческий роман', 'психологический роман', 'философский роман', 'антиутопия'],
2023, 1969, 416, 369, 'Центральная библиотека имени В.И. Ленина');

$three_body_task = new ElectronicBook('Задача трех тел', 'русский', ['Цысинь Лю'], 'Эксмо', '978-5-04-089112-2', '909010893', 
'В те времена, когда Китай переживал последствия жестокой «культурной революции», в ходе секретного военного проекта в космос были посланы сигналы, чтобы установить контакт с инопланетным разумом. Один из сигналов подхватила цивилизация, находящаяся на краю гибели, и теперь пришельцы готовятся вторгнуться на Землю. Узнав об этом, люди разделились на тех, кто готов отдать наш порочный мир под управление высшего разума, и тех, кто до последнего будет бороться против этого вторжения.',
['научная фантастика'],
2017, 2006, 433, 'https://www.ozon.ru/product/zadacha-treh-tel-tsysin-lyu-elektronnaya-kniga-909010893/?__rr=1&abt_att=1&from_sku=1257467466&oos_search=false');

echo $inhabited_island;
echo $three_body_task;
echo PHP_EOL;

$inhabited_island->getBook();
$inhabited_island->getBook();
$three_body_task->getBook();
$inhabited_island->getBook();
$three_body_task->getBook();
$inhabited_island->getBook();
$inhabited_island->getBook();
$three_body_task->getBook();
echo PHP_EOL;

echo $inhabited_island->getLibraryAddress().PHP_EOL;
echo $three_body_task->getLoadLink().PHP_EOL;
echo PHP_EOL;


// 6. Дан код:
// Что он выведет на каждом шаге? Почему?

class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
$a1 = new A(); // Создаст экземпляр класса a1 типа A
$a2 = new A(); // Создаст экземпляр класса a2 типа A
$a1->foo(); // Вызовет метод foo экземпляра класса a1 типа A => Выведет 1, потому что $x (статическая переменная) имеет статическую область видимости, она сохраняет свое значение между вызовами
$a2->foo(); // Вызовет метод foo экземпляра класса a2 типа A => Выведет 2, потому что $x (статическая переменная) имеет статическую область видимости, она сохраняет свое значение между вызовами
$a1->foo(); // Вызовет метод foo экземпляра класса a1 типа A => Выведет 3, потому что $x (статическая переменная) имеет статическую область видимости, она сохраняет свое значение между вызовами
$a2->foo(); // Вызовет метод foo экземпляра класса a2 типа A => Выведет 4, потому что $x (статическая переменная) имеет статическую область видимости, она сохраняет свое значение между вызовами

// Немного изменим п.5
// Что он выведет теперь?

// class A {
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
class B extends A {
}
$a1 = new A(); // Создаст экземпляр класса a1 типа A
$b1 = new B(); // Создаст экземпляр класса b1 типа B, потомка класса A
$a1->foo(); // Вызовет метод foo экземпляра класса a1 типа A => Выведет 5, потому что $x (статическая переменная) имеет статическую область видимости, она сохраняет свое значение между вызовами
$b1->foo(); // Вызовет метод foo экземпляра класса b1 типа B => Выведет 6, потому что $x (статическая переменная) имеет статическую область видимости, она сохраняет свое значение между вызовами
$a1->foo(); // Вызовет метод foo экземпляра класса a1 типа A => Выведет 7, потому что $x (статическая переменная) имеет статическую область видимости, она сохраняет свое значение между вызовами
$b1->foo(); // Вызовет метод foo экземпляра класса b1 типа B => Выведет 8, потому что $x (статическая переменная) имеет статическую область видимости, она сохраняет свое значение между вызовами

// docker run --rm -it -v ${pwd}/:/cli php:8.2-cli php /cli/index.php