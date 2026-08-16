<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Laravel 11 CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark">
      <h3 class="text-white text-center">Simple Laravel 11 CRUD</h3>
    </div>
    <div class="container">
      <div class="row d-flex justigy-content-center">
        <div class="col-md-10">
          <div class="card borde-0 shadow-lg my-4">
            <div class="card-header" bg-dark>
              <h3>Create Product</h3>
            </div>
            <form action="{{route('proudcts.store')}}" method="post">
              @csrf            
              <div class="card-body">
                <div class="mb-3">
                <label for="" class="form-label h5">name</label>
                <input value="{{old('name')}}" type="text" class="@error('name') is-invalid @enderror form-control form-control-lg form-control" placeholder="Name" name="name">
                @error('name')
                  <p class="invalid-feedback">{{ $message}}</p>                  
                @enderror
              </div>

              <div class="mb-3">
                <label for="" class="form-label h5">sku</label>
                <input value="{{old('Sku')}}" type="text" class="@error('Sku') is-invalid @enderror form-control form-control-lg" placeholder="sku" name="sku">
              </div>
              @error('sku')
                  <p class="invalid-feedback">{{ $message}}</p>                  
                @enderror
              
              <div class="mb-3">
                <label for="" class="form-label h5">price</label>
                <input value="{{old('Price')}}" type="text" class="@error('Price') is-invalid @enderror form-control form-control-lg" placeholder="price" name="price">
              </div>
              @error('price')
                  <p class="invalid-feedback">{{ $message}}</p>                  
                @enderror
              
              <div class="mb-3">
                <label for="" class="form-label h5">description</label>
                <textarea placeholder="description" class="form-control"
                name="description" cols="30" rows="5">{{old('description')}}</textarea>
              </div>
              
              <div class="mb-3">
                <label for="" class="form-label h5">Image</label>
                <input type="file" class="form-control form-control-lg" placeholder="price" name="image">
              </div>
              
              <div class="d-grid">
                <button class="btn btn-lg btn-primary">Submit</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>

    </div>
  </body>
</html>