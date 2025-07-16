<?php

namespace App\Filament\Resources\WeeklyMealPlanResource\Pages;

use App\Filament\Resources\WeeklyMealPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWeeklyMealPlan extends EditRecord
{
    protected static string $resource = WeeklyMealPlanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
