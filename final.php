<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lozzo's Portfolio</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="header">
        <div class="header__inner inner">
            <h1 class="header__logo">
                
                <a href="index.html" style="color: #fff; text-decoration: none;">Home</a>
                
            </h1>
            <ul class="header__nav">
                <li><a href="#profile">Profile</a></li>
                <li><a href="#works">Works</a></li>
                <li><a href="#price">Price</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>


    <div class="main-visual" style="background-image:url('images/main.jpg'); background-size: cover;">
        <div class="main-visual__content">
            <div class="main-visual__title">Lozzo's Portfolio</div>
            <div class="main-visual__lead">Hi! I'm Lozzo</div>
            <div class="main-visual__button">
                <a href="#contact">Contact</a>
            </div>
        </div>
    </div>

    <section class="profile section" id="profile">
        <div class="profile-inner inner">
            <div class="section-title">Profile</div>
            <div class="profile-content">
                <div class="profile-image">
                    <img src="images/profile.jpg" alt="">
                </div>
                <div class="profile-text">
                    <h3>Lozzo Fujisawa</h3>
                    <p>UI/UX designer</p>
                    <p>Welcome to my portfolio!</p>
                </div>
            </div>
        </div>
    </section>
    <section class="card section" id="works">
        <div class="card__inner inner">
            <div class="card__head section-title">Works</div>
            <div class="card__items">
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
                <div class="card__item wow fadeInUp">
                    <div class="card__img">
                        <img src="images/works.jpg" alt="">
                    </div>
                    <div class="card__title">
                        Title
                    </div>
                    <div class="card__text">
                        text & img
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="price section" id="price">
        <div class="price__inner inner">
            <div class="price__title section-title">
                Price
            </div>
            <div class="price__content">
                <div class="price__image">
                    <img src="images/price.jpg" alt="">
                </div>
                <div class="price__table">
                    <table class="table">
                        <tr>
                            <th></th>
                            <th>price1</th>
                            <th>price2</th>
                        </tr>
                        <tr>
                            <th>plan1</th>
                            <td>$100</td>
                            <td>$100</td>
                        </tr>
                        <tr>
                            <th>plan2</th>
                            <td>$100</td>
                            <td>$100</td>
                        </tr>
                        <tr>
                            <th>plan3</th>
                            <td>
                                <strong>$100</strong>
                            </td>
                            <td>$100</td>
                        </tr>
                        <tr>
                            <th>plan4</th>
                            <td>$100</td>
                            <td>$100</td>
                        </tr>
                    </table>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="contact section" id="contact">
        <div class="contact__inner inner">
            <div class="contact__head section-title">
                Contact
            </div>
            <div class="contact__form">
                <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "kyoka.miyamura@seattlecolleges.edu";  //place your/your client's email address here
        $toName = "Lozzo"; //place your client's name here
        $website = "Lozzo's portfolio";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
            </div>
        </div>
    </section>

    
    <footer class="footer">
        <div class="footer__inner inner">
            <div class="footer__content">

                <div class="footer__center">
                    <ul class="footer__nav">
                        <li><a href="#profile">Profile</a></li>
                        <li><a href="#works">Works</a></li>
                        <li><a href="#price">Price</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer__copy">
                <p><small>&copy; 2022 by
                        <a href="index.php">Kyoka Miyamura</a>, All Rights Reserved ~
                        <a id="html-checker" href="#">Check HTML</a> ~
                        <a id="css-checker" href="#">Check CSS</a></small>
                </p>
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>