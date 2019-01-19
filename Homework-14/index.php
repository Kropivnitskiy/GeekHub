<?php
$data = require('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InteractiveAgency</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="src/sass/base/_basic.scss">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/">
            <?php
            $siteLogo = $data['siteLogo'];
            print_r('<img src='.$data['siteLogo']['src'].' alt='.$data['siteLogo']['alt'].'>')
            ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <?php
                        foreach($data['mainMenu'] as $menu) {
                            print_r('<li class="nav-item"><a class="nav-link" href='.$menu["url"] . '>' .
                $menu["title"] . '</a></li>');
                }
                ?>
            </ul>
        </div>
    </nav>
</header>
<section class="hero">
    <div class="container text-center">
        <h1 class="title">
            <?= $data['hero']['h1']; ?>
        </h1>
        <p class="sub-title">
            <?= $data['hero']['text']; ?>
        </p>
        <?php
        $btnPrice = $data['btnPrice'];
        print_r('<a href='.$data['btnPrice']['url'].' class="btn-primary"> '.$data['btnPrice']['title'].'</a>')
        ?>
    </div>
    <?php
    $scrool = $data['scrool'];
    print_r('<img src='.$data['scrool']['src'].' alt='.$data['scrool']['alt'].' class="scrool">')
    ?>
</section>
<div class="best">
    <div class="row">
        <section class="col-12 col-md-6 best__section">
            <div
                class="container d-flex flex-column justify-content-center align-items-center align-items-md-start no-m-right">
                <h2 class="title text-center text-md-left">
                    <?= $data['bestSectionLeft']['h2']; ?>
                </h2>
                <p class="sub-title text-center text-md-left">
                    <?= $data['bestSectionLeft']['text']; ?>
                </p>
                <?php
                $btnPrice = $data['btnPrice'];
                print_r('<a href='.$data['btnPrice']['url'].' class="btn-primary"> '.$data['btnPrice']['title'].'</a>')
                ?>
            </div>
        </section>
        <section class="col-12 col-md-6 best__section">
            <div
                class="container d-flex flex-column justify-content-center align-items-center align-items-md-start no-m-left">
                <h2 class="title text-center text-md-left">
                    <?= $data['bestSectionRight']['h2']; ?>
                </h2>
                <p class="sub-title text-center text-md-left">
                    <?= $data['bestSectionRight']['text']; ?>
                </p>
                <?php
                $btnPrice = $data['btnPrice'];
                print_r('<a href='.$data['btnPrice']['url'].' class="btn-primary"> '.$data['btnPrice']['title'].'</a>')
                ?>
            </div>
        </section>
    </div>
</div>
<section class="we-do">
    <div class="container">
        <h2 class="text-center section-title">
            <?= $data['whatWeDo']['h2']; ?>
        </h2>
        <div class="row justify-content-between">
            <div
                class="col-12 col-md-6 we-do__card d-flex flex-column flex-lg-row justify-content-center align-items-center align-items-lg-start">
                <div class="we-do__card__icon">
                    <?php
                    $whatWeDo = $data['whatWeDo'];
                    print_r('<img src='.$data['whatWeDo']['web-design']['src'].' alt='.$data['whatWeDo']['web-design']['alt'].'>')
                    ?>
                </div>
                <div class="we-do__card__content">
                    <h3 class="title text-center text-lg-left">
                        <?= $data ['whatWeDo']['web-design']['h3']; ?>
                    </h3>
                    <p class="description text-center text-lg-left">
                        <?= $data ['whatWeDo']['web-design']['text']; ?>
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-md-6 we-do__card d-flex flex-column flex-lg-row justify-content-center align-items-center align-items-lg-start">
                <div class="we-do__card__icon">
                    <?php
                    $whatWeDo = $data['whatWeDo'];
                    print_r('<img src='.$data['whatWeDo']['web-applications']['src'].' alt='.$data['whatWeDo']['web-applications']['alt'].'>')
                    ?>
                </div>
                <div class="we-do__card__content">
                    <h3 class="title text-center text-lg-left">
                        <?= $data ['whatWeDo']['web-applications']['h3']; ?>
                    </h3>
                    <p class="description text-center text-lg-left">
                        <?= $data ['whatWeDo']['web-applications']['text']; ?>
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-md-6 we-do__card d-flex flex-column flex-lg-row justify-content-center align-items-center align-items-lg-start">
                <div class="we-do__card__icon">
                    <?php
                    $whatWeDo = $data['whatWeDo'];
                    print_r('<img src='.$data['whatWeDo']['digital-paiting']['src'].' alt='.$data['whatWeDo']['digital-paiting']['alt'].'>')
                    ?>
                </div>
                <div class="we-do__card__content">
                    <h3 class="title text-center text-lg-left">
                        <?= $data ['whatWeDo']['digital-paiting']['h3']; ?>
                    </h3>
                    <p class="description text-center text-lg-left">
                        <?= $data ['whatWeDo']['digital-paiting']['text']; ?>
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-md-6 we-do__card d-flex flex-column flex-lg-row justify-content-center align-items-center align-items-lg-start">
                <div class="we-do__card__icon">
                    <?php
                    $whatWeDo = $data['whatWeDo'];
                    print_r('<img src='.$data['whatWeDo']['desktop-applications']['src'].' alt='.$data['whatWeDo']['desktop-applications']['alt'].'>')
                    ?>
                </div>
                <div class="we-do__card__content">
                    <h3 class="title text-center text-lg-left">
                        <?= $data ['whatWeDo']['desktop-applications']['h3']; ?>
                    </h3>
                    <p class="description text-center text-lg-left">
                        <?= $data ['whatWeDo']['desktop-applications']['text']; ?>
                    </p>
                </div>
            </div>
            <?php
            $btnPrice = $data['btnPrice'];
            print_r('<a href='.$data['btnPrice']['url'].' class="btn-primary m-auto"> '.$data['btnPrice']['title'].'</a>')
            ?>
        </div>
    </div>
</section>
<section>
    <div class="our-work w-100 carousel slide" data-ride="carousel">
        <div class="slides carousel-inner">
            <div class="slides__item carousel-item active">
                <?php
                $carousel = $data['carousel'];
                print_r('<img class="slides__item__img d-block img-fluid w-100" 
                src='.$data['carousel']['slide-one']['src'].' 
                alt='.$data['carousel']['slide-one']['alt'].'>')
                ?>
                <div class="slides__item__view">
                    <h2 class="title text-center">
                        <?= $data ['carousel']['slide-one']['h2']; ?>
                    </h2>
                    <p class="description text-center">
                        <?= $data ['carousel']['slide-one']['text']; ?>
                    </p>
                    <?php
                    $btnWatchMore = $data['btnWatchMore'];
                    print_r('<a href='.$data['btnWatchMore']['url'].' class="btn-primary"> '.$data['btnWatchMore']['title'].'</a>')
                    ?>
                </div>
            </div>
            <div class="slides__item carousel-item">
                <?php
                $carousel = $data['carousel'];
                print_r('<img class="slides__item__img d-block img-fluid w-100" 
                src='.$data['carousel']['slide-two']['src'].' 
                alt='.$data['carousel']['slide-two']['alt'].'>')
                ?>
                <div class="slides__item__view">
                    <h2 class="title text-center">
                        <?= $data ['carousel']['slide-two']['h2']; ?>
                    </h2>
                    <p class="description text-center">
                        <?= $data ['carousel']['slide-two']['text']; ?>
                    </p>
                    <?php
                    $btnWatchMore = $data['btnWatchMore'];
                    print_r('<a href='.$data['btnWatchMore']['url'].' class="btn-primary"> '.$data['btnWatchMore']['title'].'</a>')
                    ?>
                </div>
            </div>
            <div class="slides__item carousel-item">
                <?php
                $carousel = $data['carousel'];
                print_r('<img class="slides__item__img d-block img-fluid w-100" 
                src='.$data['carousel']['slide-three']['src'].' 
                alt='.$data['carousel']['slide-three']['alt'].'>')
                ?>
                <div class="slides__item__view">
                    <h2 class="title text-center">
                        <?= $data ['carousel']['slide-three']['h2']; ?>
                    </h2>
                    <p class="description text-center">
                        <?= $data ['carousel']['slide-two']['text']; ?>
                    </p>
                    <?php
                    $btnWatchMore = $data['btnWatchMore'];
                    print_r('<a href='.$data['btnWatchMore']['url'].' class="btn-primary"> '.$data['btnWatchMore']['title'].'</a>')
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-us">
    <div class="container">
        <div class="heading text-center">
            <h2 class="title">
                <?= $data ['about-us']['h2']; ?>
            </h2>
            <p class="description">
                <?= $data ['about-us']['text']; ?>
            </p>
        </div>
        <div class="row user-items">
            <div class="col-md-6 col-lg-3">
                <div class="user-card text-center">
                    <?php
                    $ourTeam = $data['ourTeam'];
                    print_r('<img src='.$data['ourTeam']['participant-one']['src'].' 
                    alt='.$data['ourTeam']['participant-one']['alt'].'>')
                    ?>
                    <h3 class="user-card__title">
                        <?= $data ['ourTeam']['participant-one']['h3']; ?>
                    </h3>
                    <p class="user-card__description">
                        <?= $data ['ourTeam']['participant-one']['text']; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="user-card text-center">
                    <?php
                    $ourTeam = $data['ourTeam'];
                    print_r('<img src='.$data['ourTeam']['participant-two']['src'].' 
                    alt='.$data['ourTeam']['participant-two']['alt'].'>')
                    ?>
                    <h3 class="user-card__title">
                        <?= $data ['ourTeam']['participant-two']['h3']; ?>
                    </h3>
                    <p class="user-card__description">
                        <?= $data ['ourTeam']['participant-two']['text']; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="user-card text-center">
                    <?php
                    $ourTeam = $data['ourTeam'];
                    print_r('<img src='.$data['ourTeam']['participant-three']['src'].' 
                    alt='.$data['ourTeam']['participant-three']['alt'].'>')
                    ?>
                    <h3 class="user-card__title">
                        <?= $data ['ourTeam']['participant-three']['h3']; ?>
                    </h3>
                    <p class="user-card__description">
                        <?= $data ['ourTeam']['participant-three']['text']; ?>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="user-card text-center">
                    <?php
                    $ourTeam = $data['ourTeam'];
                    print_r('<img src='.$data['ourTeam']['participant-four']['src'].' 
                    alt='.$data['ourTeam']['participant-four']['alt'].'>')
                    ?>
                    <h3 class="user-card__title">
                        <?= $data ['ourTeam']['participant-four']['h3']; ?>
                    </h3>
                    <p class="user-card__description">
                        <?= $data ['ourTeam']['participant-four']['text']; ?>
                    </p>
                </div>
            </div>
            <?php
            $btnWatchMore = $data['btnWatchMore'];
            print_r('<a href='.$data['btnWatchMore']['url'].' class="btn-primary m-auto"> '.$data['btnWatchMore']['title'].'</a>')
            ?>
        </div>
    </div>
</section>
<div class="location-map">
    <?php
    $map = $data['map'];
    print_r('<iframe src='.$data['map']['src'].' allowfullscreen></iframe>')?>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <p>Try awsome tool for desgners <a href="https://symu.co/">symu.co</a></p>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>