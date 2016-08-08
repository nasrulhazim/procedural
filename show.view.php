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
                    <h2>User Details</h2>
                    <div class="well">
                        <table class="table table-striped">
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    E-Mail
                                </th>
                            </tr>
                                <tr>
                                    <td>
                                        <?= $user[0]->name; ?>
                                    </td>
                                    <td>
                                        <?= $user[0]->email; ?>
                                    </td>
                                </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
