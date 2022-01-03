<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress - home</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@300&family=Space+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <section class="content">
        <nav>
            <div>
                <a href="index.html" class="neon-button">Home</a>
            </div>
            <div>
                <a href="task.html">Tasks</a>
            </div>
            <div>
                <a href="goal.html">Goals</a>
            </div>
            <div>
                <a href="blog.html">Blog</a>
            </div>
            <div id="login">
                <a href="login.html">Log in</a>
            </div>
        </nav>
        <div id="profile">
            <div id="logo">
                <img src="images/avatar.png" width="150" height="200" alt="avatar">
            </div>
            <div id="stat">
                <div id="statistics">
                    <h1>Statistics</h1>
                </div>
                <ul>
                    <li>Goals: 20</li>
                    <li>Tasks: 43</li>
                    <li>Done: 20/43</li>
                </ul>
            </div>
        </div>
        <div id="quote">
            <q cite="https://www.mozilla.org/en-US/about/history/details/" title="Daily quote">
                Worry never robs tomorrow of its sorrow. It only saps today of its joy.
            </q>
        </div>
    </section>
</body>
</html>