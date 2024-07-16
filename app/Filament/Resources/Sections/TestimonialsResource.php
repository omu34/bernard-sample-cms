<?php

namespace App\Filament\Resources\Sections;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use App\Models\Sections\Testimonials;
use Illuminate\Database\Eloquent\Builder;
use App\Models\Sections\TestimonialsSection;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\Sections\TestimonialsResource\Pages;
use App\Filament\Resources\Sections\TestimonialsResource\RelationManagers;

class TestimonialsResource extends Resource
{
    protected static ?string $model = TestimonialsSection::class;
    protected static ?string $navigationGroup = 'Sections';
    protected static ?string $navigationIcon = 'heroicon-m-folder-plus';

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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonials::route('/create'),
            'edit' => Pages\EditTestimonials::route('/{record}/edit'),
        ];
    }
}
