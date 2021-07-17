<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>



    <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img width="100%" height="100%" enctype="multipart/form-data" src="<?= base_url('assets/img/profile/' . $user['image']); ?>">
            </div>
            <div class="col-auto">
                <div class="card-body">
                    <h5 class="card-title"><?= $user['name']; ?></h5>
                    <p class="card-text"><?= $user['email']; ?> </p>
                    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                </div>
            </div>
        </div>
    </div>





    <div class="form-group row justify-content">
        <div class="box center">
            <li><a href="https://www.instagram.com/pergidatang/" data-text="Instagram">
                    <i class="fab fa-instagram fa-2x"></i>
                </a></li>
        </div>
    </div>
    <div class="form-group row justify-content">
        <div class="box center">
            <li><a href="https://twitter.com/wargaasgardians" data-text="Twitter">
                    <i class="fab fa-twitter fa-2x"></i>
                </a></li>
        </div>
    </div>
    <div class="form-group row justify-content">
        <div class="box center">
            <li><a href="https://github.com/PenerbangRoket6" data-text="Github">
                    <i class="fab fa-github fa-2x"></i>
                </a></li>
        </div>
    </div>






</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->