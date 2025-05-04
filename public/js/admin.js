import Chart from 'chart.js/auto';

document.addEventListener('DOMContentLoaded', function () {
    // Grafik Statistik Peminjaman (Line Chart)
    const loanChart = document.getElementById('loanChart');
    if (loanChart) {
        new Chart(loanChart, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
                datasets: [{
                    label: 'Peminjaman',
                    data: [50, 75, 60, 90, 80, 100],
                    borderColor: '#3498db',
                    backgroundColor: 'rgba(52, 152, 219, 0.2)',
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Grafik Kategori Populer (Doughnut Chart)
    const categoryChart = document.getElementById('categoryChart');
    if (categoryChart) {
        new Chart(categoryChart, {
            type: 'doughnut',
            data: {
                labels: ['Fiksi', 'Non-Fiksi', 'Sains', 'Sejarah'],
                datasets: [{
                    label: 'Jumlah Buku',
                    data: [200, 150, 100, 50],
                    backgroundColor: ['#3498db', '#e74c3c', '#27ae60', '#f39c12'],
                    hoverOffset: 20
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    }
});
