
<?php

require_once 'config.php';
 
$url = "https://zoom.us/oauth/authorize?response_type=code&client_id=".CLIENT_ID."&redirect_uri=".REDIRECT_URI;
?>
 
<!-- Pills content -->
<div class="tab-content">
    <?php if(!isset($_GET["code"])) { ?>
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <a class="btn text-white" style="background-color: #55acee;" href="<?php echo $url; ?>" role="button">
                <i class="fab fa-twitter me-2"></i>
                Login with Zoom
                </a>
        </div>
    <?php } else { ?>
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                <a class="btn text-white" style="background-color: #55acee;" href="zoom/create-meeting.php" role="button">
                <i class="fab fa-twitter me-2"></i>
                Create New Zoom Meeting
                </a>
        </div>
    <?php } ?>
</div>
<!-- Pills content -->