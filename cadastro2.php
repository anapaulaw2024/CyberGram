<?php

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se - CyberGram</title>
   <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.webp" type="image/x-icon">
</head>
<body>
    <header>
        <a href="" target="_self">Home</a>
        <a href="" target="_self">Entrar</a>
        <a href="" target="_self">Cadastre-se</a>
    </header>
    <h1>Continuando seu cadastro...</h1>
    <h2>Agora queremos saber mais sobre você para poder te indicar coisas mais personalizadas, ok?</h2>
    <form action="login.php" method="post">
        <label>Qual sua área de atuação/estudo?</label>
        <p>Selecione todas que se aplicam:</p>
        <input type="checkbox" name="front" value="Programação - Front-end" placeholder="Programação - Front-end"><label>Programação - Front-End</label><br>
        <input type="checkbox" name="backend" value="Programação - Back-End" placeholder="Programação - Back-End"><label>Programação - Back-End</label><br>
        <input type="checkbox" name="fullstack" value="Programação - FullStack" placeholder="Programação - FullStack"><label>Programação - FullStack</label><br>
        <input type="checkbox" name="ml" value="Machine Learning\IA" placeholder="Machine Learning\IA"><label>Machine Learning\IA</label><br>
        <input type="checkbox" name="iot" value="iot" placeholder="iot"><label>Internet das Coisas - IoT</label><br>
        <input type="checkbox" name="dados" value="Analise de Dados" placeholder="Analise de dados"><label>Análise de Dados</label><br>
        <input type="checkbox" name="hardware" value="Montagem e Manutenção Hardware" placeholder="Montagem e Manutenção Hardware"><label>Montagem e Manutenção Hardware</label><br>
        <input type="checkbox" name="hacking" value="Hacking" placeholder="Hacking"><label>Segurança da Informação\Hacking</label><br>
        <input type="checkbox" name="redes" value="Redes de Computadores" placeholder="Redes de COmputadores"><label>Redes de Computadores</label><br>
        <input type="checkbox" name="robotica" value="Robótica em Geral" placeholder="Robótica em Geral"><label>Robótica em Geral</label><br>
        <input type="checkbox" name="games" value="Games" placeholder="Games"><label>Desenvolvimento de Jogos\Unity</label><br>
        <input type="checkbox" name="ux" value="UX\UI" placeholder="UX\UI"><label>UX\UI Design</label><br>
        <p>Beleza, você trabalha em alguma dessas áreas?</p>
        <input type="radio" name="sim"><label>Sim</label><br>
        <input type="radio" name="nao"><label>Não</label>
        <p>Outra área da tecnologia? Especifique</p>
        <textarea placeholder="coloque aqui sua experiência se tiver"></textarea>
        <p>Com qual gênero você se identifica?</p>
        <input type="radio" name="mulhercis"><label>Mulher Cisgênero</label>
        <input type="radio" name="mulhertrans"><label>Mulher Transgênero</label>
        <input type="radio" name="homemcis"><label>Homem Cisgênero</label>
        <input type="radio" name="homemtrans"><label>Homen Trangênero</label>
        <input type="radio" name="nonbinary"><label>Não - Binário</label>
        <input type="radio" name="naoinforma"><label>Prefiro não responder\Não quero informar</label>
        <p>Sinta-se a vontade para ser você mesmo(a) nessa rede social, se alguém for ofensivo ou ameaçar você, reporte imediatamente em "Reportar Usuário" para que possamos melhorar cada vez mais pelo menos essa peqena parte da Internet s2</p>
        <p>Se quiser, declare sua orientação sexual e\ou pronome que quer ser chamado pelos demais usuários</p>
        <textarea>Abra seu coração aqui se quiser s2!</textarea>
        <p>Se quiser, fale um pouco mais sobre você com suas próprias palavras aqui, esse texto será sua bio e poderá ser mudado quando você quiser</p>
        <textarea>Abra seu coração x2 aqui!</textarea>
        <p>Selecione se quer nos ajudar a melhorar esse formulário ou o site no geral(não envolve dinheiro, somente códigos e design), a desenvolvedora sempre aceita uma mãozinha!</p>
        <input type="radio" name="ajuda"><label>Sim, quero ajudar!</label>
        <input type="radio" name="naoajuda"><label>Não quero\Não Consigo ajudar!</label>
        <p>Se você marcou sim e a desenvolvedora não entrou em contato com você (porque ela é meio ocupada às vezes) entre em contato pelo email: anawulcard@gmail.com ou pelo <a href="#" target="_blank">Instagram</a>. Aproveita e segue lá também :3</p>
        <input type="submit" name="submit" placeholder="Cadastre-se">
    </form>

</body>
</html>