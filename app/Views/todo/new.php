<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Create new todo</h5>

            <form action="/todo" method="post">

                <div class="form-group">
                    <label for="example-todo-judul">Judul</label>
                    <input type="text" class="form-control" id="example-judul" aria-describedby="emailHelp" 
                        placeholder="Enter judul" required name="judul">
                </div>

                <div class="form-group">
                    <label for="example-todo-description">Description</label>
                    <input type="text" class="form-control" id="example-todo-desription" aria-describedby="emailHelp" 
                        placeholder="Enter description" required name="description">
                </div>

                <div class="form-group">
                    <label for="example-todo-status">Status</label>
                    <select class="form-control" name="status" id="example-todo-status">
                        <option value="in progress">In Progress</option>
                        <option value="finished">Finished</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>