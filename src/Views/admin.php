<script>
    function del(){

    var del=confirm("Kullanıcı silinsin mi?");
    if (del==true){
       alert ("Kullanıcı silindi")
    }else{
        alert("Kullanıcı Silinmedi")
    }
    return del;
    }
</script>



<section class="page-title-section overlay" data-background="/images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="">Admin</a></li>
                    <li class="list-inline-item text-white h3 font-secondary nasted"></li>
                </ul>
                <p class="text-lighten"></p>
            </div>
        </div>
    </div>
</section>


<br>
<div class="container">
    <h3>Kullanıcılar:</h3>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">İd</th>
                <th scope="col">Adı</th>
                <th scope="col">Soyadı</th>
                <th scope="col">Mesleği</th>
                <th scope="col">Email</th>
                <th scope="col">Rolü</th>
                <th scope="col">Güncelle</th>
                <th scope="col">Sil</th>

            </tr>
        </thead>
        <tbody>

            <?php foreach ($users as $user) { ?>

                <tr>
                    <th scope="row"><?= $user["id"] ?></th>
                    <td><?= $user["firstname"] ?></td>
                    <td><?= $user["lastname"] ?></td>
                    <td><?= $user["job"] ?></td>
                    <td><?= $user["email"] ?></td>
                    <td><?= $user["role"] ?></td>
                    <td><a href="?guncelle&id=<?= $user["id"] ?>" class="btn btn-warning btn-sm">✎</a> </td>
                    <td><a href="?sil&id=<?= $user["id"] ?>" class="btn btn-danger btn-sm" onclick="return del()">X</a></td>
                </tr>


            <?php }  ?>

        </tbody>
    </table>
</div>