<?php

namespace App\Filament\Resources\WeeklyMealPlanResource\Pages;

use App\Filament\Resources\WeeklyMealPlanResource;
use App\Filament\Resources\WeeklyMealPlanResource\Widgets\WeeklyMealPlanStats;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWeeklyMealPlans extends ListRecords
{
    protected static string $resource = WeeklyMealPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            WeeklyMealPlanStats::class
        ];
    }
}
