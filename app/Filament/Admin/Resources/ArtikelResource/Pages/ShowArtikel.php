<?php

namespace App\Filament\Admin\Resources\ArtikelResource\Pages;

use Filament\Resources\Pages\Page;
use App\Filament\Admin\Resources\ArtikelResource;

class ShowArtikel extends Page
{
    protected static string $resource = ArtikelResource::class;

    const RESOURCE = ArtikelResource::class;

    protected static string $view = 'artikel.show-artikel';

    public $record;

    public function mount($record): void
    {
        $this->record = ArtikelResource::getModel()::find($record);

        if (!$this->record) {
            abort(404, 'Artikel tidak ditemukan.');
        }
    }

    public function getMetaDescription(): ?string
    {
        return str()->limit(strip_tags($this->record->konten), 160);
    }

    public static function getResource(): string
    {
        return self::RESOURCE;
    }
}
