<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello world...</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
        }
        th, td{
            border: 1px solid;
        }
    </style>
</head>
<body>
        <?php

        $uni="Adnan Menderes";
        $myo="Aytepe";
        $ad="Fehmi Volkan";
        $soyad="Sunguray";
        $no="216001020";
        
        ?>
        <table>
        <tr>
            <th>Universite</th>
            <th>MYO</th>
            <th>Öğrenci Adı</th>
            <th>Öğrenci Soyadı</th>
            <th>Öğrenci No</th>
        </tr>
        <tr>
            <td><?= $uni?> </td>
            <td><?= $myo?></td>
            <td><?= $ad?></td>
            <td><?= $soyad?></td>
            <td><?= $no?></td>
        </tr>
        </table>
</body>
</html>