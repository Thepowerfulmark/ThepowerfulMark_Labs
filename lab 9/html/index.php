<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №9</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <?
        include ("./php/Controller/Main.php")
    ?>
    <div id="wrapper">
        <div id="overlay" hidden></div>
        <header>
            <img src="img/logo.PNG" style="margin-left: 2%;">
            <div class="user-panel"  >
                <img src="img/person.PNG"  class="person-img" style="margin-right: 28px;" >
                <ref id="open_login_window" class="header-ref"  style="margin-right: 28px;" >Войти</ref>
                <ref class="header-ref">Зарегистрироваться</ref>
                <img src="img/settings.png" hidden class="settings-img">
            </div>
        </header>

        <main>
        <h1 class="publ-title">Последние публикации</h1>
        <div class="content">
            <div class="Post-grid">
                <div class="Posts-in-grid">
                    <? require '../PHP/View/Post_view.php'?>
                </div>
                <label  class="download-more-btn" id = "download-more-btn" >
                    <span id = "download-span">Загрузить еще 6</span>
                </label>
            </div>
            <div class="Category-menu">
                <p class="Menu-title">Рубрики</p>
                <div class="Categories-list">
                    <? require './PHP/View/Category-view.php'?>
                </div>
            </div>
        </div>
        </main>

        <footer>
            <div class="footer-left-side" >
                <ref class="blog-ref"  style="margin-right: 35px;">Об авторе</ref>
                <ref class="blog-ref"  >Технологии</ref>
            </div>
            <ref class="footer-right-side" >© Blog, 2022</ref>
        </footer>
    </div>
    
    <login id="login-page" hidden>
        
        <div class="login-title">
            <h1 >Вход</h1>  
            <img id="login-page-close" class="login-page-close" src="img/Union.png">
        </div>
        <form class="login-form" >
            <div class="input-login">
                <div class="user-input-elem">
                    <span class="elem-title">Логин</span>
                    <input name="user-login" id="user-login" required placeholder="Ваш логин" class="elem-input" minlength="5" maxlength="150"  pattern="([A-я]|[A-z]|\d|@|\.|\+|-|_)*">
                    <span id="err-login" class="msg-err" ></span>
                </div>
                <div id="validation-login" class="validation-blok">
                    <div class="validation-msg" >
                        <img src="../img/galka.PNG" id="val-log-symbols-img">
                        <span id="val-log-symbols" >Только буквы, цифры и символы @.+-_</span>
                    </div>
                    <div class="validation-msg">
                        <img src="../img/galka.PNG" id="val-log-150-img">
                        <span id="val-log-150">Не более 150 символов</span>
                    </div>
                    <div class="validation-msg">
                        <img src="../img/galka.PNG" id="val-log-5-img">
                        <span id="val-log-5">Не более 5 символов</span>
                    </div>
                    <div class="validation-msg">
                        <img src="../img/galka.PNG" id="val-log-pass-img">
                        <span id="val-log-pass">Не cовпадает с паролем</span>
                    </div>
                </div>
            </div>
            <div class="input-pass">
                <div class="user-input-elem">
                    <span  class="elem-title">Пароль</span>
                    <input name="user-pass" id="user-pass" required type="password" placeholder="Ваш пароль" minlength="8" class="elem-input" maxlength="25" pattern=".*\D.*">
                    <span id="err-pass" class="msg-err" ></span>
                </div>
                <div id="validation-pass" class="validation-blok" >
                    <div class="validation-msg">
                        <img src="../img/galka.PNG" id="val-pass-8-img">
                        <span id="val-pass-8">Не менее 8-ми символов</span>
                    </div>
                    <div class="validation-msg" >
                        <img src="../img/galka.PNG" id="val-pass-25-img">
                        <span id="val-pass-25" >Не превышает 25 символов</span>
                    </div>
                    <div class="validation-msg">
                        <img src="../img/galka.PNG" id="val-pass-symbols-img">
                        <span id="val-pass-symbols">Не состоит только из цифр</span>
                    </div>
                    <div class="validation-msg">
                        <img src="../img/galka.PNG" id="val-pass-pass2-img">
                        <span id="val-pass-pass2">Не cовпадает с логином</span>
                    </div>
                </div>
            </div>
            <div class="login-actions">
                <button id="btn" class="user-post" type="submit">Зарегистрировать</button>
                <ref class="login-ref" style="margin-left: 20px; margin-top: 2px;" >Забыли пароль?</ref>
            </div>
        </form>
    </login>
    
 <script src="../js/main.js"></script>
 

</body>
</html>