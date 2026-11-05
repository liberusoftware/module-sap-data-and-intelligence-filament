<?php

namespace Liberu\Presentation\Capability75d8f4cc1070;

use Filament\Contracts\Plugin;
use Filament\Panel;

/** Explicit panel extension point; no capabilities are implemented by the skeleton. */
final class CapabilityPlugin implements Plugin
{
    public static function make(): self
    {
        return new self();
    }

    public function getId(): string
    {
        return 'module-sap-data-and-intelligence-filament';
    }

    public function register(Panel $panel): void
    {
        // Register reviewed capability resources, pages or widgets here.
    }

    public function boot(Panel $panel): void
    {
        // Add lifecycle behavior only when its domain and authorization contracts are reviewed.
    }
}
