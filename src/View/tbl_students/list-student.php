<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>List Student</h1>
        <a href="index.php?page=add-student">Add Student</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Image</th>
                    <th colspan="2">Action</th>
                </tr>
                <?php if (empty($students)) : ?>
                    <tr>
                        <td>No data</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($students as $key => $student) : ?>
                        <tr>
                            <td><?php echo ++$key; ?></td>
                            <td><?php echo $student->getStudentName(); ?></td>
                            <td><?php echo $student->getAge(); ?></td>
                            <td><?php echo $student->getGender(); ?></td>
                            <td><?php echo $student->getAddress(); ?></td>
                            <td><?php echo $student->getEmail(); ?></td>
                            
                            <td><img src="<?php echo $student->getImage(); ?>" /></td>
                            <td><a href="index.php?page=update&id=<?php echo $student->getId(); ?>">Update</a></td>
                            <td><a href="index.php?page=delete&id=<?php echo $student->getId(); ?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
        </table>
    </div>
</body>

</html>