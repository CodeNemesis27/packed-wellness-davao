<?php

namespace App\Filament\Resources\WeeklyMealPlanResource\Widgets;

use App\Models\WeeklyMealPlan;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class WeeklyMealPlanStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Breakfast Meals', WeeklyMealPlan::query()->where('category', 'Breakfast')->count()),
            Stat::make('Lunch Meals', WeeklyMealPlan::query()->where('category', 'Lunch')->count()),
            Stat::make('Dinner Meals', WeeklyMealPlan::query()->where('category', 'Dinner')->count()),
            Stat::make('Snack Meals', WeeklyMealPlan::query()->where('category', 'Snack')->count()),
        ];
    }
}
