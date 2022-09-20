<?php
interface VinFactory{
    public function createVinfast(): VinfastInterface;

    public function createVsmart(): VsmartInterface;
}