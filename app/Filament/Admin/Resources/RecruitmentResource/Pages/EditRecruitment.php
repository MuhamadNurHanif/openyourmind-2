<?php

namespace App\Filament\Admin\Resources\RecruitmentResource\Pages;

use App\Filament\Admin\Resources\RecruitmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecruitment extends EditRecord
{
    protected static string $resource = RecruitmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
