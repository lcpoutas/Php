<?php

// Las interfaces de objetos son contratos que han de cumplir las clases que las implementan. Contienen métodos vacíos que obligan a una clase a emplearlos, 
// promoviendo así un estándar de desarrollo.

// Si una clase implementa una interface, está obligada a usar todos los métodos de la misma (y los mismos tipos de argumentos de los métodos), de lo contrario 
// dará un error fatal. Pueden emplearse más de una interface en cada clase, y pueden extenderse entre ellas mediante extends. Una interface puede extender una 
// o más interfaces.

// Todos los métodos declarados en una interface deben ser públicos.

// Para definir una interface se utiliza la parabra interface, y para extenderla se utiliza implements.

interface pc{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
}

class iMac implements pc{
    public $modelo;

    function getModelo(){
        return $this->modelo;
    }

    function setModelo($modelo){
        $this->modelo=$modelo;
    }

    // es obligatorio definir en esta clase todos los metodos definidos en la interface
    public function encender(){}
    public function apagar(){}
    public function reiniciar(){}
    public function desfragmentar(){}
    public function detectarUSB(){}

}

$maquintos= new iMAc();
$maquintos->setModelo('Macbook PRO 2019');
echo $maquintos->getModelo();

?>