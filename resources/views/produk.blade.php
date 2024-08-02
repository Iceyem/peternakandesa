<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="css/pages_style/style.css" rel="stylesheet">
  <link href="css/pages_style/produk.css" rel="stylesheet">
  <title>Produk Kami</title>
  <link rel="icon" href="assets/logo1.png" type="image/x-icon">
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand navbar-brand-custom" href="/">
        <img src="assets/logo1.png" alt="Makmur Farm Avatar" class="avatar">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="/">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Tentang Kami
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
              <li><a class="dropdown-item" href="/tentang_kurban">Tentang Agro Farm</a></li>
              <li><a class="dropdown-item" href="/tentang_puyuh">Tentang Hasiloka Farm</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Layanan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
              <li><a class="dropdown-item" href="/layanan_kurban">Layanan Agro Farm</a></li>
              <li><a class="dropdown-item" href="/layanan_puyuh">Layanar Hasiloka Farm</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/produk">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" aria-current="page" href="/kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contents -->
  <div class="content-wrapper">
    <div class="container-fluid background-section fst-italic">
      <h1>Produk Kami</h1>
    </div>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-3">
        <select id="categoryFilter" class="form-select simple-select" aria-label="Filter by category">
          <option value="all" selected>Semua Kategori</option>
          <option value="sapibali">Sapi Bali</option>
          <option value="kambingdomba">Kambing Domba</option>
          <option value="telurpuyuh">Telur Puyuh</option>
        </select>
        </div>
      </div>
    </div>
  </div>

  <!-- Produk Sections -->
  <div class="container produk" id="sapibali-section">
    <h2 class="produk-title">Sapi Bali</h2>
    <div class="centered row" id="sapibali">
      <!-- Tempat untuk menampilkan produk -->
    </div>
  </div>

  <div class="container produk" id="kambingdomba-section">
    <h2 class="produk-title">Kambing Domba</h2>
    <div class="row" id="kambingdomba">
      <!-- Tempat untuk menampilkan produk -->
    </div>
  </div>

  <div class="container produk" id="telurpuyuh-section">
    <h2 class="produk-title">Telur Puyuh</h2>
    <div class="row" id="telurpuyuh">
      <!-- Tempat untuk menampilkan produk -->
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center text-white">
    <div class="container">
      <section class="mt-5">
        <div class="row text-center d-flex justify-content-center pt-5">
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="/kontak" class="text-white">Hubungi Kami</a>
            </h6>
          </div>
        </div>
      </section>
      <section class="mb-4">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              RT.03/RW.04, Tegal, Kec. Kemang, Kabupaten Bogor, Jawa Barat 16310, Indonesia.<br>
              Jam Buka: 06.00–18.00 WIB (Setiap Hari).<br>
              Situs gmaps: <a href="https://maps.app.goo.gl/o3VR7Q8SkKHSDuuW9" target="_blank" class="blue-link">klik disini</a>
            </p>
          </div>
        </div>
      </section>
    </div>
    <div class="copyright">© 2024 Copyright: Perternakan Desa Tegal</div>
  </footer>

  <!-- Fetch and display products -->
  <script>
  async function fetchProducts(url, elementId, whatsappNumber, hasIsi = false) {
  try {
    const response = await fetch(url);
    if (!response.ok) {
      throw new Error('Failed to fetch data');
    }
    const text = await response.text();
    const startIndex = text.indexOf('[');
    const cleanJson = text.substring(startIndex);
    const data = JSON.parse(cleanJson);
    const productList = document.getElementById(elementId);
    productList.innerHTML = '';
    data.forEach(product => {
      const productItem = document.createElement('div');
      productItem.classList.add('col-md-4', 'mb-4');
      const imageData = `data:image/jpeg;base64,${product.gambar}`; // Adjust the MIME type if necessary
      productItem.innerHTML = `
        <div class="card-container">
          <div class="card">
            <img src="${imageData}" class="card-img-top" alt="${product.namaproduk}">
            <div class="card-body">
              <h5 class="card-title">${product.namaproduk}</h5>
              <p class="card-text">Berat: ${product.berat} kg</p>
              ${hasIsi ? `<p class="card-text isi">Isi: ${product.isi} Butir</p>` : ''}
              <p class="card-text">Harga: Rp ${product.harga}</p>
              <a href="https://wa.me/${whatsappNumber}?text=Halo%20saya%20ingin%20memesan%20${encodeURIComponent(product.namaproduk)}%20dengan%20berat%20${product.berat}%20kg${hasIsi ? `%20dan%20isi%20${product.isi}%20butir` : ''}%20dengan%20harga%20Rp%20${product.harga}" class="btn btn-success">Pesan via WhatsApp</a>
            </div>
          </div>
        </div>
      `;
      productList.appendChild(productItem);
    });
  } catch (error) {
    console.error('Error fetching data:', error);
  }
  }

  document.addEventListener('DOMContentLoaded', function() {
  const commonWhatsapp = '6281931101107';
  const quailWhatsapp  = '6287750013310';
  
  fetchProducts('http://localhost/apipeternakandesa/readsapibali.php', 'sapibali', commonWhatsapp);
  fetchProducts('http://localhost/apipeternakandesa/readkambingdomba.php', 'kambingdomba', commonWhatsapp);
  fetchProducts('http://localhost/apipeternakandesa/readtelurpuyuh.php', 'telurpuyuh', quailWhatsapp, true);

  const categoryFilter = document.getElementById('categoryFilter');
  const sections = document.querySelectorAll('.produk');
  categoryFilter.addEventListener('change', function() {
    const selectedCategory = categoryFilter.value;
    sections.forEach(section => {
      if (selectedCategory === 'all' || section.id.startsWith(selectedCategory)) {
        section.style.display = '';
      } else {
        section.style.display = 'none';
      }
    });
  });
  });
  </script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
