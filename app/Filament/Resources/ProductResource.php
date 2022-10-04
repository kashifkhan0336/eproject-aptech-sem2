<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required(),
                Forms\Components\RichEditor::make('desc')
                    ->required(),


                Forms\Components\TextInput::make('price')
                    ->required(),
                Forms\Components\TextInput::make('stock')
                    ->required(),
                Forms\Components\TextInput::make('product_number')
                    ->required()
                    ->minValue(5)
                    ->maxValue(5)
                    ->unique(ignorable: fn ($record) => $record),
                Forms\Components\TextInput::make('product_code')
                    ->required()
                    ->minValue(2)
                    ->maxValue(2),
                Forms\Components\Section::make('Images')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('media')
                            ->collection('main-image')
                            ->responsiveImages()
                            ->disableLabel(),
                    ])
                    ->collapsible(),

                Forms\Components\DateTimePicker::make('added')
                    ->required(),
                Forms\Components\Section::make('Toggles')
                    ->schema([
                        Toggle::make('is_featured')->inline()
                    ])
                    ->collapsible(),

            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\SpatieMediaLibraryImageColumn::make('product-image')
                    ->label('Image')
                    ->collection('main-image'),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('desc'),
                Tables\Columns\TextColumn::make('price'),
                Tables\Columns\TextColumn::make('stock'),
                Tables\Columns\TextColumn::make('product_number'),
                Tables\Columns\TextColumn::make('product_code'),
                Tables\Columns\TextColumn::make('main_image'),
                Tables\Columns\TextColumn::make('added')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
                Tables\Columns\ToggleColumn::make('is_featured')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
