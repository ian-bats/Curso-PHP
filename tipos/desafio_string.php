<div class="titulo">Desafio String</div>

<?php

// Enunciado:
//Avaliando os métodos da documentação da string,
// qual o método que posicao do texto 'abc'
// na string"!AbcAbcabc' retorne 1?

echo strpos('!AbcAbcabc', 'abc') . '<br>';
echo stripos('!AbcAbcabc', 'abc') . '<br>';
echo strpos(strtolower('!AbcAbcabc'), strtolower('ABC')) . '<br>';

