<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
    </style>
</head>
<body>
    <form action="upload_test.php" method="post" enctype="multipart/form-data">
        <label>Image file</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <div id="thumbnailContainer">
        <img src="" alt="" id="thumbnail" style="display: none; width: 200px">
    </div>
    <script>
        document.getElementById('fileToUpload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if(file && file.type.startsWith('image/')) {
                const thumbnail = document.getElementById('thumbnail');
                thumbnail.src = URL.createObjectURL(file);
                thumbnail.style.display = ''
            }
        })
    </script>
</body>
</html>



