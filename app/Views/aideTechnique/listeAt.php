<?php if (!empty($aideTechnique) && is_array($aideTechnique)) :
    $emoji = array("fas fa-dice", "fas fa-hands", "fas fa-people-arrows", "fas fa-shower", "fas fa-lock", "fas fa-route", "fas fa-couch", "fas fa-couch", "fas fa-bullhorn", "fas fa-dice", "fas fa-glasses", "fas fa-headset", null);
?>
    <div class="row justify-content-md-center">
        <?php foreach ($aideTechnique as $aideTechnique_item) : ?>

            <div class="aideTechnique col-md-5 mb-4 m-3">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <h5 class="font-weight-bold text-primary text-uppercase mb-1"><?= esc($aideTechnique_item['nom']); ?></h5>
                                <div class="small mb-0 font-weight-bold text-gray-800"><?= esc($aideTechnique_item['description']); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="<?= esc($emoji[$aideTechnique_item['idCat']]); ?> fa-2x text-gray-300"></i>
                                <p class="d-none" id="prix"><?= esc($aideTechnique_item['prixMin']); ?>0</p>
                            </div>
                            <a href="<?= base_url('public/aideTechniques/view/' . esc($aideTechnique_item['id'], 'url')) ?>" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
<?php else :
    // TODO : faire la partie ci-dessous
?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>