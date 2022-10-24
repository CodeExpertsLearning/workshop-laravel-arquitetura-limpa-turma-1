<?php 

namespace OO\Exportar;

class ExportarCSV implements ExportarInterface
{
    public function exportar(array $dados)
    {
        return 'Exportado em CSV...';
    }
}