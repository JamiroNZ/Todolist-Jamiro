<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <table>
        <thead>
            <tr>
                <td>No.</td>
                <td>Name</td>
                <td>TodoName</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
        <a href="todo/new">Add new todo</a>
        <br />
        <br />
        <?php $no = 0; ?>
        <?php foreach ($todos as $item): ?>
            <tr>
                <td><?= $no += 1; ?></td>
                <td><?= $item['todoname'] ?></td>
                <td><?= $item['description'] ?></td>
                <td>
                <a href="/todo/<?= $item['id'] ?>/edit">Edit</a>
                    <form action="/todo/<?= $item['id'] ?>" method="post" onsubmit="return confirm(`Are you sure?`)">
                        <input type="hidden" name="_method" value="delete" />
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>

        <?php endforeach ?>
        </tbody>
    </table>
<?= $this->endSection() ?>