<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?= isset($title) ? $title : 'Watat' ?></title>
    <link href="<?= ROUTE.'style.css'; ?>" rel="stylesheet"/>
</head>

<body>
<ul>
    <li class="<?= $page_name === 'homepage' ? 'active' : ''; ?>"><a href="/index">index</a></li>
    <li class="<?= $page_name === 'contactpage' ? 'active' : ''; ?>"><a href="/contact">contact</a></li>
</ul>
    <?= isset($content) ? $content : '<div class="align-center"><h1>Welcome</h1></div>' ?>


<div>
    <h3 class="align-center">
        Vos noyaux
    </h3>
</div>
</body>
</html>