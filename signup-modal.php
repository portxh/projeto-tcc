<!-- Modal Cadastro -->
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro de Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>

            <div class="modal-body">
                
                <form action="signup.php" method="post">

                    <div class="card">
                        <div class="card-body">
                            <label class="form-label" for="Cpf">CPF:</label>
                            <input class="form-control" type="text" name="Cpf" id="Cpf" required>
                            <br>
                            <label class="form-label" for="Nome">Nome:</label>
                            <input class="form-control" type="text" name="Nome" id="Nome" required>
                            <br>
                            <label class="form-label" for="Celular">Celular:</label>
                            <input class="form-control" type="text" name="Celular" id="Celular" required>
                            <br>
                            <label class="form-label" for="Email">Email:</label>
                            <input class="form-control" type="text" name="Email" id="Email" required>
                            <br>
                            <label class="form-label" for="Senha">Senha:</label>
                            <input class="form-control" type="password" name="Senha" id="Senha" required>
                            <br>
                            <input class="btn btn-primary btn-block" type="submit" value="Cadastrar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>