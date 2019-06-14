<div class="col-12 col-md-3 col-xl-2 ct-sidebar">
  <nav class="collapse ct-links" id="ct-docs-nav">
    <!-- Show links for all groups -->
      @forelse($doc->ParentSections as $ParentSection)
      <div class="ct-toc-item active">
      <a class="ct-toc-link" href="#">{{ $ParentSection->title }}</a>
      </div>
      <ul class="nav ct-sidenav">
        @foreach($ParentSection->sections as $section)
          <li>
            <a href="#"></a>
          </li>
        @endforeach
      </ul>
      @empty
        <ul class="nav ct-sidenav">
          <li>
              This Doc. has no contents!
          </li>
        </ul>
      @endforelse
  </nav>
</div>
