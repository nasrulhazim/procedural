<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Procedural</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>

    <?php include $_SERVER['DOCUMENT_ROOT'].'/navbar.php'; ?>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>List of Users</h2>
                    <table class="table table-striped">
                        <tr>
                            <th>
                                Name
                            </th>
                            <th>
                                E-Mail
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        <?php foreach ($users as $user) :?>
                            <tr>
                                <td>
                                    <?= $user->name; ?>
                                </td>
                                <td>
                                    <?= $user->email; ?>
                                </td>
                                <td>
                                    <a href="show.php?id=<?= $user->id; ?>">Show Details</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>
