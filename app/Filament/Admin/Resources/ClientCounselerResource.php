<?php

namespace App\Filament\Admin\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\ClientCounseler;
use Pages\CreateClientCounseler;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Admin\Resources\ClientCounselerResource\Pages;
use App\Filament\Admin\Resources\ClientCounselerResource\RelationManagers;
use App\Filament\Admin\Resources\ClientCounselerResource\Pages\EditClientCounseler;
use App\Filament\Admin\Resources\ClientCounselerResource\Pages\ListClientCounselers;

class ClientCounselerResource extends Resource
{
    protected static ?string $model = ClientCounseler::class;

    protected static ?string $navigationGroup = 'Konseling';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')->label('Nama'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('no_hp')->label('No HP'),
                TextColumn::make('domisili')->label('Domisili'),
                TextColumn::make('keluhan')->label('Keluhan'),
                TextColumn::make('layanan.jenis_layanan')->label('Jenis Layanan'),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClientCounselers::route('/'),
            'create' => Pages\CreateClientCounseler::route('/create'),
            'edit' => Pages\EditClientCounseler::route('/{record}/edit'),
        ];
    }
}
