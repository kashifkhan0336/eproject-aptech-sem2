<?php

namespace App\Filament\Resources\CustomerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrdersRelationManager extends RelationManager
{
    protected static string $relationship = 'orders';

    protected static ?string $recordTitleAttribute = 'order_number';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('customer_id')
                    ->required(),
                TextInput::make('product_id')
                    ->required(),
                Select::make('delivery_type')
                    ->options(['1'=>"Easypaisa/Jazz Cash",'2'=>"Cash on delivery","3"=>"Credit/Debit card"])
                    ->required(),
                Select::make('status')
                    ->options(['pending'=>"Pending",'dispatched'=>"Dispatched","delivered"=>"Delivered"])
                    ->required(),


                Forms\Components\TextInput::make('order_number')
                    ->disabled()
                    ->helperText("AUTO GENERATED"),
                Forms\Components\DateTimePicker::make('ordered_on')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('order_number'),
                Tables\Columns\TextColumn::make('customer_id'),
                Tables\Columns\TextColumn::make('delivery_type'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('product_id'),
                Tables\Columns\TextColumn::make('ordered_on'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
}
