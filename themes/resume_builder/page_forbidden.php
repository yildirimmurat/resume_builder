<?php
defined('C5_EXECUTE') or die("Access Denied.");

use Concrete\Core\View\View;
use Concrete\Core\Area\Area;

echo $this->inc('elements/header.php');
?>

<main>
    <?php
    View::element(
        'system_errors',
        array(
            'format' => 'block',
            'error' => isset($error) ? $error : null,
            'success' => isset($success) ? $success : null,
            'message' => isset($message) ? $message : null,
        )
    );
    ?>

    <?php
    $a = new Area('Main');
    $a->display($c);
    ?>
</main>

<?php
echo $this->inc('elements/footer.php');
