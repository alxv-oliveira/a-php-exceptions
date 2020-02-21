<?php

use exception\SaldoInsuficienteException;

include "autoload.php";

$contaJoao = new ContaCorrente("Joao","1212","343477-9",2000.00);
$contaMaria = new ContaCorrente("Maria","1212","343423-9",100.00);
$contaJoana = new ContaCorrente("Joana","1212","343423-9",100.00);
$contaJosefa = new ContaCorrente("josefa","1212","343423-9",100.00);
$contaJosenilda = new ContaCorrente("Josenilda","1212","343423-9",100.00);
$contaFernanda = new ContaCorrente("Fernanda","1212","3434234-9",100.00);
$contaBernardo = new ContaCorrente("Bernardo","1212","3434235-9",100.00);

echo "<br>";
var_dump(ContaCorrente::$taxaOperacao );
echo "<br>";

/* try {
    $contaJoao['teste'];
} catch (Error $error) {
    echo "<b>" . $error->getMessage() . "</b><br>";
} */


echo "<br>";
try {
    $contaJoao->transferir(10, $contaMaria);
} catch (InvalidArgumentException $error) {
    echo $error->getMessage();
} catch (SaldoInsuficienteException $error) {
    echo $error->getMessage() . 
    "<br>Saldo em conta: " . $error->saldo . 
    "<br>Valor do saque: " . $error->valor;
    $contaJoao->totalSaquesNaoPermitidos++;
} catch (\Exception $error) {
    echo $error->getPrevious()->getTraceAsString();
    echo $error->getTraceAsString();
    //echo "<b>" . $error->getPrevious()->getMessage(). "</b>";
    //echo $error->getMessage();
}
//echo ContaCorrente::$operacaoNaoRealizada;