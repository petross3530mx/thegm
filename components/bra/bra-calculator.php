<?php ?>
<div class="bracalc">
    <ul class="calc-tabs">
        <li class="active">1<a class="tab" href="#tab1" data-toggle="tab"></a></li>
        <li>2<a class="tab" href="#tab2" data-toggle="tab"></a></li>
        <li>3<a class="tab" href="#tab3" data-toggle="tab"></a></li>
        <li>4<a class="tab" href="#tab4" data-toggle="tab"></a></li>
    </ul>

    <span class="h1">Your Bra Size Guide/Calculator</span>


    <div class="tab-content">

    <div class="tab-pane active" id="tab1">
        <p class="bc-heading">For correct measurements, make sure to</p>
        <div class="bc-need">
            <div>
                <img src="<?php echo get_template_directory_uri().'/components/bra' ?>/img/measure-bra-size-1.png" alt="">
                <span>Start with a non-padded bra</span>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri().'/components/bra' ?>/img/measure-bra-size-2.png" alt="">
                <span>Stand in front of a mirror</span>
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri().'/components/bra' ?>/img/measure-bra-size-3.png" alt="">
                <span>Use a measuring tape</span>
            </div>
        </div>
        <a class="bc-btn" onclick="nextslide('#tab2')">Get Started</a>
    </div>

    <div class="tab-pane" id="tab2" style="display: none;">
        <p class="bc-heading">Step #1. Measure the Underbust Size</p>
        <div class="bc-band">
            <div>
                <img src="<?php echo get_template_directory_uri().'/components/bra' ?>/img/band.jpg" alt="">
            </div>
            <div>
                <div class="cont_section">
                    <p class="enter_size">Enter your underbust size here:</p>
                    <div class="size_field">
                        <input type="text" name="band_size" id="band_size" placeholder="63" data-min="63" data-max="107">
                        <span>Cm</span>
                    </div>
                    <p class="error" id="error_step1">The value entered is out of range (63-107cm). Please measure the band size in cm and enter again.</p>
                    <div class=""><a class="bc-btn" onclick="nextslide('#tab3')">Next</a></div>
                </div>
                <p class="heading measure">
                    <strong>How To Measure</strong>
                </p>
                <ol>
                    <li>Grab a measuring tape, and wrap it around your chest, right near the bra band.</li>
                    <li>Ensure it lies snugly.</li>
                    <li>Write down the measurement.</li>
                    <li>If it’s odd, round it off to the next even number.</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="tab-pane" id="tab3" style="display: none;">
            <p class="bc-heading">Step #2. Measure the Overbust Size</p>
            <div class="bc-band">
	                <div>
	                    <img src="<?php echo get_template_directory_uri().'/components/bra' ?>/img/cup.jpg" alt="">
	                </div>
                    <div class="cont_section">
                        <p class="enter_size">Enter your cup size here:</p>
                        <div class="size_field">
                            <input type="text" name="cup_size" id="cup_size" placeholder="77" data-min="77" data-max="146">
                            <span>Cm</span>
                        </div>
                        <p class="error" id="error_step2">The value entered is out of range (77-146cm). Please measure the band size in cm and enter again.</p>
                        <div class=""><a class="bc-btn" onclick="nextslide('#tab4');calcsize()">Result</a></div>
                    </div>
                    <p class="heading measure">
                        <strong>How To Measure</strong>
                    </p>
                    <ol>
                        <li>Find the fullest part of your breast and wrap the tape loosely around it.</li>
                        <li>Round off the measurement to the next whole number.</li>
                        <li>Write down the final number.</li>
                    </ol>
            </div>
    </div>

    <div class="tab-pane" id="tab4" style="display: none;">
        <p class="bc-heading">Result</p>
        <p class="tac">Your bra size is:</p>
        <div id="result"></div>
        <a class="bc-btn bra-try" onclick="tryagain()">Calculate again</a>
    </div>

    </div>
    
</div>
<script src="<?php echo get_template_directory_uri().'/components/bra/script.js' ?>"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri().'/components/bra/style.css' ?>">
