<?php defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\Area\Area;

$this->inc('elements/header_top.php'); ?>
<header>
    <?php
        $a = new Area('Header');
        $a->display($c);
    ?>
</header>