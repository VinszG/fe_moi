<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <style>
        .gold-color {
            color: #E1BD84;
        }
        .gold-bg {
            background-color: #E1BD84;
        }
        .gold-hover:hover {
            background-color: #d5ad6c;
        }
        .gold-border {
            border-color: #E1BD84;
        }
        .indicator-active {
            background-color: #E1BD84;
            width: 5rem;
        }
    </style>
</head>
<body>
    <div class="relative w-full overflow-hidden group">
        <!-- Slideshow container -->
        <div id="slides-container" class="flex transition-transform duration-1000 ease-out">
            <!-- Slide 1 -->
            <div class="min-w-full relative">
                <img src="{{ asset('images/tempat.jpg') }}" alt="Slide 1" class="w-full h-[600px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t  to-transparent">
                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white transform transition-all duration-700 translate-y-0 opacity-100 slide-content">
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="min-w-full relative">from-black/70
                <img src="{{ asset('images/logo.png') }}" alt="Slide 2" class="w-full h-[600px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent">
                    <div class="absolute bottom-0 left-0 right-0 p-8 text-white transform transition-all duration-700 translate-y-0 opacity-100 slide-content">
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="min-w-full relative">
                <img src="{{ asset('images/123.jpg') }}" alt="Slide 3" class="w-full h-[600px] object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent">
                </div>
            </div>
        </div>

        <!-- Navigation buttons - improved with transitions -->
        <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-amber-50/30 backdrop-blur-sm text-amber-900 p-3 rounded-full focus:outline-none opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:gold-bg gold-hover">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
        <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-amber-50/30 backdrop-blur-sm text-amber-900 p-3 rounded-full focus:outline-none opacity-0 group-hover:opacity-100 transition-opacity duration-300 hover:gold-bg gold-hover">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </button>

        <!-- Improved indicators -->
        <div class="absolute bottom-6 left-0 right-0 flex justify-center space-x-3">
            <button class="slide-indicator h-1.5 w-12 bg-amber-50/50 rounded-full hover:bg-amber-50/70 transition-all duration-300" data-slide="0"></button>
            <button class="slide-indicator h-1.5 w-12 bg-amber-50/50 rounded-full hover:bg-amber-50/70 transition-all duration-300" data-slide="1"></button>
            <button class="slide-indicator h-1.5 w-12 bg-amber-50/50 rounded-full hover:bg-amber-50/70 transition-all duration-300" data-slide="2"></button>
        </div>

        <!-- JavaScript for enhanced slideshow functionality -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const slidesContainer = document.getElementById('slides-container');
                const slides = slidesContainer.children;
                const totalSlides = slides.length;
                let currentSlide = 0;
                const indicators = document.querySelectorAll('.slide-indicator');
                let autoplayInterval;
                
                // Initialize slideshow
                updateIndicators();
                startAutoplay();

                // Function to show specific slide with enhanced transitions
                function goToSlide(slideIndex) {
                    if (slideIndex < 0) {
                        slideIndex = totalSlides - 1;
                    } else if (slideIndex >= totalSlides) {
                        slideIndex = 0;
                    }
                    
                    // Hide current slide content
                    const currentContent = slides[currentSlide].querySelector('.slide-content');
                    currentContent.classList.add('translate-y-8', 'opacity-0');
                    
                    // Move to new slide
                    setTimeout(() => {
                        slidesContainer.style.transform = `translateX(-${slideIndex * 100}%)`;
                        currentSlide = slideIndex;
                        
                        // Show new slide content after a brief delay
                        setTimeout(() => {
                            const newContent = slides[currentSlide].querySelector('.slide-content');
                            newContent.classList.remove('translate-y-8', 'opacity-0');
                            updateIndicators();
                        }, 300);
                    }, 300);
                }
                
                // Enhanced indicator updates with animations
                function updateIndicators() {
                    indicators.forEach((indicator, index) => {
                        if (index === currentSlide) {
                            indicator.classList.remove('bg-amber-50/50', 'w-12');
                            indicator.classList.add('indicator-active');
                        } else {
                            indicator.classList.remove('indicator-active');
                            indicator.classList.add('bg-amber-50/50', 'w-12');
                        }
                    });
                }
                
                function startAutoplay() {
                    stopAutoplay();
                    autoplayInterval = setInterval(() => {
                        goToSlide(currentSlide + 1);
                    }, 4000);  // Longer display time for better readability
                }
                
                function stopAutoplay() {
                    if (autoplayInterval) {
                        clearInterval(autoplayInterval);
                    }
                }
                
                // Event handlers with autoplay reset
                document.getElementById('next').addEventListener('click', () => {
                    stopAutoplay();
                    goToSlide(currentSlide + 1);
                    startAutoplay();
                });
                
                document.getElementById('prev').addEventListener('click', () => {
                    stopAutoplay();
                    goToSlide(currentSlide - 1);
                    startAutoplay();
                });
                
                indicators.forEach((indicator, index) => {
                    indicator.addEventListener('click', () => {
                        if (currentSlide !== index) {
                            stopAutoplay();
                            goToSlide(index);
                            startAutoplay();
                        }
                    });
                });
                
                // Pause autoplay when user hovers over slideshow
                const slideshowContainer = document.querySelector('.relative.w-full.overflow-hidden');
                slideshowContainer.addEventListener('mouseenter', stopAutoplay);
                slideshowContainer.addEventListener('mouseleave', startAutoplay);
                
                // Initialize all slides with hidden content except the first one
                Array.from(slides).forEach((slide, index) => {
                    const content = slide.querySelector('.slide-content');
                    if (index !== 0) {
                        content.classList.add('translate-y-8', 'opacity-0');
                    }
                });
            });
        </script>
    </div>
</body>
</html>