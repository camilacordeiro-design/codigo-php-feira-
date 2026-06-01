class ComidaController {
    private $ComidaModel;


     public funcition_construct($conexao){
        $this->comidaModel - new ComidaMode($conexao);

     }
     public function listar(): {
        return $this->comidaModel->listarComida();

     }
     public function adicionar($nome,$ano,$genero):{
        return $this->comidaMOdel->adicionarComida($nome,$ano,$genero);

     }

     public function editar ($nome,$ano,$genero):{
        return $this->comidaModel->atualizaComida  ($nome,$ano,$genero);

     }
      public function deletar($id){
        return $this->comidaModel->deletarComida($id);

      }
      public function buscar ($id){
        return $this->comidaModel->buscarComida($id);

      }
}
 ?>