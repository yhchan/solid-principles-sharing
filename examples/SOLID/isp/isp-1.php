<?php

interface Bird
{
    public function fly();
    public function run();
}


class Dove implements Bird
{
    public function fly() {}
    public function run() {}
}

class Penguin implements Bird
{
    public function fly() {
        // Ahhh, I cannot fly
    }
    public function run() {}
}
