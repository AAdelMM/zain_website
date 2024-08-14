<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zain Zwy - Under Construction</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes construct {
            0% { height: 0; }
            50% { height: 100%; }
            100% { height: 0; }
        }
        .brick {
            width: 20px;
            background-color: #d97706;
            margin: 0 2px;
            border-radius: 2px;
            animation: construct 1.5s infinite;
        }
        .brick:nth-child(2) { animation-delay: 0.2s; }
        .brick:nth-child(3) { animation-delay: 0.4s; }
        .brick:nth-child(4) { animation-delay: 0.6s; }
        .brick:nth-child(5) { animation-delay: 0.8s; }
    </style>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">
    <div class="text-center">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Zain Zwy</h1>
        <div class="mb-8 flex justify-center items-end h-16">
            <div class="brick"></div>
            <div class="brick"></div>
            <div class="brick"></div>
            <div class="brick"></div>
            <div class="brick"></div>
        </div>
        <h2 class="text-2xl font-semibold text-gray-700 mb-4">Under Construction</h2>
        <p class="text-gray-600">We're building something amazing. Check back soon!</p>
    </div>
</body>
</html>