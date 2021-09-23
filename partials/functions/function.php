<?php function generateArray($lenght)
{
    $arr = [];
    while (count($arr) < $lenght) {
        $random_number = rand(1, 100);
        if (!in_array($random_number, $arr)) {
            $arr[] = $random_number;
        }
    };
    return $arr;
}
