<?php defined('APP_PATH') or die('');
$this->theme->prepareAssets([
    'jquery-script',
    'bootstrap-style',
    'fontawesome-css',
    // 'c3-style',
    // 'chartist-style',
    // 'jvectormap-style',
    'app-style',
    'custom-style',
    
    'bootstrap-script',
    'switcher-script',
    'feather-script',
    'perfect-scrollbar-script',
    'sidebarmenu-script',
    'custom-script',
    // 'd3-script',
    // 'c3-script',
    // 'chartist-script',
    // 'chartist-tooltip-script',
    // 'dashboard-script',
]);
$content = $this->render($this->mainLayout);
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PNote</title>

    <?php $this->theme->echo('css', $this->url()) ?>
    <?php $this->theme->echo('topJs', $this->url()) ?>
    <?php $this->theme->echo('inlineCss', $this->url()) ?>
</head>

<body>
    <div class="preloader d-none">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        
        <?php echo $this->renderWidget('core::backend.header'); ?>

        <?php echo $this->renderWidget('menu::backend.sidebar'); ?>

        <div class="page-wrapper" style="display: block;">

            <div class="container-fluid">
                <?php echo $content; ?>
            </div>

            <footer class="footer text-center text-muted">
                <script>document.write(new Date().getFullYear())</script> © smpleader. <a
                    href="#">SPT</a>.
            </footer>
        </div>
    </div>

    <?php $this->theme->echo('js', $this->url()) ?>
    <?php $this->theme->echo('inlineJs', $this->url()) ?>
</body>

</html>