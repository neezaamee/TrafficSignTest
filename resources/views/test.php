<?php session_start();
    require_once('sessionSet.php');
    require_once('connection.php');
    include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">

<body>
    <style>
        .Administrator {
            margin-top: 20px;
        }

        @media only screen and (max-width: 780px) {
            .Administrator img {
                width: 100%;
            }
        }

    </style>
    <!--Header Starts Here-->
    <header>
        <div class="ui grid">
            <div class="row">
                <div class="sixteen wide column logo">
                    <img src="img/head.jpg" width="100%" />
                </div>
            </div>
        </div>
    </header>
    <!--Header Ends Here-->

    <div class="ui stackable grid">
        <div class="Administrator contentBox" style="width: 100%;">
            <div class="heading">
                <h1 class="ui horizontal divider header">
                    Administrator Panel <br>(<a href="logout">Logout</a>)
                </h1>
            </div>
            <!--/heading-->

            <div class="ui horizontal divider"></div>

            <div class="AdministratorBox">

                <div class="ui two column stackable relaxed grid">
                    <div class="column">
                        <a href="adminComplaints">
                            <h2 class="ui center aligned icon header">
                                <i class="circular tv red icon"></i> <span>Complaints</span>
                            </h2>
                        </a>
                    </div>
                    <div class="column">
                        <a href="adminFeedback">
                            <h2 class="ui center aligned icon header">
                                <i class="circular tv green icon"></i> <span>Feedback</span>
                            </h2>
                        </a>
                    </div>
                </div>
                <!--/two column grid-->
            </div>
            <!--/ AdministratorBox-->
        </div>
        <!--/Administrator contentBox-->
    </div>
    <!--/stackable grid-->
</body>

</html>
