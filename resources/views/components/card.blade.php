    <div class="card card-lift--hover shadow border-0">
        <div class="card-body py-5">
            <div class="icon icon-shape icon-shape-primary rounded-circle mb-4">
                <i class="fa fa-book"></i>
            </div>
            <h6 class="text-primary text-uppercase">{{ $doc->title }}</h6>
            <p class="description mt-3">{{ $doc->description }}</p>
            <div>
                @forelse($doc->ParentSections as $ParentSection)
                  <span class="badge badge-pill badge-primary">{{ $ParentSection->title }}</span>
                @empty
                  @alert(['type' => 'warning'])
                    This docs has no contents yet!
                  @endalert
                @endforelse
            </div>
            <a href="{{ route('doc.show', ['doc' => $doc->id]) }}" class="btn btn-outline-primary mt-4">Learn more</a>
            <a href="#" class="btn btn-icon btn-2 btn-outline-danger mt-4">
               <span class="btn-inner--icon"><i class="fa fa-trash-o"></i></span>
            </a>
            <a href="#" class="btn btn-icon btn-2 btn-outline-default mt-4">
	             <span class="btn-inner--icon"><i class="fa fa-edit"></i></span>
            </a>

          </div>
    </div>
