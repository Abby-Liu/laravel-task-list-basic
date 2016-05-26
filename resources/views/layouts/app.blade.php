<!DOCTYPE html>
<html>
    <head>
        <meta name=http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, init-scale=1">
        <meta charset="utf-8">
        <title>Abby's Task List Using Laravel</title>
    </head>

    <!-- CSS and JS -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Task List: <br></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>

        <!-- 這是特別的 Blade 指令，讓子頁面可以在此處注入自己的內容來延伸佈局。-->
    <div class="container">
        @yield('content')
    </div>
    </body>
</html>
