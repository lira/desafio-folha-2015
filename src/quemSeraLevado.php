<?php

namespace Lira\DesafioFolha;

/***
 * Classe de teste para Recrutamento Folha
 *
 * Exemplo: Amarelo
 *
 * @author Fernando Lira <fhlira@gmail.com>
 * @since 2015-04-14
 */
class quemSeraLevado
{
    /**
     * @var array
     */
    protected $arrayCometasGrupos = array();

    /**
     * quemSeraLevado constructor.
     * @param array $cometasGrupo
     */
    public function __construct(array $cometasGrupo)
    {
        if(is_array($cometasGrupo)) {
            $this->arrayCometasGrupos = $cometasGrupo;
        }
    }

    /**
     * Retona quem NÃO vai
     *
     * @return array
     */
    public function retornaQuemVai()
    {
        /**
         * @var array $arrayNaoLevados
         */
        $arrayNaoLevados = array();

        foreach ($this->arrayCometasGrupos as $arrayGrupoCometa) {
            $cometa = $this->processaCometasGrupos($arrayGrupoCometa['cometa']);
            $grupo = $this->processaCometasGrupos($arrayGrupoCometa['grupo']);

            if ($cometa != $grupo) {
                $arrayNaoLevados[] = $arrayGrupoCometa['grupo'];
            }
        }

        return $arrayNaoLevados;
    }

    /**
     * Retorna o resultado da multiplicação e resto
     *
     * @param $cometaGrupo
     * @param int $mod
     * @return int
     */
    protected function processaCometasGrupos($cometaGrupo, $mod = 45)
    {
        /**
         * Verifica se entrou com valores válidos
         */
        if (empty($cometaGrupo) || !preg_match('/[A-Za-z]+/', $cometaGrupo) || !is_numeric($mod)) {
            return 0;
        }


        /**
         * Inicia variavel que ira retornar a multiplicação total
         * @var int $multiplicacao
         */
        $multiplicacao = 1;

        for ($i=0; $i<strlen($cometaGrupo);$i++) {
            /**
             * Pega o valor ASCII da Letra, menos o valor da letra A, somando 1
             * para obter o valor de 1 à 26 para o alfabeto
             */
            $multiplicacao *= (ord($cometaGrupo[$i]) - ord('A') + 1);
        }

        return $multiplicacao % $mod;
    }
}
