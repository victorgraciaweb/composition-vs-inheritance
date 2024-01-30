<?php

declare(strict_types=1);

final class Motor
{
    /**
     * @var
     */
    private $tipo;

    /**
     * @param $tipo
     */
    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    /**
     * @return void
     */
    public function encender(): void
    {
        echo "Motor encendido\n";
    }

    /**
     * @return void
     */
    public function apagar(): void
    {
        echo "Motor apagado\n";
    }
}

final class Automovil {

    /**
     * @var
     */
    private $marca;

    /**
     * @var
     */
    private $modelo;

    /**
     * @var Motor
     */
    private $motor;

    /**
     * @param $marca
     * @param $modelo
     * @param Motor $motor
     */
    public function __construct($marca, $modelo, Motor $motor) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->motor = $motor;
    }

    /**
     * @return void
     */
    public function arrancar() {
        echo "Arrancando el automóvil {$this->marca} {$this->modelo}\n";
        $this->motor->encender();
    }

    /**
     * @return void
     */
    public function apagar() {
        echo "Apagando el automóvil {$this->marca} {$this->modelo}\n";
        $this->motor->apagar();
    }
}

// Crear un motor
$motorGasolina = new Motor("Gasolina");

// Crear un automóvil que utiliza el motor de gasolina
$automovil = new Automovil("Toyota", "Corolla", $motorGasolina);

// Operaciones con el automóvil
$automovil->arrancar();
$automovil->apagar();