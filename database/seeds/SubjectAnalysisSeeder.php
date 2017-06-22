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
          'name'=>'ความชื้น (อุณหภูมิ 135&#177;3 &#176;C)',
          'price'=>'200',
          'operationname'=>'AOAC Official Method (2016 ; 930.15)'
        ]);
        SubjectAnalysis::create([
          'name'=>'ความชื้น (อุณหภูมิ 103&#177;2 &#176;C)',
          'price'=>'200',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'โปรตีน',
          'price'=>'400',
          'operationname'=>'AOAC Official Method (2016 ; 988.05)'
        ]);
        SubjectAnalysis::create([
          'name'=>'ไขมัน',
          'price'=>'550',
          'operationname'=>'AOAC Official Method (2016 ; 920.39)'
        ]);
        SubjectAnalysis::create([
          'name'=>'เยื้อใย',
          'price'=>'550',
          'operationname'=>'AOAC Official Method (2016 ; 962.09)'
        ]);
        SubjectAnalysis::create([
          'name'=>'เยื้อใยไขมันสูง',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 962.09)'
        ]);
        SubjectAnalysis::create([
          'name'=>'เถ้า',
          'price'=>'400',
          'operationname'=>'AOAC Official Method (2016 ; 942.05)'
        ]);
        SubjectAnalysis::create([
          'name'=>'เถ้าล้างไขมัน',
          'price'=>'550',
          'operationname'=>'AOAC Official Method (2016 ; 942.05)'
        ]);
        SubjectAnalysis::create([
          'name'=>'เถ้าและAIA',
          'price'=>'450',
          'operationname'=>'Van Keulen, J.V. and B.A. Young, 1977'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ-แคลเซียม',
          'price'=>'400',
          'operationname'=>'Microwave digestion / ICP – OES'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ-ฟอสฟอรัส',
          'price'=>'400',
          'operationname'=>'Microwave digestion / ICP – OES'
        ]);
        SubjectAnalysis::create([
          'name'=>'โซเดียมไรด์',
          'price'=>'200',
          'operationname'=>'Titration Method (AOAC,1980 ข้อ 7.094)'
        ]);
        SubjectAnalysis::create([
          'name'=>'NDF',
          'price'=>'550',
          'operationname'=>'AOAC 2012 ; 2002.04'
        ]);
        SubjectAnalysis::create([
          'name'=>'ADF',
          'price'=>'600',
          'operationname'=>'AOAC 2012 ; 973.18'
        ]);
        SubjectAnalysis::create([
          'name'=>'ADF-ADL',
          'price'=>'750',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'พลังงานรวม',
          'price'=>'600',
          'operationname'=>'AOAC 2012 ; 973.18'
        ]);
        SubjectAnalysis::create([
          'name'=>'แป้ง',
          'price'=>'650',
          'operationname'=>'Polarimetric method'
        ]);
        SubjectAnalysis::create([
          'name'=>'การปลอมปน',
          'price'=>'300',
          'operationname'=>'Physical Methods/Chemical quick test'
        ]);
        SubjectAnalysis::create([
          'name'=>'พลังงานรวม (GE)',
          'price'=>'600',
          'operationname'=>'Analytical Methods for Oxygen Bombs'
        ]);
        SubjectAnalysis::create([
          'name'=>'ยูริเอสแอคติวิตี้',
          'price'=>'500',
          'operationname'=>'pH Meter, AOCS-Official method Ba9-59'
        ]);
        SubjectAnalysis::create([
          'name'=>'แทนนิน',
          'price'=>'1000',
          'operationname'=>'Burns,1971'
        ]);
        SubjectAnalysis::create([
          'name'=>'NPN',
          'price'=>'400',
          'operationname'=>'ดัดแปลงจาก AOAC,2012 ; 2011.11'
        ]);
        SubjectAnalysis::create([
          'name'=>'กรดแลกติค',
          'price'=>'200',
          'operationname'=>'Titration Method  (AOAC, 1980)'
        ]);
        SubjectAnalysis::create([
          'name'=>'ความหืน (AV)',
          'price'=>'300',
          'operationname'=>'AOAC, 1999'
        ]);
        SubjectAnalysis::create([
          'name'=>'กรดไขมันอิสระ (FFA)',
          'price'=>'300',
          'operationname'=>'AOAC, 1990'
        ]);
        SubjectAnalysis::create([
          'name'=>'ทริปซินอินฮิบิเตอร์',
          'price'=>'1000',
          'operationname'=>'Hamerstrand,G.E.,L.T.Black and J.D. Grover.1981'
        ]);
        SubjectAnalysis::create([
          'name'=>'การย่อยได้ด้วยเปปซิน',
          'price'=>'1500',
          'operationname'=>'AOAC official 971.09, 2012'
        ]);
        SubjectAnalysis::create([
          'name'=>'การย่อยได้ด้วยเปปซิน',
          'price'=>'1500',
          'operationname'=>'AOAC official 971.09, 2012'
        ]);
        SubjectAnalysis::create([
          'name'=>'ยูเรีย',
          'price'=>'500',
          'operationname'=>'AOAC official method 967.07, 2012'
        ]);
        SubjectAnalysis::create([
          'name'=>'KOH (การละลายได้ของโปรตีน)',
          'price'=>'800',
          'operationname'=>'Araba and Dale.1990'
        ]);
        SubjectAnalysis::create([
          'name'=>'ความสุก-ดิบในถั่วเหลือง',
          'price'=>'50',
          'operationname'=>'Chemical quick test'
        ]);
        SubjectAnalysis::create([
          'name'=>'Acid binding capacity (pH4)',
          'price'=>'300',
          'operationname'=>'Titration method (pH4=300 , pH3=500 , pH2=700)'
        ]);
        SubjectAnalysis::create([
          'name'=>'ความเป็นกรด-ด่าง (pH)',
          'price'=>'100',
          'operationname'=>'pH Meter'
        ]);
        SubjectAnalysis::create([
          'name'=>'แอมโมเนีย',
          'price'=>'400',
          'operationname'=>'Titration Method'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Cu',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Cu',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-K',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-NA',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Mg',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Mn',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Ca',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Se',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Zn',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Fe',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
        SubjectAnalysis::create([
          'name'=>'แร่ธาตุ(Atomic Absorption)-Al',
          'price'=>'600',
          'operationname'=>'AOAC Official Method (2016 ; 934.01)'
        ]);
    }
}
