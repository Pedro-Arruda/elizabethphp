@extends('template.index')

@section('contents')

<!-- Start Blog Section -->
<div class="blog-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6">
                <h2 class="section-title">Blog</h2>
            </div>
            <div class="col-md-6 text-start text-md-end">
                <a href="#" class="more">View All Posts</a>
            </div>
        </div>

        <div class="row">

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="images/post-1.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Primeira vez na casa nova</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 19, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="images/post-2.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Como manter seus móveis limpos</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Robert Fox</a></span> <span>on <a href="#">Dec 15, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                <div class="post-entry">
                    <a href="#" class="post-thumbnail"><img src="images/post-3.jpg" alt="Image" class="img-fluid"></a>
                    <div class="post-content-entry">
                        <h3><a href="#">Apartamento pequeno, móveis pequenos.</a></h3>
                        <div class="meta">
                            <span>by <a href="#">Kristin Watson</a></span> <span>on <a href="#">Dec 12, 2021</a></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End Blog Section -->

@endsection
