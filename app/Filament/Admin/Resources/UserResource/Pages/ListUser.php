<?php

namespace App\Filament\Admin\Resources\UserResource\Pages;

use App\Filament\Admin\Resources\UserResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables;
use Filament\Actions\CreateAction;

class ListUser extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')->label('Name'),
            Tables\Columns\TextColumn::make('email')->label('Email'),
            Tables\Columns\TextColumn::make('created_at')->label('Created At')->date(),
        ];
    }

    protected function getTableFilters(): array
    {
        return UserResource::table($this->table)->getFilters();
    }

    protected function getTableBulkActions(): array
    {
        return UserResource::table($this->table)->getBulkActions();
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Create Account')
                ->color('success')
                ->url(fn() => route('filament.admin.resources.users.create')),
        ];
    }
}
