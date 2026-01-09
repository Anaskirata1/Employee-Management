<?php
namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Employee;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Employees', Employee::count()),
        ];
    }
}
