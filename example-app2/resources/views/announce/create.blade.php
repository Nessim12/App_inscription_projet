<form action="{{route('master.store')}}" method="post">
    @csrf
    <div class="mb-3 mt-3">
      <label for="titre" class="form-label">name</label>
      <input type="titre" class="form-control" id="name"  name="name">
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">description</label>
      <input type="text" class="form-control" id="description"  name="description">
    </div>
  
    <button type="submit" class="btn btn-danger">Submit</button>
  </form>
