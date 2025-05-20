<h2>Главная страница</h2>
<p><?= $name ?></p>
<p><?= $age ?></p>
<?php debug($names); ?>
<?php foreach($posts as $post): ?>
    <h3><?= $post->title ?></h3>

<?php endforeach; ?>