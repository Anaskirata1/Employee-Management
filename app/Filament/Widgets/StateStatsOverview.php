<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\State;

class StateStatsOverview extends BaseWidget
{
    protected int|string|array $columnSpan = 4;
    protected static ?int $sort = 2;
    protected function getStats(): array
    {
        return [
             Stat::make('States', State::count()),
        ];
    }
}
