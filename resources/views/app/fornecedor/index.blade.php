<h3>fornecedor</h3>


{{--teste --}}


@php
//só um comentário

@endphp


{{-- @if(count($fornecedores) > 0 && count($fornecedores)<10)
    <h3>existem alguns forncedores cadastrados</h3>
@elseif(count($forncedores)>10)
    <h3>existem varios forncedores cadastrados</h3>
    @else
    <h3>não existem forncedores cadastrados</h3>
    @endif --}}

    {{-- @dd($fornecedores) --}}

    Fornecedor: {{$fornecedores[0]['nome']}}
    <BR>
    Status :{{$fornecedores[0]['status']}}
    <BR>
    @isset($fornecedores[0]['status'] )
        CNPJ :{{$fornecedores[0]['CNPJ']}}
        @empty($forncedores[0]['CNPJ'])
        VAZIO
        <BR>
        @endempty
    @endisset
    
    @unless($fornecedores[0]['status'] == 'S')
        Fornecedor: Inativo
    @endunless
