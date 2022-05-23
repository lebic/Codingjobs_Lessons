<?php

/*
	Continue/Using the RPG exercise.
	Remember our Characters... Actually, there are Adventurers !!!
	
	Step 1 : 
		Show'em some respect and rename your class.
	Step 2 :
		An adventurer have now a speed property.
	Step 3 :
	
	An adventurer can belong to one of these races : Elf, Orc, Human.
	Those adventurers have many actions possible :
		- They can attack
		function attack($opponent)
		- They can use a magical power
		function usePower()
	
	Each race has it's own way of doing those actions.
	For the Orcs :
		- They attack with rage. If they attack an elf, which has no shield, Elf loose 50 life points.
		- Orc can use his power to become almost invincible. +20 defense points but -10 attack.
	
	For the Humans :
		- A Human attack normally. But when he only has his fists (no weapons), he get a +3 attack bonus.
		- Humans are blessed from god. They use their power to take +20 life points.
	For the Elves :
		- They attack with dexterity. +2 bonus attack points for each sword an elf carry.
		- Elves use power to take +3 of speed.
	Create a class for each race : Orc / Elf / Human.
	Of course, they will inherite from Adventurer class.
	For the 'relous' : you can change the game is designed.
*/

require_once 'Class/RPG_ex/Adventurers.php';
require_once 'Class/RPG_ex/Elf.php';
require_once 'Class/RPG_ex/Equipement.php';
require_once 'Class/RPG_ex/Human.php';
require_once 'Class/RPG_ex/Orc.php';

echo 'CHARACTERS <br> <hr> ';

$elf = new Elf('Larfel', 'Elf', 250, 18, 5, $bow);
echo $elf;

$orc = new Orc('Ouk', 'Orc', 500, 14, 10, null);
echo $orc;

$human = new Human('Lobon', 'Human', 300, 8, 15, $sword);
echo $human;

echo 'ATTACKS <br> <hr> ';


echo 'ORC ATTACK ELF <br> <hr>';
$orc->attack($elf);
echo $elf;

echo 'HUMAN ATTACK ELF <br> <hr>';
$human->attack($elf);
echo $elf;

echo 'HUMAN USE POWER <br> <hr>';
$human->usePower();
echo $human;

echo 'ELF ATTACK ORC <br> <hr>';
$elf->attack($orc);
echo $orc;
