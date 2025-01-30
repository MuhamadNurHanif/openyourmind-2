<?php

namespace App\Filament\Admin\Resources\RecruitmentResource\Pages;

use App\Filament\Admin\Resources\RecruitmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecruitment extends ListRecords
{
    protected static string $resource = RecruitmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make()
                ->label('Create Recrutmen')
                ->color('success')
                ->url(route('filament.admin.resources.recruitments.create')),
        ];
    }
}
