<?php
class PartialPermutations
{
    private string $string;
    private int $m;
    private int $length;
    private string $current = "";
    private array $used;
    private array $permutations = array();


    public function __construct($string, $m)
    {
        try {
            $this->string = $string;
            $this->m = $m;
            $this->length = strlen($string);
            $this->used = array_fill(0, $this->length, false);
            if (empty($this->string)) {
                throw new \RuntimeException("String can't be empty.\n");
            }
            if ($this->length < $this->m) {
                throw new \RuntimeException("M can't be greater then the string length.\n");
            }
        } catch (RuntimeException $exception) {
            echo $exception;
        } catch (TypeError $error) {
            echo "First param must be string, second - int.\n";
        }
    }

    public function getPermutations(): void
    {
            if (empty($this->permutations)) {
                $this->generate();
            }
            $this->printPermutations();
    }

    public function countPermutations(): void
    {
        try {
            echo $this->factorial($this->length) / $this->factorial($this->length - $this->m);
        } catch (Error $error) {
            echo "Incorrect params.\n";
        }
    }

    private function generate(): void
    {
        try {
            $index = strlen($this->current);
            if ($index == $this->m) {
                $this->permutations[] = $this->current;
            }
            for ($i = 0; $i < $this->length; $i++) {
                if (!$this->used[$i]) {
                    $this->current .= $this->string[$i];
                    $this->used[$i] = true;
                    $this->generate();
                    $this->current = substr($this->current, 0, -1);
                    $this->used[$i] = false;
                }
            }
        } catch (Error $error) {
            echo "Incorrect params.\n";
        }
    }

    private function printPermutations(): void
    {
        foreach ($this->permutations as $p) {
            echo "<p>$p</p>";
        }
    }

    private function factorial(int $number): int
    {
        if ($number == 0) {
            return 1;
        }
        return $number * $this->factorial($number - 1);
    }
}