<!DOCTYPE html>
<html lang="en">


<!-- compose23:33-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/summernote/dist/summernote-bs4.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
    <?php include "side/notification.php"; ?>
    <?php include "side/sidebar.php"; ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Compose</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <form>
                
                                <div class="form-group">
                                    <input type="email" placeholder="To" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" placeholder="Subject" class="form-control">
                                </div>
                            
                                <div class="form-group">
                                    <textarea rows="4" cols="5" class="form-control" placeholder="Enter your message here"></textarea></div><br>
                                    <div class="form-group">
                                    <div class="profile-img-wrap">
                                    <img class="inline-block" src="assets/img/user.jpg" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file">
                                    </div></div>
                            
                                </div>
                                <div class="form-group mb-0">
                                    <div class="text-center compose-btn">
                                        <button class="btn btn-primary"><span>Send</span> <i class="fa fa-send m-l-5"></i></button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/plugins/summernote/dist/summernote-bs4.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- compose23:34-->
</html>