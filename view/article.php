
<html>
<head>
    <title>Статья </title>
</head>
<body>
<h2>Выбрать новость</h2>
<form action="/../models/onearticle.php"  method="GET">
    <input type="text" name="id">Введите номер<br></input>

    <button type="submit" name="go_add" >Сохранить </button>
</form>


    <article>
        <h1><?=$article['title']; var_dump($article)?></h1>
        <div><?=$article['text'];?></div>
    </article>

</body>
</html>
