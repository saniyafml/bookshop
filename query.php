<?
$sql = 'SELECT book.name AS book, book.price, book.image AS image, author.name AS author FROM book INNER JOIN book_author ON book.id = book_author.book INNER JOIN author ON author.id = book_author.author';
$result = mysqli_query($db,$sql);
$arr = [];
if($result == false){
	print("Ошибк при выполнении запроса");
}else{
	while($row = mysqli_fetch_array($result)){
		$arr[] = $row;
	}
}
?>