<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GOOGLE LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-md-6" align="center">
                <form>
                    <input type="text" placeholder="Email..." name="email" class="form-control">
                    <br>
                    <input type="password" placeholder="Password..." name="password" class="form-control">
                    <br>
                    <input type="submit" value="Log in" class="btn btn-primary">

                    <input type="button" value="Log in with GOOGLE" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

    <script>
        window.fbAsyncInit = function() {
            FB.init({
            appId            : 'your-app-id',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.3'
            });
        };
    </script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>

</body>
</html>