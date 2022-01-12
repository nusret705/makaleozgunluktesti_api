
include("makaleozgunluktesti.class.php");
$ozgunluk = new ozgunluk();


///////////// IMPORTANT!!!! /// YOU MUST TO ADD YOUR API KEY.
$ozgunluk -> api_key = "your api key"; /// ADD YOUR API KEY



///////////  NEW ORDER ///////////
$new_order = $ozgunluk -> new_order("This is text for new order.");
$new_order = json_decode($new_order);
print_r($new_order);


//////////  SHOW ORDER ///////////
$show_order = $ozgunluk -> show_order("Your order id");
$show_order = json_decode($show_order);
print_r($show_order);

//////////  SHOW BALANCE ///////////
$get_balance = $ozgunluk -> get_balance();
$get_balance = json_decode($get_balance);
print_r($get_balance);
