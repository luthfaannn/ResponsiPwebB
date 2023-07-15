var prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("header").style.top = "0"; /* Munculkan header saat di-scroll ke atas */
  } else {
    document.querySelector("header").style.top = "-100px"; /* Sembunyikan header saat di-scroll ke bawah */
  }
  prevScrollpos = currentScrollPos;
};


// Mendapatkan semua gambar model potongan rambut
var hairstyles = document.querySelectorAll("#hairstyles img");

// Menambahkan event listener pada setiap gambar model potongan rambut
hairstyles.forEach(function(hairstyle) {
    hairstyle.addEventListener("click", function() {
        // Mengubah gambar utama menjadi gambar model potongan rambut yang diklik
        var mainImage = document.querySelector("#main-image");
        mainImage.src = this.src;
        mainImage.alt = this.alt;
    });
});
