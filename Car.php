<?php




class Car 
{

    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }
    public function forward(): string
    {
        $this->currentSpeed = 50;
        return "Go !";
    }


    public function brake(): string

    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string

    {
        return 'The car start !';

    }

    public function getNbWheels():int
    {
        return $this->getNbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->getCurrentSpeed;
    }

    public function getColor(): string
    {
        return $this->getColor;
    }

    public function getNbSeats(): int
    {
        return $this->getNbSeats;
    
    }

    public function getEnergy(): int
    {
        return $this->getEnergy;
    }

    public function getEnergyLevel(): int
    {
        return $this-> getEnergyLevel;
    }
   

}

	
?>