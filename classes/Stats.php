<?php

class Stats {
    private $health;
    private $strength;
    private $defense;
    private $intelligence;
    private $agility;
    private $luck;

    public function __construct($health, $strength, $defense, $intelligence, $agility, $luck) {
        $this->health = $health;
        $this->strength = $strength;
        $this->defense = $defense;
        $this->intelligence = $intelligence;
        $this->agility = $agility;
        $this->luck = $luck;
    }

    public function getHealth() {
        return $this->health;
    }

    public function getStrength() {
        return $this->strength;
    }

    public function getDefense() {
        return $this->defense;
    }

    public function getIntelligence() {
        return $this->intelligence;
    }

    public function getAgility() {
        return $this->agility;
    }

    public function getLuck() {
        return $this->luck;
    }
}