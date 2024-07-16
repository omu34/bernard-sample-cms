<?php

namespace App\Filament\Resources\Sections;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Sections\Appliance;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use App\Models\Sections\ApplianceSection;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Sections\ApplianceResource\Pages;
use App\Filament\Resources\Sections\ApplianceResource\RelationManagers;

class ApplianceResource extends Resource
{
    protected static ?string $model = ApplianceSection::class;
    protected static ?string $navigationGroup = 'Sections';
    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                RichEditor::make('description')
                    ->required()
                    ->columnSpan('full'),
                // Select::make('page_section_id')
                //     ->disabled()
                //     ->relationship(name: 'page_section', titleAttribute: 'order'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('page_section.page.name')
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
            'index' => Pages\ListAppliances::route('/'),
            'create' => Pages\CreateAppliance::route('/create'),
            'edit' => Pages\EditAppliance::route('/{record}/edit'),
        ];
    }
}
