<?php

require_once 'Book.php';
require_once 'Customer.php';
$book1 = new Book( 9785267006323,"1984", "George Orwell", 12);
$book2 = new Book(9780061120084,"To Kill a Mockingbird", "Harper Lee",  2);
$book3 = new Book(9788187981953,'Krishno Pokkho', 'Humayun Ahmed', 0);

$customer1 = new Customer(1, 'John', 'Doe', 'johndoe@mail.com');
$customer2 = new Customer(2, 'Mary', 'Poppins', 'mp@mail.com');

echo "<b>BOOK</b></br>";
// isAvailable
echo "Book-1 is available? " . $book1->isAvailable() . "</br>";
// getPrintableTitle
echo "Book-1 Title: " . $book1->getPrintableTitle() . "</br>";

echo "</br>";

// addCopy
echo "Book-1 Title: " . $book1->getPrintableTitle() . "</br>";
echo "Book-3 availableCopy: " . $book3->availableCopy . "</br>"; 
$book3->__call("addCopy","2"); // add A copy of Book-3
echo "Book-3 availableCopy after adding 2 copy: " . $book3->availableCopy . "</br>";

echo "</br>";

//getTitle
echo "Book-1 Title: <b>" . $book1->title . "</b></br>";
//getAuthor
echo "Book-1 Author: <b>" . $book1->author . "</b></br>";
//getIsbn
echo "Book-1 Isbn: <b>" . $book1->isbn . "</b></br>";

//Customer INFO.
echo "</br> <b>CUSTOMER</b> </br>";
echo "Customer-1 Id: <b>" . $customer1->id . "</b></br>";
echo "Customer-1 First Name: <b>" . $customer1->firstName . "</b></br>";
echo "Customer-1 Last Name: <b>" . $customer1->lastName . "</b></br>";
echo "Customer-1 Email: <b>" . $customer1->email . "</b></br>";
$customer1->email = "adrit@gmail.com";
echo "Customer-1 Email after update: <b>" . $customer1->email . "</b></br>";

?>