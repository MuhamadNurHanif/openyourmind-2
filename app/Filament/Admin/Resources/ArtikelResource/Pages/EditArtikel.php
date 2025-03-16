<?php

namespace App\Filament\Admin\Resources\ArtikelResource\Pages;

use App\Filament\Admin\Resources\ArtikelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use app\models\user;

class EditArtikel extends EditRecord
{
    protected static string $resource = ArtikelResource::class;

    public function publish(User $user)
    {
        return $user->can('edit_post');
    }

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['tgl_published'] = \Carbon\Carbon::parse($data['tgl_published'])->format('Y-m-d');
        return $data;
    }
}
