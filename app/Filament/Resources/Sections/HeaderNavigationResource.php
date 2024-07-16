<?php

namespace App\Filament\Resources\Sections;

use App\Filament\Resources\Sections\HeaderNavigationResource\Pages;
use App\Filament\Resources\Sections\HeaderNavigationResource\RelationManagers;
use App\Models\Sections\HeaderNavigation ;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HeaderNavigationResource extends Resource
{
    protected static ?string $model = HeaderNavigation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Name'),
                Select::make('type')
                    ->options([
                        'main' => 'Main Navbar',
                        'top' => 'Externals',
                    ])
                    ->required()
                    ->label('Type'),

                TextInput::make('link')
                    ->required()
                    ->maxLength(255)
                    ->label('Link'),

                TextInput::make('order')
                    ->required()
                    ->integer()
                    ->label('Order'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable(),
                TextColumn::make('type')
                    ->sortable(),
                TextColumn::make('link')->sortable(),
                TextColumn::make('order')->sortable(),
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
            'index' => Pages\ListHeaderNavigations::route('/'),
            'create' => Pages\CreateHeaderNavigation::route('/create'),
            'edit' => Pages\EditHeaderNavigation::route('/{record}/edit'),
        ];
    }
}
