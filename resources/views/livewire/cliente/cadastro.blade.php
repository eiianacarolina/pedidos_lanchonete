<div class="d-flex justify-content-center align-items-center vh-100">


    <div class="w-50">


        @if (session()->has('success'))
            <div class="alert alert-dismissible fade show" role="alert"
                style="background-color: #fc41cd96; color:#fff2c0; border-color: #d209c2">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <style>
            h3 {
                -webkit-text-stroke: 1px rgb(0, 0, 0);
                font-size: 36px;
                color: #fff2c0;
                text-shadow:
                    3px 3px 0 #000,
                    -1px -1px 0 #000,
                    1px -1px 0 #000,
                    -1px 1px 0 #000,
                    1px 1px 0 #000;
            }
        </style>

        <div class="card " style="border-radius: 10px">
            <div class="card-body" style="background-color: #f779d7; border-radius: 10px">
                <form wire:submit.prevent="store">

                    <div class="mt-4">
                        <div class="mb-4">
                            <h3 class="text-center"
                                style="color: #fff2c0; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                <strong>Cadastrar-se já!</strong>
                            </h3>
                        </div>
                    </div>

                    <div class="ms-5">
                        <div class="me-5">
                            <div class="mb-3">
                                <label for="nome" class="form-label" style="color: #fff2c0">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome"
                                    placeholder="Ex: Fernanda" wire:model.defer="nome">
                            </div>

                            <div class="mb-3">
                                <label for="endereco" style="color: #fff2c0">Endereço</label>
                                <input type="text" name="endereco" id="endereco"
                                    class="form-control" wire:model.defer="endereco"
                                    placeholder="Ex: Rua 123">
                            </div>

                            <div class="mb-3">
                                <label for="telefone" style="color: #fff2c0">Telefone</label>
                                <input type="text" name="telefone" id="telefone"
                                    class="form-control" wire:model.defer="telefone"
                                    placeholder="Ex: (18) 99999-9999">
                            </div>

                            <div class="mb-3">
                                <label for="cpf" style="color: #fff2c0">CPF</label>
                                <input type="text" name="cpf" id="cpf" class="form-control"
                                    placeholder="***********" wire:model.defer="cpf" minlength="11" required>

                            <div class="mb-3">
                                    <label for="email" style="color: #fff2c0">Email</label>
                                    <input type="email" name="email" id="email"
                                        class="form-control" wire:model.defer="email"
                                        placeholder="Ex: ana@senai.com">
                           </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label" style="color: #fff2c0">Senha</label>
                                    <input type="password" id="password" wire:model="password" class="form-control"
                                        placeholder="Digite sua senha" minlength="6" required>
                                    @error('password')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>


                            </div>

                            <div class="mt-4">
                                <div class="mb-3">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" class="btn"
                                            style="background-color: #d209c2; color:#fff2c0">
                                            <strong>Cadastrar</strong></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

