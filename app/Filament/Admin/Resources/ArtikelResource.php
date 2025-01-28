<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ArtikelResource\Pages;
use App\Models\Artikel;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('judul')
                    ->required()
                    ->label('Judul'),
                DatePicker::make('tgl_published')
                    ->required()
                    ->label('Tanggal Terbit'),
                Select::make('kategori')
                    ->options([
                        'tech' => 'Teknologi',
                        'business' => 'Bisnis',
                        'health' => 'Kesehatan',
                        'lifestyle' => 'Gaya Hidup',
                    ])
                    ->required()
                    ->label('Kategori'),
                RichEditor::make('deskripsi')
                    ->required()
                    ->label('Deskripsi')
                    ->toolbarButtons([
                        'bold',
                        'italic',
                        'underline',
                        'link',
                        'bullets',
                        'numbering',
                        'quote',
                        'code',
                        'redo',
                        'undo'
                    ])
                    ->maxLength(5000),
                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->directory('artikel-gambar')
                    ->nullable()
                    ->disk('public'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->sortable()
                    ->searchable()
                    ->label('Judul'),
                TextColumn::make('kategori')
                    ->sortable()
                    ->label('Kategori'),
                TextColumn::make('tgl_published')
                    ->sortable()
                    ->label('Tanggal Terbit'),
                TextColumn::make('deskripsi')
                    ->limit(100)
                    ->label('Deskripsi'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('kategori')
                    ->options([
                        'tech' => 'Teknologi',
                        'business' => 'Bisnis',
                        'health' => 'Kesehatan',
                        'lifestyle' => 'Gaya Hidup',
                    ])
                    ->label('Kategori'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArtikel::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
            'show' => Pages\ShowArtikel::route('/{record}'),
        ];
    }
}
