<?php defined( 'APP_PATH' ) or die('');

return [
    'bootstrap-style' => [
        ['__domain__/assets/css/bootstrap5.min.css', '' , 'bootstrap-css'],
    ],
    'fontawesome-css' => [
        ['__domain__/assets/font/fontawesome/css/fontawesome.min.css', '' , 'fontawesome-css'],
    ],
    'c3-style' => [
        ['__domain__/assets/new_admin/extra-libs/c3/c3.min.css', '' , 'c3-style']
    ],
    'chartist-style' => [
        ['__domain__/assets/new_admin/libs/chartist/dist/chartist.min.css', '' , 'chartist-style']
    ],
    'jvectormap-style' => [
        ['__domain__/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css', '' , 'jvectormap-style'],
    ],
    'app-style' => [
        ['__domain__/assets/new_admin/css/style.min.css', '' , 'app-style']
    ],
    'custom-style' => [
        ['__domain__/assets/new_admin/css/custom.css', '' , 'custom-style']
    ],

    
    'jquery-script' => [
        ['__domain__/assets/new_admin/libs/jquery/dist/jquery.min.js', [], 'jquery-script', 'top']
    ],
    'bootstrap-script' => [
        ['__domain__/assets/new_admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js', [], 'bootstrap-script']
    ],
    'switcher-script' => [
        ['__domain__/assets/new_admin/js/app-style-switcher.js', [], 'switcher-script']
    ],
    'feather-script' => [
        ['__domain__/assets/new_admin/js/feather.min.js', [], 'feather-script']
    ],
    'perfect-scrollbar-script' => [
        ['__domain__/assets/new_admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js', [], 'perfect-scrollbar-script']
    ],
    'sidebarmenu-script' => [
        ['__domain__/assets/new_admin/js/sidebarmenu.js', [], 'sidebarmenu-script']
    ],
    'custom-script' => [
        ['__domain__/assets/new_admin/js/custom.min.js', [], 'custom-script']
    ],
    'd3-script' => [
        ['__domain__/assets/new_admin/extra-libs/c3/d3.min.js', [], 'd3-script']
    ],
    'c3-script' => [
        ['__domain__/assets/new_admin/extra-libs/c3/c3.min.js', [], 'c3-script']
    ],
    'chartist-script' => [
        ['__domain__/assets/new_admin/libs/chartist/dist/chartist.min.js', [], 'chartist-script']
    ],
    'chartist-tooltip-script' => [
        ['__domain__/assets/new_admin/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js', [], 'chartist-tooltip-script']
    ],
    'dashboard-script' => [
        ['__domain__/assets/new_admin/js/pages/dashboards/dashboard1.min.js', [], 'dashboard-script']
    ],
    // 'app-script' => [
    //     ['__domain__/assets/new_admin/js/app.js', [], 'app-script']
    // ],
];