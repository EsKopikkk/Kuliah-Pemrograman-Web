console.log("Halo, ini dipanggil dari file eksternal 1tagScript.js!");
alert("Selamat datang di halaman web ini!");

function hitungLuasPersegi(sisi) {
    return sisi * sisi;
}

let hasil = hitungLuasPersegi(5);
document.write("Luas persegi dengan sisi 5 adalah: " + hasil);
