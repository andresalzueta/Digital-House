<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class TasksController extends Controller
{
    public function show()
    {
      $tarefas = Task::all();

      return $tarefas;
    }

    public function add(request $tarefa)
    {
      $tarefa = $tarefa->input("tarefa");
      $save = Task::create([
        "text" => $tarefa
      ]);
      $save = $save
      ? true
      : false;
      $array = array("adicionado" => $save);
      return $array;
    }


    public function delete($id)
    {
      $id = intval($id);
      $tarefa = Task::find($id);
      $salvar = $tarefa
      ? $tarefa->delete()
      : false;
      $array = array("deletado" => $salvar);

      return json_encode($array);
    }

    public function update($id)
    {
      $id = intval($id);
      $status = Task::find($id);
      $status->status = 1;
      $salvar = $status
      ? $status->save()
      : false;
      $array = array("atualizado" => $salvar);
      return json_encode($array);
    }
}
