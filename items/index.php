<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BartaBase - Declutter & Sell</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=PT Sans">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5e167c62db.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://localhost/bartabase/assets/css/styles.css">
    <script src="assets/js/script.js"></script>
</head>
<body>

    <!--Header Start-->
    <?php
        include '../assets/includes/header.php';
    ?>
    <!--/Header-->


    <!-- Side Menu -->
     <?php
        include '../assets/includes/side-bar.php';
     ?>
    <!--/Side Menu -->

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-8 col-12">

                <div class="product-gallery" id="productGallery">
                    <div class="product-gallery-main">
                    <button class="product-gallery-btn product-gallery-prev" id="productGalleryPrev">&#10094;</button>
                    <img id="productGalleryMainImage" src="../assets/images/deals.jpg" alt="Main Image" />
                    <button class="product-gallery-btn product-gallery-next" id="productGalleryNext">&#10095;</button>
                    </div>

                    <div class="product-gallery-thumbs" id="productGalleryThumbs">
                    <!-- Thumbnails injected by JS -->
                    </div>
                </div>

                <!-- Gallery Modal -->
                <div class="product-gallery-modal" id="productGalleryModal">
                    <span class="product-gallery-close" id="productGalleryModalClose">&times;</span>
                    <button class="product-gallery-btn product-gallery-prev" id="productGalleryModalPrev">&#10094;</button>
                    <img id="productGalleryModalImage" src="" alt="Zoomed Image" />
                    <button class="product-gallery-btn product-gallery-next" id="productGalleryModalNext">&#10095;</button>
                </div>

                <!--product-info mobile-->
                <div class="col-12 my-5 d-block d-md-none">
                    <div class="product-info">
                        <p class="item-title">Brand new unused AirPod pro max <br><span>New without tags. <a href="#">Brand Name</a></span></p>
                        <p class="item-price my-3">&#8358;196,500.00 <br><span><a href="#"><b>&#8358;206,718.00</b> <br>Includes Buyer Protection <i class="fa-solid fa-shield-halved"></i></a></span></p>
                        <hr>
                        <div class="product-description">
                            <p>Flat measurements:
                                Rise: 7.5 Inches Waist: 15 inches Inseam: 30 inches
                                - I have 100+ 5 star reviews ( look at bio)
                                - I mostly ship within 48 hours
                                - I’m open to offers, All orders come with candy
                            </p>
                        </div>
                        <hr>
                        <div class="info-table">
                            <div class="info-row">
                                <div class="info-key">Brand</div>
                                <div class="info-value"><a href="#">Brand Name</a></div>
                            </div>
                            <div class="info-row">
                                <div class="info-key">Condition</div>
                                <div class="info-value neutral">New without tags</div>
                            </div>
                            <div class="info-row">
                                <div class="info-key">Color</div>
                                <div class="info-value neutral">Black</div>
                            </div>
                            <div class="info-row">
                                <div class="info-key">Views</div>
                                <div class="info-value neutral">0</div>
                            </div>
                            <div class="info-row">
                                <div class="info-key">Uploaded</div>
                                <div class="info-value">a day ago</div>
                            </div>
                        </div><!--/info-table-->
                        <hr>
                        <div class="button-group">
                            <button class="barta-btn barta-btn-primary">Buy now</button>
                            <button class="barta-btn barta-btn-outline">Make an offer</button>
                            <button class="barta-btn barta-btn-outline">Message seller</button>
                            <button class="barta-btn barta-btn-outline"><i class="fa-solid fa-heart"></i> Add to Wishlist</button>
                        </div>
                    </div><!--/product-info-->

                    <div class="product-info my-3">
                        <div class="protection-box">
                            <div class="icon-circle">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>
                            <div class="protection-text">
                                <b>Buyer Protection fee</b>
                                Our <a href="#">Buyer Protection</a> is added for a fee to every purchase made with the “Buy now” button. Buyer Protection includes our <a href="#">Refund Policy</a>.
                            </div>
                        </div>
                    </div><!--/product-info-->

                    <div class="product-info">
                        <div class="profile-card">
                            <a href="#">
                                <div class="user-info">
                                    <div class="user-icon">P</div>
                                    <div>
                                        <div class="username">Prince99</div>
                                        <div class="subtext">No reviews yet</div>
                                    </div>
                                </div>
                            </a><hr>
                            <div class="location"><i class="fas fa-map-marker-alt icon"></i> Ikate, Lekki, Lagos, Nigeria</div>
                            <div class="last-seen"><i class="fas fa-clock icon"></i> Last seen 16 hours ago</div>
                        </div>
                    </div><!--/profuct-info-->
                </div><!--/col2-->

                <!--members-items-->
                <div class="members-items my-5">
                    <h6 style="font-weight: bold;">Prince's Items (7)</h6>

                    <div class="row g-2 g-md-2" id="product-container">
                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/soundbar.jpg" class="card-img-top h-100 w-100" alt="Samsung j355 Soundbar (120W) Bluetooth, HDMI, Optical, Aux.">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">Samsung j355 Soundbar (120W) Bluetooth, HDMI, Optical, Aux.</h5>
                                            <p class="card-text mb-0">&#8358;130,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Lagos, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/mini-ac.jpg" class="card-img-top h-100 w-100" alt="Mini Air-Conditioner">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">Mini Air-Conditioner</h5>
                                            <p class="card-text mb-0">&#8358;270,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Agbara, Lagos, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/honda-pilot.jpg" class="card-img-top h-100 w-100" alt="HONDA PILOT 2010">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">HONDA PILOT 2010</h5>
                                            <p class="card-text mb-0">&#8358;5,800,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Ikorodu, Lagos, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/hisense-freezer.jpg" class="card-img-top h-100 w-100" alt="Used like New hisense freezer available for sale">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">Used like New hisense freezer available for sale</h5>
                                            <p class="card-text mb-0">&#8358;180,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Lagos-Island, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/tv.jpg" class="card-img-top h-100 w-100" alt="65Inches Samsung Curved Screen, 8Series, 4K Smart Tv For-Sale">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">65Inches Samsung Curved Screen, 8Series, 4K Smart Tv For-Sale</h5>
                                            <p class="card-text mb-0">&#8358;675,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Gbagada, Lagos, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/inverter-fridge.jpg" class="card-img-top h-100 w-100" alt="LG inverter freezer/ fridge">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">LG inverter freezer/ fridge</h5>
                                            <p class="card-text mb-0">&#8358;600,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Lekki Phase I, Lagos, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                            <div class="card overflow-hidden" style="height: 306px;">
                                <div class="image-wrapper position-relative h-100">
                                    <img src="../assets/images/uploads/bose.jpg" class="card-img-top h-100 w-100" alt="Bose quiet comfort ultra earbuds">
                                    <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                        <h5 class="card-title mb-0">Bose quiet comfort ultra earbuds</h5>
                                        <p class="card-text mb-0">&#8358;150,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-location">Agbara, Lagos, Nigeria</div>
                            </a>
                        </div>
                    </div><!--/product-container-->
                </div><!--/members-tems-->

                <!--similar-items-->
                <div class="similar-items my-5">
                    <h6 style="font-weight: bold;">Similar Items</h6>

                    <div class="row g-2 g-md-2" id="product-container">
                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/soundbar.jpg" class="card-img-top h-100 w-100" alt="Samsung j355 Soundbar (120W) Bluetooth, HDMI, Optical, Aux.">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">Samsung j355 Soundbar (120W) Bluetooth, HDMI, Optical, Aux.</h5>
                                            <p class="card-text mb-0">&#8358;130,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Lagos, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/mini-ac.jpg" class="card-img-top h-100 w-100" alt="Mini Air-Conditioner">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">Mini Air-Conditioner</h5>
                                            <p class="card-text mb-0">&#8358;270,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Agbara, Lagos, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/honda-pilot.jpg" class="card-img-top h-100 w-100" alt="HONDA PILOT 2010">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">HONDA PILOT 2010</h5>
                                            <p class="card-text mb-0">&#8358;5,800,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Ikorodu, Lagos, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/hisense-freezer.jpg" class="card-img-top h-100 w-100" alt="Used like New hisense freezer available for sale">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">Used like New hisense freezer available for sale</h5>
                                            <p class="card-text mb-0">&#8358;180,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Lagos-Island, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/tv.jpg" class="card-img-top h-100 w-100" alt="65Inches Samsung Curved Screen, 8Series, 4K Smart Tv For-Sale">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">65Inches Samsung Curved Screen, 8Series, 4K Smart Tv For-Sale</h5>
                                            <p class="card-text mb-0">&#8358;675,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Gbagada, Lagos, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                                <div class="card overflow-hidden" style="height: 306px;">
                                    <div class="image-wrapper position-relative h-100">
                                        <img src="../assets/images/uploads/inverter-fridge.jpg" class="card-img-top h-100 w-100" alt="LG inverter freezer/ fridge">
                                        <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                            <h5 class="card-title mb-0">LG inverter freezer/ fridge</h5>
                                            <p class="card-text mb-0">&#8358;600,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-location">Lekki Phase I, Lagos, Nigeria</div>
                            </a>
                        </div>

                        <div class="col-md-3 col-6 mt-3 mt-md-2">
                            <a href="#">
                            <div class="card overflow-hidden" style="height: 306px;">
                                <div class="image-wrapper position-relative h-100">
                                    <img src="../assets/images/uploads/bose.jpg" class="card-img-top h-100 w-100" alt="Bose quiet comfort ultra earbuds">
                                    <div class="card-body d-flex justify-content-between text-white position-absolute bottom-0 w-100 px-3 py-2 bg-dark bg-opacity-50">
                                        <h5 class="card-title mb-0">Bose quiet comfort ultra earbuds</h5>
                                        <p class="card-text mb-0">&#8358;150,000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-location">Agbara, Lagos, Nigeria</div>
                            </a>
                        </div>
                    </div><!--/product-container-->
                </div><!--/similar-tems-->
            </div><!--/col1-->

            <div class="col-md-4 col-12 d-md-block d-none">
                <div class="product-info">
                    <p class="item-title">Brand new unused AirPod pro max <br><span>New without tags. <a href="#">Brand Name</a></span></p>
                    <p class="item-price my-3">&#8358;196,500.00 <br><span><a href="#"><b>&#8358;206,718.00</b> <br>Includes Buyer Protection <i class="fa-solid fa-shield-halved"></i></a></span></p>
                    <hr>

                        <div class="product-description">
                            <p>Flat measurements:
                                Rise: 7.5 Inches Waist: 15 inches Inseam: 30 inches
                                - I have 100+ 5 star reviews ( look at bio)
                                - I mostly ship within 48 hours
                                - I’m open to offers, All orders come with candy
                            </p>
                        </div>
                        <hr>

                    <div class="info-table">
                        <div class="info-row">
                            <div class="info-key">Brand</div>
                            <div class="info-value"><a href="#">Brand Name</a></div>
                        </div>
                        <div class="info-row">
                            <div class="info-key">Condition</div>
                            <div class="info-value neutral">New without tags</div>
                        </div>
                        <div class="info-row">
                            <div class="info-key">Color</div>
                            <div class="info-value neutral">Black</div>
                        </div>
                        <div class="info-row">
                            <div class="info-key">Views</div>
                            <div class="info-value neutral">0</div>
                        </div>
                        <div class="info-row">
                            <div class="info-key">Uploaded</div>
                            <div class="info-value">a day ago</div>
                        </div>
                    </div><!--/info-table-->
                    <hr>
                    <div class="button-group">
                        <button class="barta-btn barta-btn-primary">Buy now</button>
                        <button class="barta-btn barta-btn-outline">Make an offer</button>
                        <button class="barta-btn barta-btn-outline">Message seller</button>
                        <button class="barta-btn barta-btn-outline"><i class="fa-solid fa-heart"></i> Add to Wishlist</button>
                    </div>
                </div><!--/product-info-->

                <div class="product-info my-3">
                    <div class="protection-box">
                        <div class="icon-circle">
                            <i class="fa-solid fa-shield-halved"></i>
                        </div>
                        <div class="protection-text">
                            <b>Buyer Protection fee</b>
                            Our <a href="#">Buyer Protection</a> is added for a fee to every purchase made with the “Buy now” button. Buyer Protection includes our <a href="#">Refund Policy</a>.
                        </div>
                    </div>
                </div><!--/product-info-->

                <div class="product-info">
                    <div class="profile-card">
                        <a href="#">
                            <div class="user-info">
                                <div class="user-icon">P</div>
                                <div>
                                    <div class="username">Prince99</div>
                                    <div class="subtext">No reviews yet</div>
                                </div>
                            </div>
                        </a><hr>
                        <div class="location"><i class="fas fa-map-marker-alt icon"></i> Ikate, Lekki, Lagos, Nigeria</div>
                        <div class="last-seen"><i class="fas fa-clock icon"></i> Last seen 16 hours ago</div>
                    </div>
                </div><!--/profuct-info-->
            </div><!--/col2-->

        </div><!--/row-->

    </div><!--/Container


    
    <!--Footer-->
    <?php
        include '../assets/includes/footer.php';
    ?>
    <!--/Footer-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <!--Load More JS -->
    <script>
        const loadMoreBtn = document.getElementById('load-more-btn');
        const loadCount = 4; // Number of items to show per click

        loadMoreBtn.addEventListener('click', () => {
            const hiddenItems = document.querySelectorAll('.more-products.d-none');
            let shown = 0;

            hiddenItems.forEach((item) => {
            if (shown < loadCount) {
                item.classList.remove('d-none');
                item.classList.add('fade-in');
                shown++;
            }
            });

            // Hide button if no more items left to show
            if (document.querySelectorAll('.more-products.d-none').length === 0) {
            document.getElementById('load-more-wrapper').classList.add('d-none');
            }
        });
    </script>

    <!--/Gallery Script-->


    <script>
    (function () {
      const galleryId = 'productGallery';
      const images = [
        '../assets/images/deals.jpg',
        '../assets/images/shopping.jpg',
        '../assets/images/computer.jpg',
        '../assets/images/unused-clothes.jpg'
      ];

      let currentIndex = 0;

      const mainImage = document.getElementById(`${galleryId}MainImage`);
      const thumbsContainer = document.getElementById(`${galleryId}Thumbs`);
      const modal = document.getElementById(`${galleryId}Modal`);
      const modalImage = document.getElementById(`${galleryId}ModalImage`);

      // Load thumbnails
      images.forEach((src, index) => {
        const thumb = document.createElement("img");
        thumb.src = src;
        thumb.className = "product-gallery-thumb";
        if (index === 0) thumb.classList.add("active");

        thumb.addEventListener("click", () => {
          currentIndex = index;
          updateMainImage();
        });

        thumbsContainer.appendChild(thumb);
      });

      const updateMainImage = () => {
        mainImage.src = images[currentIndex];
        modalImage.src = images[currentIndex];
        document.querySelectorAll(`#${galleryId}Thumbs .product-gallery-thumb`).forEach((thumb, i) => {
          thumb.classList.toggle("active", i === currentIndex);
        });
      };

      // Main image navigation
      document.getElementById(`${galleryId}Prev`).onclick = () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateMainImage();
      };

      document.getElementById(`${galleryId}Next`).onclick = () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateMainImage();
      };

      // Modal open
      mainImage.onclick = () => {
        modal.style.display = 'flex';
        modalImage.src = images[currentIndex];
      };

      // Modal navigation
      document.getElementById(`${galleryId}ModalPrev`).onclick = () => {
        currentIndex = (currentIndex - 1 + images.length) % images.length;
        updateMainImage();
      };

      document.getElementById(`${galleryId}ModalNext`).onclick = () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateMainImage();
      };

      // Modal close
      document.getElementById(`${galleryId}ModalClose`).onclick = () => {
        modal.style.display = 'none';
      };

      window.addEventListener("click", (e) => {
        if (e.target === modal) modal.style.display = 'none';
      });

    })();
  </script>

</body>
</html>
