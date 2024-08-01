let currentTestimonial = 0;
const testimonialsContainer = document.querySelector('.testimonials');

// Fungsi untuk memperbarui testimonial
function updateActiveTestimonial() {
    const testimonials = document.querySelectorAll('.testimonial');
    testimonials.forEach((testimonial, index) => {
        testimonial.classList.remove('left', 'center', 'right');
        if (index === currentTestimonial) {
            testimonial.classList.add('center');
        } else if (index === (currentTestimonial - 1 + testimonials.length) % testimonials.length) {
            testimonial.classList.add('left');
        } else if (index === (currentTestimonial + 1) % testimonials.length) {
            testimonial.classList.add('right');
        } else {
            testimonial.style.visibility = 'hidden';
            testimonial.style.position = 'absolute'; // Prevents layout shift
        }
    });
}

// Fungsi untuk mengambil data testimonial dari API
async function fetchTestimonials() {
    try {
        const response = await fetch('http://localhost/apipeternakandesa/readtestimoni.php');
        if (!response.ok) {
            throw new Error('Failed to fetch data');
        }
        const data = await response.json();
        updateTestimonials(data);
    } catch (error) {
        console.error('Error fetching testimonials:', error);
    }
}

// Fungsi untuk memperbarui testimonial di DOM
function updateTestimonials(testimonialsData) {
    testimonialsContainer.innerHTML = ''; // Clear existing testimonials

    testimonialsData.forEach((testimonial, index) => {
        const testimonialDiv = document.createElement('div');
        testimonialDiv.classList.add('testimonial');

        // Set the first testimonial as 'left' initially
        if (index === 0) {
            testimonialDiv.classList.add('left');
        }

        testimonialDiv.innerHTML = `
            <p>"${testimonial.isi}"</p>
            <div class="author">- ${testimonial.nama} -</div>
        `;

        testimonialsContainer.appendChild(testimonialDiv);
    });

    // Set the first testimonial to be the 'center' testimonial
    currentTestimonial = 0; // Set the first testimonial as the initial center
    updateActiveTestimonial();
}

// Fungsi untuk menampilkan testimonial berikutnya
function nextTestimonial() {
    const testimonials = document.querySelectorAll('.testimonial');
    currentTestimonial = (currentTestimonial + 1) % testimonials.length;
    updateActiveTestimonial();
}

// Fungsi untuk menampilkan testimonial sebelumnya
function prevTestimonial() {
    const testimonials = document.querySelectorAll('.testimonial');
    currentTestimonial = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
    updateActiveTestimonial();
}

// Ambil testimonial saat halaman dimuat
document.addEventListener('DOMContentLoaded', fetchTestimonials);

// Event listeners untuk panah navigasi
document.querySelector('.left-arrow').addEventListener('click', prevTestimonial);
document.querySelector('.right-arrow').addEventListener('click', nextTestimonial);
