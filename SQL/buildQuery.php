<?php



function buildQuery(int $getTbl):string
{
    switch ($getTbl) {
        case 1:
            $tbl = 'users';
            break;
        case 2:
            $tbl = 'fruits';
            break;
        default:
            $err = "Nie znaleziono bazy danych";
            break;
    }

    if ($tbl) {
        return $tbl;
    }
        return $err;

}
