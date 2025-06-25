<?php
require_once("loader.php");
$require = require_once("header.php");
// if ($require) {
//     echo "true";
// } else {
//     echo "false";
// }
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header("location:login.php");
    exit;
}
// require_once "../header.php";
// require_once "../header.php";
?>
<!DOCTYPEhtml>
<html>

<head>
    <link href="../assessts/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assessts/css/all.min.css" rel="stylesheet">
    <script src="../assessts/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<div class="header p-3 d-flex align-items justify-content-between position-relative start-0 end-0 top-0 bg-dark text-light">
    <p class=" align-baseline text-center">welcome to panel,
        <?php echo (isset($_SESSION['name'])) ? $_SESSION['name'] : 'my friend'; ?>
    </p>
    <a href="logout.php" class="btn btn-outline-light text-decoration-none">
        <i class="fa-regular fa-right-from-bracket"></i>
    </a>
</div>
<div class="container">
    <div class="tasks d-flex flex-wrap">
        <div class="task d-flex rounded mt-3 text-dark border bg-light col-4 h-5 p-2">
            <h3>test</h3>
            <p>test</p>
        </div>
    </div>
</div>
<a href="new-task" class="position-fixed bottom-0 end-0 m-4 text-decoration-none
        btn btn-primary rounded-2 btn-lg  z-3">
    <i class="fa-solid fa-plus"></i>
</a>
</body>

</html>

<!-- <?php require_once("../footer.php"); ?> -->