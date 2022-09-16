<?php
defined('C5_EXECUTE') or die("Access Denied.");
use Concrete\Core\Page\Page;
use Concrete\Core\Package\PackageService;
use Concrete\Core\Support\Facade\Application as ApplicationFacade;
use Concrete\Core\Localization\Localization;
use Concrete\Core\User\User;
use Concrete\Core\View\View;

$app = ApplicationFacade::getFacadeApplication();
$pkg = $app->make(PackageService::class)->getByHandle('resume_builder');
$icon_url = $pkg->getRelativePath(). '/icon.png';

?>
<!DOCTYPE HTML>
<html lang="<?php echo Localization::activeLanguage() ?>">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />

    <meta name="msvalidate.01" content="24C3B1D21D276C5B805429911B86CF3D" />

    <meta property="og:url" content="<?= $c->getCollectionLink() ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $c->getCollectionName() ?>" />
    <meta property="og:description" content="<?= $c->getCollectionDescription() ?>" />


    <script>
        window.isEditMode = false;
        window.isLoggedIn = false;
        <?php
        $stateClass = "is-view ";
        $u = $app->make(User::class);
        if ($u->isRegistered()) {
        ?>
            window.isLoggedIn = true;
        <?php
            $stateClass .= "is-logged ";
        }
        if (Page::getCurrentPage()->isEditMode()) {
        ?>
            window.isEditMode = true;
        <?php
            $stateClass .= "is-edit ";
        }
        ?>
    </script>

    <?php View::element('header_required', array('pageTitle' => $pageTitle)); ?>
    <link rel="icon" href="<?= $icon_url ?>" type="image/png" sizes="97x97">
    <?php echo $html->css($view->getStylesheet('main.less')); ?>
</head>

<body id="page<?php echo $c->getCollectionID(); ?>" data-enhance="false">
        <div class="<?php echo $c->getPageWrapperClass() ?> <?= $stateClass . ' ' . $class ?>">