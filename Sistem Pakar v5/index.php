<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organik Anorganik Identify</title>

<!-- font awesome cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- css-->
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- section header mulai -->
<header class="header">
    <a href="#" class="logo" >
        <img src="img/logo.png" alt="logo">
    </a>
    

    <nav class="judul">
        <a href="index.php">Organik & Anorganik Identify</a>
    </nav>
    
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        
    </nav>
</header>
<!-- section header selesai -->

<!-- section home mulai -->
<section class="home" id="home">
    <div class="row">
        <div class="image">
            <img src="img/hero.png" alt="about">
        </div>

        <div class="content">
            <h3>Peduli Lingkungan</h3>
            <p>Upload foto sampah kamu untuk mengetahui <br>sampah tersebut termasuk <span>Organik</span> atau <span>Anorganik</span> <br>untuk memudahkan proses daur ulang.</p>

            <!-- <input type="url" class="url" placeholder="Masukkan URL" >
            <button class="btn">identify</button> -->
            
            <div class="atau">
                <!-- <p>atau</p> -->
                <button data-modal-target="#modal" class="btn">Upload Foto</button>
            </div>
        </div>
    </div>

    <!-- popup upload -->
        <div class="modal" id="modal">
            <div class="modal-header">
                <div class="modal-title"> <span>upload</span> foto </div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body">
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="uploadImage" id="inpFile" required>
                    <div class="image-preview" id="imagePreview">
                        <img src="" alt="image preview" class="image-preview_image">
                        <span class="image-preview_default-text">Image Preview</span>
                    </div>
                    <button class="btn" type="submit" name="submit">identify</button>
                </form>
            </div>
        </div>
        <!-- <div class="modal" id="modal">
            <div class="modal-header">
            </div>
                <div class="modal-header2">
                <div class="modal-title"> <span>upload</span> foto </div>
                <button data-close-button class="close-button">&times;</button>
            </div>
            <div class="modal-body2">
                <p>Apakah anda yakin ingin mengidentifikasi gambar ini?</p>
                <div class="tombol">
                    <button class="btn">tidak</button>
                </div>
            </div>
        </div> -->

        <div id="overlay"></div>

    <!-- popup upload selesai -->

</section>
<!-- section home selesai -->

<!-- section about mulai -->
<section class="about" id="about">
    <div class="row">
        <div class="judul-about">
            <h1><span>about</span> Us </h1></h1>
        </div>

        <div class="content-about">
            <img src="img/lin.png" class="founder" alt="Charolin">
            <h3>Charoline Kandoko</h3>
        </div>
        <div class="content-about">
            <img src="img/marten.png" class="founder" alt="Martin">
            <h3>Hernando Martin</h3>
        </div>
        <div class="content-about">
            <img src="img/pincen.png" class="founder" alt="Vincent">
            <h3>Vincent</h3>
        </div>
    </div>

</section>
<!-- section about selesai -->

<!-- section footer mulai -->
<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="credit">created by <span>Gamma 6</span> | all rights reserved</div>
</section>

<!-- section footer selesai -->

<!-- gsap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>

<!-- main js -->
<script src="javascripts/script.js"></script>
</body>
</html>