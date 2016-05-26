<!DOCTYPE html>
<html>
    <head>
        <meta name=http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, init-scale=1">
        <meta charset="utf-8">
        <title>Laravel 快速入門 - 基本</title>
    </head>

    <!-- CSS and JS -->
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar內容 -->
            </nav>
        </div>

        <!-- 這是特別的 Blade 指令，讓子頁面可以在此處注入自己的內容來延伸佈局。-->
        @yield('content')
    </body>
</html>
