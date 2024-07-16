<?php

// namespace App\Filament\Resources\Sections;

// use Filament\Forms;
// use Filament\Tables;
// use Filament\Forms\Form;
// use Filament\Tables\Table;
// use Filament\Resources\Resource;
// use App\Models\Sections\LatestVideo;
// use Illuminate\Database\Eloquent\Builder;
// use Illuminate\Database\Eloquent\SoftDeletingScope;
// use App\Filament\Resources\Sections\LatestVideosResource\Pages;
// use App\Filament\Resources\Sections\LatestVideosResource\RelationManagers;

// class LatestVideosResource extends Resource
// {
//     protected static ?string $model = LatestVideo::class;
//     protected static ?string $navigationGroup = 'Sections';
//     protected static ?string $navigationIcon = 'heroicon-m-cube';

//     public static function form(Form $form): Form
//     {
//         return $form
//             ->schema([
//                 Forms\Components\TextInput::make('title')
//                     ->maxLength(255)
//                     ->required(),
//                 Forms\Components\TextInput::make('button_text')
//                     ->maxLength(255)
//                     ->required(),
//                 Forms\Components\TextInput::make('button_url')
//                     ->maxLength(255)
//                     ->required(),
//                 // Forms\Components\Select::make('page_section_id')
//                 //     ->relationship('page_section', 'name')
//                 //     ->required(),
//             ]);
//     }

//     public static function table(Table $table): Table
//     {
//         return $table
//             ->columns([
//                 Tables\Columns\TextColumn::make('title')
//                     ->searchable()
//                     ->sortable(),
//                 Tables\Columns\TextColumn::make('button_text')
//                     ->searchable()
//                     ->sortable(),
//                 Tables\Columns\TextColumn::make('button_url')
//                     ->searchable()
//                     ->sortable(),
//                 Tables\Columns\TextColumn::make('page_section.page.name')
//                     ->searchable()
//                     ->sortable(),
//             ])
//             ->filters([
//                 //
//             ])
//             ->actions([
//                 Tables\Actions\EditAction::make(),
//             ])
//             ->bulkActions([
//                 Tables\Actions\BulkActionGroup::make([
//                     Tables\Actions\DeleteBulkAction::make(),
//                 ]),
//             ]);
//     }

//     public static function getRelations(): array
//     {
//         return [
//             //
//         ];
//     }

//     public static function getPages(): array
//     {
//         return [
//             'index' => Pages\ListLatestVideos::route('/'),
//             'create' => Pages\CreateLatestVideos::route('/create'),
//             'edit' => Pages\EditLatestVideos::route('/{record}/edit'),
//         ];
//     }
// }





namespace App\Filament\Resources\Sections;

use App\Filament\Resources\Sections\LatestVideoResource\Pages;
use App\Filament\Resources\Sections\LatestVideoResource\RelationManagers;
use App\Models\Sections\LatestVideo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LatestVideoResource extends Resource
{
    protected static ?string $model = LatestVideo::class;
    protected static ?string $navigationGroup = 'Sections';
    protected static ?string $navigationIcon = 'heroicon-m-cube';

    protected static ?string $label = 'Latest Video';

    protected static ?string $pluralLabel = 'Latest Videos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('link')
                    ->label('Link')
                    ->required(),
                Forms\Components\TextInput::make('likes')
                    ->label('Likes')
                    ->required(),
                Forms\Components\TextInput::make('views')
                    ->label('Views')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Description')
                    ->required(),
                Forms\Components\FileUpload::make('file_path')
                    ->label('Video File')
                    ->directory('videos')
                    ->disk('public')
                    ->required(),
                Forms\Components\Toggle::make('is_featured')
                    ->label('Is Featured ?')
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('link')->label('Link')->sortable(),
                Tables\Columns\TextColumn::make('likes')->label('Likes')->sortable(),
                Tables\Columns\TextColumn::make('views')->label('Views')->sortable(),
                Tables\Columns\TextColumn::make('description')->label('Description')->sortable(),
                Tables\Columns\ImageColumn::make('file_path')->label('Video File'),
                Tables\Columns\BooleanColumn::make('is_featured')->label('Is Featured ?'),
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
            'index' => Pages\ListLatestVideos::route('/'),
            'create' => Pages\CreateLatestVideo::route('/create'),
            'edit' => Pages\EditLatestVideo::route('/{record}/edit'),
        ];
    }
}
