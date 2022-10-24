<?php 

require __DIR__ . '/vendor/autoload.php';


use OO\Exportar\{ExportarCSV, ExportarJson, ExportarHTML};
use OO\Relatorio\Relatorio;

$exportarHTML = new ExportarHTML();
$exportarJson = new ExportarJson();
$exportarCSV = new ExportarCSV();

$relatorio = new Relatorio();

echo $relatorio->pegarRelatorio($exportarHTML);
echo PHP_EOL;
echo $relatorio->pegarRelatorio($exportarJson);
echo PHP_EOL;
echo $relatorio->pegarRelatorio($exportarCSV);