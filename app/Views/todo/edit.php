<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <form action="/todo/<?= $data['id'] ?>/update" method="post">
        <input type="hidden" name="_method" value="put" />

        <label for="nama">Todo Nama</label>
        <br />
        <input type="text" id="nama" placeholder="Input todo nama" name="nama" value="<?= $data['nama'] ?>" />
        
        <br />
        <br />
        <label for="name">Todo Name</label>
        <br />
        <input type="text" id="judul" placeholder="Input todo judul" name="judul" value="<?= $data['judul'] ?>" />
        

        <br />
        <br />
        <label for="description">Description</label>
        <br />
        <input type="text" id="description" placeholder="Input todo description" name="description" value="<?= $data['description'] ?>" />
        
        <br />
        <br />
        <label for="status">Status</label>
        <br />
                    <select name="status" id="example-todo-status">
                        <option value="in progress" <?= $data['status'] == "in progress" ? "selected" : "" ?>>In Progress</option>
                        <option value="finished" <?= $data['status'] == "finished" ? "selected" : "" ?>>Finished</option>
                    </select>
                </div>

        <br />
        <br />
        <button type="submit">Submit</button>
    </form>
<?= $this->endSection() ?>