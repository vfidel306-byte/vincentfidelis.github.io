<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('location: login.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile - StreamFlix</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background: #05070a;">
    <header class="navbar navbar-showcase">
        <div class="container">
            <div class="navbar-brand">
                <a href="movies.php"><span class="brand-mark" aria-hidden="true"></span>StreamFlix</a>
            </div>

            <button class="nav-toggle" type="button" data-nav-toggle aria-controls="primary-nav" aria-expanded="false" aria-label="Open menu">
                <span class="bars" aria-hidden="true"></span>
            </button>

            <nav class="navbar-nav" id="primary-nav">
                <ul>
                    <li><a href="movies.php">Home</a></li>
                    <li><a href="movies.php">Movies</a></li>
                    <li><a href="profile.php">Profile</a></li>
                    <li><a href="api/logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="auth-hero" style="min-height: auto; padding: 120px 20px 60px;">
             <!-- Simplified background for profile -->
            <div class="hero-overlay" style="opacity: 0.8; background: #05070a;"></div>
            
            <div class="container container-auth" style="max-width: 600px;">
                <div class="auth-card active" style="display: block;">
                    <h2>Account Profile</h2>
                    <p class="helper">Your secure account details.</p>
                    <div style="padding: 20px; background: rgba(255,255,255,0.03); border-radius: 15px; border: 1px solid rgba(255,255,255,0.05);">
                        <div style="display: flex; flex-direction: column; gap: 15px;">
                            <div>
                                <label style="font-size: 0.8rem; color: var(--subtle); text-transform: uppercase; letter-spacing: 1px;">Username</label>
                                <p style="font-size: 1.25rem; margin-top: 5px;"><?php echo htmlspecialchars($_SESSION['username']); ?></p>
                            </div>
                            <div>
                                <label style="font-size: 0.8rem; color: var(--subtle); text-transform: uppercase; letter-spacing: 1px;">Session Token</label>
                                <p style="font-size: 0.9rem; color: #4CAF50; font-family: monospace; margin-top: 5px;">Active Security Session</p>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 30px;">
                        <a href="api/logout.php" class="btn btn-ghost" style="width: 100%;">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer style="background: #05070a;">
        <div class="container">
            <p>&copy; 2026 StreamFlix. Secure Platform.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
