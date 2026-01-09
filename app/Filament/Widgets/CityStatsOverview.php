<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\City;

class CityStatsOverview extends BaseWidget
{
     protected int|string|array $columnSpan = 4;
    protected static ?int $sort = 3;
    protected function getStats(): array
    {
        return [
            Stat::make('Cities', City::count()),

        ];
    }
}
