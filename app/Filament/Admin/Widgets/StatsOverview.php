<?php

namespace App\Filament\Admin\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Artikel;
use App\Models\Layanan;
use App\Models\ClientCounseler;
use App\Models\Organizer;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Layanan', Layanan::count())
                ->icon('heroicon-o-briefcase')
                ->color('primary'),

            Stat::make('Total Klien', ClientCounseler::count())
                ->icon('heroicon-o-user-group')
                ->color('warning'),

            Stat::make('Total Event', Organizer::count())
                ->icon('heroicon-o-star')
                ->color('danger'),
        ];
    }
}
