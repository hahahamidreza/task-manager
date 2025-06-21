<?php
global $base_url;
require_once "../loader.php";
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once "../header.php";
?>
<p class="text-dark align-baseline text-center">welcome to panel,
    <?php echo (isset($_SESSION['name'])) ? $_SESSION['name'] : 'my friend'; ?>
</p>
<a href="<?php $base_url; ?>/logout" class="btn btn-dark text-decoration-none">
    <i class="fa-regular fa-right-from-bracket"></i>
</a>
<?php require_once "../footer.php";
