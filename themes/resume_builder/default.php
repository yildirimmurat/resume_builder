<?php defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\Area;

echo $this->inc('elements/header.php');
?>
<main>
    <div class="resume-container">
        <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
    </div>
</main>
<?php
echo $this->inc('elements/footer.php');