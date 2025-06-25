<?php
require_once "loader.php";
require_once "header.php";
?>
<div class="container">
    <form action="handle.php" class="d-flex flex-column " method="post">
        <label for="task_name">task name</label>
        <input name="task_name" id="task_name" type="text">
        <label for="task_des">task description</label>
        <textarea name="task_des" id="task_des"></textarea>
        <label for="task_dead">dead line</label>
        <input name="task_dead" id="task_dead" type="time">
        <label for="task_urgent">how urgent is it?</label>
        <select name="task_urgent" id="task_urgent">
            <option class="bg-danger text-light" value="red">red</option>
            <option class="bg-" value="orange">orange</option>
            <option class="bg-warning" value="yellow">yellow</option>
            <option class="bg-primary text-light" value="blue">blue</option>
        </select>
        <input type="submit" value="save" name="submit" class="btn btn-dark">
        <input type="hidden" value="new-task" name="type">
    </form>
</div>
<?php require_once "footer.php"; ?>