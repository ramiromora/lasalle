<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use App\Meal;
use App\Schedule;
use App\Student;
use Response;

class MealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $requestData = $request->only(['place', 'student_id']);
        $requestData['student_id'] = isset(Hashids::decode($requestData['student_id'])[0])?
            Hashids::decode($requestData['student_id'])[0]:
            '0';
        $student = Student::Where('id',$requestData['student_id'])->first();
        if(isset($student))
        {
            date_default_timezone_set('America/La_Paz');
            $date=date("Y-m-d",time());
            $time=date("H:i:s",time());
            $schedule= Schedule::Where('date','LIKE',$date)->Where('start','<=', $time)->Where('finish','>=',$time);
            if($schedule->count() == 1)
            {
                $student_meals = Meal::whereBetween('eat_at', array($schedule->first()->date . ' ' . $schedule->first()->start, $schedule->first()->date . ' ' . $schedule->first()->finish))->
                Where('student_id',$requestData['student_id'])->
                count();
                if($student_meals >= 1)
                {
                    $data = array(
                        'code' => '502',
                        'message' => 'MAS DE UN INTENTO',
                        'data' => $requestData['student_id'] . '-' . $requestData['place']
                    );
                }
                else
                {
                    $requestData['eat_at'] = date("Y-m-d H:i:s", time());
                    $meal = Meal::create($requestData);
                    $data = array(
                        'code' => '500',
                        'message' => 'REGISTRO REALIZANDO',
                        'data' => $requestData['student_id'] . '-' . $requestData['place']
                    );
                }

            }
            else
            {
                $data = array(
                    'code' => '501',
                    'message' => 'FUERA DE HORARIO',
                    'data' => $requestData['student_id'] . '-' . $requestData['place']
                );
            }
        }
        else
        {
            $data = array(
                'code' => '503',
                'message' => 'DATOS INCORRECTOS',
                'data' => $requestData['student_id'] . '-' . $requestData['place']
            );
        }
        // return an error
        return Response::json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Meal::where('id', $id)->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
