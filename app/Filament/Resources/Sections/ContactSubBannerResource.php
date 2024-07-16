<?php

namespace App\Filament\Resources\Sections;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Sections\ContactSubBanner;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Sections\ContactSubBannerResource\Pages;
use App\Filament\Resources\Sections\ContactSubBannerResource\RelationManagers;

class ContactSubBannerResource extends Resource
{
    protected static ?string $model = ContactSubBanner::class;
    protected static ?string $navigationGroup = 'Sections';
    protected static ?string $navigationIcon = 'heroicon-c-square-3-stack-3d';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->maxLength(255)
                    ->required(),
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
            'index' => Pages\ListContactSubBanners::route('/'),
            'create' => Pages\CreateContactSubBanner::route('/create'),
            'edit' => Pages\EditContactSubBanner::route('/{record}/edit'),
        ];
    }
}
