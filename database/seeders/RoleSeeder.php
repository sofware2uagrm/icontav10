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

        Permission::create(['name'=> 'icontav.administracion', 'descripcion'=>'1. ADMNISTRACION'])->syncRoles([$role1]);

        Permission::create(['name'=> 'icontav.cotizaciones','descripcion'=>'2. COTIZACIONES'])->syncRoles([$role1]);
        
        Permission::create(['name'=> 'icontav.cuentas','descripcion'=>'3. CUENTAS'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.cuentas.plan_de_cuenta','descripcion'=>'3.1. 
        Plan de Cuentas'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.cuentas.seleccionar_cuentas_especificas','descripcion'=>'3.2.  Seleccionar Cuentas Específicas'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.cuentas.configuracion_plan_cuenta','descripcion'=>'3.3.  Configuración Plan de Cuentas'])->syncRoles([$role1]);

        Permission::create(['name'=> 'icontav.comprobantes','descripcion'=>'4. COMPROBANTES'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.comprobantes.registro_comprobante','descripcion'=>'4.1.  Registro de Comprobante'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.comprobantes.lista_comprobantes.anulados','descripcion'=>'4.2.  Lista de Comprobantes Anulados'])->syncRoles([$role1]);

        Permission::create(['name'=> 'icontav.libros','descripcion'=>'','descripcion'=>'5. LIBROS'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.libros.libro_diario','descripcion'=>'5.1.  Libro Diario'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.libros.libro_mayor','descripcion'=>'5.2  Libro Mayor'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.libros.libro_de_compras_de_iva','descripcion'=>'5.3. Libro de Compra IVA'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.libros.libro_de_ventas_iva','descripcion'=>'5.4.  Libro de Ventas IVA'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=> 'icontav.estados_financieros','descripcion'=>'6. ESTADOS FINANCIEROS'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.estados_financieros.comprobante_de_sumas_y_saldos','descripcion'=>'6.1.  Comprobante de Sumas y Saldos'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.estados_financieros.estado_de_resultados','descripcion'=>'6.2.  Estados de Rsultados'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.estados_financieros.balance_general','descripcion'=>'6.3.  Balance General'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.estados_financieros.estado_de_flujo_de_efectivo','descripcion'=>'6.4.  Estado de Flujo de Efectivo'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.estados_financieros.estado_de_evolucion_de_patrimonio','descripcion'=>'6.5.  Estado de Evolución del Patrimonio'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=> 'icontav.gestion','descripcion'=>'7. GESTIÓN'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.gestion.fecha_de_inicio_de_gestion','descripcion'=>'7.1.  Fecha de Inicio de Gestión'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.gestion.datos_generales_de_la_empresa','descripcion'=>'7.2.  Datos Generales de la Empresa'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.gestion.seleccionar_asiento_de_apertura','descripcion'=>'7.3.  Seleccionar Asiento de Apertura'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.gestion.actualizar_saldos_contables','descripcion'=>'7.4.  Actualizar Saldos Contables'])->syncRoles([$role1,$role2]);

        Permission::create(['name'=> 'icontav.sistema','descripcion'=>'8. SISTEMA'])->syncRoles([$role1,$role2]);
        Permission::create(['name'=> 'icontav.sistema.configuracion_de_parametros','descripcion'=>'8.1.  Configuración de Paramettros'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.sistema.registro_de_usuario','descripcion'=>'8.2.  Registro de Usuario'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.sistema.eliminacion_de_registro','descripcion'=>'8.3.  Eliminación de Registro'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.sistema.mantenimiento_de_base_de_datos','descripcion'=>'8.4.  Mantenimiento de la Base de Datos'])->syncRoles([$role1]);
        Permission::create(['name'=> 'icontav.sistema.ordenar_comprobantes_contables','descripcion'=>'8.5.  Ordenar Comprobantes Contables'])->syncRoles([$role1]);

       
    }
}
