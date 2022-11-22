<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>

    <main>
        <div class="kotak">
        <div class="pt-4 pb-2">
            <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
            <p class="text-center small">Enter your username & password to login</p>
        </div>

        <form action="process.php" method="POST">        
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">

            <div class="col-12 mt-3">
                <button class="btn btn-primary w-100" type="submit">Login</button>
            </div>
            <div class="col-12">
                <p class="small mb-0">Don't have account? <a href="#">Create an account</a></p>
            </div>
        </form>
        </div>
    </main>
    
</body>
</html>