<?php
interface Builder
{
    public function createVehicle(): void;

    public function addWheel(): void;

    public function addEngine(): void;

    public function addDoors(): void;

}