document.getElementById("searchForm").addEventListener("submit", function(event) {
    event.preventDefault();
    let idInput = document.getElementById("idInput").value;
    console.log(idInput);
    // Perform your logic here to retrieve the ID card photo based on the input ID
    // For demonstration purposes, let's assume the photo URL is stored in a variable called photoUrl
    // let photoUrl = "assets/card/memo_terbaru.png";

    // Display the photo in the result container
    // document.getElementById("idPhoto").src = photoUrl;

    $.get(`getByIdCard.php?id=${idInput}`, function(data){
        // alert("succes: true");
        if (data != null) {
            $('#resultContainer').html(`
            <div class="col-12 text-center">
                <img id="idPhoto" class="img-fluid" src="assets/card/memo_terbaru.png" alt="ID Card Photo">
                <a href="download.php?nama_file=${data.image_card}" clas="btn btn-primary">
                    <svg style="width: 30px" class="fa-w-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M296 296h-80v-64h80c13.234 0 24-10.766 24-24s-10.766-24-24-24H216c-4.418 0-8-3.582-8-8V96c0-4.418 3.582-8 8-8h80c13.234 0 24-10.766 24-24s-10.766-24-24-24H216c-26.51 0-48 21.49-48 48v112c0 26.51 21.49 48 48 48h80c13.234 0 24-10.766 24-24s-10.766-24-24-24zM448 224h-16v224H80V224H64c-35.346 0-64 28.654-64 64v256c0 35.346 28.654 64 64 64h384c35.346 0 64-28.654 64-64V288c0-35.346-28.654-64-64-64z"/>
                    </svg>
                </a>
            </div>
            <div class="row justify-content-center ">
                <div class="col-6">
                    <p class="text-white" style="text-align: left;">
                        Kartu ini merupakan bukti otentik dari pemeriksaan gemologi yang dibuat atas permintaan klien tentang spesifikasi dan identifikasi batuan
                        sesuai spesies, varietas, dan treatmentnya berdasarkan pemeriksaan menggunakan metode standar dan peralatan gemologi sesuai standar Gemological
                        Institute Of America (GIA).
                        <br>
                        Kartu ini bukan merupakan pernyataan tentang kualitas, nilai, harga, maupun rekomendasi apapun tentang batuan yang diperiksa. Kami tidak bertanggung
                        jawab atas segala perbedaan metode standar, kriteria, istilah dan perbedaan hasil pemeriksaan yang mungkin dinyatakan oleh gemologist lain.
                    </p>
                </div>
                <div class="col-2">
                <div class="w3-light-grey">
                <div id="myBar" class="w3-container w3-green" style="height:10px;width:1%"></div>
                </div>

                <div class="img_original">

                </div>
                </div>
            </div>
            `)
            var elem = document.getElementById("myBar");
            var width = 1;
            var id = setInterval(frame, 10);
            function frame() {
                if (width >= 100) {
                    clearInterval(id);
                    $('.img_original').html(`
                        <img id="original" class="img-fluid" src="assets/card/STAMP.png" alt="original">
                    `)
                    document.getElementById('myBar').remove()
                } else {
                    width++;
                    elem.style.width = width + '%';
                }
            }
            // document.getElementById("idPhoto").src = 'assets/card/'+ data.image_card;
        } else {
            $('#resultContainer').html(``)
        }
    });
});
// const whatsappButton = document.querySelector('.whatsapp-button');

// whatsappButton.addEventListener('mouseover', () => {
//   whatsappButton.style.transform = 'scale(1.1)';
// });

// whatsappButton.addEventListener('mouseout', () => {
//   whatsappButton.style.transform = 'scale(1)';
// });
