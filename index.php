<?php require 'public/contact.php'?>
<?php require_once './functions/connect.php';?>

<?php 

$main = $pdo->prepare("SELECT * FROM header");
$main->execute();
$result=$main->fetch(PDO::FETCH_OBJ);?>
 
<link rel="stylesheet" href="./css/main.css">

    <header class="header">
        <div class="header__wrapper">
            <h1 class="header__title">
                <strong><em>сыймык</em></strong><br>
                2002 года рождения . Учить универе МУК
            </h1>
        </div>
    </header>

    <main id="skills" class="section">
        <div class="container">

           
            <ul class="projects">
                <li class="project">
                    <a href="./project-page.html">
                        <h1 class="project__title-h1">Как это устроена</h1>
                        <h3  class="project__title">«Тачки» — американский компьютерно-анимационный спортивный комедийный фильм 2006 года,</h3>
                    </a>
                </li>
                

            </ul>
            <div class="project__link">
                <ol class="project__title-link">
                    <p class="project__text-p">01.</p>
                    <h2 class="project-link">Mercedes-Benz</h2>
                    <h3>Торговая марка и одноимённая компания - производитель легковых автомобилей премиального класса, грузовых автомобилей, автобусов и других транспортных средств. </h3>
                </ol>
                <ol class="project__title-link">
                    <p class="project__text-p">02.</p>
                    <h2 class="project-link">Audi</h2>
                    <h3>Audi AG — немецкая автомобилестроительная компания в составе концерна Volkswagen Group, специализирующаяся на выпуске автомобилей под маркой Audi. </h3>
                </ol>
                <ol class="project__title-link">
                    <p class="project__text-p" > 03.</p>
                    <h2 class="project-link">Subaru</h2>
                    <h3>Subaru — автомобилестроительный бренд, принадлежит компании Subaru Corporation. Объём производства в 2011 году составил 528 234 легковых и 52 027 коммерческих</h3>
                </ol>
                <ol class="project__title-link">
                    <p class="project__text-p">04.</p>
                    <h2 class="project-link">toyota</h2>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et magni, deserunt fuga cupiditate accusantium eum!</h3>
                </ol>
            </div>
            <div class="projects__link">
                <div class="project__img-title">
                    <td class="project__img-img">
                        <img class="project-img" src="https://img.favcars.com/aston-martin/virage/wallpapers_aston-martin_virage_2011_7.jpg" alt="">
                    </td>
                </div>
                <div class="project__img-title">
                    <div  class="proj">
                        <p class="project__text-p">есть вопросы позвоните нам </p>
                        <h2 class="project-link">+9967000000</h2>
                        
                        
                    </div>
                </div>
                <div class="project__img-title">
                    <td class="project__img-img">
                        <img class="project-img" src="./img/beko.jpg" alt="">
                    </td>
                </div>
            </div>
            
            
        </div>
    </main>
    <nav id="services" class="article">
        <div class="container">

           
            <ul class="projects">
                <li class="project">
                    <a href="./project-page.html">
                        <h1 class="project__title-h1">Самые популярные предложения </h1>
                        <h3  class="project__title">«Тачки» — американский компьютерно-анимационный спортивный комедийный фильм 2006 года,</h3>
                    </a>
                </li>
                

            </ul>
            <div class="project__link">
                <ol class="project__title-link">
                    <p class="project__text-p"><span>ВСЕ</span></p>
                </ol>
                <ol class="project__title-link">
                    <p class="project__text-p">AUDI</p>
                </ol>
                <ol class="project__title-link">
                    <p class="project__text-p">BMW</p>
                </ol>
                <ol class="project__title-link">
                    <p class="project__text-p" >MAZDA</p>
                </ol>
                <ol class="project__title-link">
                    <p class="project__text-p" >MERSEDES</p>
                </ol>
                <ol class="project__title-link">
                    <p class="project__text-p">TOYOTA</p>
                </ol>
            </div>
            <div class="projects__link">
                <div class="project__img-title">
                    <td class="project__img-img">
                        <ul class="project__img-link">
                            <img class="project-img" src="https://img.favcars.com/aston-martin/virage/wallpapers_aston-martin_virage_2011_7.jpg" alt="">
                            <p>MAZDA RX-8 СПОРТКАР</p>
                            <p>В настоящее время выпускаются, как одноколёсные, так и двухколёсные тачки. Классические
                                 современные тачки выглядят следующим образом. Их рама представляет собой набор из стальных труб, сваренных между собой</p>
                        </ul>
                        <ol class="project__class-img"><p><img class="img__articl" src="https://cdn-icons-png.flaticon.com/128/1077/1077114.png?ga=GA1.1.485168008.1687796568&track=sph" alt="">2019 г</p>
                        О нас    <p><img class="img__articl" src="https://cdn-icons-png.flaticon.com/128/2285/2285559.png?ga=GA1.1.485168008.1687796568&track=sph" alt="">AVTO</p>
                            <p><img class="img__articl" src="https://cdn-icons-png.flaticon.com/128/3082/3082383.png?ga=GA1.1.485168008.1687796568&track=sph" alt="">6</p>
                        </ol>
                    </td>
                </div>
                <div class="project__img-title">                  
                        <td class="project__img-img">
                            <ul class="project__img-link">
                                <img class="project-img" src="https://w-dog.ru/wallpapers/1/18/547451490205704/mustang-chernyj-zachetnyj.jpg" alt="">
                                <p>AUDI R24 AVANT 2019 ГОДА </p>
                                <p>В настоящее время выпускаются, как одноколёсные, так и двухколёсные тачки. Классические современные тачки выглядят
                                     следующим образом. Их рама представляет собой набор из стальных труб, сваренных между собой</p>
                            </ul>
                            <ol class="project__class-img"><p><img class="img__articl" src="https://cdn-icons-png.flaticon.com/128/1077/1077114.png?ga=GA1.1.485168008.1687796568&track=sph" alt="">2019 г</p>
                                <p><img class="img__articl" src="https://cdn-icons-png.flaticon.com/128/2285/2285559.png?ga=GA1.1.485168008.1687796568&track=sph" alt="">AVTO</p>
                                <p><img class="img__articl" src="https://cdn-icons-png.flaticon.com/128/3082/3082383.png?ga=GA1.1.485168008.1687796568&track=sph" alt="">6</p>
                            </ol>
                        </td>
                </div>
                <div class="project__img-title">
                    <td class="project__img-img">
                        <ul class="project__img-link">
                            <img class="project-img" src="./img/beko.jpg" alt="">
                            <p>AUDI A6</p>
                            <p>В настоящее время выпускаются, как одноколёсные, так и двухколёсные тачки. Классические современные
                                 тачки выглядят следующим образом. Их рама представляет собой набор из стальных труб, сваренных между собой</p>
                        </ul>
                        <ol class="project__class-img"><p><img class="img__articl" src="https://cdn-icons-png.flaticon.com/128/1077/1077114.png?ga=GA1.1.485168008.1687796568&track=sph" alt="">2019 г</p>
                            <p><img class="img__articl" src="https://cdn-icons-png.flaticon.com/128/2285/2285559.png?ga=GA1.1.485168008.1687796568&track=sph" alt="">AVTO</p>
                            <p><img class="img__articl" src="https://cdn-icons-png.flaticon.com/128/3082/3082383.png?ga=GA1.1.485168008.1687796568&track=sph" alt="">6</p>
                        </ol>
                    </td>
                </div>
            </div>
            
            
        </div>
    </nav>
    <div class="atribut">
        <div class="container">
            <div class="atribut__title">
                <div class="atrbut__link">
                    <ul class="atribut__link-item">
                        <img class="atrbut__img" src="./img/icons/fast-forward_724927.png" alt="">
                    </ul>
                    <ol class="atribut__link-img">
                        <h1>444</h1>
                        <p>клиенты</p>
                    </ol>
                </div>
                <div class="atrbut__link">
                    <ul class="atribut__link-item">
                        <img class="atrbut__img" src="./img/icons/email_542689.png" alt="">
                    </ul>
                    <ol class="atribut__link-img">
                        <h1>444</h1>
                        <p>клиенты</p>
                    </ol>
                </div>
                <div class="atrbut__link">
                    <ul class="atribut__link-item">
                        <img class="atrbut__img" src="./img/icons/user_1077114.png" alt="">
                    </ul>
                    <ol class="atribut__link-img">
                        <h1>444</h1>
                        <p>клиенты</p>
                    </ol>
                </div>
                <div class="atrbut__link">
                    <ul class="atribut__link-item">
                        <img class="atrbut__img" src="./img/icons/email_542689.png" alt="">
                    </ul>
                    <ol class="atribut__link-img">
                        <h1>444</h1>
                        <p>клиенты</p>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer none1">
        <div class="container">
            <div class="footer__grid">
                <div class="footer__logo">
                    <a href="#!">
                        Jocer :)
                    </a>
                </div>
                <div class="footer__nav">
                    <nav>
                        <ul class="footer__nav-list">
                            <li><a href="#!">ПОЛЕЗНЫЕ ССЫЛКИ</a></li>
                            <li><a href="#!">Кто мы есть</a></li>
                            <li><a href="#!">наш выставочный зал</a></li>
                            <li><a href="#!">Услуги</a></li>
                            <li><a href="#!">Как это устроена</a></li>
                            <li><a href="#!">Восросы-Ответи </a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer__nav">
                     <nav>
                        <ul class="footer__nav-list">
                            <li><a href="#!">ОТКРЫТЫЕ ЧАСЫ</a></li>
                            <li><a href="#!">Отдел продаж</a></li>
                            <li><a href="#!">Пн-Сб: 8:00 - 17:00</a></li>
                            <li><a href="#!">Воскресение закыто</a></li>
                            <li><a href="#!">Отдел обслуживания</a></li>
                            <li><a href="#!">Пн-Сб: 8:00 - 17:00</a></li>
                            <li><a href="#!">Воскресение закыто</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="footer__address">
                    <ul class="footer__nav-list">
                        <li>Связаться </li>
                        <li>Телефон: <a href="tel:+99670000000">+99670000000</a></li>
                        <li>Бишкек</li>
                        <li>E-mail: <a class="link-bold" href="burxanovbeko@gmail.com">burxanovbeko@gmail.com</a></li>
                    </ul>
                    <ul class="social">
                        <li class="social__item"><a href="#!"><img src="./img/icons/vk.svg" alt="Link"></a></li>
                        <li class="social__item"><a href="#!"><img src="./img/icons/instagram.svg" alt="Link"></a></li>
                        <li class="social__item"><a href="#!"><img src="./img/icons/twitter.svg" alt="Link"></a></li>
                        <li class="social__item"><a href="#!"><img src="./img/icons/gitHub.svg" alt="Link"></a></li>
                        <li class="social__item"><a href="#!"><img src="./img/icons/linkedIn.svg" alt="Link"></a></li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </footer>

</body>
</html>
