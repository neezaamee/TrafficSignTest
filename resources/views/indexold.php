<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>

<style>
    @media only screen and (min-width: 768px) {
        .bottom-grid1 {
            width: max-content;
        }

        .bottom-grid2 {
            /*width: max-content;*/
        }
    }

    @media only screen and (max-width: 767px) {
        .bottom-grid1 {
            background: #ffffff;
            background-image: linear-gradient(#249bb9b8, #502d9429);
            width: 100%;
            font-size: 0.88em;
        }

        .bottom-grid2 {
            background: #ffffff;
            background-image: linear-gradient(#249bb9b8, #502d9429);
            width: 100%;
            /*height: 315px;*/
        }
    }

</style>

<!--News Pane-->
<?= $this->include('Partials/newsPane'); ?>
<!--/News Pane-->

<!--Slider-->
<?= $this->include('Partials/homepageSlider'); ?>
<!--/ Slider-->

<div class="ui horizontal divider"></div>
<!-- Box Section-->
<?= $this->include('Partials/boxSection'); ?>
<!--/ Box Section-->
<br>
<div class="ui horizontal divider"></div>

<!--Important Links-->
<div class="ui three column stackable relaxed grid">
    <div class="row">
        <div class="one wide column" hidden></div>
        <?= $this->include('Partials/importantLinks'); ?>
        <?= $this->include('Partials/gallery'); ?>
        <div class="one wide column" hidden></div>
    </div>
</div>
<!--/ Important Links-->
<div class="ui horizontal divider"></div>
<?= $this->endSection(); ?>
