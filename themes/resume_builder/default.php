<?php defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\Area;

echo $this->inc('elements/header.php');
?>
<main>
    <?php
    $a = new Area('Main');
    $a->display($c);
    ?>
</main>
<?php
echo $this->inc('elements/footer.php');