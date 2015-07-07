@extends('master')

@section('content')
    <div class="area-conteudo contato">

        <h2>
            Contato
        </h2>

        <div class="texto-conteudo">
            @if ($app->make('session')->has('message'))
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-success" role="alert">{{ $app->make('session')->get('message') }}</div>
                    </div>
                </div>
            @endif

            <form id="form-contato" action="{{ route('contato-enviar') }}" method="post" class="jq-form-validate">
                <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                <div class="container-input">
                    <label for="nome">
                        Nome Completo *
                    </label>
                    <input type="text" id="nome" name="nome" data-rule-required="true" value="{{ old('nome') }}">
                    {!! $errors->first('nome', '<em for="message" class="invalid">Este campo é
                        obrigatório.</em>') !!}
                </div>
                <div class="container-input">
                    <label for="email">
                        E-mail *
                    </label>
                    <input type="email" id="email" name="email" data-rule-required="true" value="{{ old('email') }}">
                    {!! $errors->first('email', '<em for="message" class="invalid">Este campo é
                        obrigatório.</em>') !!}
                </div>
                <div class="container-input meio">
                    <label for="telefone">
                        Telefone *
                    </label>
                    <input type="tel" id="telefone" name="telefone" class="mask-telefone" data-rule-required="true"
                           value="{{ old('telefone') }}">
                    {!! $errors->first('telefone', '<em for="message" class="invalid">Este campo é
                        obrigatório.</em>') !!}
                </div>
                <div class="container-input meio sem-borda">
                    <label for="celular">
                        Celular
                    </label>
                    <input type="tel" id="celular" name="celular" class="mask-telefone" data-rule-required="true"
                           value="{{ old('celular') }}">
                    {!! $errors->first('celular', '<em for="message" class="invalid">Este campo é
                        obrigatório.</em>') !!}
                </div>

                <div class="container-input medio">
                    <label for="cidade">
                        Cidade *
                    </label>
                    <input type="text" name="cidade" id="cidade" data-rule-required="true" value="{{ old('cidade') }}">
                    {!! $errors->first('cidade', '<em for="message" class="invalid">Este campo é
                        obrigatório.</em>') !!}
                </div>
                <div class="container-input menor">
                    <label for="estado">
                        Estado *
                    </label>
                    <select name="estado" id="estado" data-rule-required="true">
                        <option value="">-</option>
                        <option value="Acre" @if (old('estado') == 'Acre') selected='selected' @endif>Acre</option>
                        <option value="Alagoas" @if (old('estado') == 'Alagoas') selected='selected' @endif>
                            Alagoas
                        </option>
                        <option value="Amapá" @if (old('estado') == 'Amapá') selected='selected' @endif>Amapá
                        </option>
                        <option value="Amazonas" @if (old('estado') == 'Amazonas') selected='selected' @endif>
                            Amazonas
                        </option>
                        <option value="Bahia" @if (old('estado') == 'Bahia') selected='selected' @endif>Bahia
                        </option>
                        <option value="Ceará" @if (old('estado') == 'Ceará') selected='selected' @endif>Ceará
                        </option>
                        <option value="Distrito Federal" @if (old('estado') == 'Distrito Federal')
                                selected='selected' @endif>Distrito Federal
                        </option>
                        <option value="Espírito Santo" @if (old('estado') == 'Espírito Santo')
                                selected='selected' @endif>Espírito Santo
                        </option>
                        <option value="Goiás" @if (old('estado') == 'Goiás') selected='selected' @endif>Goiás
                        </option>
                        <option value="Maranhão" @if (old('estado') == 'Maranhão') selected='selected' @endif>
                            Maranhão
                        </option>
                        <option value="Mato Grosso" @if (old('estado') == 'Mato Grosso') selected='selected' @endif>
                            Mato Grosso
                        </option>
                        <option value="Mato Grosso do Sul" @if (old('estado') == 'Mato Grosso do Sul')
                                selected='selected' @endif>Mato Grosso do Sul
                        </option>
                        <option value="Minas Gerais" @if (old('estado') == 'Minas Gerais')
                                selected='selected' @endif>Minas Gerais
                        </option>
                        <option value="Pará" @if (old('estado') == 'Pará') selected='selected' @endif>Pará</option>
                        <option value="Paraíba" @if (old('estado') == 'Paraíba') selected='selected' @endif>
                            Paraíba
                        </option>
                        <option value="Paraná" @if (old('estado') == 'Paraná') selected='selected' @endif>Paraná
                        </option>
                        <option value="Pernambuco" @if (old('estado') == 'Pernambuco') selected='selected' @endif>
                            Pernambuco
                        </option>
                        <option value="Piauí" @if (old('estado') == 'Piauí') selected='selected' @endif>Piauí
                        </option>
                        <option value="Rio de Janeiro" @if (old('estado') == 'Rio de Janeiro')
                                selected='selected' @endif>Rio de Janeiro
                        </option>
                        <option value="Rio Grande do Norte" @if (old('estado') == 'Rio Grande do Norte')
                                selected='selected' @endif>Rio Grande do Norte
                        </option>
                        <option value="Rio Grande do Sul" @if (old('estado') == 'Rio Grande do Sul')
                                selected='selected' @endif>Rio Grande do Sul
                        </option>
                        <option value="Rondônia" @if (old('estado') == 'Rondônia') selected='selected' @endif>
                            Rondônia
                        </option>
                        <option value="Roraima" @if (old('estado') == 'Roraima') selected='selected' @endif>
                            Roraima
                        </option>
                        <option value="Santa Catarina" @if (old('estado') == 'Santa Catarina')
                                selected='selected' @endif>Santa Catarina
                        </option>
                        <option value="São Paulo" @if (old('estado') == 'São Paulo') selected='selected' @endif>
                            São Paulo
                        </option>
                        <option value="Sergipe" @if (old('estado') == 'Sergipe') selected='selected' @endif>
                            Sergipe
                        </option>
                        <option value="Tocantins" @if (old('estado') == 'Tocantins') selected='selected' @endif>
                            Tocantins
                        </option>
                    </select>
                    {!! $errors->first('estado', '<em for="message" class="invalid">Este campo é
                        obrigatório.</em>') !!}
                </div>
                <div class="container-input">
                    <label for="mensagem">
                        Mensagem *
                    </label>
                    <textarea name="mensagem" id="mensagem" cols="30" rows="5" data-rule-required="true">{{ old('mensagem') }}</textarea>
                    {!! $errors->first('mensagem', '<em for="message" class="invalid">Este campo é
                        obrigatório.</em>') !!}
                </div>
                <input type="submit" value="Enviar">

                <p class="informacoes-obrigatorias">
                    <small>* Informações obrigatórias</small>
                </p>
            </form>
        </div>
    </div>
@endsection