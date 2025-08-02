<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HowWeWorkResource\Pages;
use App\Filament\Resources\HowWeWorkResource\RelationManagers;
use App\Models\HowWeWork;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HowWeWorkResource extends Resource
{
    protected static ?string $model = HowWeWork::class;
        public static function getNavigationSort(): ?int
        {
            return 4;
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
                ->directory('how-we-work'),
            FileUpload::make('foto_1')
                ->label('Foto Langkah 1')
                ->required()
                ->image()
                ->directory('how-we-work'),
            FileUpload::make('foto_2')
                ->label('Foto Langkah 2')
                ->required()
                ->image()
                ->directory('how-we-work'),
            FileUpload::make('foto_3')
                ->label('Foto Langkah 3')
                ->required()
                ->image()
                ->directory('how-we-work'),
            FileUpload::make('foto_4')
                ->label('Foto Langkah 4')
                ->required()
                ->image()
                ->directory('how-we-work'),
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
                ->label('Foto Langkah 1')
                ->toggleable(),
            ImageColumn::make('foto_2')
                ->label('Foto Langkah 2')
                ->toggleable(),
            ImageColumn::make('foto_3')
                ->label('Foto Langkah 3')
                ->toggleable(),
            ImageColumn::make('foto_4')
                ->label('Foto Langkah 4')
                ->toggleable(),
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
            'index' => Pages\ListHowWeWorks::route('/'),
            'create' => Pages\CreateHowWeWork::route('/create'),
            'edit' => Pages\EditHowWeWork::route('/{record}/edit'),
        ];
    }
}
