<?php

namespace App\Filament\Admin\Widgets;

use App\Models\Visitor;
use Filament\Widgets\ChartWidget;

class VisitorChart extends ChartWidget
{
    protected static ?string $heading = 'Statistik Pengunjung';

    protected function getType(): string
    {
        return 'pie';
    }

    protected function getData(): array
    {
        // Ambil data jumlah pengunjung berdasarkan tanggal
        $visitorData = Visitor::orderBy('date', 'asc')->get();

        return [
            'datasets' => [
                [
                    'data' => $visitorData->pluck('count')->toArray(),
                    'backgroundColor' => [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#F87979'
                    ],
                    'hoverBackgroundColor' => [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#4BC0C0',
                        '#9966FF',
                        '#F87979'
                    ],
                ],
            ],
            'labels' => $visitorData->pluck('date')->toArray(),
        ];
    }
}
