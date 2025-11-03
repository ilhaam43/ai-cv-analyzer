<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lintasarta - AI CV Analyzer</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* Left Section - Login Form */
        .left-section {
            flex: 1;
            background: linear-gradient(135deg, #f0f4f8 0%, #e8eef5 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px;
            position: relative;
        }

        .login-box {
            width: 100%;
            max-width: 520px;
        }

        .logo {
            margin-bottom: 60px;
            text-align: center;
        }

        .logo img {
            height: 60px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 10px;
        }

        .form-group input {
            width: 100%;
            padding: 16px 20px;
            font-size: 15px;
            border: 2px solid #a8c5e8;
            border-radius: 12px;
            background: white;
            color: #333;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            outline: none;
            border-color: #1e6ff7;
        }

        .form-group input::placeholder {
            color: #a0a0a0;
        }

        .sign-in-btn {
            width: 100%;
            padding: 18px;
            font-size: 17px;
            font-weight: 600;
            color: white;
            background: linear-gradient(135deg, #1e6ff7 0%, #1557d6 100%);
            border: none;
            border-radius: 12px;
            cursor: pointer;
            margin-top: 32px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .sign-in-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(30, 111, 247, 0.3);
        }

        .sign-in-btn:active {
            transform: translateY(0);
        }

        .link-section {
            text-align: center;
            margin-top: 32px;
        }

        .link-section a {
            display: block;
            color: #5882d9;
            font-size: 15px;
            font-weight: 500;
            text-decoration: none;
            margin-bottom: 16px;
            transition: color 0.2s ease;
        }

        .link-section a:hover {
            color: #1e6ff7;
        }

        /* Right Section - Feature Showcase */
        .right-section {
            flex: 1;
            background: linear-gradient(135deg, #667eea 0%, #5c70d8 50%, #6b7ce8 100%);
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px;
        }

        /* Decorative Elements */
        .decorative-circle {
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
        }

        .circle-1 {
            width: 300px;
            height: 300px;
            background: white;
            top: -100px;
            left: -50px;
        }

        .circle-2 {
            width: 200px;
            height: 200px;
            background: white;
            bottom: 100px;
            left: -80px;
        }

        .circle-3 {
            width: 250px;
            height: 250px;
            background: white;
            top: 50%;
            right: -100px;
        }

        .circle-4 {
            width: 120px;
            height: 120px;
            background: rgba(255, 255, 255, 0.4);
            top: 20%;
            left: 15%;
        }

        .circle-5 {
            width: 180px;
            height: 180px;
            background: rgba(255, 255, 255, 0.3);
            bottom: 15%;
            right: 10%;
        }

        /* Stars */
        .star {
            position: absolute;
            color: white;
            opacity: 0.8;
        }

        .star-1 {
            font-size: 24px;
            top: 18%;
            left: 25%;
        }

        .star-2 {
            font-size: 16px;
            top: 15%;
            right: 35%;
        }

        .star-3 {
            font-size: 20px;
            top: 18%;
            right: 15%;
        }

        .star-4 {
            font-size: 14px;
            top: 25%;
            right: 25%;
        }

        .star-5 {
            font-size: 18px;
            bottom: 45%;
            left: 15%;
        }

        .star-6 {
            font-size: 12px;
            bottom: 28%;
            left: 8%;
        }

        .star-7 {
            font-size: 16px;
            top: 28%;
            right: 18%;
        }

        /* Plus signs */
        .plus {
            position: absolute;
            color: rgba(255, 255, 255, 0.6);
            font-size: 20px;
            font-weight: 300;
        }

        .plus-1 {
            top: 50%;
            left: 25%;
        }

        .plus-2 {
            bottom: 35%;
            right: 8%;
        }

        /* Chat Bubble */
        .chat-bubble {
            position: absolute;
            top: 15%;
            left: 15%;
            background: rgba(255, 255, 255, 0.25);
            padding: 12px 18px;
            border-radius: 12px;
            backdrop-filter: blur(10px);
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .chat-dots {
            display: flex;
            gap: 4px;
        }

        .chat-dots span {
            width: 6px;
            height: 6px;
            background: rgba(255, 255, 255, 0.7);
            border-radius: 50%;
            display: block;
        }

        /* Main Content Box */
        .content-box {
            background: white;
            border-radius: 20px;
            padding: 30px;
            max-width: 500px;
            width: 100%;
            position: relative;
            z-index: 10;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .content-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .content-title h3 {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 4px;
        }

        .content-title p {
            font-size: 18px;
            font-weight: 700;
            color: #1a1a1a;
        }

        .content-icons {
            display: flex;
            gap: 10px;
        }

        .icon-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            border: 2px solid #e0e0e0;
            background: white;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .icon-btn:hover {
            background: #f5f5f5;
            border-color: #ccc;
        }

        .message-bubble {
            background: #f5f5f5;
            padding: 18px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            position: relative;
        }

        .message-bubble::before {
            content: '';
            position: absolute;
            left: 20px;
            top: -8px;
            width: 40px;
            height: 40px;
            background: #f5f5f5;
            border-radius: 50%;
        }

        .message-bubble p {
            font-size: 15px;
            color: #333;
            position: relative;
            z-index: 1;
        }

        .recommendation-box {
            background: linear-gradient(135deg, #1e6ff7 0%, #1557d6 100%);
            color: white;
            padding: 18px 22px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .recommendation-box p {
            font-size: 14px;
            line-height: 1.5;
        }

        .wand-icon {
            font-size: 28px;
            flex-shrink: 0;
        }

        /* 3D Asset */
        .asset-3d {
            position: absolute;
            bottom: 8%;
            right: 8%;
            width: 200px;
            z-index: 10;
        }

        .asset-3d img {
            width: 100%;
            height: auto;
            filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.2));
        }

        /* Bottom Text */
        .feature-text {
            position: absolute;
            bottom: 60px;
            text-align: center;
            color: white;
            z-index: 10;
        }

        .feature-text h4 {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 8px;
            opacity: 0.9;
        }

        .feature-text h2 {
            font-size: 48px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .container {
                flex-direction: column;
            }

            .right-section {
                display: none;
            }

            .left-section {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Left Section - Login Form -->
        <div class="left-section">
            <div class="login-box">
                <div class="logo">
                    <img src="https://i.ibb.co.com/vSC8jwx/image-14.png" alt="Lintasarta Logo">
                </div>

                <form>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="email" placeholder="lintasarta.admin@gmail.com" value="lintasarta.admin@gmail.com">
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" placeholder="****************" value="****************">
                    </div>

                    <button type="submit" class="sign-in-btn">Sign In</button>
                </form>

                <div class="link-section">
                    <a href="#">Don't have an account? <strong>Sign up now</strong></a>
                    <a href="#">Need Help? <strong>Contact Us!</strong></a>
                </div>
            </div>
        </div>

        <!-- Right Section - Feature Showcase -->
        <div class="right-section">
            <!-- Decorative Elements -->
            <div class="decorative-circle circle-1"></div>
            <div class="decorative-circle circle-2"></div>
            <div class="decorative-circle circle-3"></div>
            <div class="decorative-circle circle-4"></div>
            <div class="decorative-circle circle-5"></div>

            <!-- Stars -->
            <div class="star star-1">✦</div>
            <div class="star star-2">+</div>
            <div class="star star-3">+</div>
            <div class="star star-4">+</div>
            <div class="star star-5">○</div>
            <div class="star star-6">✦</div>
            <div class="star star-7">+</div>
            
            <div class="plus plus-1">+</div>
            <div class="plus plus-2">+</div>

            <!-- Chat Bubble -->
            <div class="chat-bubble">
                <div class="chat-dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>

            <!-- Main Content -->
            <div class="content-box">
                <div class="content-header">
                    <div class="content-title">
                        <h3>AI CV Analizer</h3>
                        <p>Ajukan pertanyaan!</p>
                    </div>
                    <div class="content-icons">
                        <div class="icon-btn">?</div>
                        <div class="icon-btn">↻</div>
                    </div>
                </div>

                <div class="message-bubble">
                    <p>Hai! Ada yang bisa saya bantu?</p>
                </div>

                <div class="recommendation-box">
                    <span class="wand-icon">✨</span>
                    <p>Berikan saya rekomendasi CV kandidat terbaik.</p>
                </div>
            </div>

            <!-- 3D Asset -->
            <div class="asset-3d">
                <img src="https://i.ibb.co.com/39F6ZKZF/image-24.png" alt="CV Clipboard Illustration">
            </div>

            <!-- Bottom Feature Text -->
            <div class="feature-text">
                <h4>Featuring</h4>
                <h2>Guided Assistance</h2>
            </div>
        </div>
    </div>
</body>
</html>