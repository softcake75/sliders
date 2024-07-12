<!DOCTYPE html>
<html>

<head>
    <title>Slider</title>
    <style>
        .slider-container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: auto;
            overflow: hidden;
        }

        .slides {
            display: flex;
            transition: transform 1s ease-in-out;
        }

        .slide {
            min-width: 100%;
            box-sizing: border-box;
        }

        img {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="slider-container">
        <div class="slides" id="slides">
            <?php foreach ($sliders as $slider) : ?>
                <div class="slide">
                    <img src="<?= base_url('images/' . $slider['image']) ?>" alt="<?= $slider['title'] ?>">
                    <h2><?= $slider['title'] ?></h2>
                    <p><?= $slider['description'] ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
        let index = 0;
        const slides = document.getElementById('slides');
        const totalSlides = slides.children.length;

        function showNextSlide() {
            index = (index + 1) % totalSlides;
            slides.style.transform = 'translateX(' + (-index * 100) + '%)';
        }

        setInterval(showNextSlide, 600000); // 10 minutes in milliseconds
    </script>
</body>

</html>