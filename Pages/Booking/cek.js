function cek() {

    var nama_lap = document.getElementById("form1").select1.value;
    var harga = document.getElementById("content");

    if (nama_lap == "lapangan1") {
        harga.innerHTML = "Rp. 50.000,-/jam";
    }else if (nama_lap == "lapangan2") {
        harga.innerHTML = "Rp. 60.000,-/jam";
    }else if (nama_lap == "lapangan3") {
        harga.innerHTML = "Rp. 70.000,-/jam";
    } else if (nama_lap == "lapangan4") {
        harga.innerHTML = "Rp. 80.000,-/jam";
    }
}