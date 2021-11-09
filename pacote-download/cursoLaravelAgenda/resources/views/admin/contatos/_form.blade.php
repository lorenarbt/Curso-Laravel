<div class="input-field">
    <input type="text" required name="nome" value="{{isset($registro->nome)? $registro->nome: ''}}">
    <label>Nome</label>
</div>

<div class="input-field">
    <input type="text" required name="telefone" value="{{isset($registro->telefone)? $registro->telefone: ''}}">
    <label>Telefone</label>
</div>

<div class="input-field">
    <input type="email" required name="email" value="{{isset($registro->email)? $registro->email: ''}}">
    <label>Email</label>
</div>



