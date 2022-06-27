<section class="page-title-section overlay" data-background="/images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="">Kullanıcı Güncelle</a></li>
                    <li class="list-inline-item text-white h3 font-secondary nasted"></li>
                </ul>
                <p class="text-lighten"></p>
            </div>
        </div>
    </div>
</section>
<br>
<div class="container">
    <form method="POST" action="">
        <div class="form-group">
            <label for="id">ID</label>
            <input name="id" type="text" class="form-control" id="id" value="<?= $user["id"] ?>" required readonly>
        </div>
        <div class="form-group">
            <label for="isim">İsim</label>
            <input name="firstname" type="text" class="form-control" id="isim" value="<?= $user["firstname"] ?>" required>
        </div>
        <div class="form-group">
            <label for="soyisim">Soyisim</label>
            <input name="lastname" type="text" class="form-control" id="soyisim" value="<?= $user["lastname"] ?>" required>
        </div>
        <div class="form-group">
            <label for="meslek">Meslek</label>
            <input name="job" type="text" class="form-control" id="meslek" value="<?= $user["job"] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="email" class="form-control" id="email" value="<?= $user["email"] ?>" required>
        </div>
        <div class="form-group">
            <label for="sifre">Parola</label>
            <input name="password" type="password" class="form-control" id="sifre" value="<?= $user["password"] ?>" required>
        </div>
        <div class="form-group">
            <label for="rol">Kullanıcı Rolü</label>
            <select name="role" class="form-control" id="rol" required>

                <option value="admin" <?= $user["role"] == 'admin' ? "selected" : "" ?>>Yönetici</option>
                <option value="educator" <?= $user["role"] == 'educator' ? "selected" : "" ?>>Eğitimci</option>
                <option value="user" <?= $user["role"] == 'user' ? "selected" : "" ?>>Kullanıcı</option>

            </select>
        </div>
        <div class="form-group">
            <label for="adres">Adres</label>
            <textarea name="address" class="form-control" id="adres" cols="30" rows="10" required><?= $user["address"] ?></textarea>
        </div>
        <div class="form-group">
            <label for="hakkinda">Hakkında</label>
            <textarea name="about" class="form-control" id="hakkinda" cols="30" rows="10"><?= str_replace("<br>", "", $user["about"]) ?></textarea>
        </div>

        <input name="update" type="submit" class="btn btn-primary" value="Güncelle">
    </form>
    <br>
</div>