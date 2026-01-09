<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Country;

class CountryStatsOverview extends BaseWidget
{
    protected int|string|array $columnSpan = 4;
    protected static ?int $sort = 1;
    protected function getStats(): array
    {
        return [
            Stat::make( 'Country', Country::count()),
        ];
    }
}
