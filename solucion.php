<?php
function cabeceraPagina()
{
    return '<!DOCTYPE html><html lang="es">';
}

function cuerpoPagina($contenido)
{
  return "<body>$contenido</body>";
}

function piePagina()
{
    return '</html>';
}

function multiplos($numero, $tope)
{
    $salida = '<ul>';
    for ($i = $numero; $i < $tope; $i++) {
        $salida .= $i % $numero === 0 ? "<li>$i</li>" : '';
    }
    return $salida . '</ul>';
}

echo cabeceraPagina();
echo cuerpoPagina(multiplos(17, 100));
echo piePagina();
