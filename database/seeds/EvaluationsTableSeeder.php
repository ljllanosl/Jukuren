<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class EvaluationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Horario 1
        DB::table('evaluations')->insert([
            'nombre' => 'Evaluacion 1',
            'tipo' => '1',
            'fechaInicio' => Carbon::createFromDate(2015, 5, 10),
            'fechaFin' => Carbon::createFromDate(2015, 5, 17),
            'indicaciones' => 'Subir a tiempo la evidencia a su portafolio',
            'estado' => '1',
            'performance_id' => '1',
            'schedule_id' => '1',
            'teacher_id' => '2',
        ]);

        DB::table('evaluations')->insert([
            'nombre' => 'Evaluacion 2',
            'tipo' => '1',
            'fechaInicio' => Carbon::createFromDate(2015, 4, 10),
            'fechaFin' => Carbon::createFromDate(2015, 4, 17),
            'indicaciones' => 'Subir a tiempo la evidencia a su portafolio',
            'estado' => '1',
            'performance_id' => '1',
            'schedule_id' => '1',
            'teacher_id' => '2',
        ]);
        //Horario 2
        DB::table('evaluations')->insert([
            'nombre' => 'Evaluacion 1',
            'tipo' => '1',
            'fechaInicio' => Carbon::createFromDate(2015, 8, 10),
            'fechaFin' => Carbon::createFromDate(2015, 8, 17),
            'indicaciones' => 'Subir a tiempo la evidencia a su portafolio',
            'estado' => '1',
            'performance_id' => '2',
            'schedule_id' => '2',
            'teacher_id' => '3',
        ]);

        DB::table('evaluations')->insert([
            'nombre' => 'Evaluacion 2',
            'tipo' => '1',
            'fechaInicio' => Carbon::createFromDate(2015, 8, 10),
            'fechaFin' => Carbon::createFromDate(2015, 8, 17),
            'indicaciones' => 'Subir a tiempo la evidencia a su portafolio',
            'estado' => '1',
            'performance_id' => '2',
            'schedule_id' => '2',
            'teacher_id' => '3',
        ]);
        //Horario 3
        DB::table('evaluations')->insert([
            'nombre' => 'Evaluacion 1',
            'tipo' => '1',
            'fechaInicio' => Carbon::createFromDate(2016, 5, 10),
            'fechaFin' => Carbon::createFromDate(2016, 5, 17),
            'indicaciones' => 'Subir a tiempo la evidencia a su portafolio',
            'estado' => '1',
            'performance_id' => '1',
            'schedule_id' => '3',
            'teacher_id' => '4',
        ]);

        DB::table('evaluations')->insert([
            'nombre' => 'Evaluacion 2',
            'tipo' => '1',
            'fechaInicio' => Carbon::createFromDate(2016, 5, 10),
            'fechaFin' => Carbon::createFromDate(2016, 5, 17),
            'indicaciones' => 'Subir a tiempo la evidencia a su portafolio',
            'estado' => '1',
            'performance_id' => '1',
            'schedule_id' => '3',
            'teacher_id' => '4',
        ]);
        //Horario 4
        DB::table('evaluations')->insert([
            'nombre' => 'Evaluacion 1',
            'tipo' => '1',
            'fechaInicio' => Carbon::createFromDate(2016, 8, 10),
            'fechaFin' => Carbon::createFromDate(2016, 8, 17),
            'indicaciones' => 'Subir a tiempo la evidencia a su portafolio',
            'estado' => '1',
            'performance_id' => '2',
            'schedule_id' => '4',
            'teacher_id' => '3',
        ]);

        DB::table('evaluations')->insert([
            'nombre' => 'Evaluacion 2',
            'tipo' => '1',
            'fechaInicio' => Carbon::createFromDate(2016, 8, 10),
            'fechaFin' => Carbon::createFromDate(2016, 8, 17),
            'indicaciones' => 'Subir a tiempo la evidencia a su portafolio',
            'estado' => '1',
            'performance_id' => '2',
            'schedule_id' => '4',
            'teacher_id' => '3',
        ]);
        //Horario 5
        DB::table('evaluations')->insert([
            'nombre' => 'Evaluacion 1',
            'tipo' => '1',
            'fechaInicio' => Carbon::createFromDate(2017, 5, 10),
            'fechaFin' => Carbon::createFromDate(2017, 5, 17),
            'indicaciones' => 'Subir a tiempo la evidencia a su portafolio',
            'estado' => '1',
            'performance_id' => '2',
            'schedule_id' => '5',
            'teacher_id' => '2',
        ]);

        DB::table('evaluations')->insert([
            'nombre' => 'Evaluacion 2',
            'tipo' => '1',
            'fechaInicio' => Carbon::createFromDate(2017, 5, 10),
            'fechaFin' => Carbon::createFromDate(2017, 5, 17),
            'indicaciones' => 'Subir a tiempo la evidencia a su portafolio',
            'estado' => '1',
            'performance_id' => '2',
            'schedule_id' => '5',
            'teacher_id' => '2',
        ]);
    }
}
