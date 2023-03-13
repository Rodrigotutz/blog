<?php $this->layout("../components/_theme") ?>

<div class="container mt-5" style="min-height: 70vh;">
    <h3 class="text-center">Faça login para entrar</h3>
    <div class="row mt-5">
        <div class="col-6 offset-3">
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="showPass">
                    <label class="form-check-label" for="showPass">Ver Senha</label>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
            <div class="text-end mt-4">
                <small>Caso ainda não tenha uma conta <a href="">Clique aqui!</a></small>
            </div>
        </div>
    </div>
</div>