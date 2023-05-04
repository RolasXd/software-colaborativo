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
