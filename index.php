<?php
require_once '/home/kovpakiv/kovpakivets.com.ua/www/database/config.php';
require_once '/home/kovpakiv/kovpakivets.com.ua/www/database/default.php';
require_once '/home/kovpakiv/kovpakivets.com.ua/www/includes/renderingHelper.php';

$dbh = new PDO('mysql:host='.$host.';dbname='.$dbName, $user, $pass);
prepareData($dbh,$dataToDb);

$posts = $dbh->query('SELECT * from about');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
        PASCH
    </title>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" type="image/png" href="images/logo.png">
  	<link rel="stylesheet" href="styles/reset.css" />
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/media.css">
    	<!--[if lt IE 9]>
    		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    	<![endif]-->
  </head>
  <body id="app">
    <!-- HEADER -->
    <header class="header modalClose">
      <div class="header--top">
        <div class="logo">
          <img
            src="images/logo.png"
            alt="Logo"
            >
            <div class="menu" id="menuOpen">
                <span class="menu__btn--burger" id="burger">
                  &#9776;
                </span>
                <span class="menu__btn--times" id="times">
                  &times;
                </span>
                <nav class="nav" id="nav">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a
                                href="#about"
                                class="nav__link"
                                >
                                <img
                                    class="nav__img"
                                    src="./images/nav-about.png"
                                    alt="Icon"
                                    >
                                    <span class="nav__text">
                                        About me
                                    </span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a
                                href="#clothing"
                                class="nav__link"
                                >
                                <img
                                    class="nav__img"
                                    src="./images/nav-clothing.png"
                                    alt="Icon"
                                    >
                                    <span class="nav__text">
                                        Clothing Design
                                    </span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a
                                href="#modeling"
                                class="nav__link"
                                >
                                <img
                                    class="nav__img"
                                    src="./images/nav-modeling.png"
                                    alt="Icon"
                                    >
                                    <span class="nav__text">
                                        3D Modeling
                                    </span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a
                                href="#contact"
                                class="nav__link"
                                >
                                <img
                                    class="nav__img"
                                    src="./images/nav-contact.png"
                                    alt="Icon"
                                    >
                                    <span class="nav__text">
                                        Contact
                                    </span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
      </div>
      <div class="header__info">
        <h1 class="header__title">
          Designer
          3D Modeler
          Musician
          Artist
        </h1>
        <div class="guide">
          <div class="guide-icon">
            <img
              src="images/header-pause.png"
              alt="pause"
              >
            <img
              src="images/header-play.png"
              alt="play"
              >
          </div>
          <p class="guide__text">
              Quick Guide
          </p>
        </div>
      </div>
    </header>
    <!-- END HEADER -->

    <!-- ABOUT -->
    <section class="about"  id="about">
      <h2 class="about__title">
          About me
      </h2>
      <div class="about__info">
        <?php echo renderArticle($posts); ?>
      </div class="resume">
      <a
        class="resume__link"
        href="./assets/Maksym_Pashchenko_Resume.docx"
        download
        >
        <img
        class="resume__icon"
        src="./images/about_resume.png"
        alt="Icon"
        >
        <p class="resume__text">
          Download  Resume
        </p>
      </a>
    </section>
    <!-- END ABOUT -->

    <!-- CLOTHING -->
    <section class="clothing" id="clothing">
        <h2 class="clothing__title">
            Clothing Design
        </h2>
      <div class="clothing__slider" >

          <div id="slider">
            <figure>
              <img src="./images/clothing-1.png" alt="clothing-1">
              <img src="./images/clothing-2.png" alt="clothing-2">
              <img src="./images/clothing-3.png" alt="clothing-3">
              <img src="./images/clothing-4.png" alt="clothing-4">
            </figure>
          </div>

      </div>
    </section>
    <!-- END CLOTHING -->

     <!-- ARTWORK_1 -->
    <section class="artwork--1 artwork">
      <a
        title="Watch!"
        href="#"
        >
        Record artwork
      </a>
    </section>
    <!-- END ARTWORK_1 -->

    <!-- MODELING -->
    <section class="modeling" id="modeling">
        <h2 class="modeling__title">
            3D Modeling
        </h2>
        <div class="modeling__slider slider2">

            <!-- SLIDER # 2 -->

          <div class="csslider infinity" id="slider2">
            <input type="radio" name="slides" id="slides_1" checked="checked"/>
            <input type="radio" name="slides"  id="slides_2"/>
            <input type="radio" name="slides" id="slides_3"/>
            <input type="radio" name="slides" id="slides_4"/>
            <input type="radio" name="slides" id="slides_5"/>
            <input type="radio" name="slides" id="slides_6"/>
            <ul class="csslider--modeling">
              <li class="slider2__item">
                <img
                class="slider2__img"
                src="images/modeling-speaker.jpg"
                alt="speaker"
                />
                <div class="slider2__info">
                  <p class="slider2__text">
                    Wireless Speaker
                  </p>
                </div>
              </li>
              <li class="slider2__item">
                  <img
                  class="slider2__img"
                  src="images/modeling-pen.jpg"
                  alt="pen"
                  />
                  <div class="slider2__info">
                    <p class="slider2__text">
                       Exclusive Pen
                    </p>
                  </div>
                </li>
                <li class="slider2__item">
                    <img
                    class="slider2__img"
                    src="images/modeling-coffee.jpg"
                    alt="coffee"
                    />
                    <div class="slider2__info">
                      <p class="slider2__text">
                        Coffee Grinder
                      </p>
                    </div>
                  </li>
                  <li class="slider2__item">
                    <img
                    class="slider2__img"
                    src="images/modeling-speaker.jpg"
                    alt="speaker"
                    />
                    <div class="slider2__info">
                      <p class="slider2__text">
                        Wireless Speaker
                      </p>
                    </div>
                  </li>
                  <li class="slider2__item">
                    <img
                    class="slider2__img"
                    src="images/modeling-pen.jpg"
                    alt="pen"
                    />
                    <div class="slider2__info">
                      <p class="slider2__text">
                       Exclusive Pen
                      </p>
                    </div>
                  </li>
                  <li class="slider2__item">
                    <img
                    class="slider2__img"
                    src="images/modeling-coffee.jpg"
                    alt="coffee"
                    />
                    <div class="slider2__info">
                      <p class="slider2__text">
                        Coffee Grinder
                      </p>
                    </div>
                  </li>
            </ul>
            <div class="arrows">
              <label for="slides_1"></label>
              <label for="slides_2"></label>
              <label for="slides_3"></label>
              <label for="slides_4"></label>
              <label for="slides_5"></label>
              <label for="slides_6"></label>
              <label class="goto-first" for="slides_1"></label>
              <label class="goto-last" for="slides_6"></label>
            </div>
            <!-- <div class="navigation">
              <div>
                <label for="slides_1"></label>
                <label for="slides_2"></label>
                <label for="slides_3"></label>
                <label for="slides_4"></label>
                <label for="slides_5"></label>
                <label for="slides_6"></label>
              </div>
            </div> -->
          </div>
          <!-- END SLIDER # 2 -->
        </div>
    </section>
    <!-- END MODELING -->

    <!-- ARTWORK_2 -->
    <section class="artwork--2 artwork">
      <a
        title="Watch!"
        href="#"
      >
      Record artwork
    </a>
    </section>
    <!-- END ARTWORK_2 -->

    <!-- CONTACT -->
    <section class="contact"  id="contact">
        <h2 class="contact__title">
            Contact
        </h2>
          <div class="contact__container">
            <div class="social">
              <ul class="social__list">
                <li class="social__item">
                  <a
                    href="https://www.instagram.com/karobka/"
                    class="social__link"
                    target="_blank"
                    >
                    <img
                    src="images/contact-insta.png"
                    alt="Icon"
                    class="social__icon"
                    >
                  </a>
                </li>
                <li class="social__item">
                  <a
                    href="https://github.com/paschmxx"
                    class="social__link"
                    target="_blank"
                    >
                    <img
                    src="images/contact-gh.png"
                    alt="Icon"
                    class="social__icon"
                    >
                  </a>
                </li>
                <li class="social__item">
                  <a
                    href="https://soundcloud.com/pasch13"
                    class="social__link"
                    target="_blank"
                    >
                    <img
                    src="images/contact-cloud.png"
                    alt="Icon"
                    class="social__icon"
                    >
                  </a>
                </li>
                <li class="social__item">
                  <a
                    href="https://www.youtube.com/channel/UCWJ9hcRO-He76QNnQ_wzwXA?view_as=subscriber"
                    class="social__link"
                    target="_blank"
                    >
                    <img
                    src="images/contact-y.png"
                    alt="Icon"
                    class="social__icon"
                    >
                  </a>
                </li>
                <li class="social__item">
                  <a
                    href="https://www.facebook.com/maxim.paschenko.5?ref=bookmarks"
                    class="social__link"
                    target="_blank"
                    >
                    <img
                    src="images/contact-fb.png"
                    alt="Icon"
                    class="social__icon"
                    >
                  </a>
                </li>
              </ul>
            </div>

          <div class="contact__block">
          <form
            action="https://formspree.io/paschproinfo@gmail.com" method="POST" /"
            id="user_message"
            class="form"
            name="email"
            method="POST"
            autoComplete="on"
              >
            <fieldset class="form__fieldset">
              <div class="contact__row--1">
              <input
                class="form__username"
                required
                type="text"
                name="username"
                // pattern="^[a-zA-Z][a-zA-Z-_\.]{1,20}$"
                pattern="[а-яА-яa-zA-z]+\s)+([а-яА-яa-zA-z]+"


                placeholder="Name"
                // onClick={this.changeInput.bind(this)}
                  />
              <input
              class="form__email"
              id="email"
              required
              type="email"
              name="email"
              pattern="^\w[\w!#$%&'*+\-/=?^_`{|}~]+\.?[\w!#$%&'*+\-/=?^_`{|}~]+@\w{1,12}\.[A-z]{2,3}$"
              placeholder="Email"
              //  onchange={this.testEmail.bind(this)}
                />
              </div>
                <div class="contact__row--2">
              <textarea
                  class="textarea"
                  rows="2"
                >Message</textarea>
            </div>

              <br />
              <a href="https://.../" target="_blank">
                <input
                  class="send"
                  type="submit"
                  name="submit"
                  value="Send message"
                  />
              </a>
            </fieldset>
          </form>
          </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <!-- FOOTER -->
    <footer class="footer">
      <p class="footer__info">
          &copy; 2018
          <span class="footer__pasch">
              PASCH
          </span>
          . All Rights Reserved.
      </p>
    </footer>
    <!-- END FOOTER -->
    <script src="./js/index.js"></script>
  </body>
</html>
