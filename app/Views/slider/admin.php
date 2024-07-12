<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel - Slider</title>
</head>
<body>
    <h1>Admin Panel - Slider</h1>
    <a href="<?= base_url('/admin/slider/create') ?>">Add New Slider</a>
    <table border="1">
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        <?php foreach ($sliders as $slider): ?>
            <tr>
                <td><img src="<?= base_url('uploads/' . $slider['image']) ?>" width="100"></td>
                <td><?= $slider['title'] ?></td>
                <td><?= $slider['description'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
