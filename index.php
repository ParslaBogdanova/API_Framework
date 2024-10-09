<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Laravel API frontend</title>
</head>
<body>
    <div class="container">
        <h1 class="title">Laravel API frontend</h1>

        <div class="container">
            <h2>Get User</h2>
            <form class="borders" id="get-user-form">    
                <label for="token">Enter Token:</label>
                <input type="text" name="token" id="token" class="input-field" placeholder="Enter API token">
                <input type="submit" value="Get User" class="green-button">
            </form>
            <div id="user-data"></div>
        </div>

        <div class="container">
            <h2>Create Post</h2>
            <form class="borders" id="create-post-form">
                <p class="min-text">Title</p>
                <input type="text" name="title" id="title" class="input-field" placeholder="Post Title">

                <p class="min-text">Body</p>
                <div class="input-row">
                    <textarea class="input-field" rows="4" name="body" id="body" placeholder="Post Body"></textarea>
                    <input type="submit" value="Create" class="green-button">
                </div>
            </form>
            <div id="post-data"></div>
            <div id="user-posts"></div>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>
</html>
