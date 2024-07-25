<script>
    <?= $_script_js_code ?>
</script>
<!-- Dynamic js Load -->
<?php if (isset($_script_files) && is_array($_script_files)) : ?>
    <?php foreach ($_script_files as $key => $_script_file) : ?>
        <?php if (is_string($_script_file)) : ?>
            <script src="<?= base_url($_script_file) ?>"></script>
        <?php endif; ?>
    <?php endforeach; ?>
<?php endif; ?>

<script>
    var swiper = new Swiper('.swiper-product', {
        spaceBetween: 15,
        breakpoints: {
            1920: {
                slidesPerView: 5.5,

            },
            1028: {
                slidesPerView: 4,

            },
            900: {
                slidesPerView: 2.5,
            },
            480: {
                slidesPerView: 1,

            }
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    });
</script>

<!-- Number Count -->
<script>
    var a = 0;
    $(window).scroll(function() {

        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                        countNum: countTo
                    },

                    {

                        duration: 4000,
                        easing: 'swing',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                            //alert('finished');
                        }

                    });
            });
            a = 1;
        }

    });
</script>

<!-- speak text js  -->
<script>
    let synth = window.speechSynthesis;
    let isSpeaking = false;
    let currentIndex = 0;
    let paragraphs;
    let currentUtterance;

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') { // Change 'Enter' to any key you prefer
            toggleSpeech();
        }
        if (event.key === 'Escape') { // Change 'Escape' to any key you prefer
            stopSpeaking();
        }
    });

    function toggleSpeech() {
        if (isSpeaking) {
            stopSpeaking();
        } else {
            speakContent();
        }
    }

    function speakContent() {
        paragraphs = document.querySelectorAll('p');
        if (paragraphs.length === 0) return;

        currentIndex = 0;
        isSpeaking = true;
        document.getElementById('buttonIcon').classList.remove('fa-play');
        document.getElementById('buttonIcon').classList.add('fa-stop');
        speakParagraph();
    }

    function speakParagraph() {
        if (currentIndex >= paragraphs.length) {
            stopSpeaking();
            return;
        }

        const utterThis = new SpeechSynthesisUtterance(paragraphs[currentIndex].textContent);
        utterThis.rate = 1; // Adjust the rate (speed) of the speech

        // Set the language based on the content
        const textContent = paragraphs[currentIndex].textContent;
        if (/[^\x00-\x7F]/.test(textContent)) {
            utterThis.lang = 'hi-IN'; // Hindi
        } else {
            utterThis.lang = 'en-US'; // English
        }

        currentUtterance = utterThis;
        synth.speak(utterThis);

        utterThis.onend = function() {
            currentIndex++;
            if (isSpeaking) {
                speakParagraph();
            }
        }
    }

    function stopSpeaking() {
        synth.cancel();
        isSpeaking = false;
        currentIndex = 0;
        currentUtterance = null;
        document.getElementById('buttonIcon').classList.remove('fa-stop');
        document.getElementById('buttonIcon').classList.add('fa-play');
    }
</script>

<!-- increase and dicrese font size -->
<script>
    let scaleFactor = 1;

    document.getElementById('increase-font').addEventListener('click', function() {
        scaleFactor += 0.1; // Increase scale factor by 0.1
        document.documentElement.style.setProperty('--scale-factor', scaleFactor);
    });

    document.getElementById('decrease-font').addEventListener('click', function() {
        if (scaleFactor > 0.5) { // Minimum scale factor to prevent too small font sizes
            scaleFactor -= 0.1; // Decrease scale factor by 0.1
            document.documentElement.style.setProperty('--scale-factor', scaleFactor);
        }
    });

    document.getElementById('reset-font').addEventListener('click', function() {
        scaleFactor = 1; // Reset scale factor to default
        document.documentElement.style.setProperty('--scale-factor', scaleFactor);
    });
</script>