<?php

class Character {
    private $name;
    private $class;
    private $race;
    private $gender;
    private $stats;
    private $health;
    private $strength;
    private $defense;
    private $intelligence;
    private $agility;
    private $luck;
    private $level;
    private $experience;

    public function __construct($name, $class, $race, $gender, $health, $strength, $defense, $intelligence, $agility, $luck, $level, $experience) {
        $this->name = $name;
        $this->class = $class;
        $this->race = $race;
        $this->gender = $gender;
        $this->stats = new Stats($health, $strength, $defense, $intelligence, $agility, $luck);
        $this->health = $health;
        $this->strength = $strength;
        $this->defense = $defense;
        $this->intelligence = $intelligence;
        $this->agility = $agility;
        $this->luck = $luck;
        $this->level = $level;
        $this->experience = $experience;
    }

    public function attack($target) {
        // Calculate damage
        $damage = max(0, $this->strength - $target->getDefense());
        // Apply damage to target
        $target->takeDamage($damage);
        return "$this->name attacks {$target->getName()} for $damage damage!";
    }
}