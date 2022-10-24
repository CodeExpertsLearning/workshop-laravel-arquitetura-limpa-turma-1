<?php 

namespace OO\Exportar;

class ExportarJson implements ExportarInterface
{
    public function exportar(array $dados)
    {
        return json_encode($dados);
    }
}