<?php
require 'braintree.php';

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('23nd25g4kn7gnqbb');
Braintree_Configuration::publicKey('8552x2ym5bvhsycp');
Braintree_Configuration::privateKey('17f3279171d4fd90ee9cd5256be17abf');

$now = new Datetime();
$past = clone $now;
$past = $past->modify("-1 days");

$lookup = Braintree_Transaction::search(array(
  Braintree_CustomerSearch::createdAt()->between($past, $now)
));

echo "<pre>";
print_r($lookup);
echo "</pre>";

foreach($lookup->_ids as $ids){

    $record = Braintree_Transaction::find($ids);

    echo "<pre>";
    print_r($record);
    echo "</pre>";

}

?>
