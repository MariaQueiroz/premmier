<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests\ClienteRequest;
use Fireguard\Report;

class ClienteController extends Controller


{
    public function index(){
        $cliente = Cliente::get();
        return view('clientes.index', ['clientes' => $cliente]);
    }
    public function create(){
        return view('clientes.create');
    }
    public function store(ClienteRequest $request){
        $novo_cliente = $request->all();
        Cliente::create($novo_cliente);
        return redirect()->route('clientes');
    }
    public function destroy($id){
        Cliente::find($id)->delete();
        return redirect()->route('clientes');
    }

    public function edit($id){
        $cliente = Cliente::find($id);
        return view('clientes.edit',compact('cliente'));

    }

    public function update(ClienteRequest $request,$id){
        $cliente = Cliente::find($id)->update($request->all());
        return redirect()->route('clientes');
    }
    public function relatorio(\Fireguard\Report\Exporters\PdfExporter $exporter)
    {
        $html = view()->make('clientes/index')->render();
        // Option 1
        return $exporter
            ->response(new \Fireguard\Report\Report($html))
            ->send();


        // Option 2
        $file = $exporter->generate(new \Fireguard\Report\Report($html));
        $headers = [
            'Content-type' => 'application/pdf',
            'Content-Transfer-Encoding' => 'binary',
            'Content-Length' => filesize($file),
            'Accept-Ranges' => 'bytes'
        ];
        // Caso queira mostrar diretamente o arquivo
        return response()->make(file_get_contents($file), 200, $headers);
        // Caso deseja forçar o download
        // return response()->download($file, 'report.pdf', $headers);
    }


}
