<!-- Modal Entrar -->
<div class="modal fade" id="signinModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Entrar com Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>

            <div class="modal-body">
                <form action="signin.php" method="post">
                    <div class="card">
                        <div class="card-body">
                            <label class="form-label" for="Email">Email de usuário:</label>
                            <input class="form-control" type="text" id="Email" name="Email" required>
                            <br>
                            <label class="form-label" for="Senha">Senha de Usuário:</label>
                            <input class="form-control" type="password" id="Senha" name="Senha" required>
                            <br>
                            <input class="btn btn-primary btn-block" type="submit" value="Entrar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
