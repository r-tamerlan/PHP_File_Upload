<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
</head>
<body style="background: blue">
<center>
    <h3 style="background: dimgray; color: aliceblue">Dosya Yükləmə sistemi</h3>
    <hr>

    <form action="git.php" method="post" style="background: dimgray; color: #f0f8ff" enctype="multipart/form-data">
    <input type="file" name="dosya"> Upload File <br>
    <input type="submit" value="Upload">
    </form>
    <hr>
</center>
</body>
</html>