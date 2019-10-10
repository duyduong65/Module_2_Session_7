<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 10/27/2018
 * Time: 6:29 PM
 */

include ('TennisGame.php');

$tennisGame = new TennisGame();

$playerOne = 'player1';
$playerTwo = 'player2';
$scoreOfPlayerOne = 6;
$scoreOfPlayerTwo = 8;
$tennisGame->getScore($playerOne, $playerTwo, $scoreOfPlayerOne, $scoreOfPlayerTwo);

echo $tennisGame;