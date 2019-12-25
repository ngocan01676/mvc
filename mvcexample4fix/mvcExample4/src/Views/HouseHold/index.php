
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
            <a href="/mvcExample4/HouseHold/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new HouseHold</a>
             <a href="/mvcExample4/Member/index/" class="btn btn-primary btn-xs pull-right"><b>+</b>Member List</a>
            <tr>
                <th>ID</th>
                <th>Tên Chủ Hộ</th>
                <th>Số Thành Viên</th>
                <th>Số Nhà</th>
                 <th>Thông Tin</th>
                
            </tr>
        </thead>
        <?php
        foreach ($households as $house)
        {
            echo '<tr>';
            echo "<td>" . $house['id'] . "</td>";
            echo "<td>" . $house['tenchuho'] . "</td>";
            echo "<td>" . $house['sothanhvien'] . "</td>";
            echo "<td>" . $house['sonha'] . "</td>";
            echo "<td>";
            
            foreach ($members as $member) {
                if($member['id_hodan']==$house['id'])
                {
                    echo "" . $member['hoten'] . "<br>";
                    echo "--Age:" . $member['tuoi'] . "<br>";
                    echo "--Year:" . $member['namsinh'] . "<br>";
                    echo "--Job:" . $member['nghenghiep'] . "<br>";
                }
            }
            echo "</td>";

        }
        ?>
    </table>
</div>

        </div>

    </main>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</body>
</html>
