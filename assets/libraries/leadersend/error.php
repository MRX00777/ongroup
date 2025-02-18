<?php

header("Refresh:2; url=/index.php"); // Перенаправление на главную через 2 секунды


?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="stylesheet" href="/assets/css/global.css" />

        <title></title>
    </head>

    <style>
        body {
            height: 100vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            bacground: #18242B;
        }

        footer {
            width: 100%;
        }

        main {
            flex-grow: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: 0;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding: 0;
        }

        main h1 {
            font-weight: 500;
            font-size: 34px;
            line-height: 150%;
            text-align: center;
            color: #FFF;
        }
        main p {
            font-weight: 400;
            font-size: 18px;
            line-height: 150%;
            color: #FFF;
            text-align: center;
        }
        @media (max-width: 575.98px) {
            main h1 {
                font-size: 22px;
            }
            main p {
                font-size: 14px;
            }
        }
    </style>

    <main>
        <h1>Your message was successfully sent</h1>
        <p>We will get back to you as soon as possible</p>
    </main>
</html>
