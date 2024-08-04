<!-- Side widgets-->
<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
            </div>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div class="row">
                @foreach($tags as $tag)
                <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">
                        <li>{{ $tag -> value }}</li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Side widget-->
</div>
