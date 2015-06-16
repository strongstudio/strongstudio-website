<a class="anchorLink" name="<?php echo $data->uid(); ?>"></a>
<div class="section  <?php echo $data->uid(); ?>" data-title="<?php echo ucfirst($data->title()->html()); ?>">
    <div class="slide section-heading" style="background: #67a2b9">
        <div class="wrapper row med-single-col">
            <div class="col one-of-two">
                <div class="cs-title">
                    <span class="cs">CASE STUDY:</span>
                    <h2><?php echo ucfirst( $data->title()->html() );?></h2>
                </div>
            </div>
            <div class="col one-of-two border-left">
                <p><?php echo $data->tagline()->kirbytext(); ?></p>
            </div>
        </div>
    </div>
    <div class="slide case-study-slide">
        <div class="wrapper row med-single-col">
            <dl class="col one-of-two">
                <dt>Overview</dt>
                <dd><?php if($image = $data->image('overview.jpg') ? $data->image('overview.jpg') : $data->image('overview.png') ){echo '<img src="' . $image->url() . '">';} ?></dd>
                <dt>Services</dt>
                <dd class="row">
                    <div class="col one-of-two">
                        <?php echo kirbytextSans($data->services1()); ?>
                    </div>
                    <div class="col one-of-two">
                        <?php echo kirbytextSans($data->services2()); ?>
                    </div>
                </dd>
            </dl>
            <dl class="col one-of-two">
                <dt>Challenge</dt>
                <dd><?php echo $data->challenge()->kirbytext(); ?></dd>
                <dt>Solution</dt>
                <dd><?php echo $data->solution()->kirbytext(); ?></dt>
                <dt>Results</dt>
                <dd><q><?php echo $data->results(); ?></q></dd>
            </dl>
        </div>
    </div>
</div>
