<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tasks;

class TasksController extends Controller
{
    public function home()
    {
        // Fetch all tasks in descending order
      //  $tasks = Tasks::orderBy("id", "desc")->get();
      $tasks = Tasks::all();


        return view('index', ["tasks" => $tasks]);
    }

    public function show($id)
    {
        // route --> /ninjas/{id}
        // fetch a single record & pass into show view
    }

    public function create()
    {
        // route --> /ninjas/create
        // render a create view (with web form) to users
    }

    public function store()
    {
        // --> /ninjas/ (POST)
        // hanlde POST request to store a new ninja record in table
    }

    public function destroy($id)
    {
        // --> /ninjas/{id} (DELETE)
        // handle delete request to delete a ninja record from table
    }

    // edit() and update() for edit view and update requests
    // we won't be using these routes
}