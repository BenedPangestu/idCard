<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search ID Card</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/assets/css/codebase.min.css">
</head>

<body>
    <div class="background-image">
        <nav class="navbar navbar-expand-lg navbar-transpart">
            <div class="container-fluid">
                <img src="headerKiri.png" alt="Logo 1" class="navbar-brand animated fadeInDown">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <img src="headerKanan.png" alt="Logo 2" class="animated fadeInDown">
                </div>
            </div>
        </nav>
        <div class="container py-5">
            <h1 class="text-center text-white mb-4 animated fadeInDown">Enter Your GCR Memo ID</h1>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form id="searchForm" class="d-flex">
                        <input type="text" id="idInput" class="form-control me-2 animated fadeInDown" placeholder="Enter ID">
                        <button type="submit" class="btn btn-primary animated fadeInDown">Search</button>
                    </form>
                    <!-- <div class="search-container">
                        <input type="text" id="searchInput" placeholder="Enter your search term">
                        <button type="button" id="searchButton">Search</button>
                        <div id="searchResults"></div>
                    </div> -->
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    <div id="resultContainer" class="text-center">
                        <h1 class="text-white animated fadeInDown">HI, THANK YOU FOR PURCHASING OUR PRODUCT. </BR> LET'S IDENTITY YOUR PRODUCT HERE</h1>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center py-3" style="color: white">
            Gems Citra Research, <br> Since 2004
        </footer>
    </div>
    </div>
    <div class="whatsapp-button animated fadeInUp">
        <a href="https://wa.me/your_whatsapp_number" target="_blank">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/1200px-WhatsApp.svg.png" alt="WhatsApp">
        </a>
    </div>
    <!-- Bootstrap JS (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Your custom script -->
    
    <script src="script.js"></script>
</body>

</html>