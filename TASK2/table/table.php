<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table</title>

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.js"></script>

</head>



    <?php

    $users = [
        (object)[
            'id' => 1,
            'name' => 'ahmed',
            "gender" => (object)[
                'gender' => 'm'
            ],
            'hobbies' => [
                'football', 'swimming', 'running'
            ],
            'activities' => [
                "school" => 'drawing',
                'home' => 'painting'
            ],
        ],
        (object)[
            'id' => 2,
            'name' => 'mohamed',
            "gender" => (object)[
                'gender' => 'm'
            ],
            'hobbies' => [
                'swimming', 'running',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ],
        ],
        (object)[
            'id' => null,
            'name' => 'menna',
            "gender" => (object)[
                'gender' => 'f'
            ],
            'hobbies' => [
                'running',
            ],
            'activities' => [
                "school" => 'painting',
                'home' => 'drawing'
            ],
        ],
    ];


    $table = "<table class='table'>
            <thead>
                <tr>";
    foreach ($users[0] as $property => $value) {
        $table .= "<th>{$property}</th>";
    }
    $table .=        "</tr>
            </thead>
            <tbody>";
    foreach ($users as $index => $user) {
        $table .=   "<tr>";
        foreach ($user as $property => $value) {
            $table .=   "<td>";
            if (gettype($value) == 'array' || gettype($value) == 'object') {
                foreach ($value as $key => $objectOrArrayValue) {
                    if ($property == 'gender' && $key == 'gender') {
                        if ($objectOrArrayValue == 'm')
                            $objectOrArrayValue = 'male';
                        else
                            $objectOrArrayValue = 'female';
                    }
                    $table .=   $objectOrArrayValue . ', ';
                }
            } else {
                $table .=   $value;
            }
        }
        $table .=    "</td>";
        $table .=    "</tr>";
    }
    $table .=   "</tbody>
        </table>";

    ?>
</body>

</html>
<body>
    <?= $table ?>

</body>
</html>