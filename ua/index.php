<!DOCTYPE html>
<?php require '../head.php'; ?>
<title>Linger</title>
<html lang="ua">
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
                       <?php require '../lang.php'; ?>
                        <div class="profile">
                            <a href="#"><img src="../img/icons/profile.svg" alt=""></a>
                        </div>
                    </div>
                </div>

                <div class="header__ul_searh">
                    <div class="ul__search_container">
                        <div class="ul_container">
                            <ul>
                                <li><a href="#about_us">Про нас</a></li>
                                <li><a href="#activity">Діяльність</a></li>
                                <li class="li_new"><a href="#material">Військові конфлікти</a><sup class="new">Актуальне</sup></li>
                            </ul>
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

                <div class="header__slider_wrapper">
                    <div class="header__slider_container">
                        <div class="slider__divider">
                            <div class="divider__container">
                                <h2 class="advertisement"> <span class="highlight">linger запрошує вас відвідати безплатну лекцію по військовій справі</span>  </h2>
                                <button id="sign" class="button">Записатись</button>
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
                        <p class="subs__text">Придбайте нашу підписку за 3.99$</p>
                        <button class="button"><a href="./premium.php" class="link_button">Почати</a></button>
                    </div>
                </div>
                    <h2 class="title" id="about_us">Про нас</h2>
                    <div class="about_us__text">
                        <div class="aspect">
                            <p class="number">1</p>
                            <p class="text"><span class="company">linger</span> - неприбуткова організація, яка займається дослідженням та аналізом військових конфліктів у світі. Ми були засновані у 2007 році Кімберлі Каган з метою надання точної та своєчасної інформації про важливі геополітичні події та їх наслідки для національної безпеки США та їхніх союзників. Наша штаб-квартира розташована у Вашингтоні, округ Колумбія.</p>
                        </div>
                        <div class="aspect">
                            <p class="number">2</p>
                            <p class="text">Наша місія - покращувати розуміння війни та її динаміки через ретельний дослідницький процес, який об'єднує традиційну академічну методологію з інноваційними технологіями. Ми прагнемо створювати високоякісні продукти, які можуть слугувати джерелом інформації та натхнення для політиків, експертів, журналістів, студентів та громадськості.</p>
                        </div>
                        <div class="aspect">
                            <p class="number">3</p>
                            <p class="text">Наша візія - бути провідним центром експертизи з питань вивчення війни та сприяти миротворчим розв'язанням конфліктів. Ми вважаємо, що краще розуміння причин, ходу та наслідків воєн може допомогти запобігти непотребному насильству, зменшити людське страждання та покращити глобальну стабільність.</p>
                        </div>
                    </div>

                     <h2 class="title">Діяльність</h2>
                    <div class="activity" id="activity">
                        <div class="aspect">
                            <p class="text">Методологія досліджень LINGER спирається як на первинні, так і на вторинні джерела, що дозволяє дослідникам отримати всебічне розуміння ситуації на місцях. Для того, щоб аналізувати військові та політичні події в тій чи іншій місцевості, аналітики ISW повинні досконало розуміти системи ворожих та дружніх збройних сил. Вони також повинні розуміти демографічні показники населення, фізичний рельєф місцевості, політику та історію цієї території. Це закладає аналітичну основу для розуміння причин конкретних подій і виконання поставлених дослідницьких завдань.</p>
                        </div>  
                        <h2 class="title" id="material">Матеріали</h2>
                        <div class="vertical_block__material">
                            <div class="material">
                                <div class="time">
                                    26.04.2023
                                </div>
                                <div class="theme">
                                    <p class="text">Матеріал по темі "Війна в Україні"</p>
                                <a href="../ua/ukraine.php"><button class="button lowsize">Перегляд</button></a>
                                </div>
                            </div>
                            <div class="material">
                                <div class="time">
                                    09.01.2016
                                </div>
                                <div class="theme">
                                    <p class="text">Матеріал по темі "Війна в Афганістані"</p>
                                    <a href="../ua/afghan.php"><button class="button lowsize">Перегляд</button></a>
                                </div>
                            </div>
                        </div>                    
                    </div>              
            </div>
        </main>
        <?php require 'footer.php';?>
</body>
</html>