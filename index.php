<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <?php
    include 'upload.php';
    ?>
</head>

<body>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <h3> select the file to be uploaded </h3>
        <input type="file" name="upload" value="pdf_files">
        <input type="submit" name="submit">submit</input>


    </form>

</body>

</html>