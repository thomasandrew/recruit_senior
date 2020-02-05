<?php

require_once 'php/classes.php';

$u = new Information;

$dbname = "recruit";
$host = "127.0.0.1";
$user = "root";
$pass = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style/recruit_senior.css">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="up">
            <p id="title">Recruit Senior</p>
            <nav>
                <ul>
                 <li><a href="#"><strong>Home</strong></a></li> 
                 <li><a href="#"><strong>about</strong></a></li>
                 <li><a href="#"><strong>sou 50+</strong></a></li>
                 <li><a href="#"><strong>contato</strong></a></li>
                </ul>
            </nav>
            <div class="singin">
                <ul>
                    <li><a href="#"><strong>Cadastre-se</strong></a></li>
                    <li><a href="#"><strong>Entrar</strong></a></li>
                </ul>
            </div>
            <div class="unicode">
                <p>&#9776</p>
            </div>
        </div>
        <section>
            <div class="overlay">
                <p id="text1">Nós valorizamos profisionais maduros</p>
                <p id="text2">
                    O RecruitSenior é uma plataforma pioneira no Brasil, que reúne oportunidades de trabalho, desenvolvimento<br><br>pessoal, capacitação profissional, empreendedorismo e networking, com o objetivo de conectar pessoas<br><br>maduras e experientes em busca de atividade e ocupação entre si e com empresas.
                </p>
                <div class="btn">
                    <a href="#"><input type="button" value="Sou um profisional 50+" id="btn1"></a>
                    <a href="#"></a><input type="button" value="Sou uma impresa" id="btn2"></a>
                </div>
            </div>
        </section>
        <div class="text3">
            <pre>O RecruitSenior nasceu para levar o comprometimento e credibilidade dos
               <p id="text4">profissionais 50+ às empresas</p></pre>
        </div>
        <div class="blue_bg">

        </div>
        <div class="blue">
            <img src="img/icone1.png" alt=""> 
        </div> 

        <div class="si">
            <div class="padrao">
                <img src="img/verified-text-paper.png">
                <p id="formulario">Cadastro por formulario</p>
            </div>
            
            <div class="por_video">
                <img src="img/video-camera.png">
                <p id="cad_video">cadastro por video</p>
            </div> 
            
            <div class="whatsapp">
                <img src="img/whatsapp-logo-variant.png">
                <p id="cad_whatsapp">whatsapp</p>
            </div>
        </div>
        <div class="end">
            <div class="text5">
                <p id="s">Sobre Nós</p>
                <pre>Somos um negócio social formado por uma equipe<br>intergeracional que abraça a causa da longevidade.<br>Com a sua participação vamos engajar cada vez mais<br>empresas e pessoas e aumentar o número de<br>oportunidades para profissionais maduros em todo o<br>Brasil.</pre>
            </div>
            <div class="text6">
                <p>Reconhecimento</p>
                <pre>A MaturiJobs foi reconhecida pelo SEBRAE e pelo<br>PNUD Brasil no Prêmio Incluir 2017 como negócio de<br>impacto social alinhado aos Objetivos do<br>Desenvolvimento Sustentável da ONU na categoria<br>Soluções para Melhor Idade. Em 2018 recebemos<br>o Selo Municipal de Diversidade e Direitos Humanos<br>de São Paulo, na categoria Pessoa Idosa.</pre>
            </div>
            <div class="text7">
                <p>Comunidade</p>
                <pre>Faça parte do grupo "Comunidade MaturiJobs" no<br>Facebook e participe dessa comunidade virtual<br>que debate o tema de trabalho na maturidade e<br>muito mais.</pre>
            </div>

            <div class="links">
                <div class="facebook">
                    <img src="img/facebook-logo.png" alt="">
                </div>
                <div class="twitter">
                    <img src="img/twitter.png" alt="">
                </div>
                <div class="linkedin">
                    <img src="img/linkedin-logo.png" alt="">
                </div>
                <div class="instagram">
                    <img src="img/instagram-logo.png" alt="">
                </div>
            </div>

        </div>

    </div>
    
    <!-- Modal 1 -->

    <div class="bg_modal">
        <div class="modal-content">
            <div class="x_btn1">+</div>
            <p class="sig">Cadastrar</p>
            <div class="sign_in">
            <form action="" method="post" onsubmit="sub()">
                <input type="text" name="name" placeholder="Nome" id="one">
                <br>
                <input type="text" name="telefone" placeholder="Telefone" id="two">
                <br>
                <input type="text" name="cpf" placeholder="CPF" id="three">
                <br>
                <input type="submit" value="Submit" id="submit">

                <?php
                    
                    if (isset($_POST['name'])) {
                        $name = addslashes($_POST['name']);
                        $tel = addslashes($_POST['telefone']);
                        $cpf = addslashes($_POST['cpf']);

                        if (!empty($name) && !empty($tel) && !empty($cpf)) {
                            
                            $u->connect($dbname, $host, $user, $pass);
                            
                            $u->queryBiulder($name, $tel, $cpf);

                        } else {
                            print "<script>alert('Erro')</script>";
                        }
                    }

                ?>

            </form>
            </div>
        </div>
    </div>
   
    <!-- Modal 2 -->
    
    <div class="bg_modal2">
        <div class="modal-content2">
            <div class="x_btn2">+</div>
        </div>
    </div>

    <!-- Modal 3 -->

    <div class="bg_modal3">
        <div class="modal-content3">
            <div class="x_btn3">+</div>
            <img src="img/whatsapp-logo-1.png" alt="">
            <p>(21) 3435-9021</p>
        </div>
    </div>

    <script src="js/recruit_senior.js"></script>
    <script src="js/validation.js"></script>
</body>
</html>

