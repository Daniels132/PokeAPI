<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
    <title>Pokemons</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Pokemons</h1>
        
    </header>  
    <main class="conteudo">
        <div class="dentro">
                <?php
                $base="http://pokeapi.co/api/v2/pokemon/";
                $imagem = "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/";
                // concatenar id pokemon + .png
                    for($id = 1; $id < 50; $id ++){
                        $data = file_get_contents($base.$id.'/');
                        $pokemon = json_decode($data);
                        $concatena = $imagem.$id.'.png';
                        $foto = $concatena;
                        echo '<div class="pokemon">';
                        echo '<div class = "nome">';
                        echo '<button type= "button" class="btn" onclick="informacoes()"><strong>+</strong></button>';
                        echo '<h3>'.ucfirst($pokemon->name).'</h3>';
                        echo '</div>';
                        echo '<img src = "'.$foto.'"class ="imagem">';
                        echo '</div>';
                  }
                ?>
        </div>
        <script>
            function informacoes(){
                varWindow = window.open ('popup.php', 'popup', "width=350, height=255, top=100, left=110, scrollbars=no " );
            }
        </script>
    </main>  
    <footer class="rodape">
    </footer>
</body>
</html>