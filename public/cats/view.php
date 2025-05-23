<?php
require_once __DIR__.'/../../app/bootstrap.php';

$catId = $_GET['id'] ?? 0;
$cat = (new App\Models\Cat())->find($catId);

include __DIR__.'/../../templates/header.php';
?>

<h1><?= htmlspecialchars($cat['name']) ?></h1>
<div class="cat-details">
    <p>Breed: <?= $cat['breed'] ?></p>
    <p>Birth Date: <?= $cat['birth_date'] ?></p>
</div>

<?php include __DIR__.'/../../templates/footer.php'; ?>
