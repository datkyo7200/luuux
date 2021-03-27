<div id="content" class="container h-100">
    <h1>SẢN PHẨM</h1>
    <div class="row justify-content-center" style="text-align:center">
        <?php
        if (!empty($list_product)) {
            foreach ($list_product as $value) {
                ?>
        <div class="col-4">
            <h4> <a href="" style="color:black"><?php echo $value['name'] ?></a>
            </h4>
            <img src="<?php echo $value['image'] ?>"
                alt="" width="100%">
            <p><?php echo $value['price'] ?>
            </p>
            <button class="btn-primary">Buy now</button>
        </div>
        <?php
            }
        }
        ?>
    </div>
</div>