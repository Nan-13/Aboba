<!DOCTYPE html>

<html lang="ru">

<head>

<meta charset="UTF-8">

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">№</th>
            <th scope="col">Имя</th>
            <th scope="col">Адрес электронной почты</th>
            <th scope="col">Адрес</th>
        </tr>
    </thead>
        <tbody>
                
            
    
        </tbody>

    </table>

    

</html>



<?php
    $id = '1OCn_nyTfpcdEtXXpRL17F02KuQiuVkpnd0PHlARQ3Nw';
    $gid = '0';
    $csv = file_get_contents('https://docs.google.com/spreadsheets/d/' . $id . '/export?format=csv&gid=' . $gid);
    $csv = explode("\r\n", $csv);
    $array = array_map('str_getcsv', $csv);
    foreach ($array as $arr)    
    {
        $i++;
        $html .= '<tr>';
        $html .= '<td scope="row">'.$i.'</td>';
        foreach ($arr as $td) 
        {
            $html .= '<td scope="col">'.$td.'</td>';
        }
        $html .= '';
    }
    echo $html;
    
?>