<?php
    require "lib/data.php";
?>
<div id="content">
    <h1>Tin tức</h1>
    <div class="row h-100 justify-content-center align-items-center">
        <?php foreach ($list_post as $value) {
    ?>
        <div class="col-4">
            <h6> <a href=""><?php echo $value['title'] ?></a>
            </h6>
            <p><?php echo $value['description'] ?>
            </p>
        </div>
        <?php
}
        ?>
    </div>
</div>