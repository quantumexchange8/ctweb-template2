@extends('layout.master')

@section('content')
    
<main class="main__content_wrapper">
        
    <!-- Start breadcrumb section -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content">
                        <h1 class="breadcrumb__content--title text-white mb-10">Product Details</h1>
                        <ul class="breadcrumb__content--menu d-flex">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="/home">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Product Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb section -->

    <!-- Start product details section -->
    <section class="product__details--section section--padding">
        <div class="container">
            <div class="row row-cols-lg-2 row-cols-md-2">
                <div class="col">
                    <div class="product__details--media">
                        <div class="product__media--preview  swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/big-product1.webp"><img class="product__media--preview__items--img" src="assets/img/product/big-product1.webp" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="assets/img/product/big-product1.webp" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                <span class="visually-hidden">Media Gallery</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/big-product2.webp"><img class="product__media--preview__items--img" src="assets/img/product/big-product2.webp" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="assets/img/product/big-product2.webp" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                <span class="visually-hidden">Media Gallery</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/big-product3.webp"><img class="product__media--preview__items--img" src="assets/img/product/big-product3.webp" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="assets/img/product/big-product3.webp" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                <span class="visually-hidden">Media Gallery</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/big-product4.webp"><img class="product__media--preview__items--img" src="assets/img/product/big-product4.webp" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="assets/img/product/big-product4.webp" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                <span class="visually-hidden">Media Gallery</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/big-product5.webp"><img class="product__media--preview__items--img" src="assets/img/product/big-product5.webp" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="assets/img/product/big-product5.webp" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                <span class="visually-hidden">Media Gallery</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--preview__items">
                                        <a class="product__media--preview__items--link glightbox" data-gallery="product-media-preview" href="assets/img/product/big-product6.webp"><img class="product__media--preview__items--img" src="assets/img/product/big-product6.webp" alt="product-media-img"></a>
                                        <div class="product__media--view__icon">
                                            <a class="product__media--view__icon--link glightbox" href="assets/img/product/big-product6.webp" data-gallery="product-media-preview">
                                                <svg class="product__media--view__icon--svg" xmlns="http://www.w3.org/2000/svg" width="22.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                <span class="visually-hidden">Media Gallery</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product__media--nav swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="assets/img/product/small-product1.webp" alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="assets/img/product/small-product2.webp" alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="assets/img/product/small-product3.webp" alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="assets/img/product/small-product4.webp" alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="assets/img/product/small-product5.webp" alt="product-nav-img">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="product__media--nav__items">
                                        <img class="product__media--nav__items--img" src="assets/img/product/small-product6.webp" alt="product-nav-img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper__nav--btn swiper-button-next"></div>
                            <div class="swiper__nav--btn swiper-button-prev"></div>
                        </div>
                    </div>
                </div>   
                <div class="col">
                    <div class="product__details--info">
                        <form action="#">
                            <h2 class="product__details--info__title mb-15">Fashion Plastic Chair</h2>
                            <div class="product__details--info__price mb-10">
                                <span class="current__price">$299.00</span>
                                <span class="old__price">$320.00</span>
                            </div>
                            <div class="product__details--info__rating d-flex align-items-center mb-15">
                                <ul class="rating product__list--rating d-flex">
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list">
                                        <span class="rating__list--icon">
                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </li>
                                    <li class="rating__list"><span class="rating__list--text">( 5.0)</span></li>
                                </ul>
                            </div>
                            <p class="product__details--info__desc mb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut numquam ullam is recusandae laborum explicabo id sequi quisquam, ab sunt deleniti quidem ea animi facilis quod nostrum odit! Repellendus voluptas suscipit.</p>
                            <div class="product__variant">
                                <div class="product__variant--list mb-20">
                                    <fieldset class="variant__input--fieldset">
                                        <legend class="product__variant--title mb-8">Color :</legend>
                                        <div class="variant__color d-flex">
                                            <div class="variant__color--list">
                                                <input id="color-red1" name="color" type="radio" checked>
                                                <label class="variant__color--value red" for="color-red1" title="Red"><img class="variant__color--value__img" src="assets/img/product/product1.webp" alt="variant-color-img"></label>
                                            </div>
                                            <div class="variant__color--list">
                                                <input id="color-red2" name="color" type="radio">
                                                <label class="variant__color--value red" for="color-red2" title="Black"><img class="variant__color--value__img" src="assets/img/product/product6.webp" alt="variant-color-img"></label>
                                            </div>
                                            <div class="variant__color--list">
                                                <input id="color-red3" name="color" type="radio">
                                                <label class="variant__color--value red" for="color-red3" title="Pink"><img class="variant__color--value__img" src="assets/img/product/product7.webp" alt="variant-color-img"></label>
                                            </div>
                                            <div class="variant__color--list">
                                                <input id="color-red4" name="color" type="radio">
                                                <label class="variant__color--value red" for="color-red4" title="Orange"><img class="variant__color--value__img" src="assets/img/product/product4.webp" alt="variant-color-img"></label>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="product__variant--list mb-20">
                                    <fieldset class="variant__input--fieldset">
                                        <legend class="product__variant--title mb-8">Weight :</legend>
                                        <ul class="variant__size d-flex">
                                            <li class="variant__size--list">
                                                <input id="weight1" name="weight" type="radio" checked>
                                                <label class="variant__size--value red" for="weight1">5 kg</label>
                                            </li>
                                            <li class="variant__size--list">
                                                <input id="weight2" name="weight" type="radio">
                                                <label class="variant__size--value red" for="weight2">3 kg</label>
                                            </li>
                                            <li class="variant__size--list">
                                                <input id="weight3" name="weight" type="radio">
                                                <label class="variant__size--value red" for="weight3">2 kg</label>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </div>
                                <div class="product__variant--list quantity d-flex align-items-center mb-20">
                                    <div class="quantity__box">
                                        <button type="button" class="quantity__value quickview__value--quantity decrease" aria-label="quantity value" value="Decrease Value">-</button>
                                        <label>
                                            <input type="number" class="quantity__number quickview__value--number" value="1" />
                                        </label>
                                        <button type="button" class="quantity__value quickview__value--quantity increase" aria-label="quantity value" value="Increase Value">+</button>
                                    </div>
                                    <button class="quickview__cart--btn primary__btn" type="submit">Add To Cart</button>  
                                </div>
                                <div class="product__variant--list mb-15">
                                    <a class="variant__wishlist--icon mb-15" href="/wishlistPage" title="Add to wishlist">
                                        <svg class="quickview__variant--wishlist__svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                        Add to Wishlist
                                    </a>
                                    <button class="variant__buy--now__btn primary__btn" type="submit">Buy it now</button>
                                </div>
                                <div class="product__variant--list mb-15">
                                    <div class="product__details--info__meta">
                                        <p class="product__details--info__meta--list"><strong>Barcode:</strong>  <span>565461</span> </p>
                                        <p class="product__details--info__meta--list"><strong>Sky:</strong>  <span>4420</span> </p>
                                        <p class="product__details--info__meta--list"><strong>Vendor:</strong>  <span>Belo</span> </p>
                                        <p class="product__details--info__meta--list"><strong>Type:</strong>  <span>Sofa</span> </p>
                                    </div>
                                </div>
                            </div>
                            <div class="quickview__social d-flex align-items-center mb-15">
                                <label class="quickview__social--title">Social Share:</label>
                                <ul class="quickview__social--wrapper mt-0 d-flex">
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank" href="https://www.facebook.com">
                                            <svg  xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                <path  data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Facebook</span>
                                        </a>
                                    </li>
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank" href="https://twitter.com">
                                            <svg  xmlns="http://www.w3.org/2000/svg" width="16.489" height="13.384" viewBox="0 0 16.489 13.384">
                                                <path  data-name="Path 303" d="M966.025,1144.2v.433a9.783,9.783,0,0,1-.621,3.388,10.1,10.1,0,0,1-1.845,3.087,9.153,9.153,0,0,1-3.012,2.259,9.825,9.825,0,0,1-4.122.866,9.632,9.632,0,0,1-2.748-.4,9.346,9.346,0,0,1-2.447-1.11q.4.038.809.038a6.723,6.723,0,0,0,2.24-.376,7.022,7.022,0,0,0,1.958-1.054,3.379,3.379,0,0,1-1.958-.687,3.259,3.259,0,0,1-1.186-1.666,3.364,3.364,0,0,0,.621.056,3.488,3.488,0,0,0,.885-.113,3.267,3.267,0,0,1-1.374-.631,3.356,3.356,0,0,1-.969-1.186,3.524,3.524,0,0,1-.367-1.5v-.057a3.172,3.172,0,0,0,1.544.433,3.407,3.407,0,0,1-1.1-1.214,3.308,3.308,0,0,1-.4-1.609,3.362,3.362,0,0,1,.452-1.694,9.652,9.652,0,0,0,6.964,3.538,3.911,3.911,0,0,1-.075-.772,3.293,3.293,0,0,1,.452-1.694,3.409,3.409,0,0,1,1.233-1.233,3.257,3.257,0,0,1,1.685-.461,3.351,3.351,0,0,1,2.466,1.073,6.572,6.572,0,0,0,2.146-.828,3.272,3.272,0,0,1-.574,1.083,3.477,3.477,0,0,1-.913.8,6.869,6.869,0,0,0,1.958-.546A7.074,7.074,0,0,1,966.025,1144.2Z" transform="translate(-951.23 -1140.849)" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Twitter</span>
                                        </a>
                                    </li>
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank" href="https://www.skype.com">
                                            <svg  xmlns="http://www.w3.org/2000/svg" width="16.482" height="16.481" viewBox="0 0 16.482 16.481">
                                                <path  data-name="Path 284" d="M879,926.615a4.479,4.479,0,0,1,.622-2.317,4.666,4.666,0,0,1,1.676-1.677,4.482,4.482,0,0,1,2.317-.622,4.577,4.577,0,0,1,2.43.678,7.58,7.58,0,0,1,5.048.961,7.561,7.561,0,0,1,3.786,6.593,8,8,0,0,1-.094,1.206,4.676,4.676,0,0,1,.7,2.411,4.53,4.53,0,0,1-.622,2.326,4.62,4.62,0,0,1-1.686,1.686,4.626,4.626,0,0,1-4.756-.075,7.7,7.7,0,0,1-1.187.094,7.623,7.623,0,0,1-7.647-7.647,7.46,7.46,0,0,1,.094-1.187A4.424,4.424,0,0,1,879,926.615Zm4.107,1.714a2.473,2.473,0,0,0,.282,1.234,2.41,2.41,0,0,0,.782.829,5.091,5.091,0,0,0,1.215.565,15.981,15.981,0,0,0,1.582.424q.678.151.979.235a3.091,3.091,0,0,1,.593.235,1.388,1.388,0,0,1,.452.348.738.738,0,0,1,.16.481.91.91,0,0,1-.48.753,2.254,2.254,0,0,1-1.271.321,2.105,2.105,0,0,1-1.253-.292,2.262,2.262,0,0,1-.65-.838,2.42,2.42,0,0,0-.414-.546.853.853,0,0,0-.584-.17.893.893,0,0,0-.669.283.919.919,0,0,0-.273.659,1.654,1.654,0,0,0,.217.782,2.456,2.456,0,0,0,.678.763,3.64,3.64,0,0,0,1.158.574,5.931,5.931,0,0,0,1.639.235,5.767,5.767,0,0,0,2.072-.339,2.982,2.982,0,0,0,1.356-.961,2.306,2.306,0,0,0,.471-1.431,2.161,2.161,0,0,0-.443-1.375,3.009,3.009,0,0,0-1.2-.894,10.118,10.118,0,0,0-1.865-.575,11.2,11.2,0,0,1-1.309-.311,2.011,2.011,0,0,1-.8-.452.992.992,0,0,1-.3-.744,1.143,1.143,0,0,1,.565-.97,2.59,2.59,0,0,1,1.488-.386,2.538,2.538,0,0,1,1.074.188,1.634,1.634,0,0,1,.622.49,3.477,3.477,0,0,1,.414.753,1.568,1.568,0,0,0,.4.594.866.866,0,0,0,.574.2,1,1,0,0,0,.706-.254.828.828,0,0,0,.273-.631,2.234,2.234,0,0,0-.443-1.253,3.321,3.321,0,0,0-1.158-1.046,5.375,5.375,0,0,0-2.524-.527,5.764,5.764,0,0,0-2.213.386,3.161,3.161,0,0,0-1.422,1.083A2.738,2.738,0,0,0,883.106,928.329Z" transform="translate(-878.999 -922)" fill="currentColor"/>
                                                </svg>
                                                <span class="visually-hidden">Skype</span>
                                        </a>
                                    </li>
                                    <li class="quickview__social--list">
                                        <a class="quickview__social--icon" target="_blank" href="https://www.youtube.com">
                                            <svg  xmlns="http://www.w3.org/2000/svg" width="16.49" height="11.582" viewBox="0 0 16.49 11.582">
                                                <path  data-name="Path 321" d="M967.759,1365.592q0,1.377-.019,1.717-.076,1.114-.151,1.622a3.981,3.981,0,0,1-.245.925,1.847,1.847,0,0,1-.453.717,2.171,2.171,0,0,1-1.151.6q-3.585.265-7.641.189-2.377-.038-3.387-.085a11.337,11.337,0,0,1-1.5-.142,2.206,2.206,0,0,1-1.113-.585,2.562,2.562,0,0,1-.528-1.037,3.523,3.523,0,0,1-.141-.585c-.032-.2-.06-.5-.085-.906a38.894,38.894,0,0,1,0-4.867l.113-.925a4.382,4.382,0,0,1,.208-.906,2.069,2.069,0,0,1,.491-.755,2.409,2.409,0,0,1,1.113-.566,19.2,19.2,0,0,1,2.292-.151q1.82-.056,3.953-.056t3.952.066q1.821.067,2.311.142a2.3,2.3,0,0,1,.726.283,1.865,1.865,0,0,1,.557.49,3.425,3.425,0,0,1,.434,1.019,5.72,5.72,0,0,1,.189,1.075q0,.095.057,1C967.752,1364.1,967.759,1364.677,967.759,1365.592Zm-7.6.925q1.49-.754,2.113-1.094l-4.434-2.339v4.66Q958.609,1367.311,960.156,1366.517Z" transform="translate(-951.269 -1359.8)" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Youtube</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="guarantee__safe--checkout">
                                <h5 class="guarantee__safe--checkout__title">Guaranteed Safe Checkout</h5>
                                <img class="guarantee__safe--checkout__img" src="assets/img/other/safe-checkout.webp" alt="Payment Image">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details section -->

    <!-- Start product details tab section -->
    <section class="product__details--tab__section section--padding">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <ul class="product__details--tab d-flex mb-30">
                        <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">Description</li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#reviews">Product Reviews</li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#information">Additional Info</li>
                        <li class="product__details--tab__list" data-toggle="tab" data-target="#custom">Custom Content</li>
                    </ul>
                    <div class="product__details--tab__inner border-radius-10">
                        <div class="tab_content">
                            <div id="description" class="tab_pane active show">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__items mb-40 d-flex align-items-center">
                                        <div class="product__tab--content__thumbnail">
                                            <img class="product__tab--content__thumbnail--img display-block" src="assets/img/product/product1.webp" alt="product-tab">
                                        </div>
                                        <div class="product__tab--content__right">
                                            <div class="product__tab--content__step mb-20">
                                                <h4 class="product__tab--content__title">Modern Swivel Chair</h4>
                                                <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum,</p>
                                            </div>
                                            <div class="product__tab--content__step">
                                                <h4 class="product__tab--content__title">Fashion Plastic Chair</h4>
                                                <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum,</p>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="product__tab--content__items d-flex align-items-center">
                                        <div class="product__tab--content__thumbnail">
                                            <img class="product__tab--content__thumbnail--img display-block" src="assets/img/product/product2.webp" alt="product-tab">
                                        </div>
                                        <div class="product__tab--content__right">
                                            <div class="product__tab--content__step mb-20">
                                                <h4 class="product__tab--content__title">Design Living Sofa</h4>
                                                <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum,</p>
                                            </div>
                                            <div class="product__tab--content__step">
                                                <h4 class="product__tab--content__title">Folding Tables Chairs</h4>
                                                <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum,</p>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                            <div id="reviews" class="tab_pane">
                                <div class="product__reviews">
                                    <div class="product__reviews--header">
                                        <h3 class="product__reviews--header__title mb-20">Customer Reviews</h3>
                                        <div class="reviews__ratting d-flex align-items-center">
                                            <ul class="rating d-flex">
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                                <li class="rating__list">
                                                    <span class="rating__list--icon">
                                                        <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                </li>
                                            </ul>
                                            <span class="reviews__summary--caption">Based on 2 reviews</span>
                                        </div>
                                        <a class="actions__newreviews--btn primary__btn" href="#writereview">Write A Review</a>
                                    </div>
                                    <div class="reviews__comment--area">
                                        <div class="reviews__comment--list d-flex">
                                            <div class="reviews__comment--thumbnail">
                                                <img src="assets/img/other/comment-thumb1.webp" alt="comment-thumbnail">
                                            </div>
                                            <div class="reviews__comment--content">
                                                <h4 class="reviews__comment--content__title">Richard Smith</h4>
                                                <ul class="rating reviews__comment--rating d-flex mb-5">
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                                <span class="reviews__comment--content__date">January 11, 2022</span>
                                            </div>
                                        </div>
                                        <div class="reviews__comment--list margin__left d-flex">
                                            <div class="reviews__comment--thumbnail">
                                                <img src="assets/img/other/comment-thumb2.webp" alt="comment-thumbnail">
                                            </div>
                                            <div class="reviews__comment--content">
                                                <h4 class="reviews__comment--content__title">Laura Johnson</h4>
                                                <ul class="rating reviews__comment--rating d-flex mb-5">
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                                <span class="reviews__comment--content__date">January 11, 2022</span>
                                            </div>
                                        </div>
                                        <div class="reviews__comment--list d-flex">
                                            <div class="reviews__comment--thumbnail">
                                                <img src="assets/img/other/comment-thumb3.webp" alt="comment-thumbnail">
                                            </div>
                                            <div class="reviews__comment--content">
                                                <h4 class="reviews__comment--content__title">Richard Smith</h4>
                                                <ul class="rating reviews__comment--rating d-flex mb-5">
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </ul>
                                                <p class="reviews__comment--content__desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eos ex repellat officiis neque. Veniam, rem nesciunt. Assumenda distinctio, autem error repellat eveniet ratione dolor facilis accusantium amet pariatur, non eius!</p>
                                                <span class="reviews__comment--content__date">January 11, 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="writereview" class="reviews__comment--reply__area">
                                        <form action="#">
                                            <h3 class="reviews__comment--reply__title mb-15">Add a review </h3>
                                            <div class="reviews__ratting d-flex align-items-center mb-20">
                                                <ul class="rating d-flex">
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                    <li class="rating__list">
                                                        <span class="rating__list--icon">
                                                            <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                            <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mb-10">
                                                    <textarea class="reviews__comment--reply__textarea" placeholder="Your Comments...." ></textarea>
                                                </div> 
                                                <div class="col-lg-6 col-md-6 mb-15">
                                                    <label>
                                                        <input class="reviews__comment--reply__input" placeholder="Your Name...." type="text">
                                                    </label>
                                                </div>  
                                                <div class="col-lg-6 col-md-6 mb-15">
                                                    <label>
                                                <input class="reviews__comment--reply__input" placeholder="Your Email...." type="email">
                                            </label>
                                                </div>  
                                            </div>
                                            <button class="text-white primary__btn" data-hover="Submit" type="submit">SUBMIT</button>
                                        </form>   
                                    </div> 
                                </div>    
                            </div>
                            <div id="information" class="tab_pane">
                                <div class="product__tab--conten">
                                    <div class="product__tab--content">
                                        <div class="product__tab--content__step mb-30">
                                            <h4 class="product__tab--content__title mb-10">Nam provident sequi</h4>
                                            <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro? Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis necessitatibus nam ab?</p>
                                        </div>
                                        <div class="product__tab--content__step">
                                            <h4 class="product__tab--content__title mb-10">More Details</h4>
                                            <ul>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, dolorum?
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Magnam enim modi, illo harum suscipit tempore aut dolore?
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Numquam eaque mollitia fugiat laborum dolor tempora;
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Sit amet consectetur adipisicing elit.  Quo delectus repellat facere maiores.
                                                </li>
                                                <li class="product__tab--content__list">
                                                    <svg class="product__tab--content__list--icon" xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"></path></svg>
                                                    Repellendus itaque sit quia consequuntur, unde veritatis. dolorum?
                                                </li>
                                            </ul>
                                        </div>
                                    </div> 
                                </div> 
                            </div>
                            <div id="custom" class="tab_pane">
                                <div class="product__tab--content">
                                    <div class="product__tab--content__step mb-30">
                                        <h4 class="product__tab--content__title mb-10">Nam provident sequi</h4>
                                        <p class="product__tab--content__desc">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nam provident sequi, nemo sapiente culpa nostrum rem eum perferendis quibusdam, magnam a vitae corporis! Magnam enim modi, illo harum suscipit tempore aut dolore doloribus deserunt voluptatum illum, est porro? Ducimus dolore accusamus impedit ipsum maiores, ea iusto temporibus numquam eaque mollitia fugiat laborum dolor tempora eligendi voluptatem quis necessitatibus nam ab?</p>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End product details tab section -->

    <!-- Start product section -->
    <section class="product__section section--padding">
        <div class="container">
            <div class="section__heading text-center mb-40">
                <h2 class="section__heading--maintitle">You may also like</h2>
            </div>
            <div class="product__section--inner product__swiper--column4 swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="product__items ">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="/standardProduct">
                                    <img class="product__items--img product__primary--img" src="assets/img/product/product1.webp" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="assets/img/product/product2.webp" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale">New</span>
                                </div>
                                <ul class="product__items--action d-flex justify-content-center">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/wishlistPage">
                                            <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/comparePage">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="16.47" height="13.088" viewBox="0 0 15.47 11.088">
                                                <g  transform="translate(0 -72.508)">
                                                  <path  data-name="Path 114" d="M15.359,80.9l-2.011-2.011a.525.525,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49l1.106,1.106H10.576L8.3,78.052l2.273-2.274h1.618l-1.106,1.106a.287.287,0,0,0,.2.49h1.683a.531.531,0,0,0,.374-.155l2.011-2.011a.38.38,0,0,0,0-.535l-.859-.859a.227.227,0,1,0-.32.321l.806.806L13.027,76.9a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542h-2.04a.227.227,0,0,0-.16.066l-2.34,2.34-.544-.544,2.519-2.519a.382.382,0,0,1,.272-.112h2.293a.317.317,0,0,0,.225-.542l-1.054-1.054h1.282a.076.076,0,0,1,.053.022l.4.4a.227.227,0,1,0,.32-.321l-.4-.4a.531.531,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49L12.194,74.1H10.229a.832.832,0,0,0-.592.245L7.118,76.867,4.6,74.349a.832.832,0,0,0-.592-.245H.378A.378.378,0,0,0,0,74.481v.92a.378.378,0,0,0,.378.378H3.66l2.273,2.274L3.66,80.326H.378A.378.378,0,0,0,0,80.7v.92A.378.378,0,0,0,.378,82H4.007a.835.835,0,0,0,.592-.245l2.519-2.519.8.8a.227.227,0,1,0,.32-.32L3.914,75.392a.227.227,0,0,0-.16-.066H.453v-.769H4.007a.382.382,0,0,1,.272.113l6.043,6.043a.227.227,0,0,0,.16.066h2.04a.317.317,0,0,0,.224-.542l-1.054-1.054h1.282a.075.075,0,0,1,.053.022l1.958,1.958-1.958,1.958a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542H10.229a.383.383,0,0,1-.272-.113l-.968-.968a.227.227,0,0,0-.32.32l.968.968a.833.833,0,0,0,.592.245h1.965l-1.105,1.105a.287.287,0,0,0,.2.49h1.683a.525.525,0,0,0,.374-.155l2.011-2.011A.379.379,0,0,0,15.359,80.9Zm-11.08.539a.389.389,0,0,1-.272.113H.453v-.769h3.3a.226.226,0,0,0,.16-.066l2.34-2.34.543.544Z" transform="translate(0 0)" fill="currentColor"/>
                                                </g>
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content text-center">
                                <div class="product__items--color">
                                    <ul class="product__items--color__wrapper d-flex justify-content-center">
                                        <li class="product__items--color__list"><a class="product__items--color__link one" href="javascript:void(0)"><span class="visually-hidden">Color 1</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link two" href="javascript:void(0)"><span class="visually-hidden">Color 2</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link three" href="javascript:void(0)"><span class="visually-hidden">Color 3</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link four" href="javascript:void(0)"><span class="visually-hidden">Color 4</span></a></li>
                                    </ul>
                                </div>
                                <h3 class="product__items--content__title h4"><a href="/standardProduct">Fashion Plastic Chair</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$150.00</span>
                                    <span class="old__price">$200.00</span>
                                </div>
                                <a class="product__items--action__cart--btn primary__btn" href="/cartPage">
                                    <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                        <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                    </svg>
                                    <span class="add__to--cart__text"> Add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items ">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="/standardProduct">
                                    <img class="product__items--img product__primary--img" src="assets/img/product/product3.webp" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="assets/img/product/product4.webp" alt="product-img">
                                </a>
                                <ul class="product__items--action d-flex justify-content-center">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/wishlistPage">
                                            <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/comparePage">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="16.47" height="13.088" viewBox="0 0 15.47 11.088">
                                                <g  transform="translate(0 -72.508)">
                                                  <path  data-name="Path 114" d="M15.359,80.9l-2.011-2.011a.525.525,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49l1.106,1.106H10.576L8.3,78.052l2.273-2.274h1.618l-1.106,1.106a.287.287,0,0,0,.2.49h1.683a.531.531,0,0,0,.374-.155l2.011-2.011a.38.38,0,0,0,0-.535l-.859-.859a.227.227,0,1,0-.32.321l.806.806L13.027,76.9a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542h-2.04a.227.227,0,0,0-.16.066l-2.34,2.34-.544-.544,2.519-2.519a.382.382,0,0,1,.272-.112h2.293a.317.317,0,0,0,.225-.542l-1.054-1.054h1.282a.076.076,0,0,1,.053.022l.4.4a.227.227,0,1,0,.32-.321l-.4-.4a.531.531,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49L12.194,74.1H10.229a.832.832,0,0,0-.592.245L7.118,76.867,4.6,74.349a.832.832,0,0,0-.592-.245H.378A.378.378,0,0,0,0,74.481v.92a.378.378,0,0,0,.378.378H3.66l2.273,2.274L3.66,80.326H.378A.378.378,0,0,0,0,80.7v.92A.378.378,0,0,0,.378,82H4.007a.835.835,0,0,0,.592-.245l2.519-2.519.8.8a.227.227,0,1,0,.32-.32L3.914,75.392a.227.227,0,0,0-.16-.066H.453v-.769H4.007a.382.382,0,0,1,.272.113l6.043,6.043a.227.227,0,0,0,.16.066h2.04a.317.317,0,0,0,.224-.542l-1.054-1.054h1.282a.075.075,0,0,1,.053.022l1.958,1.958-1.958,1.958a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542H10.229a.383.383,0,0,1-.272-.113l-.968-.968a.227.227,0,0,0-.32.32l.968.968a.833.833,0,0,0,.592.245h1.965l-1.105,1.105a.287.287,0,0,0,.2.49h1.683a.525.525,0,0,0,.374-.155l2.011-2.011A.379.379,0,0,0,15.359,80.9Zm-11.08.539a.389.389,0,0,1-.272.113H.453v-.769h3.3a.226.226,0,0,0,.16-.066l2.34-2.34.543.544Z" transform="translate(0 0)" fill="currentColor"/>
                                                </g>
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content text-center">
                                <div class="product__items--color">
                                    <ul class="product__items--color__wrapper d-flex justify-content-center">
                                        <li class="product__items--color__list"><a class="product__items--color__link one" href="javascript:void(0)"><span class="visually-hidden">Color 1</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link two" href="javascript:void(0)"><span class="visually-hidden">Color 2</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link three" href="javascript:void(0)"><span class="visually-hidden">Color 3</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link four" href="javascript:void(0)"><span class="visually-hidden">Color 4</span></a></li>
                                    </ul>
                                </div>
                                <h3 class="product__items--content__title h4"><a href="/standardProduct">Modern Swivel Chair</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$160.00</span>
                                    <span class="old__price">$210.00</span>
                                </div>
                                <a class="product__items--action__cart--btn primary__btn" href="/cartPage">
                                    <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                        <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                    </svg>
                                    <span class="add__to--cart__text"> Add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items ">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="/standardProduct">
                                    <img class="product__items--img product__primary--img" src="assets/img/product/product5.webp" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="assets/img/product/product6.webp" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale">New</span>
                                </div>
                                <ul class="product__items--action d-flex justify-content-center">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/wishlistPage">
                                            <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/comparePage">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="16.47" height="13.088" viewBox="0 0 15.47 11.088">
                                                <g  transform="translate(0 -72.508)">
                                                  <path  data-name="Path 114" d="M15.359,80.9l-2.011-2.011a.525.525,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49l1.106,1.106H10.576L8.3,78.052l2.273-2.274h1.618l-1.106,1.106a.287.287,0,0,0,.2.49h1.683a.531.531,0,0,0,.374-.155l2.011-2.011a.38.38,0,0,0,0-.535l-.859-.859a.227.227,0,1,0-.32.321l.806.806L13.027,76.9a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542h-2.04a.227.227,0,0,0-.16.066l-2.34,2.34-.544-.544,2.519-2.519a.382.382,0,0,1,.272-.112h2.293a.317.317,0,0,0,.225-.542l-1.054-1.054h1.282a.076.076,0,0,1,.053.022l.4.4a.227.227,0,1,0,.32-.321l-.4-.4a.531.531,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49L12.194,74.1H10.229a.832.832,0,0,0-.592.245L7.118,76.867,4.6,74.349a.832.832,0,0,0-.592-.245H.378A.378.378,0,0,0,0,74.481v.92a.378.378,0,0,0,.378.378H3.66l2.273,2.274L3.66,80.326H.378A.378.378,0,0,0,0,80.7v.92A.378.378,0,0,0,.378,82H4.007a.835.835,0,0,0,.592-.245l2.519-2.519.8.8a.227.227,0,1,0,.32-.32L3.914,75.392a.227.227,0,0,0-.16-.066H.453v-.769H4.007a.382.382,0,0,1,.272.113l6.043,6.043a.227.227,0,0,0,.16.066h2.04a.317.317,0,0,0,.224-.542l-1.054-1.054h1.282a.075.075,0,0,1,.053.022l1.958,1.958-1.958,1.958a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542H10.229a.383.383,0,0,1-.272-.113l-.968-.968a.227.227,0,0,0-.32.32l.968.968a.833.833,0,0,0,.592.245h1.965l-1.105,1.105a.287.287,0,0,0,.2.49h1.683a.525.525,0,0,0,.374-.155l2.011-2.011A.379.379,0,0,0,15.359,80.9Zm-11.08.539a.389.389,0,0,1-.272.113H.453v-.769h3.3a.226.226,0,0,0,.16-.066l2.34-2.34.543.544Z" transform="translate(0 0)" fill="currentColor"/>
                                                </g>
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content text-center">
                                <div class="product__items--color">
                                    <ul class="product__items--color__wrapper d-flex justify-content-center">
                                        <li class="product__items--color__list"><a class="product__items--color__link one" href="javascript:void(0)"><span class="visually-hidden">Color 1</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link two" href="javascript:void(0)"><span class="visually-hidden">Color 2</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link three" href="javascript:void(0)"><span class="visually-hidden">Color 3</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link four" href="javascript:void(0)"><span class="visually-hidden">Color 4</span></a></li>
                                    </ul>
                                </div>
                                <h3 class="product__items--content__title h4"><a href="/standardProduct">Design Living Sofa</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$155.00</span>
                                    <span class="old__price">$205.00</span>
                                </div>
                                <a class="product__items--action__cart--btn primary__btn" href="/cartPage">
                                    <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                        <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                    </svg>
                                    <span class="add__to--cart__text"> Add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items ">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="/standardProduct">
                                    <img class="product__items--img product__primary--img" src="assets/img/product/product7.webp" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="assets/img/product/product8.webp" alt="product-img">
                                </a>
                                <ul class="product__items--action d-flex justify-content-center">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/wishlistPage">
                                            <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/comparePage">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="16.47" height="13.088" viewBox="0 0 15.47 11.088">
                                                <g  transform="translate(0 -72.508)">
                                                  <path  data-name="Path 114" d="M15.359,80.9l-2.011-2.011a.525.525,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49l1.106,1.106H10.576L8.3,78.052l2.273-2.274h1.618l-1.106,1.106a.287.287,0,0,0,.2.49h1.683a.531.531,0,0,0,.374-.155l2.011-2.011a.38.38,0,0,0,0-.535l-.859-.859a.227.227,0,1,0-.32.321l.806.806L13.027,76.9a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542h-2.04a.227.227,0,0,0-.16.066l-2.34,2.34-.544-.544,2.519-2.519a.382.382,0,0,1,.272-.112h2.293a.317.317,0,0,0,.225-.542l-1.054-1.054h1.282a.076.076,0,0,1,.053.022l.4.4a.227.227,0,1,0,.32-.321l-.4-.4a.531.531,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49L12.194,74.1H10.229a.832.832,0,0,0-.592.245L7.118,76.867,4.6,74.349a.832.832,0,0,0-.592-.245H.378A.378.378,0,0,0,0,74.481v.92a.378.378,0,0,0,.378.378H3.66l2.273,2.274L3.66,80.326H.378A.378.378,0,0,0,0,80.7v.92A.378.378,0,0,0,.378,82H4.007a.835.835,0,0,0,.592-.245l2.519-2.519.8.8a.227.227,0,1,0,.32-.32L3.914,75.392a.227.227,0,0,0-.16-.066H.453v-.769H4.007a.382.382,0,0,1,.272.113l6.043,6.043a.227.227,0,0,0,.16.066h2.04a.317.317,0,0,0,.224-.542l-1.054-1.054h1.282a.075.075,0,0,1,.053.022l1.958,1.958-1.958,1.958a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542H10.229a.383.383,0,0,1-.272-.113l-.968-.968a.227.227,0,0,0-.32.32l.968.968a.833.833,0,0,0,.592.245h1.965l-1.105,1.105a.287.287,0,0,0,.2.49h1.683a.525.525,0,0,0,.374-.155l2.011-2.011A.379.379,0,0,0,15.359,80.9Zm-11.08.539a.389.389,0,0,1-.272.113H.453v-.769h3.3a.226.226,0,0,0,.16-.066l2.34-2.34.543.544Z" transform="translate(0 0)" fill="currentColor"/>
                                                </g>
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content text-center">
                                <div class="product__items--color">
                                    <ul class="product__items--color__wrapper d-flex justify-content-center">
                                        <li class="product__items--color__list"><a class="product__items--color__link one" href="javascript:void(0)"><span class="visually-hidden">Color 1</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link two" href="javascript:void(0)"><span class="visually-hidden">Color 2</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link three" href="javascript:void(0)"><span class="visually-hidden">Color 3</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link four" href="javascript:void(0)"><span class="visually-hidden">Color 4</span></a></li>
                                    </ul>
                                </div>
                                <h3 class="product__items--content__title h4"><a href="/standardProduct">Plastic Chair Wooden</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$190.00</span>
                                    <span class="old__price">$200.00</span>
                                </div>
                                <a class="product__items--action__cart--btn primary__btn" href="/cartPage">
                                    <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                        <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                    </svg>
                                    <span class="add__to--cart__text"> Add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items ">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="/standardProduct">
                                    <img class="product__items--img product__primary--img" src="assets/img/product/product9.webp" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="assets/img/product/product10.webp" alt="product-img">
                                </a>
                                <div class="product__badge">
                                    <span class="product__badge--items sale">New</span>
                                </div>
                                <ul class="product__items--action d-flex justify-content-center">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/wishlistPage">
                                            <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/comparePage">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="16.47" height="13.088" viewBox="0 0 15.47 11.088">
                                                <g  transform="translate(0 -72.508)">
                                                  <path  data-name="Path 114" d="M15.359,80.9l-2.011-2.011a.525.525,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49l1.106,1.106H10.576L8.3,78.052l2.273-2.274h1.618l-1.106,1.106a.287.287,0,0,0,.2.49h1.683a.531.531,0,0,0,.374-.155l2.011-2.011a.38.38,0,0,0,0-.535l-.859-.859a.227.227,0,1,0-.32.321l.806.806L13.027,76.9a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542h-2.04a.227.227,0,0,0-.16.066l-2.34,2.34-.544-.544,2.519-2.519a.382.382,0,0,1,.272-.112h2.293a.317.317,0,0,0,.225-.542l-1.054-1.054h1.282a.076.076,0,0,1,.053.022l.4.4a.227.227,0,1,0,.32-.321l-.4-.4a.531.531,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49L12.194,74.1H10.229a.832.832,0,0,0-.592.245L7.118,76.867,4.6,74.349a.832.832,0,0,0-.592-.245H.378A.378.378,0,0,0,0,74.481v.92a.378.378,0,0,0,.378.378H3.66l2.273,2.274L3.66,80.326H.378A.378.378,0,0,0,0,80.7v.92A.378.378,0,0,0,.378,82H4.007a.835.835,0,0,0,.592-.245l2.519-2.519.8.8a.227.227,0,1,0,.32-.32L3.914,75.392a.227.227,0,0,0-.16-.066H.453v-.769H4.007a.382.382,0,0,1,.272.113l6.043,6.043a.227.227,0,0,0,.16.066h2.04a.317.317,0,0,0,.224-.542l-1.054-1.054h1.282a.075.075,0,0,1,.053.022l1.958,1.958-1.958,1.958a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542H10.229a.383.383,0,0,1-.272-.113l-.968-.968a.227.227,0,0,0-.32.32l.968.968a.833.833,0,0,0,.592.245h1.965l-1.105,1.105a.287.287,0,0,0,.2.49h1.683a.525.525,0,0,0,.374-.155l2.011-2.011A.379.379,0,0,0,15.359,80.9Zm-11.08.539a.389.389,0,0,1-.272.113H.453v-.769h3.3a.226.226,0,0,0,.16-.066l2.34-2.34.543.544Z" transform="translate(0 0)" fill="currentColor"/>
                                                </g>
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content text-center">
                                <div class="product__items--color">
                                    <ul class="product__items--color__wrapper d-flex justify-content-center">
                                        <li class="product__items--color__list"><a class="product__items--color__link one" href="javascript:void(0)"><span class="visually-hidden">Color 1</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link two" href="javascript:void(0)"><span class="visually-hidden">Color 2</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link three" href="javascript:void(0)"><span class="visually-hidden">Color 3</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link four" href="javascript:void(0)"><span class="visually-hidden">Color 4</span></a></li>
                                    </ul>
                                </div>
                                <h3 class="product__items--content__title h4"><a href="/standardProduct">Folding Tables Chairs</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$175.00</span>
                                    <span class="old__price">$190.00</span>
                                </div>
                                <a class="product__items--action__cart--btn primary__btn" href="/cartPage">
                                    <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                        <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                    </svg>
                                    <span class="add__to--cart__text"> Add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="product__items ">
                            <div class="product__items--thumbnail">
                                <a class="product__items--link" href="/standardProduct">
                                    <img class="product__items--img product__primary--img" src="assets/img/product/product11.webp" alt="product-img">
                                    <img class="product__items--img product__secondary--img" src="assets/img/product/product12.webp" alt="product-img">
                                </a>
                                <ul class="product__items--action d-flex justify-content-center">
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  width="20.51" height="19.443" viewBox="0 0 512 512"><path d="M255.66 112c-77.94 0-157.89 45.11-220.83 135.33a16 16 0 00-.27 17.77C82.92 340.8 161.8 400 255.66 400c92.84 0 173.34-59.38 221.79-135.25a16.14 16.14 0 000-17.47C428.89 172.28 347.8 112 255.66 112z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/><circle cx="256" cy="256" r="80" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>
                                            <span class="visually-hidden">Quick View</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/wishlistPage">
                                            <svg class="product__items--action__btn--svg"  xmlns="http://www.w3.org/2000/svg" width="17.51" height="15.443" viewBox="0 0 24.526 21.82">
                                                <path  d="M12.263,21.82a1.438,1.438,0,0,1-.948-.356c-.991-.866-1.946-1.681-2.789-2.4l0,0a51.865,51.865,0,0,1-6.089-5.715A9.129,9.129,0,0,1,0,7.371,7.666,7.666,0,0,1,1.946,2.135,6.6,6.6,0,0,1,6.852,0a6.169,6.169,0,0,1,3.854,1.33,7.884,7.884,0,0,1,1.558,1.627A7.885,7.885,0,0,1,13.821,1.33,6.169,6.169,0,0,1,17.675,0,6.6,6.6,0,0,1,22.58,2.135a7.665,7.665,0,0,1,1.945,5.235,9.128,9.128,0,0,1-2.432,5.975,51.86,51.86,0,0,1-6.089,5.715c-.844.719-1.8,1.535-2.794,2.4a1.439,1.439,0,0,1-.948.356ZM6.852,1.437A5.174,5.174,0,0,0,3,3.109,6.236,6.236,0,0,0,1.437,7.371a7.681,7.681,0,0,0,2.1,5.059,51.039,51.039,0,0,0,5.915,5.539l0,0c.846.721,1.8,1.538,2.8,2.411,1-.874,1.965-1.693,2.812-2.415a51.052,51.052,0,0,0,5.914-5.538,7.682,7.682,0,0,0,2.1-5.059,6.236,6.236,0,0,0-1.565-4.262,5.174,5.174,0,0,0-3.85-1.672A4.765,4.765,0,0,0,14.7,2.467a6.971,6.971,0,0,0-1.658,1.918.907.907,0,0,1-1.558,0A6.965,6.965,0,0,0,9.826,2.467a4.765,4.765,0,0,0-2.975-1.03Zm0,0" transform="translate(0 0)" fill="currentColor"></path>
                                            </svg>
                                            <span class="visually-hidden">Wishlist</span>
                                        </a>
                                    </li>
                                    <li class="product__items--action__list">
                                        <a class="product__items--action__btn" href="/comparePage">
                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="16.47" height="13.088" viewBox="0 0 15.47 11.088">
                                                <g  transform="translate(0 -72.508)">
                                                  <path  data-name="Path 114" d="M15.359,80.9l-2.011-2.011a.525.525,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49l1.106,1.106H10.576L8.3,78.052l2.273-2.274h1.618l-1.106,1.106a.287.287,0,0,0,.2.49h1.683a.531.531,0,0,0,.374-.155l2.011-2.011a.38.38,0,0,0,0-.535l-.859-.859a.227.227,0,1,0-.32.321l.806.806L13.027,76.9a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542h-2.04a.227.227,0,0,0-.16.066l-2.34,2.34-.544-.544,2.519-2.519a.382.382,0,0,1,.272-.112h2.293a.317.317,0,0,0,.225-.542l-1.054-1.054h1.282a.076.076,0,0,1,.053.022l.4.4a.227.227,0,1,0,.32-.321l-.4-.4a.531.531,0,0,0-.374-.155H11.291a.287.287,0,0,0-.2.49L12.194,74.1H10.229a.832.832,0,0,0-.592.245L7.118,76.867,4.6,74.349a.832.832,0,0,0-.592-.245H.378A.378.378,0,0,0,0,74.481v.92a.378.378,0,0,0,.378.378H3.66l2.273,2.274L3.66,80.326H.378A.378.378,0,0,0,0,80.7v.92A.378.378,0,0,0,.378,82H4.007a.835.835,0,0,0,.592-.245l2.519-2.519.8.8a.227.227,0,1,0,.32-.32L3.914,75.392a.227.227,0,0,0-.16-.066H.453v-.769H4.007a.382.382,0,0,1,.272.113l6.043,6.043a.227.227,0,0,0,.16.066h2.04a.317.317,0,0,0,.224-.542l-1.054-1.054h1.282a.075.075,0,0,1,.053.022l1.958,1.958-1.958,1.958a.075.075,0,0,1-.053.022H11.692l1.054-1.054a.317.317,0,0,0-.224-.542H10.229a.383.383,0,0,1-.272-.113l-.968-.968a.227.227,0,0,0-.32.32l.968.968a.833.833,0,0,0,.592.245h1.965l-1.105,1.105a.287.287,0,0,0,.2.49h1.683a.525.525,0,0,0,.374-.155l2.011-2.011A.379.379,0,0,0,15.359,80.9Zm-11.08.539a.389.389,0,0,1-.272.113H.453v-.769h3.3a.226.226,0,0,0,.16-.066l2.34-2.34.543.544Z" transform="translate(0 0)" fill="currentColor"/>
                                                </g>
                                            </svg>
                                            <span class="visually-hidden">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__items--content text-center">
                                <div class="product__items--color">
                                    <ul class="product__items--color__wrapper d-flex justify-content-center">
                                        <li class="product__items--color__list"><a class="product__items--color__link one" href="javascript:void(0)"><span class="visually-hidden">Color 1</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link two" href="javascript:void(0)"><span class="visually-hidden">Color 2</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link three" href="javascript:void(0)"><span class="visually-hidden">Color 3</span></a></li>
                                        <li class="product__items--color__list"><a class="product__items--color__link four" href="javascript:void(0)"><span class="visually-hidden">Color 4</span></a></li>
                                    </ul>
                                </div>
                                <h3 class="product__items--content__title h4"><a href="/standardProduct">Modern Fabric Chair</a></h3>
                                <div class="product__items--price">
                                    <span class="current__price">$165.00</span>
                                    <span class="old__price">$210.00</span>
                                </div>
                                <a class="product__items--action__cart--btn primary__btn" href="/cartPage">
                                    <svg class="product__items--action__cart--btn__icon" xmlns="http://www.w3.org/2000/svg" width="13.897" height="14.565" viewBox="0 0 18.897 21.565">
                                        <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"></path>
                                    </svg>
                                    <span class="add__to--cart__text"> Add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>
    <!-- End product section -->

    <!-- Start Newsletter banner section -->
    <section class="newsletter__banner--section section--padding pt-0">
        <div class="container">
            <div class="newsletter__banner--thumbnail position__relative">
                <img class="newsletter__banner--thumbnail__img" src="assets/img/banner/banner-bg7.webp" alt="newsletter-banner">
                <div class="newsletter__content newsletter__subscribe">
                    <h5 class="newsletter__content--subtitle text-white">Want to offer regularly ?</h5>
                    <h2 class="newsletter__content--title text-white h3 mb-25">Subscribe Our Newsletter <br>
                        for Get Daily Update</h2>
                    <form class="newsletter__subscribe--form position__relative" action="#">
                        <label>
                            <input class="newsletter__subscribe--input" placeholder="Enter your email address" type="email">
                        </label>
                        <button class="newsletter__subscribe--button primary__btn" type="submit">Subscribe
                            <svg class="newsletter__subscribe--button__icon" xmlns="http://www.w3.org/2000/svg" width="9.159" height="7.85" viewBox="0 0 9.159 7.85">
                                <path  data-name="Icon material-send" d="M3,12.35l9.154-3.925L3,4.5,3,7.553l6.542.872L3,9.3Z" transform="translate(-3 -4.5)" fill="currentColor"/>
                            </svg>
                        </button>
                    </form>   
                </div>
            </div>
        </div>
    </section>
    <!-- End Newsletter banner section -->
</main>

@endsection