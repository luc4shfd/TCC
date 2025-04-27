<div class="form-container-produto">
    <form action="salvar_produto.php" method="POST">
    
        <label >Descrição:</label>
        <input type="text"  name="descricao" required>

        <label >Data de Chegada:</label>
        <input type="date"  name="data_chegada">

        <label >Data de Saída:</label>
        <input type="date"  name="data_saida">

        <label >Data da Vistoria:</label>
        <input type="date"  name="data_vistoria">

        <label>Categoria:</label>
        <input type="text"  name="categoria">

        <button type="submit">Cadastrar Produto</button>
    </form>
</div>