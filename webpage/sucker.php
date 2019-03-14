<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Confirmation</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <?php if ($_SERVER["REQUEST_METHOD"] == "GET") { ?>
    <h1>HTTP GET is forbidden. Use HTTP POST to access this page.</h1>
    <?php 
} else { ?>

    <h2>Thanks, Sucker!</h2>
    <h4>Your information has been recorded.</h4>
    <dl>
        <dt>Name:</dt>
        <dd>
            <?= $_POST["name"] ?>
        </dd>

        <dt>Section:</dt>
        <dd>
            <?= $_POST["sec"] ?>
        </dd>

        <dt>Credit Card:</dt>
        <dd>
            <?= $_POST["cardnum"] ?>
            <?= "(" . $_POST["cardtype"] . ")" ?>
        </dd>
    </dl>
    <div>
        <?php
        $data = $_POST['name'] . ";" . $_POST['sec'] . ";" . $_POST['cardnum'] . ";" . $_POST['cardtype'] . "\n";
        file_put_contents("sucker.txt", $data, FILE_APPEND);
        ?>
    </div>
    <pre>
        <?php
        file_get_contents("sucker.txt");
        ?>
    </pre>

    <?php 
} ?>

</body>

</html> 