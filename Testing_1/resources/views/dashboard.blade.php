<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
    <title>Dashboard</title>
</head>
<style>
    .box{
        border-radius:20px;
        width:50%;
        box-shadow: rgba(100, 100, 111, 0.367) 0px 7px 29px 0px;
    }
</style>
<body class="bg-dark text-white">
    <h1 class="text-center mt-5">Account</h1><br><br><br>
    <div class="container-fluid mt-5">
        <div class="container box p-5 mt-5">
            <div class="container-fluid p-0">
                <h3 class="mt-3">Username : {{$name}}</h3>
                <h3 class="mt-3">Password : {{$pass}}</h3>
                <h3 class="mt-3">Comfirm Password : {{$c_pass}}</h3>
            </div>
        </div>
    </div>
</body>
</html>
