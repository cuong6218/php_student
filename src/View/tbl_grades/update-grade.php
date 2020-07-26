<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="grade_name" value="<?php echo $grade['grade_name'] ?>" placeholder="grade name" />
        <input type="text" name="status" value="<?php echo $grade['status'] ?>" placeholder="status" />
        <button type="submit">Update Grade</button>
    </form>
</body>

</html>