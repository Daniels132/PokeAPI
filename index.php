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
                    for($id = 1; $id < 30; $id ++){
                        $data = file_get_contents($base.$id.'/');
                        $pokemon = json_decode($data);
                        echo'<div class="pokemon">';
                        echo '<h3>'.ucfirst($pokemon->name). '</h3>';
                        echo '<p> teste </p>';
                        echo '</div>';
                  }
                ?>
        </div>
    </main>  
    <footer class="rodape">
    </footer>
</body>
</html>