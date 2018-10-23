<!DOCTYPE html>

<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>H2O Empire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/solar/bootstrap.min.css">
    </head>

    <body>
        <header>            
            <?php include '../resources/navigation.php'; ?>
        </header>

        <div class="card center w-50 bg-light text-dark" style="margin: auto; margin-bottom: 3.5%; margin-top: 4%;">
            <div class="card-header">
                Sign-Up
            </div>

            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="Email">Email address:</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="Email" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="Password">Password:</label>
                        <input type="password" class="form-control" id="Password" placeholder="Password">
                    </div>

                    <div class="form-group">
                        <label for="Password1">Re-Type Password:</label>
                        <input type="password" class="form-control" id="Password1" placeholder="Password">
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="Check">
                        <label class="form-check-label" for="Check">I accept the terms and conditions.</label>
                    </div>

                    <br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign-Up</button>
                    <br>
                    <p>Already have an account? <a href="login.html">Click here to login.</a></p>
                </form>  
            </div>
        </div>

        <?php include '../resources/footer.php'; ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>