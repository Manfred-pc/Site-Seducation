<html>

<head>
  <title> Perfil </title>
  <link href="img/logos.png" rel="icon">
  <link href="css/estilo.css" rel="stylesheet">

  <!--fontes-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter&display=swap" rel="stylesheet">

  <!--JavaScript-->
  <script type="text/javascript" src="../js/PagInicial.js"></script>
  <script type="text/javascript" src="../js/login.js"></script>
  <script type="text/javascript" src="../js/cadastro.js"></script>
  <meta charset="utf-8">
</head>

<body>
  <header class="perfiheader">

    <!-- pra botao pra editar la no coisa -->
    <!-- ata, agora traduz -->
    <img src="img/voltarPagina.png" style="position: absolute; top: 19px; left: 10px" width="30px" height="30px" width="30px" height="30px" onclick="window.location.href='index.php'">
    <img src="img/ondulacao.svg" >
    <div class="imgPerfil">
    <a ><img src="img/perfil.png" width="150px" height="150px"></a>
    <h3> Jmilly </h3>
    <p>amo o flamengo (memtira)</p>
</div>
  </header>
  <nav class="menu" id="menu">
    <ul>
      <li class="selecionado"><a href="perfil.php"> Postagens </a></li>
      <li><a href="curtidas.php"> Curtidas </a></li>
    </ul>
  </nav>

  <footer>
    <button id="btPublicar" class="btPubli" type="button" ><a href="postagens.php">+</a></button>
    
  </footer>
</body>

</html>