<?php

require_once './bbs.php';

try {
    $bbs = new bbs();

    if (true == isset($_POST['write'])) {
        $bbs->writeComment($_POST);
        header('Location: ' . $_SERVER['SCRIPT_NAME']);
        exit;
    }

    $data = $bbs->getComment();

} catch(Exception $e) {
    die($e->getMessage());
}

?>
<html>
<head>
<title>掲示板</title>
</head>
<body>
<?php echo $data; ?>
<form method="post" action="./">
<textarea name="text"></textarea>
<input type="submit" name="write">
</form>
</body>
</html>
