<?php

class SortEngine
{
    const PARAMETER_NAME = 'numbers';
    private array $arr = [];

    public function __construct(string $array_string)
    {
        //Разделение строки на отдельные цифры
        $this->arr = preg_split('@,@', $array_string, -1, PREG_SPLIT_NO_EMPTY);
        $this->arr = $this->insertSort($this->arr); // Сортировка
        $string = implode(', ', $this->arr);
        echo $string; // Вывод отсортированного массива через запятую
    }

    function insertSort(array $arr)
    {
        $count = count($arr);
        if ($count <= 1) {
            return $arr;
        }

        for ($i = 1; $i < $count; $i++) {
            $cur_val = $arr[$i];
            $j = $i - 1;

            while (isset($arr[$j]) && $arr[$j] > $cur_val) {
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $cur_val;
                $j--;
            }
        }

        return $arr;
    }
}
