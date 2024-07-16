<?php

namespace App\Filament\Resources\Sections;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Sections\ImageLeftTextRight;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Sections\ImageLeftTextRightResource\Pages;
use App\Filament\Resources\Sections\ImageLeftTextRightResource\RelationManagers;

class ImageLeftTextRightResource extends Resource
{
    protected static ?string $model = ImageLeftTextRight::class;
    protected static ?string $navigationGroup = 'Sections';
    protected static ?string $navigationIcon = 'heroicon-c-clipboard-document-list';
    protected static ?string $modelLabel = 'Image Left Text Right';
    protected static ?string $pluralModelLabel = 'Image Left Text Right';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\RichEditor::make('description')
                    ->required()
                    ->columnSpan('full'),
                Forms\Components\FileUpload::make('image'),
                // Forms\Components\Select::make('page_section_id')
                //     ->relationship('page_section', 'name')
                //     ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image'),
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
            'index' => Pages\ListImageLeftTextRights::route('/'),
            'create' => Pages\CreateImageLeftTextRight::route('/create'),
            'edit' => Pages\EditImageLeftTextRight::route('/{record}/edit'),
        ];
    }
}
