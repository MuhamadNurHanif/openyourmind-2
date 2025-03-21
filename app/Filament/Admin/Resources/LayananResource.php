<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LayananResource\Pages;
use App\Filament\Admin\Resources\LayananResource\RelationManagers;
use App\Models\Layanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;

class LayananResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Layanan::class;

    protected static ?string $navigationGroup = 'Konseling';
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
            'publish'
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('jenis_layanan')
                    ->required()
                    ->label('Jenis Layanan'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_layanan')
                    ->sortable()
                    ->searchable()
                    ->label('Jenis Layanan'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                // forceDelete dipanggil dengan chaining
            ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLayanans::route('/'),
            'create' => Pages\CreateLayanan::route('/create'),
            'edit' => Pages\EditLayanan::route('/{record}/edit'),
        ];
    }
}
