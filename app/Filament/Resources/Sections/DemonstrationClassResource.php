<?php

namespace App\Filament\Resources\Sections;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Sections\DemonstrationClass;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Sections\DemonstrationClassResource\Pages;
use App\Filament\Resources\Sections\DemonstrationClassResource\RelationManagers;

class DemonstrationClassResource extends Resource
{
    protected static ?string $model = DemonstrationClass::class;
    protected static ?string $navigationGroup = 'Sections';
    protected static ?string $navigationIcon = 'heroicon-c-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\TextInput::make('button_text')
                    ->maxLength(255)
                    ->required(),
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpan('full'),
                Forms\Components\FileUpload::make('image')
                    ->columnSpan('full'),
                // Forms\Components\Select::make('page_section_id')
                //     ->relationship('page_section', 'name')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('page_section.page.name')
                    ->searchable()
                    ->sortable(),
            ])
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
            'index' => Pages\ListDemonstrationClasses::route('/'),
            'create' => Pages\CreateDemonstrationClass::route('/create'),
            'edit' => Pages\EditDemonstrationClass::route('/{record}/edit'),
        ];
    }
}
