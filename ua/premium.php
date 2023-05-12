<!DOCTYPE html>
<html lang="ua">
<?php require '../head.php'; ?>
<title>Premium</title>
<body>
        <header>
            <div class="header">
            <div class="header__wrapper">
                <div class="header__top_section">
                    <div class="top__section_icon_container">
                        <?php require '../top__section_icon_container.php'; ?>
                    </div>
                    <div class="top__section">
                        <div class="logo">
                            <h1 class="main_title">Pro-версія</h1> 
                        </div>
                    </div>
                    <div class="top__section_language_profile">
                        <div class="lang">
                            <div class="lang__container">
                                <p class="lang-switcher eng">
                                    <a href="../eng/premium.php" tabindex="0">eng</a>
                                </p>
                                <p class="lang-switcher ua" tabindex="0">
                                    <a href="../ua/premium.php">ua</a>
                                </p>
                            </div>
                        </div>
                        <div class="profile">
                            <a href="#"><img src="../img/icons/profile.svg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="header__ul_searh">
                    <div class="ul__search_container">
                        <div class="ul_container">
                            <ul>
                                <li><a href="../ua/index.php" class="back"><img src="../img/icons/arrow.svg" alt="" class="icon">Назад</a></li>
                        </div>
                        <div class="top__section_icon_container search">
                            <div class="icon">
                                <div class="input__flex">
                                    <input type="text" name="" id="" placeholder="пошук">
                                    <img src="../img/icons/pepicons-pop_loop.svg" alt="" class="loop">
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
        </header>
        <main>
            <div class="main__wrapper">
                <div class="main__subscription_block">
                    <div class="sub_block_flex_container">
                        <div class="flex_container">
                            <div class="container_top__text">
                                <p class="version">Безплатна версія</p>
                                <p class="price">0$ в місяць</p>
                            </div>
                            <div class="container-mid__text">
                                <div class="element true"><p class="element-text">Користування сайтом</p></div>
                                <div class="element"><p class="element-text">Відкриття інформації через 20 днів після опублікування</p></div>
                                <div class="element"><p class="element-text unable">Підкасти та відео з експертами</p></div>
                                <div class="element"><p class="element-text unable">Наш мерч</p></div>
                                <div class="element"><p class="element-text unable">Можливість зустрічі із викладачами інституту</p></div>
                                <button class="button-subs">Почати</button>
                            </div>
                        </div>

                        <div class="flex_container">
                            <div class="container_top__text mid_prem">
                                <p class="version">Premium-версія</p>
                                <p class="price">4.99$ в місяць</p>
                            </div>
                            <div class="container-mid__text">
                                <div class="element true"><p class="element-text">Користування сайтом</p></div>
                                <div class="element"><p class="element-text">Відкриття інформації через 1 день після опублікування</p></div>
                                <div class="element"><p class="element-text">Підкасти та відео з експертами</p></div>
                                <div class="element"><p class="element-text unable">Наш мерч</p></div>
                                <div class="element unable"><p class="element-text">Можливість зустрічі із викладачами інституту</p></div>
                                <button class="button-subs">Почати</button>
                            </div>
                        </div>

                        <div class="flex_container">
                            <div class="container_top__text journalist">
                                <p class="version">Для журналістів</p>
                                <p class="price">14.99$ в місяць</p>
                            </div>
                            <div class="container-mid__text">
                                <div class="element true"><p class="element-text">Користування сайтом</p></div>
                                <div class="element"><p class="element-text">Відкриття інформації ОДРАЗУ після опублікування</p></div>
                                <div class="element"><p class="element-text">Підкасти та відео з експертами</p></div>
                                <div class="element"><p class="element-text">Наш мерч</p></div>
                                <div class="element"><p class="element-text">Можливість зустрічі із викладачами інституту</p></div>
                                <button class="button-subs">Почати</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require 'footer.php';?>
</body>
</html>