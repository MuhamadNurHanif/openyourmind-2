<?php

namespace App\Filament\Admin\Resources\RecruitmentResource\Pages;

use App\Filament\Admin\Resources\RecruitmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecruitments extends ListRecords
{
    protected static string $resource = RecruitmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
