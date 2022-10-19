<?php
class Homepages
{
    public function home()
    {
        $home = '
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="/public/css/style.css">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Home</title>
        </head>
        
        <body>
            <header>
                <h3 class="titles">Home</h3>
                <nav>
                    <ul class="nav-links">
                        <li>
                            <a href="/Home/index">Home</a>
                            <a href="/Home/about">About</a>
                        </li>
                    </ul>
                </nav>
                <a href="..."><button>Login</button></a>
            </header>
            <main>
                
            </main>
            <footer>
        
            </footer>
        </body>
        
        </html>
        ';

        return $home;
    }

    public function about()
    {
        $about = '
        <!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="/public/css/style.css">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>About</title>
        </head>
        
        <body>
            <header>
                <h3 class="titles">Home</h3>
                <nav>
                    <ul class="nav-links">
                        <li>
                            <a href="/Home/index">Home</a>
                            <a href="/Home/about">About</a>
                        </li>
                    </ul>
                </nav>
                <a href="..."><button>Login</button></a>
            </header>
            <main>
                
            </main>
            <footer>
        
            </footer>
        </body>
        
        </html>
        ';

        return $about;
    }
}
