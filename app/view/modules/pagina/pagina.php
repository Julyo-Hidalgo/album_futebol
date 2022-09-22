<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/estilo.css">
        <link rel="shortcut icon" href="view\modules\pagina\img\favicon.png">
        <title>Álbum de figurinhas</title>
    </head>
    <body>
        <?php foreach ($model->rows as $item):?>
            <div id="interface">
                <div id="pagina">
                    <img src="<?php $item->link ?>">
                    <h1>Time de 1954</h1>
                    <button class="btn" onclick="">anterior</button>
                    <button class="btn" onclick="">próximo</button>
                </div>
            </div>
        <?php endforeach ?>
    </body>
</html>