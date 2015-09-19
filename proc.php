<?php
require 'braintree.php';

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('ffdqc9fyffn7yn2j');
Braintree_Configuration::publicKey('qj65nndbnn6qyjkp');
Braintree_Configuration::privateKey('a3de3bb7dddf68ed3c33f4eb6d9579ca');


// $token = Braintree_ClientToken::generate(array(
// ));
// echo $token;



$result = Braintree_Transaction::sale(array(
  'amount' => $_POST['amount'],
  'paymentMethodNonce' => $_POST['payment_method_nonce']
));

if($result->success==1){ echo "it worked"; }
else { echo "roroh"; }

echo "<pre>";
print_r($_POST);
echo "</pre>";

echo "<pre>";
print_r($result);
echo "</pre>";

?>
