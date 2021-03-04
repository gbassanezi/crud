<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function list()
    {
        $clients = Client::simplepaginate(15);

        return view('clients', compact('clients'));
    }

    public function new()
    {
        return view('new-client');
    }

    public function store(Request $request)
    {
        $client = new Client();

        $client = $client->create($request->all());

        return redirect()->to('/list');
    }

    public function edit($id)
    {
        $client = Client::findOrFail($id);

        return view('edit-client', compact('client'));
    }

    public function update($id, Request $request)
    {
        $client = Client::findOrFail($id);

        $client->update($request->all());

        return redirect()->to('/list');
    }

    public function delete($id)
    {
        $client = Client::findOrFail($id);

        $client->delete();

        return redirect()->to('/list');

    }
}
