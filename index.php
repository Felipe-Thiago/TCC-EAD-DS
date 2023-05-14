<!DOCTYPE html>
<html>
<head>
    <title>Início | TecnoClass</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="rodape.css">
    <style>
        body, h1, h2, h3, h4, h5, h6 {font-family: "Raleway", sans-serif}
        #link-topo{
            text-decoration: none;
            color: white;
            background-color: rgb(156, 38, 107);
            padding: 10px;
            position: fixed;
            right: 10px;
            bottom: 10px;
            box-shadow: 3px 3px 10px #333;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="w3-menu w3-row">
        <div class="w3-bar w3-card w3-white" id="menu-login">
            <a class="w3-bar-item w3-button w3-wide w3-mobile" href="#menu-login"><img src="logo.png" alt="logo">TecnoClass</a>
            <div class="w3-right w3-center w3-mobile">
                <a href="telaLogin.php" class="w3-bar-block w3-button" style="margin-top: 8px; text-decoration: none;"><i class="fa fa-sign-in"></i> Fazer Login</a>
                <p class="w3-bar-block w3-margin-right" style="font-size: 12px;">Não possui cadastro? <a href="telaRegistro.php">Faça agora!</a></p>
            </div>
        </div>
            <div class="w3-container w3-row">
                    <div class="w3-col w3-mobile" style="padding:50px; width: auto;">
                        <h1 class="w3-wide w3-jumbo w3-hide-small w3-xxlarge w3-animate-top w3-border-top w3-border-bottom" style="font-weight: bold"> TECNOCLASS </h1><br>
                        <br><span class="w3-animate-left w3-xlarge w3-padding-16">O que é?</span>
                        <p class="w3-animate-left" >TecnoClass é uma ferramenta de auxílio no dia-a-dia dos estudantes em sala de aula e/ou EaD, <br>
                        possuindo interface fácil e interativa para docentes e discentes que procuram por constantes<br>
                        melhorias em seu ensino. Para isso, conta com fóruns, sistemas de mensagens e de perfil e muito mais!</p>
                        <br><span class="w3-animate-left w3-xlarge w3-padding-16">Quem somos nós?</span>
                        <p class="w3-animate-left" >Somos um grupo de estudantes independentes com a intenção de ajudar outros estudantes que não <br>
                        possuam uma certa flexibilidade de horários para estudo, procurando com que todos tenham a chance<br>
                        de se aprimorar na vida através dos estudos.</p>
                    </div>
                    
                    <div class="w3-col w3-mobile w3-right w3-animate-bottom" style="margin-right: 2vw; width: auto;">
                        <img src="Knowledge-bro.svg" class="w3-image" style="height: 460px;" alt="estudante2"><br>
                        <span><a href="https://storyset.com/education" class="w3-right w3-opacity" style="font-size: small;">Education illustrations by Storyset</a></span>
                    </div>  
            </div>
    </div>
    <br>
    <br>
    <footer class="w3-container w3-bar w3-row w3-card" style="background: #1a1a1a">
        <div class="w3-margin">
            <div class="w3-quarter w3-mobile w3-hide-small">
                <h2 style="color: white;">Sobre Nós</h2>
                <p class="w3-justify;" style="color: #fce1c1a4;">Somos três desenvolvedores independentes com a intenção de ajudar estudantes que não possuam uma certa flexibilidade
                    de horários para estudo, fazendo com que todos tenham a chance de se desenvolver.
                </p>
            </div>
            <div class="w3-quarter w3-mobile">
                <div class="contato">
                    <h2 style="color: white;">Contato</h2>
                    <p style="color: #fce1c1a4;">tecnoclass@gmail.com</p>
                    <p style="color: #fce1c1a4;">(11) 00000-0800</p>
                </div>
            </div>
            <div class="w3-quarter w3-mobile">
                <div class="politica-privacidade">
                    <a href="politica_privacidade.pdf" target="_blank">
                        <h2 style="color: white; text-decoration: none;">Política de Privacidade</h2>
                    </a>
                </div>
            </div>
            <div class="w3-quarter w3-mobile w3-hide-small">
                <div class="Projeto">
                    <h2 style="color: white;">Projeto TecnoClass</h2>
                    <p class="w3-justify" style="color: #fce1c1a4;">Quando tivemos a ideia de criar um ambiente virtual de aprendizagem pensamos em
                        como a internet pode ser um divisor de águas para os estudantes.
                    </p>
                </div>
            </div>
        </div>
        
        <a id="link-topo" href="#">&#9650;</a>
    </footer>

</body>
</html>