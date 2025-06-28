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
$user_id = $_SESSION['user_id'];
if (!isset($user_id)) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPEhtml>
    <html>

    <head>
        <link href="../assessts/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assessts/css/all.min.css" rel="stylesheet">
        <script src="../assessts/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div class="header p-3 d-flex align-items justify-content-between position-sticky z-3 start-0 end-0 top-0 bg-dark text-light">
            <p class=" align-baseline text-center">welcome to panel,
                <?php echo (isset($_SESSION['name'])) ? $_SESSION['name'] : 'my friend'; ?>
            </p>
            <a href="logout.php" class="btn btn-outline-light text-decoration-none">
                <i class="fa-regular fa-right-from-bracket"></i>
            </a>
        </div>
        <div class="container">
            <div class="tasks d-flex gap-1 mt-2 flex-wrap">
                <?php
                $sql = "SELECT * FROM `user_task` WHERE `user_id` = '$user_id' ORDER BY `dead_line` DESC";
                $result = db_select_task($sql);
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $title = htmlspecialchars($row['task_tittle']);
                        $desc = htmlspecialchars($row['task_des']);
                        $urgent = $row['task_urgent'] == 1 ? 'Urgent' : 'Normal';
                        $deadline = date("F j, Y, g:i A", strtotime($row['dead_line']));
                ?>
                        <div class='card'>
                            <div class='card-body'>
                                <a href="handle.php?type=task_act&task_id=<?php echo $row['task_id']; ?>&submit=delete">
                                    <i class="fa-regular fa-trash"></i>
                                </a>
                                <h5 class='card-title'><?php echo $title; ?></h5>
                                <p class='card-text'><?php echo $desc; ?></p>
                                <p class='card-text'>
                                    <small class='text-muted'>Deadline: <?php echo $deadline; ?></small><br>
                                    <span class="badge bg-<?php echo ($row['task_urgent'] ? 'danger' : 'primary'); ?>">
                                        <?php echo $urgent; ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "no notes founded";
                }
                ?>
            </div>
        </div>
        <a href=" new-task" class="position-fixed bottom-0 end-0 m-4 text-decoration-none
        btn btn-primary rounded-2 btn-lg  z-3">
            <i class="fa-solid fa-plus"></i>
        </a>
    </body>

    </html>

    <!-- <?php require_once("../footer.php"); ?> -->