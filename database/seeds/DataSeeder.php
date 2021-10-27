<?php

use Illuminate\Database\Seeder;
use App\Docs;
use Carbon\Carbon;
class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //tanggal 24
        Docs::create([
        'voc' => '19.07',
        'vbeban' => '17.46',
        'ibeban' => '0.38',
        'suhu' => '37.6',
        'irradiasi' => '941',
        'daya' => '6.63',
        'created_at' => Carbon::create('2021', '07', '24','09', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '24','09', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.33',
        'vbeban' => '17.6',
        'ibeban' => '0.39',
        'suhu' => '40.2',
        'irradiasi' => '954',
        'daya' => '6.86',
        'created_at' => Carbon::create('2021', '07', '24','10', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '24','10', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.78',
        'vbeban' => '17.96',
        'ibeban' => '0.4',
        'suhu' => '43.1',
        'irradiasi' => '978',
        'daya' => '7.18',
        'created_at' => Carbon::create('2021', '07', '24','11', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '24','11', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.24',
        'vbeban' => '18.5',
        'ibeban' => '0.41',
        'suhu' => '48.6',
        'irradiasi' => '1002',
        'daya' => '7.59',
        'created_at' => Carbon::create('2021', '07', '24','12', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '24','12', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.11',
        'vbeban' => '18.48',
        'ibeban' => '0.41',
        'suhu' => '46.6',
        'irradiasi' => '995',
        'daya' => '7.58',
        'created_at' => Carbon::create('2021', '07', '24','13', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '24','13', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.93',
        'vbeban' => '18.09',
        'ibeban' => '0.4',
        'suhu' => '44.8',
        'irradiasi' => '986',
        'daya' => '7.24',
        'created_at' => Carbon::create('2021', '07', '24','14', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '24','14', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.6',
        'vbeban' => '17.94',
        'ibeban' => '0.39',
        'suhu' => '41.5',
        'irradiasi' => '968',
        'daya' => '7.00',
        'created_at' => Carbon::create('2021', '07', '24','15', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '24','15', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.19',
        'vbeban' => '17.64',
        'ibeban' => '0.38',
        'suhu' => '37.4',
        'irradiasi' => '947',
        'daya' => '6.70',
        'created_at' => Carbon::create('2021', '07', '24','16', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '24','16', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '18.43',
        'vbeban' => '16.91',
        'ibeban' => '0.36',
        'suhu' => '33.4',
        'irradiasi' => '908',
        'daya' => '6.09',
        'created_at' => Carbon::create('2021', '07', '24','17', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '24','17', '00', '00', 'Asia/jakarta'),
        ]);
            

        //tanggal 25
        Docs::create([
        'voc' => '18.37',
        'vbeban' => '16.87',
        'ibeban' => '0.36',
        'suhu' => '30.7',
        'irradiasi' => '904',
        'daya' => '6.07',
        'created_at' => Carbon::create('2021', '07', '25','09', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '25','09', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.05',
        'vbeban' => '17.49',
        'ibeban' => '0.38',
        'suhu' => '35.7',
        'irradiasi' => '940',
        'daya' => '6.65',
        'created_at' => Carbon::create('2021', '07', '25','10', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '25','10', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.44',
        'vbeban' => '17.92',
        'ibeban' => '0.39',
        'suhu' => '38.7',
        'irradiasi' => '960',
        'daya' => '6.99',
        'created_at' => Carbon::create('2021', '07', '25','11', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '25','11', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.31',
        'vbeban' => '18.77',
        'ibeban' => '0.41',
        'suhu' => '48.4',
        'irradiasi' => '1005',
        'daya' => '7.70',
        'created_at' => Carbon::create('2021', '07', '25','12', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '25','12', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.21',
        'vbeban' => '18.6',
        'ibeban' => '0.41',
        'suhu' => '46.9',
        'irradiasi' => '1000',
        'daya' => '7.63',
        'created_at' => Carbon::create('2021', '07', '25','13', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '25','13', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20',
        'vbeban' => '18.41',
        'ibeban' => '0.4',
        'suhu' => '43.7',
        'irradiasi' => '989',
        'daya' => '7.36',
        'created_at' => Carbon::create('2021', '07', '25','14', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '25','14', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.7',
        'vbeban' => '18.06',
        'ibeban' => '0.39',
        'suhu' => '40.6',
        'irradiasi' => '974',
        'daya' => '7.04',
        'created_at' => Carbon::create('2021', '07', '25','15', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '25','15', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '18.91',
        'vbeban' => '17.33',
        'ibeban' => '0.37',
        'suhu' => '34.8',
        'irradiasi' => '933',
        'daya' => '6.41',
        'created_at' => Carbon::create('2021', '07', '25','16', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '25','16', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '18.43',
        'vbeban' => '16.9',
        'ibeban' => '0.36',
        'suhu' => '31.1',
        'irradiasi' => '908',
        'daya' => '6.08',
        'created_at' => Carbon::create('2021', '07', '25','17', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '25','17', '00', '00', 'Asia/jakarta'),
        ]);
            

        //tanggal 26
        Docs::create([
        'voc' => '18.61',
        'vbeban' => '17.06',
        'ibeban' => '0.37',
        'suhu' => '36.6',
        'irradiasi' => '917',
        'daya' => '6.31',
        'created_at' => Carbon::create('2021', '07', '26','09', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '26','09', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.36',
        'vbeban' => '17.7',
        'ibeban' => '0.39',
        'suhu' => '41.2',
        'irradiasi' => '956',
        'daya' => '6.90',
        'created_at' => Carbon::create('2021', '07', '26','10', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '26','10', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.04',
        'vbeban' => '18.5',
        'ibeban' => '0.4',
        'suhu' => '48.2',
        'irradiasi' => '991',
        'daya' => '7.40',
        'created_at' => Carbon::create('2021', '07', '26','11', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '26','11', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.86',
        'vbeban' => '19.02',
        'ibeban' => '0.42',
        'suhu' => '54',
        'irradiasi' => '1034',
        'daya' => '7.99',
        'created_at' => Carbon::create('2021', '07', '26','12', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '26','12', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.03',
        'vbeban' => '18.29',
        'ibeban' => '0.4',
        'suhu' => '48.6',
        'irradiasi' => '991',
        'daya' => '7.32',
        'created_at' => Carbon::create('2021', '07', '26','13', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '26','13', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.63',
        'vbeban' => '17.81',
        'ibeban' => '0.39',
        'suhu' => '41.9',
        'irradiasi' => '970',
        'daya' => '6.95',
        'created_at' => Carbon::create('2021', '07', '26','14', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '26','14', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.63',
        'vbeban' => '18.02',
        'ibeban' => '0.39',
        'suhu' => '39.6',
        'irradiasi' => '970',
        'daya' => '7.03',
        'created_at' => Carbon::create('2021', '07', '26','15', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '26','15', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.54',
        'vbeban' => '17.95',
        'ibeban' => '0.39',
        'suhu' => '38.4',
        'irradiasi' => '965',
        'daya' => '7.00',
        'created_at' => Carbon::create('2021', '07', '26','16', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '26','16', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.46',
        'vbeban' => '18.16',
        'ibeban' => '0.39',
        'suhu' => '35.4',
        'irradiasi' => '961',
        'daya' => '7.08',
        'created_at' => Carbon::create('2021', '07', '26','17', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '26','17', '00', '00', 'Asia/jakarta'),
        ]);

        //tanggal 27
        Docs::create([
        'voc' => '18.64',
        'vbeban' => '17.11',
        'ibeban' => '0.37',
        'suhu' => '34.3',
        'irradiasi' => '918',
        'daya' => '6.33',
        'created_at' => Carbon::create('2021', '07', '27','09', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '27','09', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '18.8',
        'vbeban' => '17.17',
        'ibeban' => '0.37',
        'suhu' => '35.9',
        'irradiasi' => '927',
        'daya' => '6.35',
        'created_at' => Carbon::create('2021', '07', '27','10', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '27','10', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.26',
        'vbeban' => '17.68',
        'ibeban' => '0.38',
        'suhu' => '40.8',
        'irradiasi' => '951',
        'daya' => '6.72',
        'created_at' => Carbon::create('2021', '07', '27','11', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '27','11', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.6',
        'vbeban' => '17.99',
        'ibeban' => '0.39',
        'suhu' => '42.3',
        'irradiasi' => '968',
        'daya' => '7.02',
        'created_at' => Carbon::create('2021', '07', '27','12', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '27','12', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.44',
        'vbeban' => '17.88',
        'ibeban' => '0.39',
        'suhu' => '41.6',
        'irradiasi' => '960',
        'daya' => '6.97',
        'created_at' => Carbon::create('2021', '07', '27','13', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '27','13', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.08',
        'vbeban' => '17.42',
        'ibeban' => '0.38',
        'suhu' => '38',
        'irradiasi' => '941',
        'daya' => '6.62',
        'created_at' => Carbon::create('2021', '07', '27','14', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '27','14', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '18.6',
        'vbeban' => '17.06',
        'ibeban' => '0.37',
        'suhu' => '34.7',
        'irradiasi' => '916',
        'daya' => '6.31',
        'created_at' => Carbon::create('2021', '07', '27','15', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '27','15', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '18.1',
        'vbeban' => '16.59',
        'ibeban' => '0.35',
        'suhu' => '30.7',
        'irradiasi' => '890',
        'daya' => '5.81',
        'created_at' => Carbon::create('2021', '07', '27','16', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '27','16', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '17.9',
        'vbeban' => '16.33',
        'ibeban' => '0.35',
        'suhu' => '29',
        'irradiasi' => '880',
        'daya' => '5.72',
        'created_at' => Carbon::create('2021', '07', '27','17', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '27','17', '00', '00', 'Asia/jakarta'),
        ]);

        // tanggal 28
        Docs::create([
        'voc' => '18.29',
        'vbeban' => '16.76',
        'ibeban' => '0.36',
        'suhu' => '30.9',
        'irradiasi' => '900',
        'daya' => '6.03',
        'created_at' => Carbon::create('2021', '07', '28','09', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '28','09', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '18.36',
        'vbeban' => '16.73',
        'ibeban' => '0.36',
        'suhu' => '32.2',
        'irradiasi' => '904',
        'daya' => '6.02',
        'created_at' => Carbon::create('2021', '07', '28','10', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '28','10', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.04',
        'vbeban' => '17.46',
        'ibeban' => '0.38',
        'suhu' => '37.5',
        'irradiasi' => '939',
        'daya' => '6.63',
        'created_at' => Carbon::create('2021', '07', '28','11', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '28','11', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.06',
        'vbeban' => '18.45',
        'ibeban' => '0.4',
        'suhu' => '46.8',
        'irradiasi' => '992',
        'daya' => '7.38',
        'created_at' => Carbon::create('2021', '07', '28','12', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '28','12', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.67',
        'vbeban' => '18.11',
        'ibeban' => '0.39',
        'suhu' => '42.7',
        'irradiasi' => '972',
        'daya' => '7.06',
        'created_at' => Carbon::create('2021', '07', '28','13', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '28','13', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.3',
        'vbeban' => '17.64',
        'ibeban' => '0.38',
        'suhu' => '39.9',
        'irradiasi' => '953',
        'daya' => '6.70',
        'created_at' => Carbon::create('2021', '07', '28','14', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '28','14', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.22',
        'vbeban' => '17.68',
        'ibeban' => '0.38',
        'suhu' => '36.7',
        'irradiasi' => '949',
        'daya' => '6.72',
        'created_at' => Carbon::create('2021', '07', '28','15', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '28','15', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.05',
        'vbeban' => '17.54',
        'ibeban' => '0.38',
        'suhu' => '34.5',
        'irradiasi' => '940',
        'daya' => '6.67',
        'created_at' => Carbon::create('2021', '07', '28','16', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '28','16', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '18.51',
        'vbeban' => '16.94',
        'ibeban' => '0.36',
        'suhu' => '31.2',
        'irradiasi' => '912',
        'daya' => '6.10',
        'created_at' => Carbon::create('2021', '07', '28','17', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '28','17', '00', '00', 'Asia/jakarta'),
        ]);


        //tanggal 29
        Docs::create([
        'voc' => '18.58',
        'vbeban' => '17.05',
        'ibeban' => '0.37',
        'suhu' => '33.3',
        'irradiasi' => '915',
        'daya' => '6.31',
        'created_at' => Carbon::create('2021', '07', '29','09', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '29','09', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.56',
        'vbeban' => '18.01',
        'ibeban' => '0.39',
        'suhu' => '42',
        'irradiasi' => '966',
        'daya' => '7.02',
        'created_at' => Carbon::create('2021', '07', '29','10', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '29','10', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.21',
        'vbeban' => '18.67',
        'ibeban' => '0.41',
        'suhu' => '46.6',
        'irradiasi' => '1000',
        'daya' => '7.65',
        'created_at' => Carbon::create('2021', '07', '29','11', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '29','11', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.65',
        'vbeban' => '19.01',
        'ibeban' => '0.42',
        'suhu' => '54.8',
        'irradiasi' => '1023',
        'daya' => '7.98',
        'created_at' => Carbon::create('2021', '07', '29','12', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '29','12', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '20.43',
        'vbeban' => '18.77',
        'ibeban' => '0.41',
        'suhu' => '51.6',
        'irradiasi' => '1012',
        'daya' => '7.70',
        'created_at' => Carbon::create('2021', '07', '29','13', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '29','13', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.73',
        'vbeban' => '18.11',
        'ibeban' => '0.4',
        'suhu' => '46.1',
        'irradiasi' => '975',
        'daya' => '7.24',
        'created_at' => Carbon::create('2021', '07', '29','14', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '29','14', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.79',
        'vbeban' => '18.17',
        'ibeban' => '0.4',
        'suhu' => '44',
        'irradiasi' => '978',
        'daya' => '7.27',
        'created_at' => Carbon::create('2021', '07', '29','15', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '29','15', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.25',
        'vbeban' => '17.66',
        'ibeban' => '0.38',
        'suhu' => '40',
        'irradiasi' => '950',
        'daya' => '6.71',
        'created_at' => Carbon::create('2021', '07', '29','16', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '29','16', '00', '00', 'Asia/jakarta'),
        ]);
        Docs::create([
        'voc' => '19.36',
        'vbeban' => '17.79',
        'ibeban' => '0.39',
        'suhu' => '37.7',
        'irradiasi' => '956',
        'daya' => '6.94',
        'created_at' => Carbon::create('2021', '07', '29','17', '00', '00', 'Asia/jakarta'),
        'updated_at' => Carbon::create('2021', '07', '29','17', '00', '00', 'Asia/jakarta'),
        ]);     
            
    }
}