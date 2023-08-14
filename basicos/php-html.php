<?php
    include "tintas.php"
?>

<h1>compra nossas titna men</h1>

<div class="show-elements">
    <ul>
        <?php foreach($tintas as $tinta):?>
        <li>
            <?= $tinta; ?>
        </li>
        
        <?php endforeach;?>
    </ul>
</div>


