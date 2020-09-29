<!-- Footer -->
<footer class="py-5 bg-dark">
    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
</footer>
<!--modals-->
<!--register-->
<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pré-inscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login-form">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <h2 class="text-center">Envoyer Un demande</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="firstname" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="lastname" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="email" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
                        </div>
                    </form>
                    <p class="text-center">having account ?
                        <strong class="switch-tologin-modal" ><a href="#">Login</a></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--modals-->
