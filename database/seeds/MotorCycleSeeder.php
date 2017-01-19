<?php

use Illuminate\Database\Seeder;
use App\Models\MotorCycleModels;
class MotorCycleSeeder extends Seeder {

    public function run()
    {
        DB::table('motorcycles')->delete();
        MotorCycleModels::create([
            'id_category' => 1,
            'registration_no'=>'D 1234 XC',
            'name' =>'Honda CB750',
            'year' =>1979,
            'engine'=>'4 Stroke,4 Cylinder',
            'capacity'=>750,
            'dimensions'=>'2210x770x1150',
            'weight' => 227,
            'feature1'=>'double disc brake',
            'feature2'=>'analog and digital speedometer',
            'feature3'=>'upside down suspension',
            'feature4'=>'vintage tyre',
            'color1'=>'#34c966',
            'color2'=>'#f1c22d',
            'color3'=>'#c7252c',
            'color4'=>'#1117df',
            'imagecolor1'=>'image/greenmotorimage_D1234XC.jpg',
            'imagecolor2'=>'image/yellowmotorimage_D1234XC.jpg',
            'imagecolor3'=>'image/redmotorimage_D1234XC.jpg',
            'imagecolor4'=>'image/bluemotorimage_D1234XC.jpg',
            'imageLogo'=>'imageLogoHONDA'
        ]);

        MotorCycleModels::create([
            'id_category' => 1,
            'registration_no'=>'D 1674 UI',
            'name' =>'Suzuki GS1000',
            'year' =>1982,
            'engine'=>'4 Stroke,4 Cylinder',
            'capacity'=>1000,
            'dimensions'=>'2200x700x1120',
            'weight' => 245,
            'feature1'=>'double disc brake',
            'feature2'=>'analog and digital speedometer',
            'feature3'=>'upside down suspension',
            'feature4'=>'vintage tyre',
            'color1'=>'#34c966',
            'color2'=>'#f1c22d',
            'color3'=>'#c7252c',
            'color4'=>'#1117df',
            'imagecolor1'=>'image/greenmotorimage_1.jpg',
            'imagecolor2'=>'image/yellowmotorimage_1.jpg',
            'imagecolor3'=>'image/redmotorimage_1.jpg',
            'imagecolor4'=>'image/bluemotorimage_1.jpg',
            'imageLogo'=>'imageLogoSUZUKI'
        ]);

        MotorCycleModels::create([
            'id_category' => 1,
            'registration_no'=>'D 1454 TV',
            'name' =>'Yamaha XS650',
            'year' =>1973,
            'engine'=>'4 Stroke,4 Cylinder',
            'capacity'=>650,
            'dimensions'=>'2210x770x1150',
            'weight' => 218,
            'feature1'=>'double disc brake',
            'feature2'=>'analog and digital speedometer',
            'feature3'=>'upside down suspension',
            'feature4'=>'vintage tyre',
            'color1'=>'#34c966',
            'color2'=>'#f1c22d',
            'color3'=>'#c7252c',
            'color4'=>'#1117df',
            'imagecolor1'=>'image/greenmotorimage_1.jpg',
            'imagecolor2'=>'image/yellowmotorimage_1.jpg',
            'imagecolor3'=>'image/redmotorimage_1.jpg',
            'imagecolor4'=>'image/bluemotorimage_1.jpg',
            'imageLogo'=>'imageLogoYAMAHA'

        ]);

        MotorCycleModels::create([
            'id_category' => 2,
            'registration_no'=>'D 1354 KC',
            'name' =>'Harley Davidson Softail',
            'year' =>1960,
            'engine'=>'4 Stroke,2 Cylinder',
            'capacity'=>1100,
            'dimensions'=>'2270x750x1050',
            'weight' => 280,
            'feature1'=>'ape hanger bar',
            'feature2'=>'Chrome footstep',
            'feature3'=>'tear drop tank',
            'feature4'=>'',
            'color1'=>'#c7252c',
            'color2'=>'#f1c22d',
            'color3'=>'#34c966',
            'color4'=>'',
            'imagecolor1'=>'image/redmotorimage_2.jpg',
            'imagecolor2'=>'image/yellowmotorimage_2.jpg',
            'imagecolor3'=>'image/greenmotorimage_2.jpg',
            'imagecolor4'=>'',
            'imageLogo'=>'imageLogoHARLEY'
        ]);

        MotorCycleModels::create([
            'id_category' => 3,
            'registration_no'=>'D 1654 TR',
            'name' =>'Triumph Scrambler',
            'year' =>1982,
            'engine'=>'4 Stroke,2 Cylinder',
            'capacity'=>900,
            'dimensions'=>'2010x810x1100',
            'weight' => 190,
            'feature1'=>'Upside down suspension',
            'feature2'=>'Scrambler exhaust',
            'feature3'=>'',
            'feature4'=>'',
            'color1'=>'#c7252c',
            'color2'=>'#f1c22d',
            'color3'=>'',
            'color4'=>'',
            'imagecolor1'=>'image/redmotorimage_3.jpg',
            'imagecolor2'=>'image/yellowmotorimage_3.jpg',
            'imagecolor3'=>'',
            'imagecolor4'=>'',
            'imageLogo'=>'imageLogoTRIUMPH'
        ]);

    }
}