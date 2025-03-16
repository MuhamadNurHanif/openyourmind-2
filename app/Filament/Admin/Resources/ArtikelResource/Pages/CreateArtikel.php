<?php

namespace App\Filament\Admin\Resources\ArtikelResource\Pages;

use App\Filament\Admin\Resources\ArtikelResource;
use Filament\Resources\Pages\CreateRecord;
use app\models\user;

class CreateArtikel extends CreateRecord
{
    protected static string $resource = ArtikelResource::class;

    public function publish(User $user)
    {
        return $user->can('publish_post');
    }
    protected function getFormSchema(): array
    {
        return ArtikelResource::form($this->form)->getSchema();
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }
}
