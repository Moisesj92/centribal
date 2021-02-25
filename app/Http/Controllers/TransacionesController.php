<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//importa modelos
use App\Models\Transaciones;
use App\Models\User;
use App\Models\Productos;
use Carbon\Carbon;

class TransacionesController extends Controller
{
    public function index(){

        $transacciones = Transaciones::all();

        return view('transacciones.index',  compact('transacciones') );

    }

    public function store(Request $request){

        //creusuario
        $usuario = User::where("name", '=', $request->usuario)->get();

        if(  $usuario->count() == 0 ){
            //crear el usuario
            $usuario = new User();
            $usuario->name = $request->usuario;
            $usuario->email = $request->usuario."@test.com";
            $usuario->password = bcrypt(1234);

            $usuario->save();
        }else{
            $usuario = $usuario[0];
        }

        //Producto
        $producto = Productos::where('codigo', '=', $request->idProducto)->get();

        if( $producto->count() == 0){

            //crear el producto
            $producto = new Productos();
            $producto->codigo =  $request->idProducto;
            $producto->nombre = $request->Producto;
            
            $producto->save();
        }else{
            $producto = $producto[0];
        }

        //Transaccion
        $transaccion = Transaciones::where('transaccion', '=', $request->Transacción)->get();

        if($transaccion->count() == 0){

            //Crear Transaccion
            $transaccion = new Transaciones();
            $transaccion->transaccion = $request->Transacción;
            $transaccion->fecha_transaccion = Carbon::createFromFormat('d/m/Y', $request->Date);

            //Añadir usuario
            $transaccion->user()->associate($usuario->id);
            //Añadir Producto
            $transaccion->producto()->associate($producto->id);

            $transaccion->save();

        }else{

            return response("Error Transaccion ya existe" , 200);

        }

       


        return json_encode($transaccion);

    }
}
