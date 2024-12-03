<?php $permission = 1; ?>

<?php if ($permission === 1): ?>
    <h1>Hello admin</h1>
<?php elseif ($permission === 2): ?>
    <h1>Hello mod</h1>
<?php else: ?>
    <h1>Hello guest</h1>
<?php endif; ?>