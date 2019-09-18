<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use App\Student;
use App\Schedule;
use App\Meal;

class ExcelExport implements FromView
{

    public function view(): View
    {
        $students = Student::get();
        $schedules = Schedule::OrderBy('date', 'asc')->
        OrderBy('start', 'asc')->
        get();
        $i = 0;
        $model = array();
        foreach ($students as $item) {
            $j = 0;
            $meals = array();
            foreach ($schedules as $schedule) {
                $meals[$j] = $item->meals->whereBetween('eat_at', array($schedule->date . ' ' . $schedule->start, $schedule->date . ' ' . $schedule->finish))->count();
                $j++;
            }
            $model[$i] = array(
                'id' => $item->id,
                'name' => $item->name,
                'meal_1' => $meals[0],
                'meal_2' => $meals[1],
                'meal_3' => $meals[2],
                'meal_4' => $meals[3],
                'meal_5' => $meals[4],
                'meal_6' => $meals[5],
                'meal_7' => $meals[6],
                'meal_8' => $meals[7],
                'meal_9' => $meals[8],
                'total' => array_sum($meals)
            );
            $i++;
        }
        return view('layouts.report')->
            with('meals', $model);
    }

}