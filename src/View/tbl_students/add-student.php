<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="studentName" placeholder="student name" />
        <input type="text" name="age" placeholder="age" />
        <input type="text" name="gender" placeholder="gender" />
        <input type="text" name="address" placeholder="address" />
        <input type="text" name="email" placeholder="email" />
        <input type="file" name="image-file" placeholder="image" />
        <select name="gradeId">
            <?php foreach ($grades as $grade) : ?>
                <option value="<?php echo $grade->getId(); ?>"><?php echo $grade->getGradeName(); ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Add Student</button>
    </form>
</body>

</html>