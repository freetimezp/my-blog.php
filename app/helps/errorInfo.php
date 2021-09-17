<?php if(count($msg) > 0): ?>
    <?php foreach ($msg as $error): ?>
        <li>
            <?=$error; ?>
        </li>
    <?php endforeach; ?>
<?php endif; ?>