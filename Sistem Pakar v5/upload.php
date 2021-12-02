<?php
    session_start();
    include "connection.php";
    $res = mysqli_query($conn, $query);

    if (isset($_POST['submit']) && isset($_FILES['uploadImage'])) {
        $img_name = $_FILES['uploadImage']['name'];
        $img_size = $_FILES['uploadImage']['size'];

        if ($img_size > 5000000) {
            // echo '<script type="text/javascript">',
            // 'window.alert("File yang Anda masukkan terlalu besar! Max 5 MB")','</script>';
            // header("Location: index.php");
            echo "error";

        } else {
            foreach($res as $row) {
                if ($img_name == $row['imageName']) {
                    $category = $row['imageCategory'];
                    if ($category == 'Anorganik') {
                        header("Location: anorganik.php");
                        exit();
                    } else {
                        header("Location: organik.php");
                        exit();
                    }
                }
            } 
            header("Location: error.php");
            exit();
        }
    } else {
        echo "Failed";
    }
?>