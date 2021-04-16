<!DOCTYPE html>
<html>
  <head>
    <title>Платежная страница</title>
    <meta charset="utf-8" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      href="./index.css"
      rel="stylesheet"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a
                class="nav-link disabled"
                href="#"
                tabindex="-1"
                aria-disabled="true"
                >Disabled</a
              >
            </li>
          </ul>
          <form class="d-flex">
            <input
              class="form-control me-2"
              type="search"
              placeholder="Search"
              aria-label="Search"
            />
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>
    <section class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="card mt-4">
              <img src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Товар 1</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="price text-danger">350грн</p>
                <a href="#" class="btn btn-primary buy" data-price="350" data-product="Товар 1">Купить</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mt-4">
              <img src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Товар 2</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="price text-danger">250грн</p>
                <a href="#" class="btn btn-primary buy" data-price="250" data-product="Товар 2">Купить</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mt-4">
              <img src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Товар 3</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="price text-danger">380грн</p>
                <a href="#" class="btn btn-primary buy" data-price="380" data-product="Товар 3">Купить</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mt-4">
              <img src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Товар 4</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="price text-danger">100грн</p>
                <a href="#" class="btn btn-primary buy" data-price="100" data-product="Товар 4">Купить</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mt-4">
              <img src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Товар 5</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="price text-danger">350грн</p>
                <a href="#" class="btn btn-primary buy" data-price="350" data-product="Товар 5">Купить</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="card mt-4">
              <img src="https://cdn.vuetifyjs.com/images/carousel/sky.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Товар 6</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <p class="price text-danger">150грн</p>
                <a href="#" class="btn btn-primary buy" data-price="150" data-product="Товар 6">Купить</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>