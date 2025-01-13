<?php

namespace App\Filament\Admin\Resources\ClientCounselerResource\Pages;

use App\Filament\Admin\Resources\ClientCounselerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClientCounselers extends ListRecords
{
    protected static string $resource = ClientCounselerResource::class;

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('nama')
                ->sortable()
                ->searchable()
                ->label('nama'),
                TextColumn::make('email')
                ->label('email'),
                TextColumn::make('no_hp')
                ->label('no_hp'),
                TextColumn::make('domisili')
                ->label('keluhan'),
                TextColumn::make('jenis_layanan')
                ->label('jenis_layanan'),
        ];
    }
}
