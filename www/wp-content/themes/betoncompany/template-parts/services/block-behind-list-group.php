<?php
$field = $args['field'];
?>

<div class="dec-behind">
    <p class="dec-list-behind-title"><?php echo $field["title"]; ?></p>
    <ul class="dec-list-behind">
    <?php foreach ($field["list"] as $key => $item) { ?>
        <li class="dec-list-behind-item"><?php echo $item["item"]; ?></li>
    <?php } ?>
    </ul>
</div>