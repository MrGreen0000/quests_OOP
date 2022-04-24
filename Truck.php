<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;

    private int $loading = 0;

    public const ALLOWED_ENERGIES = [

        'fuel',

        'electric',

    ];
    private string $energy;

    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy)

    {

    parent::__construct($color, $nbSeats);

    $this->energy = $energy;

    }


    public function getEnergy(): string

    {

        return $this->energy;

    }


    public function setEnergy(string $energy) : Truck

    {
    
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
    
            $this->energy = $energy;
    
        }
    
        return $this;
    
    }

   
    public function getEnergyLevel(): int

    {

        return $this->energyLevel;

    }


    public function setEnergyLevel(int $energyLevel): void

    {
        if($energyLevel >= 0){

            $this->energyLevel = $energyLevel;
        }

     

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



}