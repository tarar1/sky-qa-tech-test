<?php

class Calculator implements iCalculator {

    protected $stack;
    protected $op;
    protected $result;

    public function add($a, $b) {
        return ($a + $b);
    }

    public function subtract($a, $b) {
        return ($a - $b);
    }

    public function multiply($a, $b) {
        return ($a * $b);
    }
    
    public function divide($a, $b) {
        return ($a / $b);
    }

    public function factorial($a) {
        if ($a < 2) { 
            return 1; 
        } 
        else { 
            return ($a * factorial($a - 1)); 
        } 
    }
    public function decimaltohex($a) {
       return  dechex ($a);
    }

    public function pressNumber($number) {
        $this->stack[] = $number;
    }

    public function pressAdd() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "+";
    }

    public function pressSubtract() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "-";
    }

    public function pressMultiply() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "*";
    }
    // Press the divide button 
    public function pressDivide() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "/";
    }
    // press factorial button
    public function pressFactorial() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "!";
    }
    // press convert to hexa decial button
    public function pressHexadecimal() {
        if(count($this->stack) > 1) {
            $this->evaluateStack();
        }
        $this->op = "hex";
    }
    public function pressEquals() {
        return $this->evaluateStack();
    }

    protected function evaluateStack() {
        switch($this->op) {
            case "+":
                $result = $this->add(array_shift($this->stack), array_shift($this->stack));
                break;
            case "-":
                $result = $this->subtract(array_shift($this->stack), array_shift($this->stack));
                break;
            case "*":
                $result = $this->multiply(array_shift($this->stack), array_shift($this->stack));
                break;
            case "/":
                $result = $this->divide(array_shift($this->stack), array_shift($this->stack));
                break;
            case "!":
                $result = $this->factorial(array_shift($this->stack));
                break;
            case "hex":
                $result = $this->decimaltohex(array_shift($this->stack));
                break;
        }
        $this->clearStack();
        $this->stack[] = $result;
    }

    protected function clearStack() {
        $this->stack = array();
    }

    public function readScreen() {
        $value = array_shift($this->stack);
        return $value;
    }
}
