<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloggy</title>
</head>
<body>
    <form action="post_form_valid.php" method="post">
    <label for "title">Title: </label><br>
        <input type="text" name="title" id="title" placeholder="New post title" size="34">
        <br>
        <label for="description_txt">Description: </label><br>
        <textarea name="description" id="description_txt" cols="60" rows="5" placeholder="New Post Description"></textarea><br> 
        <label for="post_text">Content: </label><br>
        <textarea name="post_text" id="post_text" cols="60" rows="5" placeholder="New Post Content"></textarea><br> 
        <button type="submit">Submit</button>
    </form>
</body>
</html>