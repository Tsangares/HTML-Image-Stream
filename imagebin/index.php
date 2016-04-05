<!DOCTYPE html>
<html>
<body>
    <!-- This is the upload forum -->
    <link rel="stylesheet" type="text/css" href="uploadbuttons.css">
    <form id="upload" action="upload.php" method="post" enctype="multipart/form-data">
        <p class="general">Upload an image:</p>
        <strong>
        <div class="will">
            <label>
                <span> upload</span>
                <input class="remove" type="file" name="fileToUpload" id="fileToUpload">
            </label>
        </div>
        <div class="will">
            <label>
                <span class="label">eat</span>
                <input class="remove" type="submit" value="eat" name="submit">
            </label>
        </div>
            </strong>
    </form>
    
    <!-- This is where all of the images are uploaded to. -->
    <div id="face">
        <?php include('loadall.php') ?>
    </div>
</body>
</html> 