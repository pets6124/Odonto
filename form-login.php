<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Adm Consutório</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
 
    </head>
 
  <body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Login Adm</h3>
                    <h3 class="title has-text-grey">Consutorio</h3>
                    

                    <div class="box">
                        <form action="login.php" method="post">
                            <div class="field">
                                <div class="control">
                                    <input type="email" name="email" id="email" class="input is-large" placeholder="Seu email" required>
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input type="password" name="password" id="password" class="input is-large" placeholder="Sua senha" required>
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Entrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
    </body>
</html>