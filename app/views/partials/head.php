<?php

$debugbar["messages"]->addMessage("hello world!");
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Miniature Octo</title>
    <link href="<?= asset('css/bootstrap.rtl.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= asset('css/style.css'); ?>">
    <?php echo $debugbarRenderer->renderHead() ?>
</head>
<body>
    <?php require('nav.php'); ?>