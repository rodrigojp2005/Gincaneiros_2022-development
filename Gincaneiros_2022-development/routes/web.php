<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rota -> Página Principal
Route::get('/', [App\Http\Controllers\PrincipalController::class,'metodoPrincipal'])->name('site.principal');

// Rota -> Página Sobre Nós
Route::get('/sobre-nos', [App\Http\Controllers\SobreNosController::class,'metodoSobreNos'])->name('site.sobreNos');

// Rota -> Página Contato
Route::get('/contato', [App\Http\Controllers\ContatoController::class,'metodoContato'])->name('site.contato');

// Rota -> Página Cadastro Usuário
Route::get('/cadastro-usuario', [App\Http\Controllers\CadastroUsuarioController::class,'metodoCadastroUsuario'])->name('site.cadastroUsuario');

// Rota -> Página Login
Route::get('/login', [App\Http\Controllers\LoginController::class,'metodoLogin'])->name('site.login');

// Rota -> Página Criar Gincana Empresarial
Route::get('/criar-gincana-empresarial', [App\Http\Controllers\CriarGincanaEmpresarialController::class,'metodoCriarGincanaEmpresarial'])->name('site.criarGincanaEmpresarial');

// Rota -> Página Criar Gincana Pessoal
Route::get('/criar-gincana-pessoal',[App\Http\Controllers\CriarGincanaPessoalController::class,'metodoCriarGincanaPessoal'])->name('site.criarGincanaPessoal');

// Rota -> Página Gincanas Empresariais Ativas
Route::get('/gincanas-empresariais-ativas',[App\Http\Controllers\GincanasEmpresariaisAtivasController::class,'metodoGincanasEmpresariaisAtivas'])->name('site.gincanasEmpresariaisAtivas');

// Rota -> Página Gincanas Pessoais Ativas
Route::get('/gincanas-pessoais-ativas',[App\Http\Controllers\GincanasPessoaisAtivasController::class,'metodoGincanasPessoaisAtivas'])->name('site.gincanasPessoaisAtivas');

// Rota -> Página Questões Gincanas
Route::get('/questoes-gincanas',[App\Http\Controllers\QuestoesGincanaController::class,'metodoQuestoesGincanas'])->name('site.questoesGincanas');

// Rota -> Página Nenhuma Gincana Ativa
Route::get('/nenhuma-gincana-ativa', [App\Http\Controllers\NenhumaGincanaAtivaController::class, 'metodoNenhumaGincanaAtiva'])->name('site.nenhumaGincanaAtiva');

// Rota -> Página Ranking Gincana
Route::get('/ranking-gincana', [App\Http\Controllers\RankingGincanaController::class, 'metodoRankingGincana'])->name('site.rankingGincana');

// Rota -> Página Ajuda
Route::get('/ajuda', [App\Http\Controllers\AjudaController::class, 'metodoAjuda'])->name('site.ajuda');

// Agrupamento das Rotas (Usuário)

Route::prefix('/usuario')->group(function(){

    // Rota -> Página Saldo
    Route::get('/saldo',[App\Http\Controllers\SaldoController::class,'metodoSaldo'])->name('usuario.saldo');

    // Rota -> Página Cidade
    Route::get('/cidade',[App\Http\Controllers\CidadeController::class,'metodoCidade'])->name('usuario.cidade');

    // Rota -> Página Meu Perfil
    Route::get('/meu-perfil', [App\Http\Controllers\MeuPerfilController::class, 'metodoMeuPerfil'])->name('usuario.meuPerfil');

    // Rota -> Página Gincanas que Participo
    Route::get('/gincanas-que-participo',[App\Http\Controllers\GincanasQueParticipo::class,'metodoGincanasQueParticipo'])->name('usuario.gincanasQueParticipo');

    // Rota -> Página Editar Questões Gincana
    Route::get('/editar-questoes-gincana', [App\Http\Controllers\EditarQuestoesGincanaController::class, 'metodoEditarQuestoesGincana'])->name('usuario.editarQuestoesGincana');

    // Rota -> Página Ranking Minha Gincana
    Route::get('/ranking-minha-gincana', [App\Http\Controllers\RankingMinhaGincanaController::class, 'metodoRankingMinhaGincana'])->name('usuario.rankingMinhaGincana');

    // Rota -> Página Gincanas que Criei
    Route::get('/gincanas-que-criei',[App\Http\Controllers\GincanasQueCrieiController::class,'metodoGincanasQueCriei'])->name('usuario.gincanasQueCriei');

    // Rota -> Página Meus Cupons
    Route::get('/meus-cupons', [App\Http\Controllers\MeusCuponsController::class, 'metodoMeusCupons'])->name('usuario.meusCupons');

    // Rota -> Página Validar Cupons Minha Gincana
    Route::get('/validar-cupons-minha-gincana',[App\Http\Controllers\ValidarCuponsMinhaGincanaController::class,'metodoValidarCuponsMinhaGincana'])->name('usuario.validarCuponsMinhaGincana');

});