<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo)? $registro->titulo: ''}}">
    <label>Titulo</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao)? $registro->descricao: ''}}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor)? $registro->valor: ''}}">
    <label>Valor</label>
</div>
{{-- CAMPO PARA UPLOAD DE IMAGEM --}}
<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem">
    </div>
    {{-- SCRIPT DO MATERIALIZE PARA UPLOAD DE IMAGEM --}}
    <div class="file-path-wrapper"> 
        <input class="file-path validate" type="text">
    </div>
</div>
{{-- VERIFICANDO SE A IMAGEM EXISTE --}}
@if(isset($registro->imagem))
<div class="input-field">
    <img wisth="150" src="{{asset('$registro->imagem')}}">
</div>
@endif
{{-- SCRIP DO MATERIALIZE PARA SABER SE O USUÁRIO QUE PUBLICAR O CURSO OU NÃO --}}
<div class="input-field">
    <p>
        <label for="test5">Publicar?</label>
        <input style="margin-left:10px; opacity: 1; pointer-events:auto; height:20px; width:20px" type="checkbox" id="test5" name="publicado"{{isset($registro->publicado) && $registro->publicado =='sim' ? 'checked' : ''}} value="true"/>
    </p>
    <div style="height:20px"></div>
</div>