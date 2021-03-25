<?php 

$dataTable = array(
    array('name','age','tele','mail'),
    array('mohamed',21,'01024729964','mohamedkhaledcis2000'),
    array('abdelaziz','21','123456789','abdelaziz@gmail.com'),
    array('example','21','001122334455','example@gmail.com')


);

?>


<!DOCTYPE html>
<html lang="en">
<head>

<style>
    .myTable{
        border: 2px solid #000;
        width: 50%;
        height: 250px;
        text-align: center;
    }
</style>





    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArrayInTable</title>

</head>
<body>
    <table border="2" class="myTable" border-collapse="separate">
        <tr>
            <td><?php echo $dataTable[0][0] ?></td>
            <td><?php echo $dataTable[0][1] ?></td>
            <td><?php echo $dataTable[0][2] ?></td>
            <td><?php echo $dataTable[0][3] ?></td>

        </tr>
        <tr>
        <td><?php echo $dataTable[1][0] ?></td>
            <td><?php echo $dataTable[1][1] ?></td>
            <td><?php echo $dataTable[1][2] ?></td>
            <td><?php echo $dataTable[1][3] ?></td>
            
        </tr>
        <tr>
        <td><?php echo $dataTable[2][0] ?></td>
            <td><?php echo $dataTable[2][1] ?></td>
            <td><?php echo $dataTable[2][2] ?></td>
            <td><?php echo $dataTable[2][3] ?></td>
        </tr>

        <tr>
        <td><?php echo $dataTable[3][0] ?></td>
            <td><?php echo $dataTable[3][1] ?></td>
            <td><?php echo $dataTable[3][2] ?></td>
            <td><?php echo $dataTable[3][3] ?></td>
        </tr>
    </table>
</body>
</html>


