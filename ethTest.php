<?php

require_once(dirname(__FILE__).'/ethereumDriver.php');

$config = array(
	"rpcIP" => "127.0.0.1",
	"rpcPort" => "8545",
);

$ethereum = new Ethereum($config["rpcIP"], $config["rpcPort"]);
    




$accounts = $ethereum->eth_accounts();
//var_dump($accounts);

echo "<br>";

$syncStat = (array) $ethereum->eth_syncing();
//var_dump($syncStat);    


echo "<br>";

$sendETH = array(
    "from" => "0xd747a091c5645195d516d8bf23af84afdd5dfaa5",
    "to" => "0x687422eea2cb73b5d3e242ba5456b782919afc85",
    "gas" => "0x76c0",  // 30400
    "gasPrice" => "0x9184e72a000", //10000000000000
    "value" => "0x9184e72a", //2441406250
);

$transaction = NEW Ethereum_Transaction($sendETH["from"],$sendETH["to"],$sendETH["gas"],$sendETH["gasPrice"],$sendETH["value"]);

//var_dump($ethereum->eth_sendTransaction($transaction));

echo "<br>";

echo $ethereum->decode_hex(0x76c0) . " Gas <br>";














function wei2eth($wei){
    return bcdiv($wei,'1000000000000000000',18);
}

function ethdecode($input){
    return dechex($input);
}