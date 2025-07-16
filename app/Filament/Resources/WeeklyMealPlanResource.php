<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WeeklyMealPlanResource\Pages;
use App\Filament\Resources\WeeklyMealPlanResource\RelationManagers;
use App\Models\WeeklyMealPlan;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WeeklyMealPlanResource extends Resource
{
    protected static ?string $model = WeeklyMealPlan::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Weekly meal plan details')
                    ->schema([
                        Select::make('day')
                            ->required()
                            ->options([
                                'Monday' => 'Monday',
                                'Tuesday' => 'Tuesday',
                                'Wednesday' => 'Wednesday',
                                'Thursday' => 'Thursday',
                                'Friday' => 'Friday',
                            ]),

                        Select::make('category')
                            ->required()
                            ->options([
                                'Breakfast' => 'Breakfast',
                                'Lunch' => 'Lunch',
                                'Dinner' => 'Dinner',
                                'Snack' => 'Snack',
                            ]),

                        Select::make('product_id')
                            ->relationship('product', 'name')
                            ->preload()
                            ->searchable()
                            ->label('Product')
                            ->required()
                            ->columnSpanFull(),

                    ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('product.image')
                    ->label('Image')
                    ->circular(),
                TextColumn::make('product.name')
                    ->searchable(),
                TextColumn::make('day')
                    ->searchable(),
                TextColumn::make('category')
                    ->badge()
                    ->searchable()
                    ->colors([
                        'success' => 'Breakfast',
                        'info' => 'Lunch',
                        'warning' => 'Dinner',
                        'danger' => 'Snack'
                    ]),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('day')
                    ->options([
                        'Monday' => 'Monday',
                        'Tuesday' => 'Tuesday',
                        'Wednesday' => 'Wednesday',
                        'Thursday' => 'Thursday',
                        'Friday' => 'Friday',
                    ]),
                SelectFilter::make('category')
                    ->options([
                        'Breakfast' => 'Breakfast',
                        'Lunch' => 'Lunch',
                        'Dinner' => 'Dinner',
                        'Snack' => 'Snack',
                    ]),
            ])
            ->deferFilters()
            ->filtersTriggerAction(
                fn(Action $action) => $action
                    ->button()
                    ->label('Filter'),
            )
            // ->recordUrl(null)
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make()
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
        ;
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
            'index' => Pages\ListWeeklyMealPlans::route('/'),
            'create' => Pages\CreateWeeklyMealPlan::route('/create'),
            'edit' => Pages\EditWeeklyMealPlan::route('/{record}/edit'),
        ];
    }
}
