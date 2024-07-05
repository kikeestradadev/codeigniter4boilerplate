<?php
    $apiUrl = 'https://strapi.5050.ag/api/strapitests?fields=*'; // Cambia esto por la URL de tu API
    // Configurar cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // Ejecutar cURL y obtener el resultado
    $result = curl_exec($ch);
    curl_close($ch);
    // Convertir el resultado JSON a un array
    $data = json_decode($result, true);
    $firstItem = true; // Variable para identificar el primer elemento
?>

<div class="swiper single-slider">
    <div class="swiper-wrapper">
        <img class="single-slider__sticky-ribon" src="https://kikeestradadev.github.io/strapislider/images/sticky20.png" alt="ribon">

        <?php foreach ($data['data'] as $slide): ?>
            <div class="swiper-slide single-slider__item">
                <div class="single-slider__item-container" style="background-image: url('<?php echo $slide['attributes']['backgound']; ?>') !important;">
                    
                    <div class="single-slider__video-container">
                        <video class="single-slider__video-dk" autoplay loop muted playsinline>
                            <source src="<?php echo $slide['attributes']['videodk']; ?>" type="video/webm">
                        </video>
                        <video class="single-slider__video-mb" autoplay loop muted playsinline>
                            <source src="<?php echo $slide['attributes']['videomb']; ?>" type="video/webm">
                        </video>
                    </div>

                    <?php if ($firstItem): ?>
                        <div class="single-slider__text-container">
                            <div>
                                <h1 class="single-slider__matchup-title"> 
                                    <span class="single-slider__matchup-title-team-1"><?php echo $slide['attributes']['home']; ?></span>
                                    <span class="single-slider__matchup-vrs-container">
                                        <img class="single-slider__matchup-vrs-logo" src="https://kikeestradadev.github.io/strapislider/images/vrs.png" alt="logo">
                                    </span>
                                    <span class="single-slider__matchup-title-team-2"><?php echo $slide['attributes']['visit']; ?></span>
                                </h1>
                                <span class="single-slider__matchup-date"><?php echo $slide['attributes']['matchup_date']; ?></span>
                            </div>
                            <div>
                                <span class="single-slider__matchup-promo"><?php echo $slide['attributes']['matchup_promo']; ?></span>
                                <span class="single-slider__matchup-label"><?php echo $slide['attributes']['matchup_label']; ?></span>
                            </div>
                            <a class="single-slider__cta" href="<?php echo $slide['attributes']['ctalink']; ?>"><?php echo $slide['attributes']['ctacontent']; ?></a>
                        </div>
                        <?php $firstItem = false; // Marcar que el primer elemento ya se ha procesado ?>
                    <?php else: ?>
                        <div class="single-slider__text-container">
                            <div>
                                <span class="single-slider__label-1"><?php echo $slide['attributes']['label1']; ?></span>
                                <span class="single-slider__label-2"><?php echo $slide['attributes']['label2']; ?></span>
                            </div>
                            <div>
                                <span class="single-slider__label-3"><?php echo $slide['attributes']['label3']; ?></span>
                                <span class="single-slider__label-4"><?php echo $slide['attributes']['label4']; ?></span>
                            </div>
                            <a class="single-slider__cta" href="<?php echo $slide['attributes']['ctalink']; ?>"><?php echo $slide['attributes']['ctacontent']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
        
    </div>
    <div class="single-slider__prev swiper-button-prev"></div>
    <div class="single-slider__next swiper-button-next"></div>
    <div class="single-slider__pagination swiper-pagination"></div>
</div>
