<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationGroup = 'Management Account';
    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Nama Pengguna'),
                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->label('Email'),
                Forms\Components\Select::make('role')
                    ->options([
                        'admin' => 'Admin',
                        'contentwriter' => 'Content Writer',
                        'counseler' => 'Counselor',
                        'organizer' => 'Organizer',
                        'rekrutmen' => 'Rekrutmen',
                    ])
                    ->required()
                    ->label('Role'),
                Forms\Components\FileUpload::make('profile_photo_path')
                    ->label('Profile Photo')
                    ->disk('public')
                    ->directory('profile-photos')
                    ->image()
                    ->nullable()
                    ->helperText('Pilih foto untuk profil Anda')
                    ->maxSize(2048),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required(fn($record) => $record === null)
                    ->label('Password')
                    ->dehydrated(fn($state) => !empty($state))
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable()
                    ->label('Nama Pengguna'),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable()
                    ->label('Email'),
                Tables\Columns\TextColumn::make('role')
                    ->sortable()
                    ->label('Role'),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->label('Tanggal Dibuat'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('role')
                    ->options([
                        'admin' => 'Admin',
                        'contentwriter' => 'Content Writer',
                        'counseler' => 'Counselor',
                        'organizer' => 'Organizer',
                        'rekrutmen' => 'Rekrutmen',
                    ])
                    ->label('Role'),
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
            'index' => Pages\ListUser::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
