<?php 
  header( "Content-Type: text/html;charset=utf-8");
  $dom = new DomDocument();
  $dom->load("catalog.xml");
  $root = $dom->documentElement;
  // echo $root->nodeType;
  // echo $root->textContent;
  $books = $root->childNodes;
  // var_dump($books);

?>
<html>

<head>
  <title>Каталог</title>
</head>

<body>
  <h1>Каталог книг</h1>
  <table border="1" width="100%">
    <tr>
      <th>Автор</th>
      <th>Название</th>
      <th>Год издания</th>
      <th>Цена, руб</th>
    </tr>
    <?php 
    foreach ($books as $book) {
   if($book->nodeType == 1){
    echo "<tr>";
    foreach ($book->childNodes as $item){
      if($item->nodeType == 1){
echo "<td>{$item->textContent}</td>";
      }
    }
    echo "</tr>";
   }
 }
      //Парсинг 
    ?>
  </table>
</body>

</html>