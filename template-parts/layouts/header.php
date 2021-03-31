<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>THÔNG TIN PHỔ BIẾN GIÁO DỤC PHÁP LUẬT TỈNH THANH HÓA - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.17/dist/js/uikit-icons.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
    <script src="js/app.js"></script>
</head>
<body class="<?= ($is_home) ? 'isHome' : '' ?>">
<?php require "template-parts/commons/facebook_chat.php"; ?>
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
    <?php require "template-parts/commons/menumobile.php"; ?>
    <header class="header">
        <div class="uk-background-norepeat uk-background-cover" data-src="images/bg1.png" uk-img>
            <div class="header__top uk-section-small uk-background-contain uk-background-bottom-center" data-src="images/bg2.png" uk-img>
                <div class="uk-container">
                    <div class="uk-flex-bottom" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                <div class="uk-width-auto">
                                    <img src="images/LOGO.png" alt="">
                                </div>
                                <div class="uk-width-expand">
                                    <h1 class="uk-h1 header__top__title" uk-toggle="cls: header__top__title--c1; mode: media; media: (max-width: 375px)">THÔNG TIN PHỔ BIẾN GIÁO DỤC PHÁP LUẬT</h1>
                                    <div class="header__top__txt">TỈNH THANH HÓA</div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-auto@m uk-visible@m">
                            <form class="uk-search uk-search-default uk-border-rounded header__top__form uk-background-default">
                                <span uk-search-icon></span>
                                <input class="uk-search-input uk-border-rounded header__top__search" type="search" placeholder="Tìm kiếm">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div uk-sticky="top: 100vh; animation: uk-animation-slide-top;" style="z-index: 1001;">
            <div class="header__bot uk-box-shadow-small uk-background-default">
                <div class="uk-container uk-padding-remove">
                    <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                        <div class="uk-navbar-left">
                            <div class="uk-hidden@m">
                                <a class="header__bot__navitem uk-navbar-toggle" uk-search-icon href="#"></a>
                                <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                                    <form class="uk-search uk-search-navbar uk-width-1-1">
                                        <input class="uk-search-input" type="search" placeholder="Tìm kiếm" style="font-size: 16px;" autofocus>
                                    </form>
                                </div>
                            </div>
                            <ul class="uk-navbar-nav uk-visible@m">
                                <li class="uk-active"><a href="#"><i style="font-size: 20px;" class="fa fa-home" aria-hidden="true"></i></a></li>
                                <li>
                                    <a href="#">TÌNH HUỐNG PHÁP LUẬT</a>
                                </li>
                                <li>
                                    <a href="#">TỦ SÁCH PHÁP LUẬT</a>
                                </li>
                                <li><a href="#">TIN TỨC</a></li>
                                <li><a href="#">HỎI ĐÁP</a></li>
                                <li><a href="#">GIỚI THIỆU</a></li>
                            </ul>

                        </div>
                        <div class="uk-navbar-right">
                            <a href="#my-id" class="uk-navbar-toggle header__bot__navitem uk-hidden@m" uk-toggle>
                                <div id="m_nav_menu" class="m_nav menu">
                                    <div class="m_nav_ham button_closed" id="m_ham_1"></div>
                                    <div class="m_nav_ham button_closed" id="m_ham_2"></div>
                                    <div class="m_nav_ham button_closed" id="m_ham_3"></div>
                                </div>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>