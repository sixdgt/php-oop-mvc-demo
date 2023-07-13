<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php
                require_once "../controller/ItemController.php";
                $controller = new ItemController();
                $data = $controller->getItemList();
                $counter = 1;
                foreach($data as $val){
                    ?>
                        <tr>
                            <td><?php echo $counter; $counter++;?></td>
                            <td><?php echo $val->getTitle(); ?></td>
                            <td><?php echo $val->getDesc(); ?></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>