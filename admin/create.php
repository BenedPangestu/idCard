<?php 
    require_once('../database.php');
?>
<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="../assets/assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="../assets/assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="../assets/assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="../assets/assets/js/plugins/datatables/dataTables.bootstrap4.css">

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="../assets/assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="../assets/assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
        
            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="index.html">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="../assets/assets/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="#">
                                <img class="img-avatar" src="../assets/assets/media/avatars/avatar15.jpg" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="#">Admin</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="logout.php">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a href="/idCard/admin/"><i class="si si-cup"></i><span class="sidebar-mini-hide">Card ID</span></a>
                            </li>
                            <li>
                                <a href="/idCard/admin/create.php"><i class="si si-cup"></i><span class="sidebar-mini-hide">Create</span></a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">Admin</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <h2 class="content-heading">CARD ID</h2>
                    <!-- Default Elements -->
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Default Elements</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-6">
                                    <label class="col-6" for="card_id">Card ID</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="card_id" name="card_id" readonly>
                                        <!-- <div class="form-text text-muted">Further info about this input</div> -->
                                    </div>
                                </div>
                                <!-- <div class="form-group"> -->
                                <!-- </div> -->
                                
                                <!-- <div class="form-group"> -->
                                    <div class="col-6">
                                        <label class="col-6">File Input Image</label>
                                        <div class="col-12">
                                        <div class="custom-file">
                                                    <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                                    <input type="file" class="custom-file-input" id="image_card" name="image_card" data-toggle="custom-file-input">
                                                    <label class="custom-file-label" for="image_card">Choose file</label>
                                                </div>
                                        </div>
                                    </div>
                                <!-- </div> -->
                            </div>    
                                <div class="form-group row">
                                    <div class="col-12">
                                        <button type="submit" name="submit" class="btn btn-alt-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Default Elements -->
                    <?php 
                        // Fungsi untuk memeriksa apakah card_id sudah ada di database
                        function isCardIdUnique($conn, $card_id) {
                            $sql = "SELECT * FROM card WHERE card_id = '$card_id'"; // Ganti 'nama_tabel' dengan nama tabel Anda
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // Jika card_id sudah ada di database
                                return false;
                            } else {
                                // Jika card_id belum ada di database
                                return true;
                            }
                        }

                        if (isset($_POST['submit'])) {
                            // $card_id = "123456"; // Ganti dengan card_id yang ingin Anda periksa
                            $card_id = $_POST['card_id'];
                            // printf(isCardIdUnique($db, $card_id));
                            if (isCardIdUnique($db, $card_id)) {
                                // echo "Card ID unik";
                                $ekstensi_diperbolehkan	= array('png','jpg');
                                $namaimage = $_FILES['image_card']['name'];
                                $x = explode('.', $namaimage);
                                $ekstensi = strtolower(end($x));
                                $ukuran	= $_FILES['image_card']['size'];
                                $file_tmp = $_FILES['image_card']['tmp_name'];
                                
                                if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                                    if($ukuran < 1044070){
                                    if(move_uploaded_file($file_tmp, '../assets/card/'.$namaimage)){
                                        $image_card = $namaimage;
    
                                        $sql = "INSERT INTO card (card_id, image_card) VALUES (?, ?)";
                                        $stmt = $db->prepare($sql);
                                        $stmt->bind_param("ss", $card_id, $image_card);
                                        if ($stmt->execute()) {
                                            echo "New record created successfully";
                                            // header('location: index.php');
                                        } else {
                                            echo "Error: " . $db->error;
                                        }
                                        // echo 'FILE BERHASIL DI UPLOAD';
                                    }else{
                                        echo 'GAGAL MENGUPLOAD GAMBAR';
                                    }
                                    }else{
                                    echo 'UKURAN FILE TERLALU BESAR';
                                    }
                                }else{
                                echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                                }
                            } else {
                                echo "Card ID sudah ada di database";
                            }
                            
                        } 
                    ?>
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.2</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the ../assets/assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            ../assets/assets/js/core/jquery.min.js
            ../assets/assets/js/core/bootstrap.bundle.min.js
            ../assets/assets/js/core/simplebar.min.js
            ../assets/assets/js/core/jquery-scrollLock.min.js
            ../assets/assets/js/core/jquery.appear.min.js
            ../assets/assets/js/core/jquery.countTo.min.js
            ../assets/assets/js/core/js.cookie.min.js
        -->
        <script src="../assets/assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="../assets/assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="../assets/assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../assets/assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Page JS Code -->
        <script src="../assets/assets/js/pages/be_tables_datatables.min.js"></script>
        <script>
            $(document).ready(function() {
            // Get current year
            var currentYear = new Date().getFullYear();
            var yearSuffix = currentYear.toString().slice(-2);

            // Generate random 3-digit number
            var randomNum = Math.floor(Math.random() * 100) + 100; // 100-999 range

            // Format card ID
            var cardId = "CGCR" + yearSuffix + randomNum;

            // Set card ID value in the input field
            $("#card_id").val(cardId);
            });
        </script>
    </body>
</html>