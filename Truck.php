<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {

    private string $energy;
    
    private int $storageCapacity;

    private int $storage = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }


    public function getStorage(): int
    {
        return $this->storage;
    }

    public function setStorage(int $storage): void
    {
        $this->storage = $storage;
    }

    public function isFull($storage, $storageCapacity): string 
    {
        if ($storage >= $storageCapacity){
            return "Full";
        } else {
            return "in filling";
        }
    }
}