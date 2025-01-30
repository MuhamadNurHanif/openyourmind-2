<?php

namespace App\Filament\Admin\Resources\OrganizerResource\Pages;

use App\Filament\Admin\Resources\OrganizerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrganizer extends ListRecords
{
    protected static string $resource = OrganizerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make()
                ->label('Create Event Organizer')
                ->color('success')
                ->url(route('filament.admin.resources.organizers.create')),
        ];
    }
}
