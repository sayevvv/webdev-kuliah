<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiupload Document</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form{
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-top: 30px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        #docs {
            background-color: blue;
            color: white;
        }
        #img {
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    <h2>Unggah Dokumen</h2>
    <div class="form">
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept=".pdf, .doc, .docx"/>
            <input id="docs" type="submit" value="Unggah Dokumen"/>
        </form>
        <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple="multiple" accept=".jpg, .jpeg, .png, .gif"/>
            <input id="img" type="submit" value="Unggah Gambar"/>
        </form>
    </div>
</body>
</html>
