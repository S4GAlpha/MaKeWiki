<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div id="ain" class="container">
        <div class="view">
            <div id="column-profile">
                <img src="images/profile-pic.jpg" alt="Profile Picture" id="profile-icon">
                <p id="nick-utente">John Doe</p>
                <button id="button-acc-profile">Account</button>
                <button id="button-acc-profile2">Profile</button>
            </div>
            <div id="column-info">
                <div id="notification">
                    <h3 class="section-title">Notifications</h3>
                    <button class="notification-item">New message from Jane</button>
                    <button class="notification-item">New comment on your post</button>
                    <button class="notification-item">New follower</button>
                    <button class="notification-item" id="hideNotifications">Hide Notifications</button>
                </div>
                <div id="activity">
                    <h3 class="section-title">Activity</h3>
                    <div class="activity-item">
                        <p class="activity-text">Created a new wiki: Introduction to Programming</p>
                        <time class="activity-time">2 hours ago</time>
                    </div>
                    <div class="activity-item">
                        <p class="activity-text">Edited a wiki: JavaScript Fundamentals</p>
                        <time class="activity-time">4 hours ago</time>
                    </div>
                    <div class="activity-item">
                        <p class="activity-text">Commented on a wiki: HTML and CSS for Beginners</p>
                        <time class="activity-time">1 day ago</time>
                    </div>
                </div>
                <div id="favorite-wikis">
                    <h3 class="section-title">Favorite Wikis</h3>
                    <div class="wiki-item">
                        <img src="images/wiki-cover.jpg" alt="Wiki Cover" class="wiki-cover">
                        <div class="wiki-info">
                            <h4 class="wiki-title">Introduction to Programming</h4>
                            <p class="wiki-description">A beginner's guide to programming concepts and languages</p>
                        </div>
                    </div>
                    <div class="wiki-item">
                        <img src="images/wiki-cover.jpg" alt="Wiki Cover" class="wiki-cover">
                        <div class="wiki-info">
                            <h4 class="wiki-title">JavaScript Fundamentals</h4>
                            <p class="wiki-description">A comprehensive guide to JavaScript programming</p>
                        </div>
                    </div>
                    <div class="wiki-item">
                        <img src="images/wiki-cover.jpg" alt="Wiki Cover" class="wiki-cover">
                        <div class="wiki-info">
                            <h4 class="wiki-title">HTML and CSS for Beginners</h4>
                            <p class="wiki-description">A beginner's guide to HTML and CSS web development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>
