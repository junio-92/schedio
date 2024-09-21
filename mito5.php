<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mitos.css">
    <title>Registro</title>
</head>

<style>
    


    *{
    padding: 0px;
    margin: 0px;
    font-family: Arial, Helvetica, sans-serif;
}

label,input{
    display: block;
    line-height: 30px;
    height: 30px;
    outline: none;
    font-size: 13pt;
    width: 100%;
}

form{
    width: 330px;
    background-color: red;
    padding: 20px;
    margin: 30px auto;
}

input[type="submit"]{
    margin-top: 10px;
    cursor: pointer;
    
}

#esquerda{
    width: 35%;
    
    height: 500px;
    float: left;

}

#direita{
    width: 65%;
    
    height: 500px;
    float: left;

}

table{
    background-color: rgba(0, 0, 0,.2);
    width: 90%;
    margin: 30px auto;
}

tr{
    line-height: 30px;
}

tr#titulo{
    font-weight: bold;
    background-color: rgba(0,0,0,.6);
    color:white;
}

td{
    padding: 0px 5px;
}



h1{
    text-align: center;
}
section{
    text-align: center;
}


</style>




<body class="container">

    <header>
        <nav>
            <ul>
                <li><a href="index.php" target="_blank">HOME</a></li>
                <li><a href="mito2.php" target="_blank">SOBRE</a></li>
                <li><a href="mito3.php" target="_blank">LENDAS</a></li>
                <li><a href="mito4.php" target="_blank">LOJA</a></li>
                <li><a href="mito5.php" target="_blank">CADASTRO</a></li>
            </ul>
        </nav>
    </header>

    <nav>
    
    </nav>
    
    <main>
        
    <img src="mitologia1.png" alt="imagem1" >


    <section id="esquerda">
    <form method="POST" action="recebimento.php">
    <h1>REGISTRO DE PESSOAS</h1>

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome">
    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <input type="submit" value="Registrar">

    </form>

</section>


    </table>


        
        
    </main>

    
    

    
    <footer>

    <ul class="rede">
                <li><a href="https://www.linkedin.com" target="_blank"><img src="logotipo-do-linkedin.png" alt="" srcset=""></a></li>
                <li><a href="https://www.youtube.com" target="_blank"><img src="youtube.png" alt="" srcset=""></a></li>
                <li><a href="https://web.whatsapp.com" target="_blank"><img src="whatsapp.png" alt="" srcset=""></a></li>
                <li><a href="https://www.instagram.com" target="_blank"><img src="instagram.png" alt="" srcset=""></a></li>
                <li><a href="https://www.facebook.com/?locale=pt_BR" target="_blank"><img src="facebook.png" alt="" srcset=""></a></li>
            </ul>

    </footer>
    <nav class="junin">
    <p class="junio">&copy; 2024 Site academico. Todos os direitos reservados.</p>

    </nav>

</body>

</html>

