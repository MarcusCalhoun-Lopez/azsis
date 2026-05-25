<?php
declare(strict_types=1);

/**
 * 405 Method Not Allowed
 *
 * IMPORTANT: $allowedMethods should be set by the router/controller before including this file.
 * Example:
 *   $allowedMethods = ['POST'];
 *   require __DIR__.'/405.php';
 *   exit;
 */
$allowedMethods = $allowedMethods ?? ['GET'];   // safe default
$allowHeader    = implode(', ', $allowedMethods);

if( !headers_sent() ) {
    http_response_code(405);
    header('Content-Type: text/html; charset=UTF-8');
    header('Allow: ' . $allowHeader);
    header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
    header('X-Content-Type-Options: nosniff');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>405 – Method Not Allowed</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
            background: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .card {
            background: white;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 420px;
            text-align: center;
        }
        h1 {
            margin-top: 0;
            color: #b36b00;
        }
        p {
            color: #555;
        }
        code {
            background: #f1f3f5;
            padding: 0.15rem 0.4rem;
            border-radius: 4px;
        }
        a {
            display: inline-block;
            margin-top: 1rem;
            text-decoration: none;
            color: white;
            background: #007bff;
            padding: 0.6rem 1.2rem;
            border-radius: 4px;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="card">
        <h1>Method Not Allowed</h1>
        <p>
            This endpoint does not accept
            <code><?= htmlspecialchars($_SERVER['REQUEST_METHOD'] ?? 'that method', ENT_QUOTES, 'UTF-8') ?></code>.
        </p>
        <p>
            Allowed method(s):
            <code><?= htmlspecialchars($allowHeader, ENT_QUOTES, 'UTF-8') ?></code>
        </p>
        <a href="/">Return to Home</a>
    </div>
</body>
</html>
