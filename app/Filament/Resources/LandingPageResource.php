<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandingPageResource\Pages;
use App\Filament\Resources\LandingPageResource\RelationManagers;
use App\Models\LandingPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LandingPageResource extends Resource
{
    protected static ?string $model = LandingPage::class;
    public static function getNavigationSort(): ?int
        {
            return 1;
        }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

public static function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('judul')
                ->label('Judul')
                ->required()
                ->maxLength(255),
            Textarea::make('desc')
                ->label('Deskripsi')
                ->required()
                ->rows(5),
            FileUpload::make('foto_1')
                ->label('Foto 1')
                ->required()
                ->image()
                ->directory('landing-page'),
            FileUpload::make('foto_2')
                ->label('Foto 2')
                ->required()
                ->image()
                ->directory('landing-page'),
        ]);
}

public static function table(Table $table): Table
{
    return $table
        ->columns([
            ImageColumn::make('foto_1')
                ->label('Foto 1')
                ->toggleable(),
            ImageColumn::make('foto_2')
                ->label('Foto 2')
                ->toggleable(),
            TextColumn::make('judul')
                ->label('Judul')
                ->searchable()
                ->sortable(),
            TextColumn::make('desc')
                ->label('Deskripsi')
                ->limit(50)
                ->wrap()
                ->searchable(),
        ])
        // ...
        ->filters([
            //
        ])
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
            'index' => Pages\ListLandingPages::route('/'),
            'create' => Pages\CreateLandingPage::route('/create'),
            'edit' => Pages\EditLandingPage::route('/{record}/edit'),
        ];
    }
}
