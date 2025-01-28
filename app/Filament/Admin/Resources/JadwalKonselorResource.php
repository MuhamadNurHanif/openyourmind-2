<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\JadwalKonselorResource\Pages;
use App\Filament\Admin\Resources\JadwalKonselorResource\RelationManagers;
use App\Models\JadwalKonselor;
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

class JadwalKonselorResource extends Resource
{
    protected static ?string $model = JadwalKonselor::class;
    protected static ?string $navigationGroup = 'Konseling';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            'index' => Pages\ListJadwalKonselors::route('/'),
            'create' => Pages\CreateJadwalKonselor::route('/create'),
            'edit' => Pages\EditJadwalKonselor::route('/{record}/edit'),
            'show' => Pages\ShowJadwalKonselor::route('/{record}'),
        ];
    }
}
