<?php 
namespace OO\Relatorio;

use OO\Exportar\ExportarInterface;

class Relatorio
{
    public function pegarRelatorio(ExportarInterface $exportar)
    {
        $dadosRelatorio = ['dado1', 'dado2', 'dado3']; //banco---

        return $exportar->exportar($dadosRelatorio);
    }
}