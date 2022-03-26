<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Customer;
use Dotenv\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $customers = Customer::paginate(10);
        return view('customer.list', compact('customers'));
    }

    public function register(){
        $categories=Category::all();
        return view('customer.create', compact('categories'));
    }

    public function store(Request $request){
        $data = request()->validate([
            'name' => 'required|max:75',
            'address' => 'required|max:250',
            'phone_number' => 'required|max:25',
            'category'=>'required'
        ], [
            'name.required' => 'El campo nombre no debe estar vacio.',
            'address.required' => 'El campo dirección no debe estar vacio.',
            'phone_number.required' => 'El campo teléfono no debe estar vacio.',

            'name.max' => 'El nombre no puede tener más 75 caracteres.',
            'address.max' => 'La dirección no puede tener más 250 caracteres.',
            'phone_number.max' => 'El teléfono no puede tener más 25 caracteres.',
        ]); // termina el bloque de validacion

        try {
            $customer = Customer::create([
                'name' => $data['name'],
                'address' => $data['address'],
                'phone_number' => $data['phone_number'],
                'category_id' => $data['category'],
            ]);
        } catch (\Exception $exception) {
            $message= " Excepción general ". $exception->getMessage();
            return view('exceptions.exceptions', compact('message'));
        }catch (QueryException $queryException){
            $message= " Excepción de SQL ". $queryException->getMessage();
            return view('errors.404', compact('message'));
        }catch (ModelNotFoundException $modelNotFoundException){
            $message=" Excepción del Sistema ".$modelNotFoundException->getMessage();
            return view('errors.404', compact('message'));
        }


        return redirect()->route('customer.register')->with('success', 'Registro realizado exitosamente');
    }
}
