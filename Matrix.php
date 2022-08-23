<?php
class Matrix
{
    private int $rows;
    private int $columns;
    public array $matrix;

    public function __construct($rows, $columns)
    {
        $this->rows = $rows;
        $this->columns = $columns;
        $this->makeMatrix();
    }

    public function showMatrix()
    {
        echo "<table>";
        foreach ($this->matrix as $row) {
            echo "<tr>";
            foreach ($row as $column) {
                echo "<td>{$column}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    private function makeMatrix()
    {
        for ($i = 0; $i < $this->rows; $i++) {
            $this->matrix[$i] = $this->row();
        }
    }

    private function row()
    {
        $result = array();
        for ($i = 0; $i < $this->columns; $i++) {
            $result[$i] = random_int(0, 99);
        }
        return $result;
    }
}

$a = new Matrix(4,6);
$a->showMatrix();