<?php

namespace Uom\UomUi\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeLayoutCommand extends Command
{
    protected $signature = 'uomui:layout
                            {--livewire : Generate a Livewire-compatible layout}
                            {--direction=auto : Page direction: auto, rtl or ltr}';

    protected $description =
        'Generate the default UomUI application layout';

    public function handle(): int
    {
        /*
        |--------------------------------------------------------------------------
        | Validate Direction
        |--------------------------------------------------------------------------
        */

        $direction = strtolower(
            (string) $this->option('direction')
        );

        $allowedDirections = [
            'auto',
            'rtl',
            'ltr',
        ];

        if (! in_array(
            $direction,
            $allowedDirections,
            true
        )) {
            $this->components->error(
                "Invalid direction [{$direction}]."
            );

            $this->line(
                'Allowed values: auto, rtl, ltr'
            );

            return self::FAILURE;
        }

        /*
        |--------------------------------------------------------------------------
        | Destination
        |--------------------------------------------------------------------------
        */

        $destination = resource_path(
            'views/layouts/app.blade.php'
        );

        /*
        |--------------------------------------------------------------------------
        | Protect Existing Layout
        |--------------------------------------------------------------------------
        */

        if (File::exists($destination)) {
            $this->components->error(
                'Layout already exists: resources/views/layouts/app.blade.php'
            );

            $this->line(
                'The existing file was not modified.'
            );

            return self::FAILURE;
        }

        /*
        |--------------------------------------------------------------------------
        | Select Stub
        |--------------------------------------------------------------------------
        */

        $stub = $this->option('livewire')
            ? 'layout-livewire.blade.stub'
            : 'layout.blade.stub';

        $stubPath = dirname(__DIR__, 2)
            . '/stubs/'
            . $stub;

        /*
        |--------------------------------------------------------------------------
        | Validate Stub
        |--------------------------------------------------------------------------
        */

        if (! File::exists($stubPath)) {
            $this->components->error(
                "UomUI layout stub was not found: {$stub}"
            );

            return self::FAILURE;
        }

        /*
        |--------------------------------------------------------------------------
        | Read Stub
        |--------------------------------------------------------------------------
        */

        $contents = File::get($stubPath);

        /*
        |--------------------------------------------------------------------------
        | Replace Generator Variables
        |--------------------------------------------------------------------------
        */

        $contents = str_replace(
            '{{UOMUI_DIRECTION}}',
            $direction,
            $contents
        );

        /*
        |--------------------------------------------------------------------------
        | Create Directory
        |--------------------------------------------------------------------------
        */

        File::ensureDirectoryExists(
            dirname($destination)
        );

        /*
        |--------------------------------------------------------------------------
        | Generate Layout
        |--------------------------------------------------------------------------
        */

        File::put(
            $destination,
            $contents
        );

        /*
        |--------------------------------------------------------------------------
        | Result
        |--------------------------------------------------------------------------
        */

        $type = $this->option('livewire')
            ? 'Livewire'
            : 'Blade';

        $this->components->info(
            "{$type} UomUI layout created successfully."
        );

        $this->line(
            'Created: resources/views/layouts/app.blade.php'
        );

        $this->line(
            "Direction: {$direction}"
        );

        if ($direction === 'auto') {
            $this->line(
                'Direction will be detected from the current Laravel locale.'
            );
        }

        return self::SUCCESS;
    }
}