<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
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
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB; // Tambahkan ini

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;
    
    public static function getNavigationSort(): ?int
    {
        return 6;
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
                    ->directory('projects'),
                TextInput::make('judul')
                    ->label('Judul Proyek')
                    ->required()
                    ->maxLength(255),
                TextInput::make('lokasi_tahun')
                    ->label('Lokasi & Tahun')
                    ->required()
                    ->maxLength(255),
                Textarea::make('desc_lengkap')
                    ->label('Deskripsi Lengkap')
                    ->required()
                    ->rows(5),
                Textarea::make('desc_singkat_1')
                    ->label('Deskripsi Singkat 1')
                    ->required()
                    ->rows(2),
                Textarea::make('desc_singkat_2')
                    ->label('Deskripsi Singkat 2')
                    ->required()
                    ->rows(2),
                Textarea::make('desc_singkat_3')
                    ->label('Deskripsi Singkat 3')
                    ->required()
                    ->rows(2),
                FileUpload::make('foto_1')
                    ->label('Foto 1')
                    ->required()
                    ->image()
                    ->directory('projects'),
                FileUpload::make('foto_2')
                    ->label('Foto 2')
                    ->required()
                    ->image()
                    ->directory('projects'),
                FileUpload::make('foto_3')
                    ->label('Foto 3')
                    ->required()
                    ->image()
                    ->directory('projects'),
                FileUpload::make('foto_4')
                    ->label('Foto 4')
                    ->required()
                    ->image()
                    ->directory('projects'),
                Toggle::make('is_featured')
                    ->label('Tampilkan di Footer')
                    ->helperText('Pilih untuk menampilkan proyek ini di footer. Maksimal 3 proyek.')
                    ->default(false)
                    // Kode validasi baru ada di bawah ini
                    ->rules([
                        function ($record) {
                            return function (string $attribute, $value, \Closure $fail) use ($record) {
                                if ($value) { // Hanya validasi jika toggle diaktifkan
                                    $query = Project::where('is_featured', true);
                                    
                                    // Abaikan record yang sedang diedit jika ada
                                    if ($record) {
                                        $query->where('id', '!=', $record->id);
                                    }

                                    if ($query->count() >= 3) {
                                        $fail('Ada 3 proyek yang masih aktif, hilangkan salah satu.');
                                    }
                                }
                            };
                        },
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('foto_head')
                    ->label('Foto Kepala')
                    ->toggleable(),
                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('lokasi_tahun')
                    ->label('Lokasi & Tahun')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('desc_lengkap')
                    ->label('Deskripsi Lengkap')
                    ->limit(50)
                    ->wrap(),
                // Tambahkan kolom ini agar Anda bisa melihat status di tabel
                Tables\Columns\IconColumn::make('is_featured')
                    ->label('Footer')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}