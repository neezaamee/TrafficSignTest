<?= $this->extend("Layout/Base"); ?>
<?= $this->section("content"); ?>
<style>
    .Endorsment {
        margin-top: 20px;
    }

</style>
<div class="ui stackable grid">
    <div class="Endorsment contentBox" style="width: 100%;">
        <div class="heading">
            <h1 class="ui horizontal divider header">
                <?= $pageHeading; ?>
            </h1>
        </div>
        <!--/heading-->

        <div class="ui horizontal divider"></div>

        <div class="EndorsmentBox">
            <div class="ui one column stackable relaxed grid">

                <div class="column">
                    <h4>Amendment in Twelfthe Schedule of Ordinance XIX of 1965</h4>
                    <h4>"Twelfth Schedule Violations and Penalties"</h4>
                    <table class="ui single line celled structured selectable inverted blue padded table" style="border: 1px solid">
                        <tr>
                            <th rowspan="2" class="one wide bottom aligned">Code</th>
                            <th rowspan="2" class="six wide bottom aligned">Violation</th>
                            <th colspan="3" class="center aligned">Fine</th>
                        </tr>
                        <tr>
                            <th class="two wide">Motor Cycle</th>
                            <th class="two wide">Motor Car/Jeep etc.</th>
                            <th class="two wide">PSV/Private or Public</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Exceeding prescribed speed limit</td>
                            <td>200</td>
                            <td>500</td>
                            <td>750</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Carrying passengers in a public service vehicle exceeding permissible limit</td>
                            <td>-</td>
                            <td>500</td>
                            <td>750</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td> Violation of traffic signals (electrical or manual)</td>
                            <td>200</td>
                            <td>500</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td> Over loading a goods vehicle</td>
                            <td>-</td>
                            <td>500</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Driving a motor vehicle at night without proper lights</td>
                            <td>200</td>
                            <td>300</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Driving a motor vehicle on the wrong side of the road</td>
                            <td>200</td>
                            <td>500</td>
                            <td>750</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Driving a motor vehicle with tinted/covered glasses</td>
                            <td>-</td>
                            <td>500</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Violation of line/lane/zebra crossing etc.</td>
                            <td>200</td>
                            <td>300</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td> Driving a motor vehicle where and when prohibited.</td>
                            <td>200</td>
                            <td>300</td>
                            <td>-</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <!--/EndorsmentBox-->
    </div>
    <!--/Endorsment ContentBox-->
</div>
<!--/stackable grid-->

<?= $this->endSection(); ?>
