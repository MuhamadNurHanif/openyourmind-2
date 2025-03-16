<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JadwalCounselorResource\Pages;
use App\Filament\Admin\Resources\JadwalCounselorResource\RelationManagers;
use App\Models\JadwalCounselor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;

class JadwalCounselorResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = JadwalCounselor::class;
    protected static ?string $navigationGroup = 'Konseling';
    protected static ?string $navigationIcon = 'heroicon-o-calendar';

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

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('nama_konselor')
                    ->required()
                    ->label('Nama Konselor'),
                DatePicker::make('tgl_konseling')
                    ->required()
                    ->label('Tanggal Konseling'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_konselor')
                    ->sortable()
                    ->searchable()
                    ->label('Nama Konselor'),
                TextColumn::make('tgl_konseling')
                    ->sortable()
                    ->label('Tanggal Konseling'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListJadwalCounselors::route('/'),
            'create' => Pages\CreateJadwalCounselor::route('/create'),
            'edit' => Pages\EditJadwalCounselor::route('/{record}/edit'),
            'show' => Pages\showJadwalCounselor::route('/{record}'),
        ];
    }
}
