<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        /* Reset some default styling */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            color: #E1BD84; /* gold-color */
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 2px solid #E1BD84; /* gold-border */
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }

        .input-field:focus {
            outline: none;
            border-color: #d5ad6c; /* gold-hover */
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #E1BD84; /* gold-bg */
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-button:hover {
            background-color: #d5ad6c; /* gold-hover */
        }

        .error-message {
            color: red;
            margin-top: 10px;
            font-size: 14px;
        }

        .indicator-active {
            background-color: #E1BD84;
            width: 5rem;
            height: 5px;
            margin-top: 20px;
            border-radius: 3px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .login-container {
                padding: 20px;
                width: 90%;
            }

            .input-field, .login-button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h1>Login Admin</h1>

        <!-- Error message display -->
        @if(session('error'))
            <div class="error-message">{{ session('error') }}</div>
        @endif

        <!-- Login form -->
        <form action="{{ url('login') }}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Email" class="input-field" required><br>
            <input type="password" name="password" placeholder="Password" class="input-field" required><br>
            <button type="submit" class="login-button">Login</button>
        </form>

        <!-- Active indicator (optional) -->
        <div class="indicator-active"></div>
    </div>

</body>
</html>
