<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&family=Montserrat:wght@500;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- ./fonts -->
    <title>study USA</title>
<script defer src="bundle.js"></script></head>
<body>
    <div class="burger" id="burger">
        <div class="burger-menu">
            <span class="line-burger up"></span>
            <span class="line-burger middle"></span>
            <span class="line-burger down"></span>
        </div>
    </div>

    <div class="background-black"></div>
    <div class="contact-form contactHandler" style="display: none;">
        <div class="contact-form-block contactHandler">
            <form action="send.info.php" method="POST" class="contactHandler">
                <h2 class="contactHandler">Связаться с <span class="contactHandler">нами</span></h2>

                <div class="info-form contactHandler">
                    <div class="contact-name contactHandler">
                        <p class="contactHandler">Имя</p>
                        <input type="name" name="name" class="contactHandler" placeholder="Введите имя">
                    </div>
                    <div class="contact-name contactHandler">
                        <p class="contactHandler">Номер телефона:</p>
                        <input type="tel" name="phone" class="contactHandler" placeholder="Введите номер телефона">
                    </div>
                    <div class="contact-name contactHandler">
                        <p class="contactHandler">E-mail:</p>
                        <input type="email" name="email" class="contactHandler" placeholder="Введите e-mail">
                    </div>
                </div>
                <div class="btn-block contactHandler">
                    <button class="submit-btn-form" type="submit">Отправить</button>
                </div>
            </form>
        </div>
    </div>

    <div class="tab-burger-menu" style="display: none;">
        <div class="item-burger-tab">
            <div class="tab-bar" style="display: none;">
                <div class="menu-items">
                    <div class="item-burger line-off active"><a href="#join-univ">Главная</a></div>
                    <div class="item-burger"><a href="#feature">Стипендия</a></div>
                    <div class="item-burger"><a href="#scholarship">Наши услуги</a></div>
                    <div class="item-burger"><a href="#entrance">Про нас</a></div>
                    <div class="item-burger"><a href="#contacts">Контакты</a></div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-wrapper" style="padding-top: 0;">
        <nav>
            <div class="logo">
                <img src="./img/logo.svg" alt="">
                <p class="logoTitle">Study <span>USA .</span></p>
            </div>
            <div class="nav-items">
                <ul>
                    <li><a href="#join-univ">Зачем поступать в США</a></li>
                    <li><a href="#feature">Спортивная стипендия</a></li>
                    <li><a href="#scholarship">Наши услуги</a></li>
                    <li><a href="#entrance">Про нас</a></li>
                    <li><a href="#contacts">Контакты</a></li>
                </ul>
                <div class="line-cross"></div>
            </div>
            <button class="contact-btn">Связаться с нами</button>

            <div class="burger" id="burger" style="display: none;">
                <div class="burger-menu">
                    <span class="line-burger up"></span>
                    <span class="line-burger middle"></span>
                    <span class="line-burger down"></span>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <section class="header-inner" id="join-univ">
            <div class="card-info">
                <div class="content">
                    <h1>Study <span>USA</span> </h1>
                    <p class="typing-title">Мы помогаем дать вашим детям лучшее будущее уже сейчас!</p>
                    <p class="default-title">Соединенные Штаты Америки привлекают иностранных студентов не только качеством образования, но и возможностью закрепиться в сильной, экономически развитой стране. </p>
                    <button class="contact-btn">Подробнее</button>
                </div>
            </div>
        </section>
        <section class="mainSection join-univ">
            <div class="high-title-block">
                <h2>ЗАЧЕМ НУЖНО ПОСТУПАТЬ В <span>США?</span></h2>
            </div>
            <div class="content">
                <div class="item-content" style="background: no-repeat url('img/first.jpg');">
                    <div class="title">
                        <h3><span>Лучшее</span> образование в мире</h3>
                    </div>
                </div>
                <div class="item-content" style="background: no-repeat url('img/second.jpg');">
                    <div class="title">
                        <h3><span>Ценные</span> контакты и связи на всю жизнь</h3>
                    </div>
                </div>
                <div class="item-content __one" style="background: no-repeat url('img/three.jpg');grid-column-start: 2;
                grid-row-start: 1;
                grid-row-end: 3; height: auto;">
                    <div class="title">
                        <h3><span>Возможность</span> остаться и работать в США</h3>
                    </div>
                </div>
                <div class="item-content __two" style="background: no-repeat url('img/four.jpg');">
                    <div class="title">
                        <h3><span>Яркие</span> и незабываемые студенческие годы</h3>
                    </div>
                </div>
                <div class="item-content" style="background: no-repeat url('img/five.jpg');">
                    <div class="title">
                        <h3><span>Игра</span> в самой лучшей студенческой лиге мира NCAA</h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="mainSection feature" id="feature">
            <div class="high-title-block">
                <h2>ГЛАВНАЯ ФИШКА УНИВЕРСИТЕТОВ <span>США</span></h2>
                <p>Абитуриент поступает в университет, не выбирая специальность.
                    Для самоопределения у него есть ещё два года.</p>
            </div>
            <div class="cards">
                <img src="img/students_down_first.jpg" alt="">
                <img src="img/students_down_second.jpg" alt="">
                <img src="img/students_down_three.jpg" alt="">
            </div>
        </section>

        <section class="mainSection scholarship" id="scholarship">
            <div class="high-title-block">
                <h2><span>СПОРТИВНАЯ</span> СТИПЕНДИЯ ПО ТЕННИСУ</h2>
            </div>

            <div class="content">
                <div class="tennis">
                    <img src="img/students_stip_one.jpg" alt="">
                    <div class="title">
                        <p><span>Ваши дети</span> играют в теннис на уровне, достаточном для получения спортивной стипендии.</p>
                        <p class="know-title">И мы знаем, как этого достичь!</p>
                        <button class="contact-btn">Связаться с нами</button>
                    </div>
                </div>
                <div class="team">
                    <h3>В команде университета 10-12 игроков</h3>
                    <div class="titles">
                        <p class="title-arrow">6 в основе</p>
                        <p class="title-arrow">4-6 запасных</p>
                    </div>
                    <p class="info-title"><span>Наша задача</span> — попасть в топ-4 и получить максимальную спортивную стипендию</p>
                </div>
            </div>
        </section>
        <section class="mainSection entrance" id="entrance">
            <div class="high-title-block">
                <h2><span>ПОСТУПЛЕНИЕ</span> В США ЧТО МЫ ДЛЯ ЭТОГО ДЕЛАЕМ?</h2>
            </div>
            <div class="content">
                <div class="info">
                    <div class="item">
                        <img src="img/monitoring.png" alt="">
                        <h3>Готовим анализ и выборку университетов под уровень абитуриента и финансовые возможности семьи</h3>
                    </div>
                    <div class="item">
                        <img src="img/racket.png" alt="">
                        <h3>Готовим и размещаем теннисный профайл</h3>
                    </div>
                    <div class="item">
                        <img src="img/education.png" alt="">
                        <h3>Курируем подготовку к TOEFL и SAT</h3>
                    </div>
                    <div class="item">
                        <img src="img/communication.png" alt="">
                        <h3>Коммуницируем от имени абитуриента с тренерами и финансовыми департаментами университетов</h3>
                    </div>
                    <div class="item">
                        <img src="img/finance.png" alt="">
                        <h3>Заполняем финансовые формы</h3>
                    </div>
                    <div class="item" style="padding-bottom: 0;">
                        <img src="img/questionnaire.png" alt="">
                        <h3>Заполняем анкеты, пишем эссе и оформляем все необходимые документы</h3>
                    </div>
                </div>
                <div class="img-row"><img src="img/row.png" alt=""></div>
                <div class="img-flag"><img src="img/flag_usa.png" alt=""></div>
            </div>
        </section>

        <section class="mainSection service">
            <div class="high-title-block">
                <h2>ПАКЕТЫ <span>УСЛУГ</span></h2>
            </div>

            <div class="cards">
                <div class="item-card">
                    <div class="card">
                        <div class="main-info">
                            <h3>ПАКЕТ «СТАРТОВЫЙ»</h3>
                            <p class="price-title">$1850</p>
                            <div class="info">
                                <p>Составление списка университетов</p>
                                <p>Подготовка и размещение теннисного профайла</p>
                            </div>
                        </div>
                        <div class="btn">
                            <button class="contact-btn">Заказать</button>
                        </div>
                    </div>
                </div>
                <div class="item-card">
                    <div class="card">
                        <div class="main-info">
                            <h3>ПАКЕТ «УСПЕХ»</h3>
                            <p class="price-title">$3850</p>
                            <div class="info">
                                <p>Составление списка университетов</p>
                                <p>Подготовка и размещение теннисного профайла</p>
                                <p>Курирование подготовки и сдачи TOEFL и SAT</p>
                                <p>Активный поиск и коммуникация с университетами</p>
                            </div>
                        </div>
                        <div class="btn">
                            <button class="contact-btn">Заказать</button>
                        </div>
                    </div>
                </div>
                <div class="item-card">
                    <div class="card">
                        <div class="main-info">
                            <h3>ПАКЕТ «ПОЛНЫЙ»</h3>
                            <p class="price-title">$4750</p>
                            <div class="info">
                                <p>Составление списка университетов</p>
                                <p>Подготовка и размещение теннисного профайла</p>
                                <p>Курирование подготовки и сдачи TOEFL и SAT</p>
                                <p>Активный поиск и коммуникация с университетами</p>
                                <p>Заполнение заявки финансовой формы, написание эссе, и рекомендательных писем</p>
                            </div>
                        </div>
                        <div class="btn">
                            <button class="contact-btn">Заказать</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="mainSection entrance-new">
            <div class="high-title-block">
                <h2>ПОСТУПЛЕНИЕ В <span>США</span></h2>
                <p>Университеты США соревнуются за лучших студентов, а тренера разбирают сильнейших игроков как можно раньше. Те, кто поступают в первой волне, получают самые высокие стипендии.</p>
            </div>

            <div class="cards">
                <div class="card">
                    <div class="head-info">
                        <div class="item">
                            <h4>2021</h4>
                            <p>подача документов закончена</p>
                        </div>
                        <div class="item">
                            <h4>2022</h4>
                            <p>нужно начинать сейчас</p>
                        </div>
                        <div class="item">
                            <h4>2023</h4>
                            <p>комфортно начинать сейчас</p>
                        </div>
                    </div>
                    <div class="down-info">
                        <h3>Крайние сроки подачи документов на сентябрь 2022:</h3>
                        <div class="info">
                            <div class="dates">
                                <p>до 1 ноября 2021</p>
                                <p>до 1 января 2022</p>
                                <p>до 15 февраля 2022</p>
                            </div>
                            <div class="info-dates">
                                <p>подача документов закончена</p>
                                <p>хорошие шансы на полную стипендию</p>
                                <p>низкие шансы на стипендию</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-consultations">
                    <h3 class="high-title">КОНСУЛЬТАЦИИ</h3>
                    <p class="price">от $150</p>
                    <p class="default">Разовые консультации по отдельным вопросам поступления</p>
                    <div class="btn-block">
                        <button class="contact-btn">Заказать</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="mainSection about-us">
            <div class="high-title-block">
                <h2>ПРО <span>НАС</span></h2>
            </div>

            <div class="content">
                <div class="info">
                    <div class="main-info">
                        <p class="default"><span>Мы</span> многие годы проводили аналитику для крупных американских компаний по поступлению в США.</p>
                        <p class="default"> Есть проблема на рынке - обезличенность таких компаний.</p>
                        <p class="default">Такие компании набирают большое количество студентов что не позволяет индивидуально подходить к каждому студенту.</p>
                        <p class="default">С 2021 года мы начали деятельность в Украине как бутиковая консалтинговая компания по поступлению в США.</p>
                        <p class="sub-info"><span>Индивидуальный подход</span> - это secret sauce успешного поступления в США.</p>
                    </div>

                </div>
                <img src="img/runin_velo.jpg" alt="">
            </div>
        </section>
    
        <section class="mainSection skills">
            <div class="item one" style="background-position: left 80px top 0px;">
                <img src="img/advice.svg" alt="">
                <p>Мы имеем личные наработанные контакты более чем с 100 тренерами в США</p>
            </div>
            <div class="item two">
                <img src="img/letter.svg" alt="">
                <p>Наши специалисты являются лучшими копирайтерами по подготовке и написанию эссе</p>
            </div>
            <div class="item three">
                <img src="img/education-hat.svg" alt="">
                <p>У нас досконально отработаны процедуры и протоколы аналитики по подбору университета под потребности каждого абитуриента</p>
            </div>
            <div class="item four">
                <img src="img/running.svg" alt="">
                <p>Мы сотрудничаем с успешными тренерами по подготовке к TOEFL и SAT имеющими опыт работы со спортсменами</p>
            </div>
        </section>

        <section class="mainSection team-project">
            <div class="high-title-block">
                <h2><span>НАША</span> КОМАНДА</h2>
            </div>

            <div class="content">
                <div class="item">
                    <img src="img/red.jpg" alt="">
                    <h3>Сергей Зубарев</h3>
                    <p>коммерческий директор</p>
                </div>
                <div class="item">
                    <img src="img/sova.jpg" alt="">
                    <h3>Андрей Брацюк</h3>
                    <p>операционное сопровождение</p>
                </div>
                <div class="item">
                    <img src="img/visot.jpg" alt="">
                    <h3>Виктория Кузьменко</h3>
                    <p>аналитик</p>
                </div>
            </div>
        </section>

        <section class="mainSection contacts" id="contacts">
            <div class="high-title-block">
                <h2><span>НАШИ</span> КОНТАКТЫ</h2>
            </div>

            <div class="content">
                <div class="phone">
                    <img src="img/phone.svg" alt="">
                    <a href="tel: +380984573297">+380 98 457 32 97</a>
                </div>
                <div class="mail">
                    <a href="mailto:studyusa.pro@gmail.com">@studyusa.pro@gmail.com</a>
                </div>
                <div class="social">
                    <a href=""><img class="facebook" src="img/facebook.svg" alt=""></a>
                    <a href=""><img src="img/inst.svg" alt=""></a>
                </div>
            </div>
        </section>
    </main>
    <footer class="mainSection header-wrapper" style="padding-top: 0;">
        <nav>
            <div class="logo">
                <img src="./img/logo-white.svg" alt="">
                <p class="logoTitle">Study <span>USA .</span></p>
            </div>
            <div class="nav-items">
                <ul>
                    <li><a href="#" class="active">Зачем поступать в США</a></li>
                    <li><a href="#">Спортивная стипендия</a></li>
                    <li><a href="#">Наши услуги</a></li>
                    <li><a href="#">Про нас</a></li>
                    <li><a href="#">Контакты</a></li>
                </ul>
                <div class="line"></div>
            </div>
            <button class="contact-btn">Связаться с нами</button>
        </nav>
    </footer>
</body>
</html>