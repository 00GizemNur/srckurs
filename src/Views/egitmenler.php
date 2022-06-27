<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="?egitmenler">Eğitmenlerimiz</a></li>
                    <li class="list-inline-item text-white h3 font-secondary nasted"></li>
                </ul>
                <p class="text-lighten">Eğitmenlerimizle tanışın.<br>MEB sertifikalı, eğitimci kimliğiyle, sabırlı ve kaliteli eğitim vermekteyiz. Şehir içi trafiğin en yoğun olduğu yerlerde, gece sürüşleriyle, park eğitimiyle, sizlere her koşulda eğitim sunmaktayız. Trafiği doğru okumak hayat kurtarır.</p>
            </div>
        </div>
    </div>
</section>
<!-- eğitmenler hakkında -->
<section class="section">
    <div class="container">
        <div class="row">


            <?php foreach ($egitmenler as $egitmen) { ?>

                <div class="col-md-8 mb-5">
                    <br>
                    <h3 id="#alya"><?= $egitmen["firstname"] . " " . $egitmen["lastname"] ?></h3>
                    <h6 class="text-color"><?= $egitmen["job"] ?></h6>
                    <p class="mb-5">
                        <?= $egitmen["about"] ?>
                    </p>
                    <div class="row">
                        <div class="col-md-6 mb-2 mb-md-0">
                            <h4><a class="mb-4 text-color" href="mail:alya.karan@gmail.com"><i class="ti-email mr-2"></i><?= $egitmen["email"] ?></a></h4>
                        </div>

                    </div>
                </div>

            <?php } ?>


        </div>

    </div>
</section>