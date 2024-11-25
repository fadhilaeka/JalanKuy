document.getElementById("pesananForm").addEventListener("submit", function(event){
    event.preventDefault();
    
    // Data dummy untuk demonstrasi
    const pesanan = {
        'ORD123456': { transportasi: 'Pesawat', kelas: 'Bisnis', waktu: '2024-12-01T08:30' },
        'ORD654321': { transportasi: 'Kereta', kelas: 'Ekonomi', waktu: '2024-11-25T15:00' }
    };
    
    const orderId = document.getElementById("order_id").value;
    const pesananDetail = pesanan[orderId];
    
    if (pesananDetail) {
        document.getElementById("result_order_id").textContent = orderId;
        document.getElementById("result_transportasi").textContent = pesananDetail.transportasi;
        document.getElementById("result_kelas").textContent = pesananDetail.kelas;
        document.getElementById("result_waktu").textContent = pesananDetail.waktu;
        document.getElementById("hasil").style.display = "block";
    } else {
        alert("Pesanan tidak ditemukan.");
    }
});