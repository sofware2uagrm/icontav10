<?php
{{$anio= date("Y");
$url_leonel_empresas=Config('app.url').'/empresas';
$url_leonel_gestions=Config('app.url').'/gestions';
$url_lucas_moneda=Config('app.url').'moneda';
$url_nicolas_eliminacion=Config('app.url').'eliminacion';
}}
return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */
    
    'title' => "ICONTAB $anio" ,
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => false,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => "<b>CONTASAYUBÚ</b> $anio",
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'CONTASAYUBÚ',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => true,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => true,
        ],
        [
            'text'        => 'Administracion',
            'url'         => '#',
            'icon'        => '	fas fa-database',
            'topnav_right' => true,
            'can'           => 'icontav.administracion',
            'submenu' => [
                [
                    'text' => 'Usuarios',
                    'url'  => 'administracion',
                    'icon'        => 'fas fa-user',
                    'icon_color' => 'cyan',
                ],
                [
                    'text' => 'Grupo Usuarios',
                    'url'  => 'administracion/roles',
                    'icon'        => 'fas fa-users',
                    'icon_color' => 'cyan',
                ],
                // [
                //     'text' => 'Asignar Formulario',
                //     'url'  => 'administracion/permisos',
                //     'icon'        => 'fas fa-file-invoice',
                //     'icon_color' => 'cyan',
                // ],
            ],
        ],

        // Sidebar items:
        [
            'type' => 'sidebar-menu-search',
            'text' => 'search',
        ],
        [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],
        [
            'text'        => 'Cotizaciones',
            'url'         => 'admin/pages',
            'icon'        => 'far fa-clone',
            'can'=> 'icontav.cotizaciones',
            'submenu' => [
                [
                    'text' => 'Registro De Cotizaciones',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                ],
            ],
        ],
        [
            'text'        => 'Cuentas',
            'url'         => 'admin/pages',
            'icon'        => 'fa fa-fw fa-user',
            'can'=> 'icontav.cuentas',
            'submenu' => [
                [
                    'text' => 'Plan De Cuentas',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=> 'icontav.cuentas.plan_de_cuenta',
                ],
                [
                    'text' => 'Seleccionar Cuentas Especificas',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=> 'icontav.cuentas.seleccionar_cuentas_especificas',
                ],
                [
                    'text' => 'Configuracion Plan De Cuentas',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=> 'icontav.cuentas.configuracion_plan_cuenta',
                ],
            ],
        ],
        [
            'text'        => 'Comprobantes',
            'url'         => 'admin/pages',
            'icon'        => 'fas fa-align-right',
            'can'=>'icontav.comprobantes',
            'submenu' => [
                [
                    'text' => 'Registro De Comprobante',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=>'icontav.comprobantes.registro_comprobante',
                ],
                [
                    'text' => 'Lista De Comprobantes Anulados',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=>'icontav.comprobantes.lista_comprobantes.anulados',
                ],
            ],
        ],
        [
            'text'        => 'Libros',
            'url'         => 'admin/pages',
            'icon'        => 'fas fa-book-reader',
            'can'=>'icontav.libros',
            'submenu' => [
                [
                    'text' => 'Libro Diario',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=>'icontav.libros.libro_diario',
                ],
                [
                    'text' => 'Libro Mayor',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=>'icontav.libros.libro_mayor',
                ],
                [
                    'text' => 'Libro De Compras De IVA',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=>'icontav.libros.libro_de_compras_de_iva',
                ],
                [
                    'text' => 'Libro De Ventas De IVA',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=>'icontav.libros.libro_de_ventas_iva',
                ],
            ],
        ],
        [
            'text'        => 'Estados Financieros',
            'url'         => 'admin/pages',
            'icon'        => 'fas fa-chalkboard',
            'can'=> 'icontav.estados_financieros',
            'submenu' => [
                [
                    'text' => 'Comprobacion De Sumas y Saldos',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=> 'icontav.estados_financieros.comprobante_de_sumas_y_saldos',
                ],
                [
                    'text' => 'Estado de Resultados',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=> 'icontav.estados_financieros.estado_de_resultados',
                ],
                [
                    'text' => 'Balance General',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=> 'icontav.estados_financieros.balance_general',
                ],
                [
                    'text' => 'Estado De Flujo De Efectivo',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=> 'icontav.estados_financieros.estado_de_flujo_de_efectivo',
                ],
                [
                    'text' => 'Estado De Evolucion De Patrimonio',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can'=> 'icontav.estados_financieros.estado_de_evolucion_de_patrimonio',
                ],
            ],
        ],
        [
            'text'        => 'Gestion',
            'url'         => 'admin/pages',
            'icon'        => 'fas fa-file-alt',
            'can' => 'icontav.gestion',
            'submenu' => [
                [
                    'text' => 'Fecha De Inicio De Gestion Contable',
                    'url'  => "$url_leonel_gestions",
                    'icon_color' => 'cyan',
                    'can' => 'icontav.gestion.fecha_de_inicio_de_gestion',
                ],
                [
                    'text' => 'Datos Generales De La Empresa',
                    'url'  => "$url_leonel_empresas",
                    'icon_color' => 'cyan',
                    'can' => 'icontav.gestion.datos_generales_de_la_empresa',
                ],
                [
                    'text' => 'Seleccionar Asiento De Apertura',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can' => 'icontav.gestion.seleccionar_asiento_de_apertura',
                ],
                [
                    'text' => 'Actualizar Saldos Contables',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can' => 'icontav.gestion.actualizar_saldos_contables',
                ],
            ],
        ],
        [
            'text'        => 'Sistema',
            'url'         => 'admin/pages',
            'icon'        => 'fas fa-desktop',
            'can' => 'icontav.sistema',
            'submenu' => [
                [
                    'text' => 'Configuracion de Parametros',
                    'url'  => "$url_lucas_moneda",
                     'icon' => 'fas fa-tools',
                     'can'=>'icontav.sistema.configuracion_de_parametros',
                ],
                [
                    'text' => 'Registro de Usuario',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can' => 'icontav.sistema.registro_de_usuario',
                ],
                [
                    'text' => 'Eliminacion de Registro',
                    'url'  => "$url_nicolas_eliminacion",
                    'icon_color' => 'cyan',
                    'can' => 'icontav.sistema.eliminacion_de_registro',
                ],
                [
                    'text' => 'Mantenimiento de base de datos',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can' => 'icontav.sistema.mantenimiento_de_base_de_datos',
                ],
                [
                    'text' => 'Ordenar Comprobantes Contables',
                    'url'  => '#',
                    'icon_color' => 'cyan',
                    'can' => 'icontav.sistema.ordenar_comprobantes_contables',
                ],
            ],
        ],
       /* ['header' => 'account_settings'],
        [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ],
        [
            'text'    => 'multilevel',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
                [
                    'text'    => 'level_one',
                    'url'     => '#',
                    'submenu' => [
                        [
                            'text' => 'level_two',
                            'url'  => '#',
                        ],
                        [
                            'text'    => 'level_two',
                            'url'     => '#',
                            'submenu' => [
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                                [
                                    'text' => 'level_three',
                                    'url'  => '#',
                                ],
                            ],
                        ],
                    ],
                ],
                [
                    'text' => 'level_one',
                    'url'  => '#',
                ],
            ],
        ],
        ['header' => 'labels'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
            'url'        => '#',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
            'url'        => '#',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'cyan',
            'url'        => '#',
        ],*/
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
