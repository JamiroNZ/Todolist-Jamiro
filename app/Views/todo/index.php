<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-12">
            <h5 class="mb-4">Hello <?= session('name') ?> </h5>

            <h5 class="mb-4">Todo List</h5>

            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">ID</th>
                        <th scope="col ">Nama</th>
                        <th scope="col ">Judul</th>
                        <th scope="col ">Description</th>
                        <th scope="col ">Status</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 0; ?>
                    <?php foreach ($todos as $item): ?>
                    <tr>
                        <td><?= $no += 1; ?></td>
                        <td><?= $item['nama'] ?></td>
                        <td><?= $item['judul'] ?></td>
                        <td><?= $item['description'] ?></td>
                        <td><?= $item['status'] ?></td>
                        <td>
                            <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/todo/<?= $item['id'] ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                                    <a href="/todo/<?= $item['id'] ?>/edit" class="btn btn-info text-white "><i class='bx bx-pencil'></i></a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>