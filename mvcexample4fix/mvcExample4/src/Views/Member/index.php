
<!doctype html>
<head>
    <meta charset="utf-8">

    <title>MVC Todo</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">

    <link href="starter-template.css" rel="stylesheet">

    <style>
    body {
        padding-top: 5rem;
    }
    .starter-template {
        padding: 3rem 1.5rem;
        text-align: center;
    }
</style>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="/mvc">MVC Example</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/mvc">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <main role="main" class="container">

        <div class="starter-template">

         <h1>House Hold</h1>
         <div class="row col-md-12 centered">
            <table class="table table-striped custab">
                <thead>
                    <a href="/mvcExample4/Member/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new task</a>
                    <tr>
                        <th>ID</th>
                        <th>Họ Tên</th>
                        <th>Năm Sinh</th>
                        <th>Tuổi</th>
                        <th>Nghề Nghiệp</th>
                        <th>Chủ Hộ</th>

                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <?php
                foreach ($members as $m)
                {
                    echo '<tr>';
                    echo "<td>" . $m['id'] . "</td>";
                    echo "<td>" . $m['hoten'] . "</td>";
                    echo "<td>" . $m['tuoi'] . "</td>";
                    echo "<td>" . $m['namsinh'] . "</td>";
                    echo "<td>" . $m['nghenghiep'] . "</td>";
                    foreach ($households as $key) {
                        if($key['id']==$m['id_hodan'])
                            echo "<td>" . $key['tenchuho'] . "</td>";

                    }


                    echo "<td class='text-center'><a class='btn btn-info btn-xs' href='/mvcExample4/Member/edit/" . $m["id"] . "' ><span class='glyphicon glyphicon-edit'></span> Edit</a> <a href='/mvcExample4/Member/delete/" . $m["id"] . "' class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-remove'></span> Del</a></td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>

    </div>

</main>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
