<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="/css/estilo.css">
        <link rel="shortcut icon" href="view\modules\pagina\img\favicon.png">
        <title>Álbum de figurinhas</title>
    </head>
    <body>
        <?php foreach($model->rows as $item): ?>

            <div id="interface">
                <div id="pagina">
                    <img src="<?=$item->link?>">
                    <h1>Time de 1954</h1>
                    <form method="post" action="/troca">
                        <button name="valor_btn" class="btn" type="submit" value=<?= $model->id - 1 ?> >anterior</button>
                        <button name="valor_btn" class="btn" type="submit" value=<?= $model->id + 1 ?> >próximo</button>
                    </form>
                </div>
            </div>
        <?php endforeach ?>
    </body>
</html>