<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/reg.css">
    <title>Registration</title>
</head>
<body>
    <header>
        <img class="logoHeader" src="/pictures/header/logo.png" onclick="document.location='/';" alt="">
    </header>
    <h1>Time for registration</h1>
    <div class="regForm">
        <form action="phpServer/dbReg.blade.php">
            <input type="text" name="firstName" placeholder="First Name" autocomplete="off">
            <input type="text" name="email"placeholder="Email" autocomplete="off">
            <input type="text" name="password" placeholder="Password" autocomplete="off">
            <h5>or if you have already registered, just <a src=""><ins>log in</ins></a></h5>
            <input type="submit" value="Confirm">
        </form>
    </div>
    
</body>
</html> <?php /**PATH C:\wamp64\www\muzonas\resources\views/reg.blade.php ENDPATH**/ ?>