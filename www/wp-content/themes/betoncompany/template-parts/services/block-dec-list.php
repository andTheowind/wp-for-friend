<?php
$field = $args['field'];
?>

<ul class="dec-list">
<?php foreach ($field as $key => $item) { ?>
    <li class="dec-list-item"><?php echo $item["dec-list-item"]; ?></li>
<?php } ?>
</ul>