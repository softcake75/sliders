<!DOCTYPE html>
<html>
<head>
    <title>Add New Slider</title>
</head>
<body>
    <h1>Add New Slider</h1>
    <form action="<?= base_url('/admin/slider/store') ?>" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br><br>
        
        <label for="description">Description:</label>
        <textarea name="description" id="description" required></textarea><br><br>
        
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" required><br><br>
        
        <button type="submit">Upload</button>
    </form>
</body>
</html>
