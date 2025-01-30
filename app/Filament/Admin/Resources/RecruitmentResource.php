<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RecruitmentResource\Pages;
use App\Filament\Admin\Resources\RecruitmentResource\RelationManagers;
use App\Models\Recruitment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecruitmentResource extends Resource
{
    protected static ?string $model = Recruitment::class;

    protected static ?string $navigationGroup = 'Recrutmen';

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tautan')
                    ->required()
                    ->label('Tautan'),
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->label('Judul'),
                Forms\Components\Textarea::make('deskripsi')
                    ->required()
                    ->label('Deskripsi'),
                Forms\Components\FileUpload::make('gambar')
                    ->label('Gambar')
                    ->directory('recruitmen-images'),
                Forms\Components\DatePicker::make('tgl_publish')
                    ->label('Tanggal Publikasi')
                    ->required(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tautan')
                    ->label('Tautan')
                    ->url(fn($record) => $record->tautan, true),
                Tables\Columns\TextColumn::make('tgl_publish')
                    ->label('Tanggal Publikasi')
                    ->date(),
                Tables\Columns\ImageColumn::make('gambar')
                    ->label('Gambar'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListRecruitment::route('/'),
            'create' => Pages\CreateRecruitment::route('/create'),
            'edit' => Pages\EditRecruitment::route('/{record}/edit'),
        ];
    }
}
