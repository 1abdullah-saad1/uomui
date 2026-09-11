<?php

namespace Uom\UomUi\Console;

use Illuminate\Console\Command;
use Throwable;
use Uom\UomUi\Theme\ThemeBuilder;

class BuildThemeCommand extends Command
{
    protected $signature = 'uomui:build';

    protected $description =
        'Build UomUI theme assets from config/uomuitheme.php';

    public function handle(
        ThemeBuilder $builder
    ): int {
        $this->newLine();

        $this->components->info(
            'Building UomUI theme...'
        );

        try {
            $result = $builder->build();
        } catch (Throwable $e) {

            $this->components->error(
                'UomUI theme build failed.'
            );

            $this->newLine();

            $this->line(
                $e->getMessage()
            );

            $this->newLine();

            return self::FAILURE;
        }

        $this->components->info(
            'UomUI theme built successfully.'
        );

        $this->newLine();

        $this->line(
            '<fg=gray>Theme source:</> '
            . $result['theme_file']
        );

        foreach (
            $result['published_files']
            as $file
        ) {
            $this->line(
                '<fg=gray>Generated:</> '
                . $file
            );
        }

        $this->newLine();

        return self::SUCCESS;
    }
}