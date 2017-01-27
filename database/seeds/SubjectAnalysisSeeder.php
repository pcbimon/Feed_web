<?php

use Illuminate\Database\Seeder;
use App\SubjectAnalysis;
class SubjectAnalysisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('subject_analyses')->delete();
        SubjectAnalysis::create([
          'name'=>'ความชื้น',
          'price'=>'200'
        ]);
        SubjectAnalysis::create([
          'name'=>'โปรตีน',
          'price'=>'400'
        ]);
        SubjectAnalysis::create([
          'name'=>'ไขมัน',
          'price'=>'550'
        ]);
        SubjectAnalysis::create([
          'name'=>'เยื้อใย',
          'price'=>'550'
        ]);
        SubjectAnalysis::create([
          'name'=>'เยื้อใยไขมันสูง',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'เถ้า',
          'price'=>'400'
        ]);
        SubjectAnalysis::create([
          'name'=>'เถ้าและAIA',
          'price'=>'200'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ-แคลเซียม',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ-ฟอสฟอรัส',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'โซเดียมไรด์',
          'price'=>'200'
        ]);
        SubjectAnalysis::create([
          'name'=>'NDF',
          'price'=>'550'
        ]);
        SubjectAnalysis::create([
          'name'=>'ADF',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'ADF-ADL',
          'price'=>'750'
        ]);
        SubjectAnalysis::create([
          'name'=>'พลังงานรวม',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แป้ง',
          'price'=>'650'
        ]);
        SubjectAnalysis::create([
          'name'=>'ยูริเอสแอคติวิตี้',
          'price'=>'500'
        ]);
        SubjectAnalysis::create([
          'name'=>'แทนนิน',
          'price'=>'1000'
        ]);
        SubjectAnalysis::create([
          'name'=>'โครมิกซ์ออกไซด์',
          'price'=>'500'
        ]);
        SubjectAnalysis::create([
          'name'=>'แอมโมเนีย',
          'price'=>'400'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Cu',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Cu',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Cu',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-K',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-NA',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Mg',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Mn',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Ca',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Se',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Zn',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Fe',
          'price'=>'600'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Al',
          'price'=>'600'
        ]);
    }
}
