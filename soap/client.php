<?php
// try {
  // Создание SOAP-клиента
  $client = new SoapClient("http://phpoopsite.local/demo/soap/stock.wsdl");
  // Посылка SOAP-запроса c получением результат
  $result = $client->getStock("a");
  echo "Текущий запас на складе: ", $result;
// } 
// catch (SoapFault $exception) {
  // echo $exception->getMessage();	
// }
?>