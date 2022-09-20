<?php
final class Singleton{
    private static ?Singleton $instance = null;

    private function __construct(){}

    public function getInstance(): Singleton{
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}