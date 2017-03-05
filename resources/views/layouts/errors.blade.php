@if (count($errors))

      <div class="alert alert-danger" role="alert">
            <div class="card-content red-text">
              <ul>
                @foreach ($errors->all() as $error)
                  <li> <strong> {{ $error }}  </strong></li>
                @endforeach
              </ul>
            </div>
      </div>
    
@endif
