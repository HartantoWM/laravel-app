@extends("template/main")

@section("content")

<div class="row col-mb-5">
    <div class="col-md-12">
        <img src="../img/mazda.jpg" class="d-blok w-100" alt="">
    </div>
</div>
<br>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="card" style="width: 100%;">
                <img src="https://cdn3d.iconscout.com/3d/premium/thumb/product-5806313-4863042.png" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">PRODUK</p>
                </div>
            </div>
        </div>



        <div class="col-md-8">

            <div id="carouselExampleIndicators" class="carousel slide">
                <br>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/mazda.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/mazda.jpg" class="d-block w-100" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/mazda.jpg" class="d-block w-100" alt="">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>



        <div class="row">
            <div class="col-md-12">
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error architecto animi aliquam similique, tenetur ut minima vitae ullam ad debitis nulla voluptas repellat amet voluptatibus! Quibusdam modi delectus quis!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error architecto animi aliquam similique, tenetur ut minima vitae ullam ad debitis nulla voluptas repellat amet voluptatibus! Quibusdam modi delectus quis!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis error architecto animi aliquam similique, tenetur ut minima vitae ullam ad debitis nulla voluptas repellat amet voluptatibus! Quibusdam modi delectus quis!</p>
            </div>
        </div>


    </div>
</div>

@endsection