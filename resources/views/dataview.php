<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Base</title>
</head>

<body>
    <h1>Feedback List</h1>
    <?php if(!empty($users)): ?>

    <table id="myTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Date</th>
                <th class="none">Type</th>
                <th>Name</th>
                <th>Subject</th>
                <th class="none">CNIC</th>
                <th class="none">Contact</th>
                <th class="none">Email</th>
                <th class="none">Address</th>
                <th class="none">Organization</th>
                <th class="none">To</th>
                <th>Massage</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td>
                    <?= $user->id; ?>
                </td>
                <td>
                    <?= $user->date  ?>
                </td>
                <td>
                    <?= $user->fbtype; ?>
                </td>
                <td>
                    <?= $user->name; ?>
                </td>
                <td>
                    <?= $user->fbsubject; ?>
                </td>
                <td>
                    <?= $user->cnic; ?>
                </td>
                <td>
                    <?= $user->contact; ?>
                </td>
                <td>
                    <?= $user->email; ?>
                </td>
                <td>
                    <?= $user->address  ?>
                </td>
                <td>
                    <?= $user->organization  ?>
                </td>
                <td>
                    <?= $user->fbto  ?>
                </td>
                <td>
                    <?= $user->fbtext  ?>
                </td>
                <td>
                    <a href="feedbackDel.php?fbID=<?= $user->id; ?>">
                        <div class="ui animated fade red button" tabindex="0">
                            <div class="visible content">&nbsp;Delete&nbsp;</div>
                            <div class="hidden content">
                                <i class="recycle large icon"></i>
                            </div>
                        </div>
                    </a>
                </td>

            </tr>
            <?php endforeach; ?>

        </tbody>
        <tfoot>
            <tr>
                <th>No.</th>
                <th>Date</th>
                <th>Type</th>
                <th>Subject</th>
                <th>Name</th>
                <th>CNIC</th>
                <th>Contact</th>
                <th>Email</th>
                <th>Address</th>
                <th>Organization</th>
                <th>To</th>
                <th>Massage</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>


    <?php else: ?>
    <h1>Chalo Shahbash Shapar ho jao</h1>
    <?php endif; ?>
</body>

</html>
