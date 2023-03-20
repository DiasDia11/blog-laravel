@extends('layouts.app')
@section('content')
<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>

    <div class="content">
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action="{{route('login')}}">
            @csrf
          <h1>Login</h1>
          <p>
            <label name="email" for="email_login">Seu e-mail</label>
            <input id="email_login" name="email_login" required="required" type="text" placeholder="contato@email.com"/>
          </p>

          <p>
            <label name="senha" for="senha_login">Sua senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password" placeholder="senha" />
          </p>

          <p>
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" />
            <label for="manterlogado">Manter-me logado</label>
          </p>

          <p>
            <input type="submit" value="Logar" />
          </p>

          <p class="link">
            Ainda não tem conta?
            <a href="#paracadastro">Cadastre-se</a>
          </p>
        </form>
      </div>

      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="{{route('login')}}">
            @csrf
          <h1>Cadastro</h1>

          <p>
            <label name="nome" for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Seu Nome" />
          </p>

          <p>
            <label name="email" for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@email.com"/>
          </p>

          <p>
            <label name="senha" for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="Sua Senha"/>
          </p>

          <p>
            <input type="submit" value="Cadastrar"/>
          </p>

          <p class="link">
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>
@endsection
