<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Artikel;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Filament\Widgets\LineChartWidget;
use Illuminate\Support\Facades\DB;

class ArtikelChart extends LineChartWidget
{
    protected static ?string $heading = 'Statistik Artikel';
    protected static ?string $pollingInterval = '10s';
    protected static ?string $maxHeight = '150px';

    protected function getData(): array
    {
        // Statistik artikel per bulan
        $monthlyData = Trend::model(Artikel::class)
            ->between(
                start: now()->subYear(),
                end: now(),
            )
            ->perMonth()
            ->count();

        // Statistik artikel berdasarkan kategori
        $categoryData = Artikel::selectRaw('kategori, COUNT(*) as total')
            ->groupBy('kategori')
            ->get();


        // Statistik artikel berdasarkan tanggal publikasi
        $dateData = Artikel::selectRaw('DATE(created_at) as tanggal, COUNT(*) as total')
            ->groupBy('tanggal')
            ->orderBy('tanggal', 'asc')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Artikel per Bulan',
                    'data' => $monthlyData->map(fn(TrendValue $value) => $value->aggregate),
                    'borderColor' => '#3B82F6',
                    'backgroundColor' => 'rgba(59, 130, 246, 0.2)',
                    'fill' => true,
                ],
                [
                    'label' => 'Artikel per Tanggal',
                    'data' => $dateData->pluck('total'),
                    'borderColor' => '#10B981',
                    'backgroundColor' => 'rgba(16, 185, 129, 0.2)',
                    'fill' => true,
                ],
            ],
            'labels' => $monthlyData->map(fn(TrendValue $value) => $value->date)->merge($dateData->pluck('tanggal')),
            'extra' => [
                'categoryData' => $categoryData->map(fn($item) => [
                    'kategori' => $item->kategori->nama ?? 'Tanpa Kategori',
                    'total' => $item->total
                ]),
            ],
        ];
    }

    protected function getOptions(): array
    {
        return [
            'plugins' => [
                'legend' => [
                    'position' => 'top',
                ],
                'tooltip' => [
                    'enabled' => true,
                ],
            ],
            'scales' => [
                'y' => [
                    'beginAtZero' => true,
                    'ticks' => [
                        'stepSize' => 1,
                    ],
                ],
            ],
        ];
    }
}
