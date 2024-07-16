<?php

namespace App\Filament\Resources\Content;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Content\EventImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Content\EventImageResource\Pages;
use App\Filament\Resources\Content\EventImageResource\RelationManagers;

class EventImageResource extends Resource
{
    protected static ?string $model = EventImage::class;
    protected static ?string $navigationGroup = 'Content';
    protected static ?string $navigationIcon = 'heroicon-c-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('url')
                    ->label('Image'),
                Forms\Components\Select::make('event_id')
                    ->relationship(name: 'event', titleAttribute: 'title'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('url')
                    ->label('Image'),
                Tables\Columns\TextColumn::make('event.title')
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
            'index' => Pages\ListEventImages::route('/'),
            'create' => Pages\CreateEventImage::route('/create'),
            'edit' => Pages\EditEventImage::route('/{record}/edit'),
        ];
    }
}
