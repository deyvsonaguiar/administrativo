<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\AbstractPaginator;

class Empresa extends Model
{
    use HasFactory;

    /**
     * Atributos em massa
     *
     * @var array
     */
    protected $fillable = [
        "tipo",
        "nome",
        "razao_social",
        "documento",
        "ie_rg",
        "contato",
        "celular",
        "email",
        "telefone",
        "cep",
        "logradouro",
        "bairro",
        "cidade",
        "estado",
        "observacao"
    ];

    public static function todasPorTipo(string $tipo, int $quantidade=10): AbstractPaginator
    {
        return self::where('tipo', $tipo)->paginate($quantidade);
    }
}
