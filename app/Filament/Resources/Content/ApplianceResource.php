<?php

namespace App\Filament\Resources\Content;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Content\Appliance;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Content\ApplianceResource\Pages;
use App\Filament\Resources\Content\ApplianceResource\RelationManagers;

class ApplianceResource extends Resource
{
    protected static ?string $model = Appliance::class;
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image'),
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('button_text')
                    ->required(),
                Forms\Components\TextInput::make('button_url')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('button_text')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('button_url')
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
