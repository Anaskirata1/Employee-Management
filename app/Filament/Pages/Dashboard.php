<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard

{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.dashboard';

    public  function getWidgets(): array
    {
        return [
            \App\Filament\Widgets\EmployeeStatsOverview::class,

        ];
    }


}
