<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'AdministradorICONTAV']);
        $role2=Role::create(['name'=>'INVITADO']);

        Permission::create(['name'=> 'icontav.cotizaciones'])->syncRoles([$role1]);
        
        Permission::create(['name'=> 'icontav.cuentas'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.cuentas.plan_de_cuenta'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.cuentas.seleccionar_cuentas_especificas'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.cuentas.configuracion_plan_cuenta'])->syncRoles([$role1]);

        Permission::create(['name'=> 'icontav.comprobantes'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.comprobantes.registro_comprobante'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.comprobantes.lista_comprobantes.anulados'])->syncRoles([$role1]);

        Permission::create(['name'=> 'icontav.libros'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.libros.libro_diario'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.libros.libro_mayor'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.libros.libro_de_compras_de_iva'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.libros.libro_de_ventas_iva'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=> 'icontav.estados_financieros'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.estados_financieros.comprobante_de_sumas_y_saldos'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.estados_financieros.estado_de_resultados'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.estados_financieros.balance_general'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.estados_financieros.estado_de_flujo_de_efectivo'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.estados_financieros.estado_de_evolucion_de_patrimonio'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=> 'icontav.gestion'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.gestion.fecha_de_inicio_de_gestion'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.gestion.datos_generales_de_la_empresa'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.gestion.seleccionar_asiento_de_apertura'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.gestion.actualizar_saldos_contables'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=> 'icontav.sistema'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.sistema.configuracion_de_parametros'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.sistema.registro_de_usuario'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.sistema.eliminacion_de_registro'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.sistema.mantenimiento_de_base_de_datos'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.sistema.ordenar_comprobantes_contables'])->syncRoles([$role1]);

       
    }
}
