<div>
    <div class="d-flex justify-content-center align-items-center vh-100">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
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

        <div class="w-50">
            <div class="card " style="border-radius: 10px">
                <div class="card-body" style="background-color: #f779d7; border-radius: 10px">
                    <form wire:submit.prevent="login">

                        <div class="mt-4">
                            <div class="mb-4">
                                <h3 class="text-center"
                                    style="color: #fff2c0; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                    <strong>Faça seu login</strong>
                                </h3>
                            </div>
                        </div>

                        @if (session()->has('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <div class="ms-5">
                            <div class="me-5">

                                <div class="mb-3">
                                    <label for="email" style="color: #fff2c0">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        wire:model.defer="email" placeholder="Ex: ana@cliente.com">
                                    @error('email')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label" style="color: #fff2c0">Senha</label>
                                    <input type="password" id="password" wire:model="password" class="form-control"
                                        placeholder="Digite sua senha">
                                    @error('password')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="mt-4">
                                    <div class="mb-3">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <button type="submit" class="btn"
                                                style="background-color: #d209c2; color:#fff2c0">
                                                <strong>Login</strong></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="mb-1">
                                        <p class="text-center" style="color: #fff2c0;">Não tem uma conta?
                                        </p>
                                    </div>

                                    <div class="mb-3">
                                        <div class="d-grid gap-2 col-6 mx-auto">
                                            <a  href="{{ route('cliente.create') }}" class="btn"
                                                style="background-color: #d209c2; color:#fff2c0">
                                                <strong>Cadastre-se Já!</a></strong>
                                                
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

</div>
