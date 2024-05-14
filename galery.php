<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    <style>
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 10px;
            padding: 10px;
        }

        .gallery img {
            width: 100%;
            height: 200px; /* Set height to a fixed value */
            object-fit: cover; /* Cover the entire area without distorting the image */
        }
    </style>
</head>
<body>

    <h1>Image Gallery</h1>

    <div class="gallery">
        <?php
        $folder_path = "gallery/"; // Ganti dengan jalur relatif folder gambar Anda
        if (is_dir($folder_path)) {
            $files = scandir($folder_path);
            foreach($files as $file) {
                $file_path = $folder_path . $file;
                $extension = pathinfo($file_path, PATHINFO_EXTENSION);
                if(is_file($file_path) && in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                    echo '<img src="' . $file_path . '" alt="' . $file . '">';
                }
            }
        } else {
            echo "Folder not found.";
        }
        ?>
    </div>

</body>
</html>
