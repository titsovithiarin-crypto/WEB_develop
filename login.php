
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Vault | Login</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background-image: url("https://th.bing.com/th/id/R.d38beafbe8fe386fbdccad582de3a01d?rik=Z4TJsCu%2bfPi6NA&pid=ImgRaw&r=0");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 25px;
        }

        .container {
            width: 100%;
            max-width: 1000px;
            min-height: 580px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            background: #333;
            border: 1px solid #333;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 20px 60px #0008;
        }

        /* Left side */
        .hero {
            background:
                linear-gradient(145deg, #7f1010dd, #190808ee),
                url("https://images.unsplash.com/photo-1518709268805-4e9042af9f23?auto=format&fit=crop&w=1000&q=80");
            background-size: cover;
            background-position: center;
            padding: 45px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        .logo span {
            color: #ff4545;
        }

        .hero-content h1 {
            font-size: 48px;
            line-height: 1.1;
            margin-bottom: 20px;
        }

        .hero-content p {
            color: #ddd;
            line-height: 1.8;
            max-width: 350px;
        }

        .tag {
            display: inline-block;
            color: #ffb84d;
            border: 1px solid #ffb84d66;
            background: #0005;
            padding: 9px 14px;
            border-radius: 30px;
            font-size: 12px;
            letter-spacing: 1px;
            margin-bottom: 22px;
        }

        .hero-footer {
            color: #bbb;
            font-size: 12px;
        }

        /* Right side */
        .login-section {
            padding: 55px 45px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-section h2 {
            font-size: 30px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #999;
            font-size: 14px;
            margin-bottom: 35px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            font-size: 13px;
            margin-bottom: 10px;
            color: #ddd;
        }

        input {
            width: 100%;
            padding: 15px;
            background: #242424;
            border: 1px solid #3b3b3b;
            border-radius: 8px;
            color: white;
            outline: none;
            font-size: 14px;
        }

        input:focus {
            border-color: #ff4545;
        }

        input::placeholder {
            color: #777;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            margin-bottom: 25px;
            font-size: 12px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 7px;
            color: #bbb;
        }

        .remember input {
            width: auto;
            accent-color: #e52d2d;
        }

        a {
            color: #ff5555;
            text-decoration: none;
        }

        a:hover {
            color: #ffb84d;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background: #d92727;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.25s;
        }

        .login-btn:hover {
            background: #f13b3b;
            transform: translateY(-2px);
        }

        .divider {
            display: flex;
            align-items: center;
            gap: 15px;
            color: #777;
            font-size: 12px;
            margin: 25px 0;
        }

        .divider::before,
        .divider::after {
            content: "";
            height: 1px;
            background: #333;
            flex: 1;
        }

        .signup {
            text-align: center;
            font-size: 13px;
            color: #aaa;
        }

        @media (max-width: 700px) {
            .container {
                grid-template-columns: 1fr;
                max-width: 450px;
            }

            .hero {
                min-height: 250px;
                padding: 30px;
            }

            .hero-content h1 {
                font-size: 34px;
            }

            .hero-footer {
                margin-top: 25px;
            }

            .login-section {
                padding: 35px 28px;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <section class="hero">
            <div class="logo">VT <span>STORE</span></div>

            <div class="hero-content">
                <div class="tag">YOUR COLLECTION STARTS HERE</div>
                <h1>Enter the<br>World of<br>Ninjas.</h1>
                <p>
                    Discover legendary figures, epic builds,
                    and collectibles worthy of your collection.
                </p>
            </div>

            <div class="hero-footer">
                COLLECT YOUR LEGEND. BUILD YOUR WORLD.
            </div>
        </section>

        <section class="login-section">
            <h2>Welcome back</h2>
            <p class="subtitle">Sign in to enter your collection.</p>

            <form action="admin simple/check_login.php" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input
                        type="name"
                        id="name"
                        name="user"
                        placeholder="Enter your name"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="pw"
                        placeholder="Enter your password"
                        required
                    >
                </div>

                <div class="options">
                    <label class="remember">
                        <input type="checkbox" name="remember">
                        Remember me
                    </label>

                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="login-btn" value="check">
                    ENTER 
                </button>
            </form>

            <div class="divider">NEW COLLECTOR?</div>

            <p class="signup">
                Don't have an account?
                <a href="register.html">Create account</a>
            </p>
        </section>

    </div>

</body>
</html>
