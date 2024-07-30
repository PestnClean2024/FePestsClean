<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PestnClean</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>

    <script src="/FePestsClean/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../../../FePestsClean/resources/js/jquery.min.js"></script>

    <link rel="stylesheet" href="/FePestsClean/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/reset.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/styles.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/header.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/footer.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/product.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/product-fillter.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/serviceCleaning.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/cleaningSolution.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/authentication.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/home.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/service.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/user.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/blog.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/landscapeDesign.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/abouts.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/contact.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/blogDetail.css">
    <link rel="stylesheet" href="/FePestsClean/resources/css/components/serviceBugControl.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light px-5 py-3 navbar-background-color">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <div class="header-logo">
                    <img src="/FePestsClean/resources/images/Header/header-logo.png" alt="" class="img-fluid">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="index.php">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="abouts.php">Về chúng tôi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="service.php" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dịch vụ
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="serviceBugControl.php">Kiểm soát côn trùng</a></li>
                        <li><a class="dropdown-item" href="serviceCleaning.php">Dịch vụ vệ sinh</a></li>
                        <li><a class="dropdown-item" href="cleaningSolution.php">Giải pháp vệ sinh</a></li>
                        <li><a class="dropdown-item" href="landscapeDesign.php">Thi công cảnh quan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/FePestsClean/resources/views/client/product.php">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Liên hệ</a>
                </li>
            </ul>
            </div>
            <div class="navbar-icons">
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#register-modal">Đăng ký</a>
                <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#login-modal">Đăng nhập</a>
            </div>
        </div>
    </nav>
