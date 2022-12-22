<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <?php for($row=0;$row<=12;$row++)
        { ?>
        <tr>
        <?php for($col=0;$col<=12;$col++)
        {
            $result=$row*$col;
            ?>
        <td><?php echo $result ?></td>
        <?php } ?>
        </tr>
        <?php } ?>
    </table>
</body>
</html>