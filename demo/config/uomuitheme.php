<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Colors
    |--------------------------------------------------------------------------
    |
    | UomUI keeps Bootstrap's base color palette unchanged.
    |
    | The following Bootstrap base colors are NOT overridden here:
    |
    | blue, indigo, purple, pink, red, orange, yellow,
    | green, teal, cyan,
    | gray-100 through gray-900,
    | black and white.
    |
    | Only Bootstrap theme and semantic colors are configurable here.
    |
    */

    'colors' => [

        /*
        |--------------------------------------------------------------------------
        | Theme Colors
        |--------------------------------------------------------------------------
        |
        | Accepted value:
        | - Any valid CSS color.
        |
        | Recommended:
        | - HEX: #0d6efd
        | - RGB: rgb(13, 110, 253)
        | - HSL: hsl(216, 98%, 52%)
        |
        */

        'theme' => [

            // Main application / brand color.
            'primary' => '#0d6efd',

            // Secondary UI color.
            'secondary' => '#6c757d',

            // Success states and positive actions.
            'success' => '#198754',

            // Danger, destructive actions and errors.
            'danger' => '#dc3545',

            // Warning states.
            'warning' => '#ffc107',

            // Informational states.
            'info' => '#0dcaf0',

            // Light theme utility color.
            'light' => '#f8f9fa',

            // Dark theme utility color.
            'dark' => '#212529',
        ],

        /*
        |--------------------------------------------------------------------------
        | Semantic Colors
        |--------------------------------------------------------------------------
        |
        | null:
        |     Keep Bootstrap's default value.
        |
        | Otherwise use any valid CSS color.
        |
        */

        'semantic' => [

            'body' => [

                // Main body text color.
                // Example: '#212529'
                'color' => null,

                // Main page background.
                // Example: '#ffffff'
                'background' => null,
            ],

            'secondary' => [

                // Secondary text color.
                // Example: 'rgba(33, 37, 41, .75)'
                'color' => null,

                // Secondary background.
                // Example: '#e9ecef'
                'background' => null,
            ],

            'tertiary' => [

                // Tertiary / muted text color.
                // Example: 'rgba(33, 37, 41, .50)'
                'color' => null,

                // Tertiary background.
                // Example: '#f8f9fa'
                'background' => null,
            ],

            'emphasis' => [

                // High-emphasis text color.
                // Example: '#000000'
                'color' => null,
            ],

            'heading' => [

                // Global heading color.
                // null = inherit Bootstrap behavior.
                // Example: '#212529'
                'color' => null,
            ],

            'border' => [

                // Standard border color.
                // Example: '#dee2e6'
                'color' => null,

                // Semi-transparent border color.
                // Example: 'rgba(0, 0, 0, .175)'
                'translucent' => null,
            ],

            'link' => [

                // Default link color.
                // null = generated / Bootstrap default.
                // Example: '#0d6efd'
                'color' => null,

                // Link hover color.
                // null = generated / Bootstrap default.
                // Example: '#0a58ca'
                'hover' => null,

                // CSS text-decoration value.
                // Examples: 'underline', 'none'
                'decoration' => null,
            ],

            'code' => [

                // Inline <code> text color.
                // Example: '#d63384'
                'color' => null,
            ],

            'highlight' => [

                // Highlighted text color.
                // Example: '#212529'
                'color' => null,

                // Highlighted text background.
                // Example: '#fff3cd'
                'background' => null,
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | Generated Theme Color Overrides
        |--------------------------------------------------------------------------
        |
        | UomUI automatically generates:
        |
        | {color}-text-emphasis
        | {color}-bg-subtle
        | {color}-border-subtle
        |
        | for:
        |
        | primary, secondary, success, danger,
        | warning, info, light and dark.
        |
        | Normally leave this array empty.
        |
        | Add only values you explicitly want to override.
        |
        | Example:
        |
        | 'primary' => [
        |     'text_emphasis' => '#052c65',
        |     'bg_subtle' => '#cfe2ff',
        |     'border_subtle' => '#9ec5fe',
        | ],
        |
        */

        'overrides' => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Fonts Registry
    |--------------------------------------------------------------------------
    |
    | This section defines fonts AVAILABLE to UomUI.
    |
    | It does NOT decide which font a page uses.
    | Page Component will handle the active page font later.
    |
    | Supported source values:
    |
    | system  = font already available on the operating system/browser.
    | uomui   = font bundled with the UomUI package.
    | local   = font file supplied by the Laravel application.
    | url     = externally hosted font stylesheet/resource.
    |
    */

    'fonts' => [

        'bootstrap' => [

            // system | uomui | local | url
            'source' => 'system',

            // Bootstrap 5 default sans-serif stack.
            'family' => 'system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"',

            // Optional font file path.
            // Used mainly when source = local.
            // Example: 'fonts/MyFont.woff2'
            'path' => null,

            // Optional external URL.
            // Used when source = url.
            'url' => null,

            // CSS font-weight.
            // Examples: 400, 500, 600, '100 900'
            'weight' => null,

            // normal | italic | oblique
            'style' => 'normal',

            // auto | block | swap | fallback | optional
            'display' => 'swap',
        ],

        'cairo' => [

            // Cairo will be shipped with UomUI.
            'source' => 'uomui',

            'family' => 'Cairo',

            // Internal package path can be resolved by UomUI.
            'path' => null,

            'url' => null,

            // null = use provided Cairo weights.
            'weight' => null,

            // normal | italic | oblique
            'style' => 'normal',

            // auto | block | swap | fallback | optional
            'display' => 'swap',
        ],

        /*
        |--------------------------------------------------------------------------
        | Custom Font Example
        |--------------------------------------------------------------------------
        |
        | 'my-font' => [
        |     'source' => 'local',
        |     'family' => 'My Font',
        |     'path' => 'fonts/my-font.woff2',
        |     'url' => null,
        |     'weight' => '100 900',
        |     'style' => 'normal',
        |     'display' => 'swap',
        | ],
        |
        */
    ],

    /*
    |--------------------------------------------------------------------------
    | Typography
    |--------------------------------------------------------------------------
    |
    | null means:
    |     Keep Bootstrap's default value.
    |
    | Font selection is intentionally NOT defined here.
    |
    */

    'typography' => [

        'body' => [

            // Any valid CSS font-size.
            // Examples: '1rem', '16px', '1.05rem'
            'font_size' => null,

            // CSS font-weight.
            // Examples: 300, 400, 500, 600, 700
            'font_weight' => null,

            // Unitless number or CSS length.
            // Examples: 1.5, 1.6, '24px'
            'line_height' => null,
        ],

        'headings' => [

            // Global heading color.
            // Example: '#212529'
            // null = Bootstrap/inherit.
            'color' => null,

            // Heading weight.
            // Examples: 400, 500, 600, 700
            'font_weight' => null,

            // Examples: 1.2, 1.3
            'line_height' => null,

            'h1' => [

                // Examples: '2.5rem', '40px'
                'font_size' => null,
            ],

            'h2' => [

                // Examples: '2rem', '32px'
                'font_size' => null,
            ],

            'h3' => [

                // Examples: '1.75rem', '28px'
                'font_size' => null,
            ],

            'h4' => [

                // Examples: '1.5rem', '24px'
                'font_size' => null,
            ],

            'h5' => [

                // Examples: '1.25rem', '20px'
                'font_size' => null,
            ],

            'h6' => [

                // Examples: '1rem', '16px'
                'font_size' => null,
            ],
        ],

        'small' => [

            // Examples: '.875em', '.875rem', '14px'
            'font_size' => null,
        ],

        'lead' => [

            // Examples: '1.25rem', '20px'
            'font_size' => null,

            // Examples: 300, 400
            'font_weight' => null,
        ],

        'monospace' => [

            // null = Bootstrap default monospace stack.
            //
            // Example:
            // 'SFMono-Regular, Menlo, Monaco, Consolas, monospace'
            'font_family' => null,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Borders
    |--------------------------------------------------------------------------
    */

    'borders' => [

        // Any valid CSS border width.
        // Examples: '1px', '2px', '.1rem'
        // null = Bootstrap default.
        'width' => null,

        // solid | dashed | dotted | double | none
        // null = Bootstrap default.
        'style' => null,

        // Any CSS color.
        // null = Bootstrap semantic border color.
        'color' => null,

        // Any CSS color including rgba().
        // Example: 'rgba(0, 0, 0, .175)'
        'translucent' => null,

        /*
        | Border width utility scale.
        |
        | null = Bootstrap default:
        | 1 => 1px
        | 2 => 2px
        | 3 => 3px
        | 4 => 4px
        | 5 => 5px
        */

        'widths' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Border Radius
    |--------------------------------------------------------------------------
    */

    'rounded' => [

        // true  = enable rounded styles.
        // false = globally disable rounded styles where UomUI controls them.
        // null  = Bootstrap default.
        'enabled' => null,

        // Examples: '.375rem', '6px', '0'
        'default' => null,

        // Examples: '.25rem', '4px'
        'sm' => null,

        // Examples: '.5rem', '8px'
        'lg' => null,

        // Examples: '1rem', '16px'
        'xl' => null,

        // Examples: '2rem', '32px'
        'xxl' => null,

        // Examples: '50rem', '9999px'
        'pill' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Shadows
    |--------------------------------------------------------------------------
    */

    'shadows' => [

        // true  = enable component decorative shadows.
        // false = disable them.
        // null  = Bootstrap default behavior.
        'enabled' => null,

        // Any valid CSS box-shadow.
        //
        // Example:
        // '0 .125rem .25rem rgba(0, 0, 0, .075)'
        'sm' => null,

        // Example:
        // '0 .5rem 1rem rgba(0, 0, 0, .15)'
        'default' => null,

        // Example:
        // '0 1rem 3rem rgba(0, 0, 0, .175)'
        'lg' => null,

        // Example:
        // 'inset 0 1px 2px rgba(0, 0, 0, .075)'
        'inset' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Spacing
    |--------------------------------------------------------------------------
    */

    'spacing' => [

        // Base Bootstrap spacer.
        //
        // Any CSS length > 0.
        // Examples: '1rem', '16px', '.875rem'
        //
        // null = Bootstrap default.
        'base' => null,

        /*
        | Spacing utility scale.
        |
        | null = keep Bootstrap default scale:
        |
        | 0 => 0
        | 1 => .25 × spacer
        | 2 => .50 × spacer
        | 3 => 1.00 × spacer
        | 4 => 1.50 × spacer
        | 5 => 3.00 × spacer
        |
        | Custom example:
        |
        | 'scale' => [
        |     0 => 0,
        |     1 => '.25rem',
        |     2 => '.5rem',
        |     3 => '1rem',
        |     4 => '1.5rem',
        |     5 => '3rem',
        | ],
        |
        */

        'scale' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Focus Ring
    |--------------------------------------------------------------------------
    |
    | Bootstrap 5.3 exposes focus-ring variables globally.
    |
    */

    'focus' => [

        // Any CSS length.
        // Example: '.25rem'
        'width' => null,

        // Number from 0 to 1.
        // Example: .25
        'opacity' => null,

        // Any CSS color.
        // Example: 'rgba(13, 110, 253, .25)'
        //
        // null = derive from primary / Bootstrap default.
        'color' => null,

        // Any CSS length.
        // Examples: '0', '2px'
        'blur' => null,

        // Horizontal offset.
        // Examples: '0', '2px', '-2px'
        'x' => null,

        // Vertical offset.
        // Examples: '0', '2px', '-2px'
        'y' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Links
    |--------------------------------------------------------------------------
    */

    'links' => [

        // Any CSS color.
        // null = use semantic link color.
        'color' => null,

        // Any CSS color.
        // null = use semantic link hover color.
        'hover_color' => null,

        // underline | none
        // or any valid CSS text-decoration value.
        'decoration' => null,

        // underline | none
        // or any valid CSS text-decoration value.
        'hover_decoration' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Forms Validation
    |--------------------------------------------------------------------------
    */

    'validation' => [

        'valid' => [

            // Any CSS color.
            // null = Bootstrap success color.
            'color' => null,

            // Any CSS color.
            // null = Bootstrap success border color.
            'border_color' => null,
        ],

        'invalid' => [

            // Any CSS color.
            // null = Bootstrap danger color.
            'color' => null,

            // Any CSS color.
            // null = Bootstrap danger border color.
            'border_color' => null,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Transitions
    |--------------------------------------------------------------------------
    |
    | These values define UomUI's general transition preferences.
    |
    */

    'transitions' => [

        // true | false
        // null = use component / Bootstrap default.
        'enabled' => null,

        // Any valid CSS duration.
        // Examples: '.15s', '150ms', '.3s'
        'duration' => null,

        // CSS timing function.
        //
        // Examples:
        // 'ease'
        // 'ease-in'
        // 'ease-out'
        // 'ease-in-out'
        // 'linear'
        // 'cubic-bezier(...)'
        'timing' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Gradient
    |--------------------------------------------------------------------------
    */

    'gradient' => [

        // true | false
        // null = Bootstrap default behavior.
        'enabled' => null,

        // Any valid CSS gradient.
        //
        // Example:
        // 'linear-gradient(180deg, rgba(255,255,255,.15), rgba(255,255,255,0))'
        //
        // null = Bootstrap default.
        'value' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Theme Options
    |--------------------------------------------------------------------------
    |
    | These are high-level UomUI theme preferences.
    |
    | Some Bootstrap equivalents are Sass/build-time options.
    | UomUI can still use these values when generating or applying
    | its own theme output.
    |
    */

    'options' => [

        // true | false | null
        //
        // null = Bootstrap default.
        'rounded' => null,

        // true | false | null
        //
        // Bootstrap default is false for decorative component shadows.
        'shadows' => null,

        // true | false | null
        //
        // Controls gradient styling where supported.
        'gradients' => null,

        // true | false | null
        //
        // Controls CSS transitions/animations where supported by UomUI.
        'transitions' => null,

        // true | false | null
        //
        // Enables Bootstrap/UomUI dark-mode styling support.
        // This does NOT select the active page mode.
        'dark_mode_support' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Component Defaults
    |--------------------------------------------------------------------------
    |
    | These values define UomUI component defaults.
    |
    | null generally means:
    |     Use the component's own default or Bootstrap behavior.
    |
    | Explicit component attributes always override these settings.
    |
    */

    'components' => [

        'button' => [

            // primary | secondary | success | danger |
            // warning | info | light | dark | link
            'variant' => 'primary',

            // null | sm | lg
            'size' => null,

            // true | false
            'outline' => false,

            // true | false | null
            'rounded' => null,

            // CSS font-weight.
            // Examples: 400, 500, 600, 700
            'font_weight' => null,
        ],

        'input' => [

            // null | sm | lg
            'size' => null,

            // true | false | null
            'rounded' => null,
        ],

        'select' => [

            // null | sm | lg
            'size' => null,

            // true | false | null
            'rounded' => null,
        ],

        'textarea' => [

            // true | false | null
            'rounded' => null,
        ],

        'card' => [

            // true | false | null
            'border' => null,

            // true | false | null
            'rounded' => null,

            // false | true | sm | default | lg | null
            'shadow' => null,
        ],

        'alert' => [

            // primary | secondary | success | danger |
            // warning | info | light | dark
            'variant' => 'primary',

            // true | false
            'dismissible' => false,

            // true | false | null
            'rounded' => null,
        ],

        'badge' => [

            // primary | secondary | success | danger |
            // warning | info | light | dark
            'variant' => 'primary',

            // null | default | pill
            'rounded' => null,
        ],

        'table' => [

            // true | false
            'striped' => false,

            // true | false
            'bordered' => false,

            // true | false
            'hover' => false,

            // true | false
            'responsive' => true,

            // null | sm
            'size' => null,
        ],

        'modal' => [

            // true | false
            'centered' => false,

            // true | false
            'scrollable' => false,

            // true | false | static
            'backdrop' => true,

            // null | sm | lg | xl
            'size' => null,
        ],
    ],

];
