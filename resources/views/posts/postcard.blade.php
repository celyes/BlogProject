
        <div class="col-md-12">
          <div class="card flex-md-row mb-4 box-shadow h-md-250">            
            <img class="card-img flex-auto d-none d-lg-block" data-src="holder.js/200x248?theme=thumb" alt="Card image cap">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Catgory</strong>
              <h3 class="mb-0">
              <a class="text-dark" href="/post/{{ $post->id }}">{{ $post->title }}</a>
              </h3>
              <div class="mb-1 text-muted">{{ $post->created_at }}</div>
              <p class="card-text mb-auto">Some text</a>
            </div>
          </div>
        </div>