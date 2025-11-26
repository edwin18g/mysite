<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo isset($title) ? $title : 'Page'; ?></title>
    <style>body{font-family:Arial,Helvetica,sans-serif;padding:20px}</style>
</head>
<body>
    <h1><?php echo isset($title) ? $title : 'Page'; ?></h1>
    <?php if (isset($message)): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>
    <?php if (isset($name)): ?>
        <p>Hello, <?php echo $name; ?>!</p>
    <?php endif; ?>
</body>
</html>
