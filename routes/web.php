<?php

use App\Http\Controllers\HomeController;
use App\Models\WeeklyMealPlan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // $meal_categories = DB::table('meal_categories')->where('is_featured', 1)->get();
    // $weekly_meals = WeeklyMealPlan::with('product')
    //     ->orderBy('created_at', 'desc')
    //     ->get();
    $weekly_meals = WeeklyMealPlan::with('product')->get();

    return view('welcome', [
        // 'meal_categories' => $meal_categories,
        'weekly_meals' => $weekly_meals
    ]);
});
