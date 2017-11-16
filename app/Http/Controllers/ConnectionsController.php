<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectionsController extends Controller
{
   public function submit(Request $request)
    {
      $this->validate($request,[
        'name' => 'required',
        'host' => 'required',
        'database' => 'required',
        'username' => 'required'
      ]);

      //Create New Connection
      $connection = new Connection;
      $connection -> name = $request -> input('name');
      $connection -> host = $request -> input('host');
      $connection -> database = $request -> input('database');
      $connection -> username = $request -> input('username');

      $connection = save();

      //return redirect('connections');
    }
    public function getConnections($value='')
    {
      # code...
    }
}
?>
