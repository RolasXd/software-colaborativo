<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collaborative Projects</title>
    <link rel="stylesheet" href="/Vistas/styles/inicio.css">
</head>

<body>
    <!-- Inicio Navbar -->
    <link rel="stylesheet" href="/Vistas/layouts/inicio.css">
    <header>
        <div class="interior">
            <a href="" class="logoNav"><img src="/img/icon.png" alt=""></a>
            <nav class="navegacion">
                <ul>
                    <li><a href="">Inicio</a></li>
                    <li><a href="">Acerca de</a></li>
                    <li class="submenu">
                        <a href="">Productos</a>
                        <ul class="hijos">
                            <li><a href="">Item1</a></li>
                            <li><a href="">Item2</a></li>
                            <li><a href="">Item3</a></li>
                            <li><a href="">Item4</a></li>
                        </ul>
                    </li>
                    <li><a href="">Contacto</a></li>
                    <li><a href="http://localhost/ProyectoColaborativo/Vistas/Usuario/login.php">Login</a></li>
                    <li><a href="http://localhost/ProyectoColaborativo/Vistas/Usuario/registro.php">Registro</a></li>                    
                </ul>
            </nav>
        </div>
    </header>
    <!-- Fin Navbar -->

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Open Sans', sans-serif;
        }

        header {
            width: 100%;
            height: 90px;
            background-image: linear-gradient(#0087ef, #6ad3fd);
        }

        .interior {
            max-width: 100%;
            padding: 0 10px;
            margin: auto;
        }

        .logo {
            float: left;
            padding: 5px 20px 0;
        }

        .logoNav img {
            height: 80px;
        }

        .logo img:hover {
            transform: scale(1.1);
        }

        .navegacion {
            float: right;
            display: flex;
            align-items: center;
            min-height: 90px;
            z-index: 1000;
        }

        .navegacion ul {
            list-style: none;
            padding: 0 10px;
        }

        .navegacion ul li {
            display: inline-block;
            position: relative;
            transition: .3s linear;
            z-index: 1000;
        }

        .navegacion ul li:hover {
            transform: scale(1.1);
        }

        .navegacion ul li a {
            color: #ffff;
            text-align: center;
            text-transform: uppercase;
            font-size: 14px;
            font-weight: bold;
            padding: 12px 20px;
            transition: .3s linear;
        }

        .navegacion ul li a:hover {
            color: #0544B9;
            transform: scale(1.1);
        }

        .navegacion ul li:hover .hijos {
            display: block;
        }

        .navegacion .submenu .hijos {
            display: none;
            background: #0b132b;
            position: absolute;
            width: 100%;
        }

        .navegacion .submenu .hijos li {
            display: block;
            overflow: hidden;
            border-bottom: none;
        }

        .navegacion .submenu .hijos li a {
            display: block;
        }
    </style>


<!--Contenido pagina -->




    <!-- Inicio Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <h3 class="website-logo">Collaborative Projects</h3>
                <span class="footer-info">+57 301 6969 744</span>
                <span class="footer-info">Collaborative.org@spm.com</span>
            </div>
            <div class="footer-menus">
                <div class="footer-content-container">
                    <span class="menu-title">menu</span>
                    <a href="" class="menu-item-footer">Home</a>
                    <a href="" class="menu-item-footer">Courses</a>
                </div>
                <div class="footer-content-container">
                    <span class="menu-title">legal</span>
                    <a href="" class="menu-item-footer">Privacy Policy</a>
                    <a href="" class="menu-item-footer">Cookies</a>
                </div>
            </div>
            
            <div class="footer-content-container">
                <span class="menu-title">follow us</span>
                <div class="social-container">
                    <a href="" class="social-link"></a>
                    <a href="" class="social-link"></a>
                    <a href="" class="social-link"></a>
                    <a href="" class="social-link"></a>
                </div>
            </div>
        </div>
        <div class="copyright-container">
            <span class="copyright">&copy; Copyright 2023, collaborativeprojects.com. All rights reserved.</span>
        </div>
    </footer>
    <!-- Fin Footer -->
</body>

<style>
    footer{
    position: absolute;
    bottom: 0;
    left: 0;
    height: fit-content;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: var(--dark);
    color: white;
    background-color: #121212;
}

.copyright-container{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    border-top: 1px solid rgba(255, 255, 255, 0.3);
}

.copyright{
    font-size: 12px;
    opacity: 0.7;
    font-weight: 400;
    padding: 10px 0;
}

.footer-menus{
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    width: 40%;
}

.footer-container{
    height: fit-content;
    width: 100%;
    padding: 3rem 6rem;
    box-sizing: border-box;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.footer-content-container{
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-direction: column;
}

footer .website-logo{
    margin-bottom: 1.2rem;
    font-size: calc(1vw + 20px);
}

.footer-info, .menu-item-footer{
    margin: 0.2rem 0;
    opacity: 0.7;
    color: white;
    text-decoration: none;
    transition: 0.5s;
}

.menu-item-footer:hover{
    opacity: 1;
}

.menu-title{
    font-size: var(--medium-text-font);
    font-weight: 400;
    text-transform: uppercase;
    margin-bottom: 1.2rem;
}

.social-container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 30px;
    width: 100%;
}

.social-link{
    height: 100%;
    width: 30px;
    background-image: url(/Vistas/img/footer/FacebookBlanco.png);
    background-size: 70%;
    background-position: center;
    margin-right: 1rem;
    background-repeat: no-repeat;
}

.social-link:hover{
    opacity: 0.7;
}

footer .social-link:nth-of-type(2){
    background-image: url(/Vistas/img/footer/InstagramBlanco.png);
}

footer .social-link:nth-of-type(3){
    background-image: url(/Vistas/img/footer/TwitterBlanco.png);
}

footer .social-link:nth-of-type(4){
    background-image: url(/Vistas/img/footer/LinkedinBlanco.png);
}
</style>

</html>
