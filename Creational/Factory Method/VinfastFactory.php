<?php
abstract class VinfastFactory{
    public $carType = ['LuxA', 'Fadil'];

    abstract function createCar(): Car;
}