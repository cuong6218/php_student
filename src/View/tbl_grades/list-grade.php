<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <a href="index.php?page=add-grade">Add Grade</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Grade Name</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
                <?php if (empty($grades)) : ?>
                    <tr>
                        <td>No data</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($grades as $key => $grade) : ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $grade->getGradeName(); ?></td>
                            <td><?php echo $grade->getStatus(); ?> </td>
                            <td><a href="index.php?page=update-grade&id=<?php echo $grade->getId(); ?>">Update</a></td>
                            <td><a href="index.php?page=delete-grade&id=<?php echo $grade->getId(); ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
        </table>
    </div>
</body>

</html>