<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'imagem'];

    public function rules()
    {
        return  [
            'nome' => 'required|unique:marcas,nome,'.$this->id.'|min:3',
            'imagem' => 'required|file|mimes:png'
        ];
    }

    public function feedback()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'imagem.mimes' => 'O arquivo deve ser uma imagem do tipo png.',
            'nome.unique' => 'O campo da marca já existe',
            'nome.min' => 'O nome deve ter no minimo 3 caracteres'
        ];
    }

    public function modelos()
    {
        //Uma marca POSSUI MUITOS modelos
        return $this->hasMany('App\Models\Modelo');
    }
}
