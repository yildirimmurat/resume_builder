<?php

namespace Concrete\Package\ResumeBuilder\Theme\ResumeBuilder;

defined('C5_EXECUTE') or die('Access Denied.');

use Concrete\Core\Page\Theme\Theme;

class PageTheme extends Theme
{
    public function getThemeName()
    {
        return t('Resume Builder');
    }

    public function getThemeDescription()
    {
        return t('Theme for Resume Builder');
    }

    public function registerAssets()
    {

    }

    public function getThemeBlockClasses()
    { }

    public function getThemeAreaClasses()
    { }
    public function getThemeAreaLayoutPresets(): array
    {
        return [];
    }
    public function getThemeDefaultBlockTemplates()
    {
        // return array(
        //     'autonav' => 'main_nav.php',
        // );
    }

    public function getThemeEditorClasses()
    {
        return array(
            // array('title' => t('Green'), 'menuClass' => 'green', 'spanClass' => 'green'),
        );
    }
}
