<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Jockey One', sans-serif; /* Updated font-family */
            background-image: url('https://cdn.discordapp.com/attachments/1098603596486029313/1182682992594915469/image_1_1.png?ex=6585965e&is=6573215e&hm=f7264f44b46fcf8473b598e1310f951009f2e07e6ca286ff278de31b5605b8b2&'); /* Update the path to the image file */
            background-repeat: no-repeat;
            background-size: cover;
            font-size: 30px;
        }
                .navigation {
                    background-color: rgba(255, 255, 255, 0.558);
                    display: flex;
                    justify-content: flex-start; /* Updated justify-content property */
                    align-items: center;
                    padding: 20px;
                    border-bottom: 1px solid #ccc;
                    height: 100px;
                }
                .navigation a {
                    color: #333;
                    text-decoration: none;
                    margin: 0 10px;
                    font-weight: bold;
                }
                .navigation a:hover {
                    color: #ff0000;
                }
                .content {
                    max-width: 1200px;
                    margin: 0 auto;
                    padding: 40px;
                    background-color: #ffffff;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    width: 100%;
                    position: absolute;
                    left: 50%;
                    transform: translateX(-50%);
                }
            </style>
            
        </head>
        <body>
            <div class="navigation">
                <livewire:welcome.navigation class="navigation" style="background-color: white; justify-content: flex-start;"> <!-- Updated justify-content property -->
            </div>

            
                
            </div>
           
        </body>
        </html>
