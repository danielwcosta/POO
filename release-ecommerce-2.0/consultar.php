<?php
include __DIR__ . '/vendor/autoload.php';

$pagarme = new PagarMe\Client('ak_test_ehmjboAEI6A5DqSkPMGmqSxuNSvdbm');

$transacao = $pagarme->transactions()->get([
    'id' => '6337492'
]);

echo $transacao->status;