<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="text" name="subject_name" value="<?php echo $subject['subject_name']; ?>" placeholder="subject name" />
        <input type="text" name="description" value="<?php echo $subject['description']; ?>" placeholder="description" />
        <button type="submit">Update subject</button>
    </form>
</body>

</html>