<?php 
    $file = $_GET['nama_file'];

    // Lokasi file (path) pada server
    $path = 'assets/card/' . $file;
    // echo $path;
    // Periksa apakah file ada
    if (file_exists($path)) {
        // Set header untuk download file
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($path));
        readfile($path);
        header("Location: index.php");
        exit;
    } else {
        // Jika file tidak ditemukan
        echo "File tidak ditemukan";
    }
?>