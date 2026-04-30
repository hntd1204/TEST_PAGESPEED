<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linktree Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    /* Basic reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f9;
    }

    /* Container styling */
    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    /* Profile section styling */
    .profile {
        margin-bottom: 30px;
    }

    .profile-picture img {
        width: 96px;
        height: 96px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 15px;
    }

    .profile-title h1 {
        font-size: 1.5em;
        font-weight: 700;
    }

    .profile-description h2 {
        font-size: 1em;
        color: #666;
    }

    /* Links section styling */
    .links-container {
        margin-top: 20px;
    }

    .link-item {
        margin-bottom: 10px;
    }

    .link-button {
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        color: #fff;
        background-color: #007bff;
        padding: 15px;
        border-radius: 10px;
        transition: background-color 0.3s ease, transform 0.3s ease;
        font-size: 1.1em;
        font-weight: bold;
        position: relative;
    }

    .link-button .link-thumbnail {
        width: 40px;
        height: 40px;
        background-color: #ccc;
        margin-right: 10px;
        border-radius: 5px;
    }

    .link-button:hover {
        background-color: #0056b3;
        transform: translateY(-3px);
    }

    /* Social icons section styling */
    .social-icons {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .social-icon {
        width: 24px;
        height: 24px;
        margin: 0 10px;
        fill: #666;
        transition: fill 0.3s ease;
    }

    .social-icon:hover {
        fill: #007bff;
    }
</style>

<body>
    <div class="container">
        <div class="profile">
            <div class="profile-picture">
                <img src="https://ugc.production.linktr.ee/9R6sxGSLaGZ80p393ZwZ_c8Y6o9X5DzyS6pDZ?io=true&size=avatar-v3_0" alt="Profile Picture">
            </div>
            <div class="profile-title">
                <h1>Tatiana Reine</h1>
            </div>
            <div class="profile-description">
                <h2>Music is mindfulness</h2>
            </div>
        </div>
        <div class="links-container">
            <div class="link-item">
                <a href="https://example.com/link1" class="link-button">
                    <div class="link-thumbnail"></div>
                    <p>Latest release</p>
                </a>
            </div>
            <div class="link-item">
                <a href="https://linktr.ee/" target="_blank" class="link-button">
                    <div class="link-thumbnail"></div>
                    <p>Blog</p>
                </a>
            </div>
            <div class="link-item">
                <a href="https://linktr.ee/" target="_blank" class="link-button">
                    <div class="link-thumbnail"></div>
                    <p>Website</p>
                </a>
            </div>
            <div class="link-item">
                <a href="https://linktr.ee/" target="_blank" class="link-button">
                    <div class="link-thumbnail"></div>
                    <p>Shop</p>
                </a>
            </div>
        </div>
        <div class="social-icons">
            <a href="https://instagram.com/linktr.ee" target="_blank" class="social-icon" aria-label="Instagram">
                <svg viewBox="0 0 24 24">
                    <!-- SVG path for Instagram icon -->
                </svg>
            </a>
            <a href="https://tiktok.com/@linktr.ee" target="_blank" class="social-icon" aria-label="TikTok">
                <svg viewBox="0 0 24 24">
                    <!-- SVG path for TikTok icon -->
                </svg>
            </a>
            <a href="https://open.spotify.com/artist/4AEnX03LhdOeqIShZkZLvt?si=whBsmOXmTnqGp4R482qblA" target="_blank" class="social-icon" aria-label="Spotify">
                <svg viewBox="0 0 24 24">
                    <!-- SVG path for Spotify icon -->
                </svg>
            </a>
        </div>
    </div>
</body>

</html>