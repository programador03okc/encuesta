<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'user' => 'cramirez@protecnologia.pe',
            'name_short' => 'Carla  Ramirez',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'compras@protecnologia.pe',
            'name_short' => 'Compras',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'jefatura@protecnologia.pe',
            'name_short' => 'Gerencia Protecnologia',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'licencias@protecnologia.pe',
            'name_short' => 'Licencias - Protecnologia',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'rrhh@protecnologia.pe',
            'name_short' => 'Recusos Humanos',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'soporte@protecnologia.pe',
            'name_short' => 'Soporte Protecnologia',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ventascomercial@protecnologia.pe',
            'name_short' => 'Ventas Comercial Protecnologia',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'eaquino@smartvalue.com.pe',
            'name_short' => 'Elmaer Aquino',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'facturaselectronicas@smartvalue.com.pe',
            'name_short' => 'Facturas Electronicas',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'comercial@smartvalue.com.pe',
            'name_short' => 'Gerencia Comercial Smartvalue',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'licencias@smartvalue.com.pe',
            'name_short' => 'Licencias - Smartvalue',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'rrhh@smartvalue.com.pe',
            'name_short' => 'Recursos  Humanos',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'soporte@smartvalue.com.pe',
            'name_short' => 'Soporte Smart Value Solutions',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ventas.lima@smartvalue.com.pe',
            'name_short' => 'Ventas Smartvalue',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'administracion@proyectec.com.pe',
            'name_short' => 'Administracion - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'informes@proyectec.com.pe',
            'name_short' => 'Asistente - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'facturaselectronicas@proyectec.com.pe',
            'name_short' => 'Facturacion - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'controlador@proyectec.com.pe',
            'name_short' => 'Jonathan  Deza - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'jcortezs@proyectec.com.pe',
            'name_short' => 'Juan Cortez - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'formulador@proyectec.com.pe',
            'name_short' => 'Leyla Sarabia - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'licencias@proyectec.com.pe',
            'name_short' => 'Licencias - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'corporativo@proyectec.com.pe',
            'name_short' => 'Propuestas - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'rrhh@proyectec.com.pe',
            'name_short' => 'Recursos Humanos',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'logistica@proyectec.com.pe',
            'name_short' => 'Richard Dorado - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'soporte@proyectec.com.pe',
            'name_short' => 'Soporte - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'pyventas01@proyectec.com.pe',
            'name_short' => 'Ventas Proyectec - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecsoporte07@okcomputer.com.pe',
            'name_short' => 'Abraham Valenzuela Mamani',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ventas2@okcomputer.com.pe',
            'name_short' => 'Alejandra Valencia',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'proyectos02@okcomputer.com.pe',
            'name_short' => 'Alex Castro Velasquez',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'alamas@okcomputer.com.pe',
            'name_short' => 'Alexander Lamas Velasquez',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecgarantia01@okcomputer.com.pe',
            'name_short' => 'Alexis More Chavez',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ventaslima2@okcomputer.com.pe',
            'name_short' => 'Alfoso  Rojas',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'cm1@okcomputer.com.pe',
            'name_short' => 'Ana Diaz',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ventas.lima@okcomputer.com.pe',
            'name_short' => 'Angel Moron',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'atencion@okcomputer.com.pe',
            'name_short' => 'Atencion Okc',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'boletasdepago@okcomputer.com.pe',
            'name_short' => 'Boleta De Pago',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'infraestructura@okcomputer.com.pe',
            'name_short' => 'Boris Correa Galluffe',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ventaslima3@okcomputer.com.pe',
            'name_short' => 'Candy Rodriguez',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'garantias@okcomputer.com.pe',
            'name_short' => 'Carlos Olivares Rebata',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'csarco@okcomputer.com.pe',
            'name_short' => 'Carmen Sarco Fernandez',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ticilo@okcomputer.com.pe',
            'name_short' => 'Catherine Cano',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'cobranzas@okcomputer.com.pe',
            'name_short' => 'Celia Rosa Mamani Canavire',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'coordinacion@okcomputer.com.pe',
            'name_short' => 'Cesar Ari Bautista',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'mkt2@okcomputer.com.pe',
            'name_short' => 'Cesar Vicuña',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'dapaza@okcomputer.com.pe',
            'name_short' => 'Dayana Apaza',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.contable.lima@okcomputer.com.pe',
            'name_short' => 'Dayanna Patricia',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ticsc@okcomputer.com.pe',
            'name_short' => 'Dioni Yovana  Turpo Ccopa',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'distribucion@okcomputer.com.pe',
            'name_short' => 'Disponible',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'comunidad@okcomputer.com.pe',
            'name_short' => 'Disponible',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ventasnorte@okcomputer.com.pe',
            'name_short' => 'Disponible',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ventaslima03@okcomputer.com.pe',
            'name_short' => 'Disponible',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.almacenlima2@okcomputer.com.pe',
            'name_short' => 'Dora Casales',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'programador2@okcomputer.com.pe',
            'name_short' => 'Edgar Alvarez',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ticmn@okcomputer.com.pe',
            'name_short' => 'Edgard William  Ramos Figueroa',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'rrhh@okcomputer.com.pe',
            'name_short' => 'Edwin  Medina Puma',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'almacen@okcomputer.com.pe',
            'name_short' => 'Efrain Medina Cardenas',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.rrhh@okcomputer.com.pe',
            'name_short' => 'Elizabeth Alejandra Martinez  Puccinelli',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'eaquino@okcomputer.com.pe',
            'name_short' => 'Elmer Aquino',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'qualea@okcomputer.com.pe',
            'name_short' => 'Elmer Aquino - Qualea Peru',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecsoporte05@okcomputer.com.pe',
            'name_short' => 'Erick Cordova',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'especialista1@okcomputer.com.pe',
            'name_short' => 'Especialista1',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'mktdig1@okcomputer.com.pe',
            'name_short' => 'Esther  Siuce',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'consumo@okcomputer.com.pe',
            'name_short' => 'Esther Siuce',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'preventasa@okcomputer.com.pe',
            'name_short' => 'Fabian Limaco Cueva',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'facturaselectronicas@okcomputer.com.pe',
            'name_short' => 'Facturas Electronicas',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'soporte.lima@okcomputer.com.pe',
            'name_short' => 'Felix Rafael Llamoca Rodriguez',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.almacenlima1@okcomputer.com.pe',
            'name_short' => 'Geraldine Capcha Isidro',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'marketing@okcomputer.com.pe',
            'name_short' => 'Gustavo Cespedes',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'hchavezc@okcomputer.com.pe',
            'name_short' => 'Heber Chavez Choque',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'hmedina@okcomputer.com.pe',
            'name_short' => 'Hebert  Medina',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecsoporte01@okcomputer.com.pe',
            'name_short' => 'Helber Pumacayo Olazabal',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'microsoft@okcomputer.com.pe',
            'name_short' => 'Helen Ayma',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.almacenlima@okcomputer.com.pe',
            'name_short' => 'Henry Lozano',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'supervisionss@okcomputer.com.pe',
            'name_short' => 'Huber  Flor Toledo',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecsoporte10@okcomputer.com.pe',
            'name_short' => 'Jarcod Rivas',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecsoporte09@okcomputer.com.pe',
            'name_short' => 'Jhardena Yauri Castañeda',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecsoporte04@okcomputer.com.pe',
            'name_short' => 'Jhon Lima Perez',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'impresion.ventas@okcomputer.com.pe',
            'name_short' => 'Johan Huaco',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'jmedina@okcomputer.com.pe',
            'name_short' => 'Jonathan Medina Barreda',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ger.marketing@okcomputer.com.pe',
            'name_short' => 'Jorge  Marin',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ventas.sur2@okcomputer.com.pe',
            'name_short' => 'Jorge Alfaro',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tesoreria01@okcomputer.com.pe',
            'name_short' => 'Jose  Paredes Gallegos',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'cas@okcomputer.com.pe',
            'name_short' => 'Jose Luis Francisco Ii Morales Mayorga',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'legal@okcomputer.com.pe',
            'name_short' => 'Juan  Arana',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'contadorgeneral@okcomputer.com.pe',
            'name_short' => 'Juan Bacilio Mamani Barreda',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'jbegazo@okcomputer.com.pe',
            'name_short' => 'Juan Begazo Gallegos',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'jcespinoza@okcomputer.com.pe',
            'name_short' => 'Juan Carlos Espinoza',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'garantias.lima@okcomputer.com.pe',
            'name_short' => 'Juan Cunya',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'consultor@okcomputer.com.pe',
            'name_short' => 'Juan Daniel Cortez Soto',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'almacen.moquegua@okcomputer.com.pe',
            'name_short' => 'Juan Pablo Maquera Garabito',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecsoporte06@okcomputer.com.pe',
            'name_short' => 'Karen Cusilayme Romero',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'compras.imports@okcomputer.com.pe',
            'name_short' => 'Karla Stefany  Quijano Rengifo',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'marketing1@okcomputer.com.pe',
            'name_short' => 'Katerine',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'seleccionproyectos@okcomputer.com.pe',
            'name_short' => 'Kathia Castillo Garcia',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecsoporte02@okcomputer.com.pe',
            'name_short' => 'Kleber Cabana Mendoza',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.almacenlima3@okcomputer.com.pe',
            'name_short' => 'Leandro Somontes Herrera',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'formuladorproyectos01@okcomputer.com.pe',
            'name_short' => 'Leyla  Sarabia Turpo',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'licenciasms@okcomputer.com.pe',
            'name_short' => 'Licencias - Ok Computer',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'afinidad@okcomputer.com.pe',
            'name_short' => 'Lindsey Moore Cutimbo',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'contabilidad@okcomputer.com.pe',
            'name_short' => 'Lourdes Amparo Mendoza Quispe',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.contable.03@okcomputer.com.pe',
            'name_short' => 'Luciana Malena',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'lreynoso@okcomputer.com.pe',
            'name_short' => 'Lucio Reynoso',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'sertecilo@okcomputer.com.pe',
            'name_short' => 'Luis Angel Flores Condori',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'compras@okcomputer.com.pe',
            'name_short' => 'Luis Armando Alegre Arciniega',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'mrivera@okcomputer.com.pe',
            'name_short' => 'Manuel Jesus Rivera Lujan',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'lenovo@okcomputer.com.pe',
            'name_short' => 'Maricielo Hinostroza',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecgarantia02@okcomputer.com.pe',
            'name_short' => 'Martin Vilca Punches',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'liquidaciontic@okcomputer.com.pe',
            'name_short' => 'Miguel Angel Flores Flores',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'almacen.ilo@okcomputer.com.pe',
            'name_short' => 'Miguel Gomez Inado',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'cadistaproyectos01@okcomputer.com.pe',
            'name_short' => 'Milfredy Marron Cutipa',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecsoporte03@okcomputer.com.pe',
            'name_short' => 'Nestor Vega Espejo',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'agerencia@okcomputer.com.pe',
            'name_short' => 'Norliz Susan Yucra Cruz',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'reclamos@okcomputer.com.pe',
            'name_short' => 'Ok Computer Reclamos',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'OkDistri@okcomputer.com.pe',
            'name_short' => 'Ok Distri',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistentegerproyectos02@okcomputer.com.pe',
            'name_short' => 'Patricia Cabrera',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'logistica.lima@okcomputer.com.pe',
            'name_short' => 'Paul Paz Vera',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'programador03@okcomputer.com.pe',
            'name_short' => 'Raul Salinas Valdivia',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'administracion@okcomputer.com.pe',
            'name_short' => 'Remy Felipe Barreda Medina',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'administracionventas@okcomputer.com.pe',
            'name_short' => 'Ricardo Jonathan  Visbal Palacios',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'logistica@okcomputer.com.pe',
            'name_short' => 'Richard Baltazar Dorado Baca',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'programador01@okcomputer.com.pe',
            'name_short' => 'Rocio Condori Palomino',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'tecsoporte08@okcomputer.com.pe',
            'name_short' => 'Ronald Ojeda Nina',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'controlinterno@okcomputer.com.pe',
            'name_short' => 'Rosa Lourdes Huanca Ccalli',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.gerproyectos@okcomputer.com.pe',
            'name_short' => 'Rosangela  Arriaga L.',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente@okcomputer.com.pe',
            'name_short' => 'Rosmery Ventura',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.contable.02@okcomputer.com.pe',
            'name_short' => 'Sheyla Karolyne Lazo Condori',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'auxiliar.logistica@okcomputer.com.pe',
            'name_short' => 'Silvia Nashnate',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'pyventas03@okcomputer.com.pe',
            'name_short' => 'Ventas - Proyectec',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'ventas7@okcomputer.com.pe',
            'name_short' => 'William Cruz Reynoso',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'wgaribaldi@okcomputer.com.pe',
            'name_short' => 'Wilmar Werner Garibaldi Valdez',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.contable@okcomputer.com.pe',
            'name_short' => 'Xiomara Perca Mamani',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'asistente.logistica@okcomputer.com.pe',
            'name_short' => 'Yenifer Chicata',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
            DB::table('users')->insert([
            'user' => 'cotizador@okcomputer.com.pe',
            'name_short' => 'Yonathan Esau Deza Rugel',
            'password' 		=> Hash::make('@encuesta123'),
            'remember_token'=> Str::random(10),
            'created_at'	=> date('Y-m-d H:i:s'),
            'updated_at'	=> date('Y-m-d H:i:s')
        ]);
    }
}
