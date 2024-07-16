<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Pages\PageSection;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PageSectionResource\Pages;
use App\Filament\Resources\PageSectionResource\RelationManagers;

class PageSectionResource extends Resource
{
    protected static ?string $model = PageSection::class;

    protected static ?string $navigationIcon = 'heroicon-m-view-columns';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('page_id')
                    ->disabled()
                    ->relationship(name: 'page', titleAttribute: 'name'),
                Select::make('section_id')
                    ->disabled()
                    ->relationship(name: 'section', titleAttribute: 'name'),
                TextInput::make('order')
                    ->label('Order')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('page.name')
                    ->searchable()
                    ->sortable()
                    ->label('Page'),
                TextColumn::make('section.name')
                    ->searchable()
                    ->sortable()
                    ->label('Section'),
                TextColumn::make('order')
                    ->searchable()
                    ->sortable()
                    ->label('Order'),
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
            'index' => Pages\ListPageSections::route('/'),
            'create' => Pages\CreatePageSection::route('/create'),
            'edit' => Pages\EditPageSection::route('/{record}/edit'),
        ];
    }
}
