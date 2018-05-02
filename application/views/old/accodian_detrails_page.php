<div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed" href="#accordion-<?= $i+1 ?>" aria-expanded="false">
                <?= $tag->Tag->ChannelTagTitle; ?>
                <i class="fa fa-caret-down"></i>
            </a>
        </h4>
    </div>
    <div id="accordion-<?= $i+1 ?>" class="panel-collapse collapse"  aria-expanded="false" style="height: 0px;">
        <div class="panel-body">
            <?php foreach ($tag->Channels as $val): ?>
                <div class="col-md-4">
                    <div class="feature-box well">
                        <img src="<?= UP.$val->Image ?>"  class="img-thumbnail" >
                        <!--<i class="feature-icon fa fa-book"></i>-->
                        <div class="col-md-6">
                            <h4><?= $val->ChannelTitle ?></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>