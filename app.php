<?php
//Get USSD inputs(this varies depending on the provider/gateway) 
$sessionId=$_POST["sessionId"];
$serviceCode=$_POST["serviceCode"];
$phoneNumber=$_POST["phoneNumber"];
$text=$_POST["text"];

//check if this is the first interaction or a contnuation
if($text==""){
    //first interaction
    $response="CON Welcome to Myservice.Choose an option:\n";
    $response .="1.Check balance\n";
    $response .="2.Get Welcome message\n";
}
elseif($text=="1"){

    //Option 1 selected
    $response="END your balance is $100.";

}
elseif($text=="2"){
    //Option 2 selected
    $response="END welcome to Myservice!";
}
else{
    //Invalid input
    $response="END Invalid option.Try again";
}
//send the response back to the gateway(echo is used for simplicity)
header('content-type:text/plain');
echo $response;