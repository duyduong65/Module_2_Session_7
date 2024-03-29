<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 25/10/2018
 * Time: 00:02
 */

class Calculator
{
    public function calculate($firstOperand, $secondOperand, $Operator) {
        $ADDITION = '+';
        $SUBTRACTION = '-';
        $MULTIPLICATION = '*';
        $DIVISION = '/';
        switch ($Operator) {
            case $ADDITION:
                return $firstOperand + $secondOperand;
            case $SUBTRACTION:
                return $firstOperand - $secondOperand;
            case $MULTIPLICATION:
                return $firstOperand * $secondOperand;
            case $DIVISION:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    echo("Can not divide by 0");
                    break;
                }
            default:
                echo ("Unsupported operation");
        }
    }
}