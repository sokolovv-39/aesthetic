<!DOCTYPE html>
<html lang="ru">

<head>
<link rel="canonical" href="https://aesthetic-beauty.ru">
<meta name="yandex-verification" content="3245642d5bf69829" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aesthetic Studio</title>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
    <?php wp_head() ?>
</head>

<body>
    <div class="App">
        <header class="Header">
            <div class="HeaderComp">
                <div class="LeftBlock">
                    <a href="#about">О нас</a>
                    <a href="#eyebrows">Брови</a>
                    <a href="#cosmetology">Косметология</a>
                    <a class="CompA" href="#lingerie">Пошив нижнего белья</a>
                </div>
                <a href="" class="Logo"><?php echo strtolower(get_theme_mod('studio_name_settings')) ?></a>
                <div class="RightBlock">
                    <a href="#contacts">Контакты</a>
                    <a class="CompA" href="tel:<?php echo get_theme_mod('phone_settings') ?>"><?php echo get_theme_mod('phone_settings') ?></a>
                    <a class="CompA" href="https://go.2gis.com/gs7x4" target="_blank" rel="noopener noreferrer">
                        <?php
                        $string = get_theme_mod('address_settings');
                        $firstSpacePosition = strpos($string, ' ');
                        if ($firstSpacePosition !== false) {
                            $string = substr($string, $firstSpacePosition + 1);
                        }
                        echo $string;
                        ?>
                    </a>
                    <a class="TabletA">Пошив нижнего белья</a>
                </div>
            </div>
            <div class="HeaderMobile">
                <svg class="MenuBar" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                    <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                </svg>
                <a href="" class="Logo"><?php echo strtolower(get_theme_mod('studio_name_settings')) ?></a>
                <div class="HiddenMenu">
                    <svg class="Xmark" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                        <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                    <a class="Logo"><?php echo strtolower(get_theme_mod('studio_name_settings')) ?></a>
                    <a class="MobileMenuLink" href="#about">О нас</a>
                    <a class="MobileMenuLink" href="#eyebrows">Брови</a>
                    <a class="MobileMenuLink" href="#cosmetology">Косметология</a>
                    <a class="MobileMenuLink" href="#lingerie">Пошив нижнего белья</a>
                    <a class="MobileMenuLink" href="#contacts">Контакты</a>
                </div>
            </div>
        </header>