<?php
use Illuminate\Support\Facades\DB;

// ...

try {
    DB::connection()->getPdo();
    if(DB::connection()->getDatabaseName()){
        echo "Conexão bem-sucedida ao banco de dados: " . DB::connection()->getDatabaseName();
    }
} catch (\Exception $e) {
    die("Não foi possível conectar ao banco de dados: " . $e->getMessage());
}