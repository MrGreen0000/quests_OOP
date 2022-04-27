<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{

    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];
    private int $storageCapacity;

    private int $loading = 0;


    private string $energy;

    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)

    {

        parent::__construct($color, $nbSeats);

        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }

    public function getEnergy(): string

    {

        return $this->energy;
    }


    public function setEnergy(string $energy): Truck

    {

        if (in_array($energy, self::ALLOWED_ENERGIES)) {

            $this->energy = $energy;
        }

        return $this;
    }


    public function getEnergyLevel()

    {

         $this->energyLevel = 0;

        if($this->energyLevel  > 0){
            echo "full";
        }else{
            echo  "in filling";
        }
    }


    public function setEnergyLevel(int $energyLevel): void

    {

            $this->energyLevel = $energyLevel;
     
        
    }
    public function getLoading(): int

    {

        return $this->loading;
    }


    public function setLoading(int $loading): void

    {

        $this->loading = $loading;
    }

    public function getStorageCapacity(): int

    {

        return $this->storageCapacity;
    }


    public function setStorageCapacity(int $storageCapacity): void

    {

        $this->storageCapacity = $storageCapacity;;
    }

    public function forward(): string

    {

        $this->currentSpeed = 20;


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

    
    
}
