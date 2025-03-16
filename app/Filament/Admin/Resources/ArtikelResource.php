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
use Filament\Tables\Actions\Dropdown;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;

class ArtikelResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationGroup = 'Content Writer';

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';

    // shield role permission
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
                FileUpload::make('gambar')
                    ->label('Gambar')
                    ->image()
                    ->directory('artikel-gambar')
                    ->nullable()
                    ->disk('public'),
                RichEditor::make('deskripsi')
                    ->required()
                    ->label('Deskripsi')
                    ->fileAttachmentsDisk('public')
                    ->fileAttachmentsDirectory('attachments')
                    ->fileAttachmentsVisibility('private')
                    ->toolbarButtons([
                        'attachFiles',
                        'blockquote',
                        'bold',
                        'bulletList',
                        'codeBlock',
                        'h2',
                        'h3',
                        'italic',
                        'link',
                        'orderedList',
                        'redo',
                        'strike',
                        'underline',
                        'undo',
                    ])
                    ->maxLength(5000)
                    ->columnSpan('full')
                    ->columnSpan('full'),
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
                Tables\Columns\ImageColumn::make('gambar')
                    ->searchable(),
                TextColumn::make('Aksi')
                    ->label('Aksi'),
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
                ActionGroup::make([
                    EditAction::make()
                        ->label('Edit Data')
                        ->url(fn($record) => route('filament.admin.resources.artikels.edit', $record)),

                    ViewAction::make()
                        ->label('Show Artikel')
                        ->url(fn($record) => route('filament.admin.resources.artikels.show', $record)),

                    DeleteAction::make()
                        ->label('Delete Data')
                        ->action(fn($record) => $record->delete()),
                ])
                    ->label('Actions')
                    ->icon('heroicon-o-ellipsis-horizontal')
                    ->color('primary'),
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
