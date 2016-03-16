<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Hans English</title>
    <?php wp_head();?>
</head>
<body <?php body_class( '' ); ?>>

<div class="layout">

    <header>
        <div class="top-line">&nbsp;</div>
        <div>
            <div class="logo">
                <a href="<?php echo home_url()?>"><img src="<?php id()?>logo.png"></a>
            </div>
            <div class="top-menu">
                <img src="<?php id()?>top-menu-1.png">
                <img src="<?php id()?>top-menu-2.png">
                <img src="<?php id()?>top-menu-3.png">
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="<?php hd()?>menu1"><img src="<?php id()?>menu1.png"></a></li>
                    <li><a href="<?php hd()?>menu2"><img src="<?php id()?>menu2.png"></a></li>
                    <li><a href="<?php hd()?>menu3"><img src="<?php id()?>menu3.png"></a></li>
                    <li><a href="<?php hd()?>menu4"><img src="<?php id()?>menu4.png"></a></li>
                    <li><a href="<?php hd()?>menu5"><img src="<?php id()?>menu5.png"></a></li>
                    <li><a href="<?php hd()?>menu6"><img src="<?php id()?>menu6.png"></a></li>
                    <li><a href="<?php hd()?>menu7"><img src="<?php id()?>menu7.png"></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="content">

        <nav class="sidebar">
            <img src="<?php echo get_template_directory_uri()?>/img/contentBtn-1.png" >
            <img src="<?php echo get_template_directory_uri()?>/img/contentBtn-2.png" >
        </nav>

        <section class="data">

