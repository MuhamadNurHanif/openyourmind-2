<?php

namespace App\Filament\Admin\Resources\ArtikelResource\Pages;

use App\Filament\Admin\Resources\ArtikelResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms;
use Filament\Resources\Pages\Page;

class ShowArtikel extends ViewRecord
{
    protected static string $resource = ArtikelResource::class;

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('judul')
                ->label('Judul')
                ->disabled(),

            FileUpload::make('gambar')
                ->label('Gambar')
                ->disabled()
                ->image()
                ->directory('artikel-gambar')
                ->disk('public'),

            TextInput::make('kategori')
                ->label('Kategori')
                ->disabled(),

            TextInput::make('tgl_published')
                ->label('Tanggal Terbit')
                ->disabled()
                ->formatStateUsing(fn($state) => \Carbon\Carbon::parse($state)->translatedFormat('l, d F Y')),

            RichEditor::make('deskripsi')
                ->label('Deskripsi')
                ->disabled(),
        ];
    }
}
