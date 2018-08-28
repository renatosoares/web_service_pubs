<form action="{{ route('publishers.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col">
            <input type="text" class="form-control" placeholder="Nome" name="name">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Cidade" name="city">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="Estado" name="state">
        </div>
        <div class="col">
            <input type="text" class="form-control" placeholder="País" name="country">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Criar</button>
</form>
