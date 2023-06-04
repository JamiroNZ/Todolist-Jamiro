<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\TodoModel; 

class Todo extends ResourceController
{
    public function __construct() {
        $this->todoModel = new TodoModel();
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        
        $todos = $this->todoModel->findAll();

        $payload = [
            "todos" => $todos
        ];

        echo view('todo/index', $payload);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        echo view('todo/new');
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $payload = [
            "nama" => $this->request->getPost('nama'),
            "judul" => $this->request->getPost('judul'),
            "description" => $this->request->getPost('description'),
            "status" => $this->request->getPost('status'),
        ];


        $this->todoModel->insert($payload);
        return redirect()->to('/todo');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $todo = $this->todoModel->find($id);
        
        if (!$todo) {
            throw new \Exception("Data not found!");   
        }
        
        echo view('todo/edit', ["data" => $todo]);
    }


    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $payload = [
            "nama" => $this->request->getPost('nama'),
            "judul" => $this->request->getPost('judul'),
            "description" => $this->request->getPost('description'),
            "status" => $this->request->getPost('status'),
        ];

        $this->todoModel->update($id, $payload);
        return redirect()->to('/todo');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->todoModel->delete($id);
        return redirect()->to('/todo');
    }
}