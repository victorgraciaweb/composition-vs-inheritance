<?php

declare(strict_types=1);

class Motor
{
    /**
     * @var
     */
    private $tipo;

    /**
     * @param $tipo
     */
    public function __construct($tipo)
    {
        $this->tipo = $tipo;
    }

    /**
     * @return void
     */
    public function encender()
    {
        echo "Motor encendido\n";
    }

    /**
     * @return void
     */
    public function apagar()
    {
        echo "Motor apagado\n";
    }
}

final class Automovil extends Motor
{
    /**
     * @var
     */
    private $marca;

    /**
     * @var
     */
    private $modelo;

    /**
     * @param $marca
     * @param $modelo
     */
    public function __construct($marca, $modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    /**
     * @return void
     */
    public function arrancar()
    {
        echo "Arrancando el automóvil {$this->marca} {$this->modelo}\n";
        $this->encender();
    }

    /**
     * @return void
     */
    public function apagar()
    {
        echo "Apagando el automóvil {$this->marca} {$this->modelo}\n";
        $this->apagar();
    }
}

// Crear un automóvil que utiliza el motor de gasolina
$automovil = new Automovil("Toyota", "Corolla");

// Operaciones con el automóvil
$automovil->arrancar();
$automovil->apagar();