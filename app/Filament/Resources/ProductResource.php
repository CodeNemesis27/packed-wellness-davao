<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-squares-2x2';

    protected static ?int $navigationSort = 0;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Product information details')
                        ->schema([
                            TextInput::make('name')
                                ->required()
                                ->columnSpanFull(),

                            Select::make('meal_category')
                                ->required()
                                ->options([
                                    'Balanced Diet' => 'Balanced Diet',
                                    'Bone Broth' => 'Bone Broth',
                                    'Detox Booster' => 'Detox Booster',
                                    'Detox Juice' => 'Detox Juice',
                                    'Detox Soup' => 'Detox Soup',
                                    'High Protein' => 'High Protein',
                                    'KETO' => 'KETO',
                                    'Low Calorie' => 'Low Calorie',
                                    'Medical Nutrition' => 'Medical Nutrition',
                                    'OMAD' => 'OMAD',
                                    'Pescatarian' => 'Pescatarian',
                                    'Pregnancy Support' => 'Pregnancy Support',
                                    'Salad' => 'Salad',
                                    'Smoothie' => 'Smoothie',
                                    'T-MAD' => 'T-MAD',
                                    'Vegan' => 'Vegan',
                                ])
                                ->label('Meal Category')
                                ->columnSpan(2),

                            TextInput::make('price')
                                ->required()
                                ->columnSpan(1)
                                ->numeric()
                                ->prefix('PHP'),


                        ])->columns(3)

                ])->columnSpan(2),

                Group::make()->schema([
                    Section::make('Associations')
                        ->schema([
                            FileUpload::make('image')
                                ->directory('products')
                                ->image()
                                ->required(),
                        ])

                ])->columnSpan(1),

            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->striped()
            ->defaultSort('created_at', 'desc')
            ->columns([
                ImageColumn::make('image')
                    ->circular(),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('price')
                    ->money('PHP'),
                TextColumn::make('meal_category')
                    ->badge()
                    ->searchable(),
                IconColumn::make('is_available')
                    ->label('Available')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->date('F j, Y')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->date('F j, Y')
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
