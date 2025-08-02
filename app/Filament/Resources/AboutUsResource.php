<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsResource\Pages;
use App\Filament\Resources\AboutUsResource\RelationManagers;
use App\Models\AboutUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;
    public static function getNavigationSort(): ?int
        {
            return 2;
        }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

public static function form(Form $form): Form
{
    return $form
        ->schema([
            FileUpload::make('foto_head')
                ->label('Foto Kepala')
                ->required()
                ->image()
                ->directory('about-us'),
            FileUpload::make('foto_1')
                ->label('Foto Bagian 1')
                ->required()
                ->image()
                ->directory('about-us'),
            TextInput::make('judul_1')
                ->label('Judul Bagian 1')
                ->required()
                ->maxLength(255),
            Textarea::make('desc_1')
                ->label('Deskripsi Bagian 1')
                ->required()
                ->rows(5),
            FileUpload::make('foto_2')
                ->label('Foto Bagian 2')
                ->required()
                ->image()
                ->directory('about-us'),
            TextInput::make('judul_2')
                ->label('Judul Bagian 2')
                ->required()
                ->maxLength(255),
            Textarea::make('desc_2')
                ->label('Deskripsi Bagian 2')
                ->required()
                ->rows(5),
        ]);
}

   public static function table(Table $table): Table
    {
    return $table
        ->columns([
            ImageColumn::make('foto_head')
                ->label('Foto Kepala')
                ->toggleable(),
            ImageColumn::make('foto_1')
                ->label('Foto 1')
                ->toggleable(),
            ImageColumn::make('foto_2')
                ->label('Foto 2')
                ->toggleable(),
            TextColumn::make('judul_1')
                ->label('Judul Bagian 1')
                ->searchable()
                ->sortable(),
            TextColumn::make('desc_1')
                ->label('Deskripsi 1')
                ->limit(50)
                ->wrap(),
            TextColumn::make('judul_2')
                ->label('Judul Bagian 2')
                ->searchable()
                ->sortable(),
            TextColumn::make('desc_2')
                ->label('Deskripsi 2')
                ->limit(50)
                ->wrap(),
        ])
        // ...
        ->actions([
            Tables\Actions\EditAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\BulkActionGroup::make([
                Tables\Actions\DeleteBulkAction::make(),
            ]),
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
            'index' => Pages\ListAboutUs::route('/'),
            'create' => Pages\CreateAboutUs::route('/create'),
            'edit' => Pages\EditAboutUs::route('/{record}/edit'),
        ];
    }
}
