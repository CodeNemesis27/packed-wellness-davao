<?php

namespace App\Filament\Resources\WeeklyMealPlanResource\Pages;

use App\Filament\Resources\WeeklyMealPlanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWeeklyMealPlan extends CreateRecord
{
    protected static string $resource = WeeklyMealPlanResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
