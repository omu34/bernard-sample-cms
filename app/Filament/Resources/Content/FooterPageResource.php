<?php

namespace App\Filament\Resources\Content;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Filament\Clusters\Footer;
use App\Models\Content\FooterPage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Content\FooterPageResource\Pages;
use App\Filament\Resources\Content\FooterPageResource\RelationManagers;

class FooterPageResource extends Resource
{
    protected static ?string $model = FooterPage::class;
    protected static ?string $navigationIcon = 'heroicon-m-rectangle-group';
    protected static ?string $cluster = Footer::class;
    protected static ?string $modelLabel = 'Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\TextInput::make('url')
                    ->label('URL')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('url')
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
            'index' => Pages\ListFooterPages::route('/'),
            'create' => Pages\CreateFooterPage::route('/create'),
            'edit' => Pages\EditFooterPage::route('/{record}/edit'),
        ];
    }
}
