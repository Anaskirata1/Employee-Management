<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Department;

class DepartmentStatsOverview extends BaseWidget
{
    protected int|string|array $columnSpan = 4;
    protected static ?int $sort = 4;
    protected function getStats(): array
    {
        return [
            Stat::make('Departments', Department::count()),

        ];
    }
}
