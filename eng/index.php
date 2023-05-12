<!DOCTYPE html>
<?php require '../head.php'; ?>
<title>Linger</title>
<html lang="en">
<body>
        <header>
            <div class="header__wrapper">
                <div class="header__top_section">
                    <div class="top__section_icon_container">
                        <?php require '../top__section_icon_container.php'; ?>
                    </div>
                    <div class="top__section_logo">
                        <div class="logo">
                            <a href="#"><img src="../img/icons/linger.svg" class="logo_img" alt=""></a>
                        </div>
                    </div>
                    <div class="top__section_language_profile">
                        <div class="lang">
                            <div class="lang__container">
                                    <p class="lang-switcher eng">
                                        <a href="../eng/index.php">eng</a>
                                    </p>
                                <p class="lang-switcher ua" tabindex="0">
                                <a href="../ua/index.php">ua</a>
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
                                <li><a href="#about_us">Abouts us</a></li>
                                <li><a href="#activity">Activity</a></li>
                                <li class="li_new"><a href="#material">Military conflicts</a><sup class="new">Relevant</sup></li>
                            </ul>
                        </div>
                        <div class="top__section_icon_container search">
                        <div class="icon">
                            <div class="input__flex">
                                <input type="text" name="" id="" placeholder="search">
                                <img src="../img/icons/pepicons-pop_loop.svg" alt="" class="loop">
                            </div>
                    </div>
                        </div> 
                    </div>
                </div>

                <div class="header__slider_wrapper">
                    <div class="header__slider_container">
                        <div class="slider__divider">
                            <div class="divider__container">
                                <h2 class="advertisement"> <span class="highlight">linger invites you to attend a free lecture on military affairs</span>  </h2>
                                <button id="sign" class="button">Sign up</button>
                            </div>
                        </div>
                    </div>
                    <div class="slider__wrapper_darker"></div>
                </div>
        </div>
        </header>
        <main>
            <div class="main__wrapper">
                <div class="sub_cont">
                    <div class="subscribtion">
                        <p class="subs__text">Buy our subscription for $3.99</p>
                        <button class="button"><a href="../eng/premium.php" class="link_button">Start</a></button>
                    </div>
                </div>
                    <h2 class="title" id="about_us">About us</h2>
                    <div class="about_us__text">
                        <div class="aspect">
                            <p class="number">1</p>
                            <p class="text"><span class="company">linger</span> - is a nonprofit organization that researches and analyzes military conflicts around the world. We were founded in 2007 by Kimberly Kagan to provide accurate and timely information on important geopolitical events and their implications for the national security of the United States and its allies. We are headquartered in Washington, DC.</p>
                        </div>
                        <div class="aspect">
                            <p class="number">2</p>
                            <p class="text">Our mission is to improve the understanding of war and its dynamics through a rigorous research process that combines traditional academic methodology with innovative technologies. We strive to create high quality products that can serve as a source of information and inspiration for policy makers, experts, journalists, students, and the public.</p>
                        </div>
                        <div class="aspect">
                            <p class="number">3</p>
                            <p class="text">Our vision is to be the leading center of expertise in the study of war and to promote peaceful solutions to conflicts. We believe that a better understanding of the causes, course, and consequences of war can help prevent unnecessary violence, reduce human suffering, and improve global stability.</p>
                        </div>
                    </div>

                     <h2 class="title">Activity</h2>
                    <div class="activity" id="activity">
                        <div class="aspect">
                            <p class="text">LINGER's research methodology relies on both primary and secondary sources, which allows researchers to gain a comprehensive understanding of the situation on the ground. In order to analyze military and political developments in a given area, ISW analysts must have a thorough understanding of the systems of enemy and friendly armed forces. They must also understand the demographics of the population, physical terrain, politics, and history of the area. This provides the analytical foundation for understanding the causes of specific events and fulfilling research objectives.</p>
                        </div>  
                        <h2 class="title" id="material">Materials</h2>
                        <div class="vertical_block__material">
                            <div class="material">
                                <div class="time">
                                    26.04.2023
                                </div>
                                <div class="theme">
                                    <p class="text">Related article "The war in Ukraine"</p>
                                <a href="../eng/ukraine.php"><button class="button lowsize">View</button></a>
                                </div>
                            </div>
                            <div class="material">
                                <div class="time">
                                    09.01.2016
                                </div>
                                <div class="theme">
                                    <p class="text">Related article "The war in Afghanistan"</p>
                                    <a href="../eng/afghan.php"><button class="button lowsize">View</button></a>
                                </div>
                            </div>
                        </div>                    
                    </div>              
            </div>
        </main>
        <?php require 'footer.php';?>
</body>
</html>