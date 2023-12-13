<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-form {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Menempatkan tombol login ke tengah */
        }
        .login-form h2 {
            text-align: center;
            color: #333;
        }
        .login-form label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        .login-form input[type="text"],
        .login-form input[type="password"],
        .login-form input[type="submit"] {
            width: calc(100% - 16px);
            padding: 8px;
            margin-bottom: 10px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }
        .login-form input[type="submit"] {
            background-color: aqua;
            cursor: pointer;
            border-radius: 5px;
        }
        .login-form input[type="submit"]:hover {
            background-color: #58c9b9;
        }
        .login-message {
            margin-top: 10px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="login-form">
        <h2>Login</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" name="password">

            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
<?php
function otentikasi($uname, $pass){
    // user admin , password 12345
    if($uname == "admin" && $pass == "12345"){
        return true;
    } else {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Memanggil fungsi otentikasi
    if (otentikasi($username, $password)) {
        // Jika login berhasil, Anda bisa melakukan apa yang diinginkan di si
        echo "Login berhasil. Selamat datang, $username!";
    } else {
        // Jika login gagal
        echo "Login gagal. Silakan coba lagi.";
    }
}
?>
