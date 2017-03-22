<?php

namespace Lira\DesafioFolha;

include 'quemSeraLevado.php';

/**
 * Class executaTeste
 * @package Lira\DesafioFolha
 */
class executaTeste
{
    /**
     * @var quemSeraLevado
     */
    protected $quemSeraLevado;

    /**
     * @var array
     */
    protected static $arrayGrupos = array(
        array('cometa' => 'HALLEY', 'grupo' => 'AMERELO'),
        array('cometa' => 'ENCKE', 'grupo' => 'VERMELHO'),
        array('cometa' => 'WOLF', 'grupo' => 'PRETO'),
        array('cometa' => 'KUSHIDA', 'grupo' => 'AZUL'),
    );

    /**
     * executa constructor.
     */
    public function __construct()
    {
        $this->quemSeraLevado = new quemSeraLevado(self::$arrayGrupos);
    }

    /**
     * @return array
     */
    public function quemVai()
    {
        return $this->quemSeraLevado->retornaQuemVai();
    }

}