<?php get_header();
$is_Server = strpos($_SERVER['HTTP_HOST'], 'local') === false ? true : false;
$img_Directory = $is_Server ? get_template_directory_uri() . 'assets/images' :
get_template_directory_uri() . '/dist/assets/images';
?>
<main>
  <div class="IntroBlock">
    <div class="IntroComputer">
      <div class="Desc">
        <div class="About">
          <h1><?php echo get_theme_mod('studio_name_settings') ?></h1>
          <p><?php echo get_theme_mod('intro_text_settings') ?></p>
        </div>
        <div class="Connection">
          <a href="tel:<?php echo get_theme_mod('phone_settings') ?>" class="Call"> Позвоните нам </a>
          <div class="SocialNets">
            <a href="<?php echo get_theme_mod('whatsapp_settings') ?>" target="_blank" rel="noopener noreferrer">
              <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clipPath="url(#clip0_109_2135)">
                  <path d="M26 0C40.3598 0 52 11.6402 52 26C52 40.3598 40.3598 52 26 52C21.4052 52.0074 16.8913 50.7914 12.922 48.477L0.0104366 52L3.52563 39.0832C1.20928 35.1126 -0.00763978 30.5968 3.60886e-05 26C3.60886e-05 11.6402 11.6402 0 26 0ZM17.1392 13.78L16.6192 13.8008C16.2826 13.8213 15.9536 13.9097 15.652 14.0608C15.37 14.2205 15.1125 14.4202 14.8876 14.6536C14.5756 14.9474 14.3988 15.2022 14.209 15.4492C13.2473 16.6995 12.7296 18.2346 12.7374 19.812C12.7426 21.086 13.0754 22.3262 13.5954 23.4858C14.6588 25.831 16.4086 28.314 18.7174 30.615C19.2738 31.1688 19.8198 31.7252 20.4074 32.2426C23.2762 34.7684 26.6949 36.5899 30.3914 37.5622L31.8682 37.7884C32.3492 37.8144 32.8302 37.778 33.3138 37.7546C34.071 37.7155 34.8104 37.5105 35.4796 37.154C35.8201 36.9786 36.1524 36.7877 36.4754 36.582C36.4754 36.582 36.5872 36.5092 36.8004 36.348C37.1514 36.088 37.3672 35.9034 37.6584 35.5992C37.8742 35.3756 38.0614 35.113 38.2044 34.814C38.4072 34.3902 38.61 33.5816 38.6932 32.9082C38.7556 32.3934 38.7374 32.1126 38.7296 31.9384C38.7192 31.6602 38.4878 31.3716 38.2356 31.2494L36.7224 30.5708C36.7224 30.5708 34.4604 29.5854 33.0772 28.9562C32.9325 28.893 32.7774 28.8568 32.6196 28.8496C32.4417 28.8313 32.262 28.8513 32.0925 28.9083C31.923 28.9652 31.7676 29.0578 31.6368 29.1798C31.6238 29.1746 31.4496 29.3228 29.5698 31.6004C29.4619 31.7454 29.3133 31.8549 29.1429 31.9151C28.9725 31.9753 28.788 31.9834 28.613 31.9384C28.4436 31.893 28.2777 31.8356 28.1164 31.7668C27.794 31.6316 27.6822 31.5796 27.4612 31.486C25.969 30.8348 24.5874 29.955 23.3662 28.8782C23.0386 28.5922 22.7344 28.2802 22.4224 27.9786C21.3995 26.999 20.5081 25.8908 19.7704 24.6818L19.617 24.4348C19.5068 24.2688 19.4178 24.0898 19.3518 23.9018C19.253 23.5196 19.5104 23.2128 19.5104 23.2128C19.5104 23.2128 20.1422 22.5212 20.436 22.1468C20.722 21.7828 20.9638 21.4292 21.1198 21.177C21.4266 20.683 21.5228 20.176 21.3616 19.7834C20.6336 18.005 19.8796 16.2344 19.1048 14.4768C18.9514 14.1284 18.4964 13.8788 18.083 13.8294C17.9426 13.8138 17.8022 13.7982 17.6618 13.7878C17.3127 13.7704 16.9628 13.7739 16.614 13.7982L17.1366 13.7774L17.1392 13.78Z" fill="#EED9C5" />
                </g>
                <defs>
                  <clipPath id="clip0_109_2135">
                    <rect width="52" height="52" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <a href="<?php echo get_theme_mod('telegram_settings') ?>" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                <g clipPath="url(#clip0_109_2133)">
                  <path d="M34.5022 37.9263L38.7679 17.817C38.942 16.9658 38.8404 16.3564 38.4632 15.9888C38.0859 15.6213 37.5878 15.5536 36.9688 15.7857L11.8973 25.4487C11.3363 25.6615 10.9542 25.9033 10.7511 26.1741C10.548 26.4449 10.5238 26.7013 10.6786 26.9431C10.8333 27.1849 11.1429 27.3735 11.6071 27.5089L18.0201 29.5112L32.9062 20.1384C33.3125 19.8676 33.622 19.8095 33.8348 19.9643C33.9702 20.061 33.9315 20.2061 33.7188 20.3996L21.6763 31.2812L21.2121 37.8973C21.657 37.8973 22.0923 37.6845 22.5179 37.2589L25.6518 34.2411L32.1518 39.029C33.3899 39.7254 34.1734 39.3579 34.5022 37.9263ZM52 26C52 29.5208 51.3132 32.8869 49.9397 36.0982C48.5662 39.3095 46.7188 42.0759 44.3973 44.3973C42.0759 46.7188 39.3095 48.5662 36.0982 49.9397C32.8869 51.3132 29.5208 52 26 52C22.4792 52 19.1131 51.3132 15.9018 49.9397C12.6905 48.5662 9.92411 46.7188 7.60268 44.3973C5.28125 42.0759 3.43378 39.3095 2.06027 36.0982C0.686756 32.8869 0 29.5208 0 26C0 22.4792 0.686756 19.1131 2.06027 15.9018C3.43378 12.6905 5.28125 9.92411 7.60268 7.60268C9.92411 5.28125 12.6905 3.43378 15.9018 2.06027C19.1131 0.686756 22.4792 0 26 0C29.5208 0 32.8869 0.686756 36.0982 2.06027C39.3095 3.43378 42.0759 5.28125 44.3973 7.60268C46.7188 9.92411 48.5662 12.6905 49.9397 15.9018C51.3132 19.1131 52 22.4792 52 26Z" fill="#EED9C5" />
                </g>
                <defs>
                  <clipPath id="clip0_109_2133">
                    <rect width="52" height="52" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </a>
            <a href="<?php echo get_theme_mod('instagram_settings') ?>" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                <g clipPath="url(#clip0_109_2160)">
                  <path d="M39.8125 0H12.1875C5.45653 0 0 5.45653 0 12.1875V39.8125C0 46.5435 5.45653 52 12.1875 52H39.8125C46.5435 52 52 46.5435 52 39.8125V12.1875C52 5.45653 46.5435 0 39.8125 0Z" fill="#EED9C5" />
                  <path d="M39.8125 0H12.1875C5.45653 0 0 5.45653 0 12.1875V39.8125C0 46.5435 5.45653 52 12.1875 52H39.8125C46.5435 52 52 46.5435 52 39.8125V12.1875C52 5.45653 46.5435 0 39.8125 0Z" fill="#EED9C5" />
                  <path d="M26.0018 5.6875C20.4854 5.6875 19.7929 5.71167 17.6264 5.81019C15.4639 5.90931 13.9878 6.25158 12.6963 6.75391C11.3602 7.27269 10.2269 7.96677 9.09797 9.09614C7.96798 10.2253 7.27391 11.3585 6.7535 12.6941C6.24975 13.986 5.90708 15.4627 5.80978 17.6241C5.71289 19.7909 5.6875 20.4835 5.6875 26.0002C5.6875 31.5169 5.71188 32.2071 5.81019 34.3736C5.90972 36.5361 6.25198 38.0122 6.75391 39.3037C7.27309 40.6398 7.96717 41.7731 9.09655 42.902C10.2253 44.032 11.3585 44.7277 12.6937 45.2465C13.9862 45.7488 15.4625 46.0911 17.6245 46.1902C19.7913 46.2887 20.4831 46.3129 25.9994 46.3129C31.5165 46.3129 32.2067 46.2887 34.3732 46.1902C36.5357 46.0911 38.0134 45.7488 39.3059 45.2465C40.6415 44.7277 41.7731 44.032 42.9016 42.902C44.0316 41.7731 44.7255 40.6398 45.2461 39.3043C45.7454 38.0122 46.0882 36.5357 46.1898 34.374C46.2871 32.2075 46.3125 31.5169 46.3125 26.0002C46.3125 20.4835 46.2871 19.7913 46.1898 17.6245C46.0882 15.4621 45.7454 13.9862 45.2461 12.6947C44.7255 11.3585 44.0316 10.2253 42.9016 9.09614C41.7718 7.96636 40.6419 7.27228 39.3047 6.75411C38.0098 6.25158 36.5328 5.90911 34.3704 5.81019C32.2036 5.71167 31.5138 5.6875 25.9955 5.6875H26.0018ZM24.1796 9.34802C24.7205 9.3472 25.324 9.34802 26.0018 9.34802C31.4255 9.34802 32.0682 9.36752 34.2099 9.46481C36.1904 9.55541 37.2653 9.8863 37.9813 10.1644C38.9293 10.5324 39.6051 10.9726 40.3156 11.6837C41.0266 12.3947 41.4665 13.0717 41.8356 14.0197C42.1137 14.7347 42.445 15.8096 42.5352 17.7901C42.6325 19.9314 42.6536 20.5745 42.6536 25.9955C42.6536 31.4165 42.6325 32.0598 42.5352 34.201C42.4446 36.1814 42.1137 37.2564 41.8356 37.9716C41.4676 38.9196 41.0266 39.5945 40.3156 40.3051C39.6047 41.016 38.9297 41.456 37.9813 41.8242C37.2661 42.1035 36.1904 42.4336 34.2099 42.5242C32.0686 42.6215 31.4255 42.6426 26.0018 42.6426C20.578 42.6426 19.9351 42.6215 17.794 42.5242C15.8135 42.4328 14.7385 42.1019 14.0219 41.8238C13.0741 41.4556 12.3969 41.0156 11.686 40.3047C10.975 39.5937 10.5351 38.9183 10.166 37.97C9.88792 37.2547 9.55663 36.1798 9.46644 34.1993C9.36914 32.058 9.34964 31.4149 9.34964 25.9905C9.34964 20.5662 9.36914 19.9264 9.46644 17.785C9.55703 15.8045 9.88792 14.7296 10.166 14.0136C10.5343 13.0656 10.975 12.3886 11.6862 11.6777C12.3971 10.9667 13.0741 10.5265 14.0221 10.1577C14.7381 9.87837 15.8135 9.5483 17.794 9.4573C19.6678 9.37259 20.394 9.3472 24.1796 9.34294V9.34802ZM36.8446 12.7207C35.4989 12.7207 34.4071 13.8115 34.4071 15.1574C34.4071 16.5031 35.4989 17.5949 36.8446 17.5949C38.1903 17.5949 39.2821 16.5031 39.2821 15.1574C39.2821 13.8117 38.1903 12.7199 36.8446 12.7199V12.7207ZM26.0018 15.5687C20.2412 15.5687 15.5705 20.2394 15.5705 26.0002C15.5705 31.761 20.2412 36.4295 26.0018 36.4295C31.7627 36.4295 36.4317 31.761 36.4317 26.0002C36.4317 20.2396 31.7623 15.5687 26.0014 15.5687H26.0018ZM26.0018 19.2292C29.7412 19.2292 32.7728 22.2605 32.7728 26.0002C32.7728 29.7395 29.7412 32.7712 26.0018 32.7712C22.2623 32.7712 19.2311 29.7395 19.2311 26.0002C19.2311 22.2605 22.2623 19.2292 26.0018 19.2292Z" fill="white" />
                </g>
                <defs>
                  <clipPath id="clip0_109_2160">
                    <rect width="52" height="52" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <img src="<?php echo $img_Directory . '/intro_photo.webp' ?>" alt="Брови, косметология, пошив нижнего белья" class="IntroPhoto" />
    </div>
    <div class="IntroMobile">
      <div class="About">
        <h1><?php echo get_theme_mod('studio_name_settings') ?></h1>
        <p><?php echo get_theme_mod('intro_text_settings') ?></p>
      </div>
      <div class="Connection">
        <a href="tel:<?php echo get_theme_mod('phone_settings') ?>" class="Call">Позвоните нам</a>
        <div class="SocialNets SocialNetsMobile">
          <a href="<?php echo get_theme_mod('whatsapp_settings') ?>" target="_blank" rel="noopener noreferrer">
            <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clipPath="url(#clip0_109_2135)">
                <path d="M26 0C40.3598 0 52 11.6402 52 26C52 40.3598 40.3598 52 26 52C21.4052 52.0074 16.8913 50.7914 12.922 48.477L0.0104366 52L3.52563 39.0832C1.20928 35.1126 -0.00763978 30.5968 3.60886e-05 26C3.60886e-05 11.6402 11.6402 0 26 0ZM17.1392 13.78L16.6192 13.8008C16.2826 13.8213 15.9536 13.9097 15.652 14.0608C15.37 14.2205 15.1125 14.4202 14.8876 14.6536C14.5756 14.9474 14.3988 15.2022 14.209 15.4492C13.2473 16.6995 12.7296 18.2346 12.7374 19.812C12.7426 21.086 13.0754 22.3262 13.5954 23.4858C14.6588 25.831 16.4086 28.314 18.7174 30.615C19.2738 31.1688 19.8198 31.7252 20.4074 32.2426C23.2762 34.7684 26.6949 36.5899 30.3914 37.5622L31.8682 37.7884C32.3492 37.8144 32.8302 37.778 33.3138 37.7546C34.071 37.7155 34.8104 37.5105 35.4796 37.154C35.8201 36.9786 36.1524 36.7877 36.4754 36.582C36.4754 36.582 36.5872 36.5092 36.8004 36.348C37.1514 36.088 37.3672 35.9034 37.6584 35.5992C37.8742 35.3756 38.0614 35.113 38.2044 34.814C38.4072 34.3902 38.61 33.5816 38.6932 32.9082C38.7556 32.3934 38.7374 32.1126 38.7296 31.9384C38.7192 31.6602 38.4878 31.3716 38.2356 31.2494L36.7224 30.5708C36.7224 30.5708 34.4604 29.5854 33.0772 28.9562C32.9325 28.893 32.7774 28.8568 32.6196 28.8496C32.4417 28.8313 32.262 28.8513 32.0925 28.9083C31.923 28.9652 31.7676 29.0578 31.6368 29.1798C31.6238 29.1746 31.4496 29.3228 29.5698 31.6004C29.4619 31.7454 29.3133 31.8549 29.1429 31.9151C28.9725 31.9753 28.788 31.9834 28.613 31.9384C28.4436 31.893 28.2777 31.8356 28.1164 31.7668C27.794 31.6316 27.6822 31.5796 27.4612 31.486C25.969 30.8348 24.5874 29.955 23.3662 28.8782C23.0386 28.5922 22.7344 28.2802 22.4224 27.9786C21.3995 26.999 20.5081 25.8908 19.7704 24.6818L19.617 24.4348C19.5068 24.2688 19.4178 24.0898 19.3518 23.9018C19.253 23.5196 19.5104 23.2128 19.5104 23.2128C19.5104 23.2128 20.1422 22.5212 20.436 22.1468C20.722 21.7828 20.9638 21.4292 21.1198 21.177C21.4266 20.683 21.5228 20.176 21.3616 19.7834C20.6336 18.005 19.8796 16.2344 19.1048 14.4768C18.9514 14.1284 18.4964 13.8788 18.083 13.8294C17.9426 13.8138 17.8022 13.7982 17.6618 13.7878C17.3127 13.7704 16.9628 13.7739 16.614 13.7982L17.1366 13.7774L17.1392 13.78Z" fill="#EED9C5" />
              </g>
              <defs>
                <clipPath id="clip0_109_2135">
                  <rect width="52" height="52" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
          <a href="<?php echo get_theme_mod('telegram_settings') ?>" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
              <g clipPath="url(#clip0_109_2133)">
                <path d="M34.5022 37.9263L38.7679 17.817C38.942 16.9658 38.8404 16.3564 38.4632 15.9888C38.0859 15.6213 37.5878 15.5536 36.9688 15.7857L11.8973 25.4487C11.3363 25.6615 10.9542 25.9033 10.7511 26.1741C10.548 26.4449 10.5238 26.7013 10.6786 26.9431C10.8333 27.1849 11.1429 27.3735 11.6071 27.5089L18.0201 29.5112L32.9062 20.1384C33.3125 19.8676 33.622 19.8095 33.8348 19.9643C33.9702 20.061 33.9315 20.2061 33.7188 20.3996L21.6763 31.2812L21.2121 37.8973C21.657 37.8973 22.0923 37.6845 22.5179 37.2589L25.6518 34.2411L32.1518 39.029C33.3899 39.7254 34.1734 39.3579 34.5022 37.9263ZM52 26C52 29.5208 51.3132 32.8869 49.9397 36.0982C48.5662 39.3095 46.7188 42.0759 44.3973 44.3973C42.0759 46.7188 39.3095 48.5662 36.0982 49.9397C32.8869 51.3132 29.5208 52 26 52C22.4792 52 19.1131 51.3132 15.9018 49.9397C12.6905 48.5662 9.92411 46.7188 7.60268 44.3973C5.28125 42.0759 3.43378 39.3095 2.06027 36.0982C0.686756 32.8869 0 29.5208 0 26C0 22.4792 0.686756 19.1131 2.06027 15.9018C3.43378 12.6905 5.28125 9.92411 7.60268 7.60268C9.92411 5.28125 12.6905 3.43378 15.9018 2.06027C19.1131 0.686756 22.4792 0 26 0C29.5208 0 32.8869 0.686756 36.0982 2.06027C39.3095 3.43378 42.0759 5.28125 44.3973 7.60268C46.7188 9.92411 48.5662 12.6905 49.9397 15.9018C51.3132 19.1131 52 22.4792 52 26Z" fill="#EED9C5" />
              </g>
              <defs>
                <clipPath id="clip0_109_2133">
                  <rect width="52" height="52" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
          <a href="<?php echo get_theme_mod('instagram_settings') ?>" target="_blank" rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
              <g clipPath="url(#clip0_109_2160)">
                <path d="M39.8125 0H12.1875C5.45653 0 0 5.45653 0 12.1875V39.8125C0 46.5435 5.45653 52 12.1875 52H39.8125C46.5435 52 52 46.5435 52 39.8125V12.1875C52 5.45653 46.5435 0 39.8125 0Z" fill="#EED9C5" />
                <path d="M39.8125 0H12.1875C5.45653 0 0 5.45653 0 12.1875V39.8125C0 46.5435 5.45653 52 12.1875 52H39.8125C46.5435 52 52 46.5435 52 39.8125V12.1875C52 5.45653 46.5435 0 39.8125 0Z" fill="#EED9C5" />
                <path d="M26.0018 5.6875C20.4854 5.6875 19.7929 5.71167 17.6264 5.81019C15.4639 5.90931 13.9878 6.25158 12.6963 6.75391C11.3602 7.27269 10.2269 7.96677 9.09797 9.09614C7.96798 10.2253 7.27391 11.3585 6.7535 12.6941C6.24975 13.986 5.90708 15.4627 5.80978 17.6241C5.71289 19.7909 5.6875 20.4835 5.6875 26.0002C5.6875 31.5169 5.71188 32.2071 5.81019 34.3736C5.90972 36.5361 6.25198 38.0122 6.75391 39.3037C7.27309 40.6398 7.96717 41.7731 9.09655 42.902C10.2253 44.032 11.3585 44.7277 12.6937 45.2465C13.9862 45.7488 15.4625 46.0911 17.6245 46.1902C19.7913 46.2887 20.4831 46.3129 25.9994 46.3129C31.5165 46.3129 32.2067 46.2887 34.3732 46.1902C36.5357 46.0911 38.0134 45.7488 39.3059 45.2465C40.6415 44.7277 41.7731 44.032 42.9016 42.902C44.0316 41.7731 44.7255 40.6398 45.2461 39.3043C45.7454 38.0122 46.0882 36.5357 46.1898 34.374C46.2871 32.2075 46.3125 31.5169 46.3125 26.0002C46.3125 20.4835 46.2871 19.7913 46.1898 17.6245C46.0882 15.4621 45.7454 13.9862 45.2461 12.6947C44.7255 11.3585 44.0316 10.2253 42.9016 9.09614C41.7718 7.96636 40.6419 7.27228 39.3047 6.75411C38.0098 6.25158 36.5328 5.90911 34.3704 5.81019C32.2036 5.71167 31.5138 5.6875 25.9955 5.6875H26.0018ZM24.1796 9.34802C24.7205 9.3472 25.324 9.34802 26.0018 9.34802C31.4255 9.34802 32.0682 9.36752 34.2099 9.46481C36.1904 9.55541 37.2653 9.8863 37.9813 10.1644C38.9293 10.5324 39.6051 10.9726 40.3156 11.6837C41.0266 12.3947 41.4665 13.0717 41.8356 14.0197C42.1137 14.7347 42.445 15.8096 42.5352 17.7901C42.6325 19.9314 42.6536 20.5745 42.6536 25.9955C42.6536 31.4165 42.6325 32.0598 42.5352 34.201C42.4446 36.1814 42.1137 37.2564 41.8356 37.9716C41.4676 38.9196 41.0266 39.5945 40.3156 40.3051C39.6047 41.016 38.9297 41.456 37.9813 41.8242C37.2661 42.1035 36.1904 42.4336 34.2099 42.5242C32.0686 42.6215 31.4255 42.6426 26.0018 42.6426C20.578 42.6426 19.9351 42.6215 17.794 42.5242C15.8135 42.4328 14.7385 42.1019 14.0219 41.8238C13.0741 41.4556 12.3969 41.0156 11.686 40.3047C10.975 39.5937 10.5351 38.9183 10.166 37.97C9.88792 37.2547 9.55663 36.1798 9.46644 34.1993C9.36914 32.058 9.34964 31.4149 9.34964 25.9905C9.34964 20.5662 9.36914 19.9264 9.46644 17.785C9.55703 15.8045 9.88792 14.7296 10.166 14.0136C10.5343 13.0656 10.975 12.3886 11.6862 11.6777C12.3971 10.9667 13.0741 10.5265 14.0221 10.1577C14.7381 9.87837 15.8135 9.5483 17.794 9.4573C19.6678 9.37259 20.394 9.3472 24.1796 9.34294V9.34802ZM36.8446 12.7207C35.4989 12.7207 34.4071 13.8115 34.4071 15.1574C34.4071 16.5031 35.4989 17.5949 36.8446 17.5949C38.1903 17.5949 39.2821 16.5031 39.2821 15.1574C39.2821 13.8117 38.1903 12.7199 36.8446 12.7199V12.7207ZM26.0018 15.5687C20.2412 15.5687 15.5705 20.2394 15.5705 26.0002C15.5705 31.761 20.2412 36.4295 26.0018 36.4295C31.7627 36.4295 36.4317 31.761 36.4317 26.0002C36.4317 20.2396 31.7623 15.5687 26.0014 15.5687H26.0018ZM26.0018 19.2292C29.7412 19.2292 32.7728 22.2605 32.7728 26.0002C32.7728 29.7395 29.7412 32.7712 26.0018 32.7712C22.2623 32.7712 19.2311 29.7395 19.2311 26.0002C19.2311 22.2605 22.2623 19.2292 26.0018 19.2292Z" fill="white" />
              </g>
              <defs>
                <clipPath id="clip0_109_2160">
                  <rect width="52" height="52" fill="white" />
                </clipPath>
              </defs>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="Slider" id="about">
    <?php
    $slider = get_posts(array(
      'post_type' => 'slider'
    ));

    if (count($slider) === 0) {
      echo 'Нет постов';
    }
    ?>
    <div class="SliderComputer">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php foreach ($slider as $post) {
            setup_postdata($post); ?>
            <div class="swiper-slide">
              <?php the_post_thumbnail() ?>
              <div class="Desc">
                <h2><?php the_title() ?></h2>
                <p><?php the_content() ?></p>
              </div>
            </div>
          <?php }
          wp_reset_postdata();
          ?>
        </div>
        <div class="swiper-pagination"></div>

        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <div class="SliderMobile">
      <div class="swiper">
        <div class="swiper-wrapper">
          <?php
            foreach($slider as $post) {
              setup_postdata($post);
          ?>
          <div class="swiper-slide">
            <?php the_post_thumbnail() ?>
            <div class="Desc">
              <h2><?php the_title() ?></h2>
              <p><?php the_content() ?></p>
            </div>
          </div>
          <?php } 
          wp_reset_postdata()?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </div>
  <?php
  $index = 0;
  if (have_posts()) : while (have_posts()) : the_post();
      $image_array = get_post_gallery_images(get_the_ID());
      $image_count = count($image_array);
      $menu_anchor = get_post_meta(get_the_ID(), 'menu_anchor', true);
      if ($image_count !== 5) {
      $isCustomDesign = false;
      if ($image_count === 3) {
        $isCustomDesign = true;
      }
  ?>
        <div class="StandardPost" id="<?php echo esc_attr($menu_anchor) ?>">
          <div class="StandardPostComp">
            <div class="PriceList">
              <h2><?php echo the_title() ?></h2>
              <p class="PostContent"><?php echo the_content() ?></p>
              <ul>
                <?php
                $custom_fields = get_post_custom();
                foreach ($custom_fields as $key => $values) {
                  if (strpos($key, '_') !== 0) {
                    if ($key !== 'menu' && $key !== 'post_images' && $key !== 'apvc_active_counter' && $key !== 'count_start_from' && $key !== 'widget_label' && $key!== 'menu_anchor') { ?>
                      <li class="Service">
                        <h3><?php echo $key ?></h3>
                        <p><?php echo $values[0] ?> &#x20bd;</p>
                      </li>
                <?php }
                  }
                } ?>
              </ul>
            </div>
            <div class="Photos">
              <?php 
                if ($isCustomDesign) { ?>
                  <img src="<?php echo $image_array[0] ?>" class="BigPhoto">
                  <img src="<?php echo $image_array[1] ?>" class="SmallPhoto">
                  <img src="<?php echo $image_array[2] ?>" class="SmallPhoto">
                <?php } 
                else { 
                  foreach($image_array as $image) {
                  ?>
                    <img src="<?php echo $image ?>" class="SmallPhoto">
                <?php } }?>
                
            </div>
          </div>
          <div class="StandardPostMobile">
            <div class="swiper">
              <div class="swiper-wrapper">
              <?php
                foreach($image_array as $image) { ?>
                <div class="swiper-slide">
                  <img src="<?php echo $image ?>" class="BigPhoto">
                </div>
                <?php } ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
        <?php
        if ($index === 1 && get_theme_mod('unique_offer_title_settings')) { ?>
          <div class="DiscountBanner">
            <h4><?php echo get_theme_mod('unique_offer_title_settings') ?></h4>
            <p><?php echo get_theme_mod('unique_offer_text_settings') ?></p>
          </div>
        <?php } ?>
      <?php
      } elseif ($image_count === 5) {
      ?>
        <div class="LeftRightPost" id="<?php echo esc_attr($menu_anchor) ?>">
          <div class="LeftRightPostComp">
            <img src="<?php echo $image_array[0] ?>" class="MainPhoto">
            <div class="Desc">
              <h2><?php the_title() ?></h2>
              <div class="Text">
                <?php the_content() ?>
              </div>
              <?php
              $bottom_prices = get_post_meta(get_the_ID());
              if ($bottom_prices) {
                foreach ($bottom_prices as $key => $values) {
                  if (strpos($key, '_') !== 0) {
                    if ($key !== 'menu' && $key !== 'post_images' && $key !== 'apvc_active_counter' && $key !== 'count_start_from' && $key !== 'widget_label' && $key !== 'menu_anchor') {
                      echo '<p class="Price">' . $key . ' ' . $values[0] . '&#x20bd;</p>';   
                    }
                  }
                }
              }
              ?>
            </div>
            <div class="SamePhotos">
            <?php
              $count = 0;
                foreach($image_array as $image) { 
                  if ($count !== 0) {
                  ?>
                  <img src="<?php echo $image ?>">
                <?php } 
              $count++;
              } ?>
            </div>
          </div>
          <div class="LeftRightPostMobile">
            <div class="swiper">
              <div class="swiper-wrapper">
              <?php
                foreach($image_array as $image) { ?>
                <div class="swiper-slide">
                  <img src="<?php echo $image ?>" class="BigPhoto">
                </div>
                <?php } ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      <?php
      } 
      $index++; ?>
    <?php endwhile;
  else : ?>
    <p>Записей нет</p>
  <?php endif; ?>
  <div class="Feedback">
    <div class='FeedbackComp'>
      <h3>Отзывы</h3>
      <img src="<?php echo $img_Directory . '/Feedback.webp' ?>" alt="Отзывы" />
    </div>
  </div>
  <div class="FeedbackMobile">
    <h3>Отзывы</h3>
    <div class=Photos>
      <img src="<?php $img_Directory . '/f1.webp' ?>" alt="Брови, косметология, нижнее белье" />
      <img src="<?php $img_Directory . '/f2.webp' ?>" alt="Брови, косметология, нижнее белье" />
      <img src="<?php $img_Directory . '/f3.webp' ?>" alt="Брови, косметология, нижнее белье" />
      <img src="<?php $img_Directory . '/f4.webp' ?>" alt="Брови, косметология, нижнее белье" />
      <img src="<?php $img_Directory . '/f5.webp' ?>" alt="Брови, косметология, нижнее белье" />
      <img src="<?php $img_Directory . '/f6.webp' ?>" alt="Брови, косметология, нижнее белье" />
      <img src="<?php $img_Directory . '/f7.webp' ?>" alt="Брови, косметология, нижнее белье" />
      <img src="<?php $img_Directory . '/f8.webp' ?>" alt="Брови, косметология, нижнее белье" />
    </div>
  </div>
  <div class="Contacts" id="contacts">
    <div class=Info>
      <h2>Контакты</h2>
      <div class=InfoBlocks>
        <div class=LeftBlock>
          <div>
            <h6>Адрес</h6>
            <a target='_blank' href='https://go.2gis.com/gs7x4' rel="noopener noreferrer">
              <?php echo get_theme_mod('address_settings') ?>
            </a>
          </div>
          <div>
            <h6>Остановка транспорта</h6>
            <a href='https://go.2gis.com/rt161' target='_blank' rel="noopener noreferrer">
              <?php echo get_theme_mod('transport_settings') ?>
            </a>
          </div>
          <div>
            <h6>Часы работы:</h6>
            <p><?php echo get_theme_mod('open_hours_settings') ?></p>
          </div>
        </div>
        <div class=RightBlock>
          <div class=Phone>
            <h6>Телефон</h6>
            <a class='Phone' href="tel:<?php echo get_theme_mod('phone_settings') ?>"><?php echo get_theme_mod('phone_settings') ?></a>
          </div>
          <div>
            <div class="SocialNets">
              <a href="<?php echo get_theme_mod('whatsapp_settings') ?>" target='_blank' rel="noopener noreferrer">
                <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clipPath="url(#clip0_109_2135)">
                    <path d="M26 0C40.3598 0 52 11.6402 52 26C52 40.3598 40.3598 52 26 52C21.4052 52.0074 16.8913 50.7914 12.922 48.477L0.0104366 52L3.52563 39.0832C1.20928 35.1126 -0.00763978 30.5968 3.60886e-05 26C3.60886e-05 11.6402 11.6402 0 26 0ZM17.1392 13.78L16.6192 13.8008C16.2826 13.8213 15.9536 13.9097 15.652 14.0608C15.37 14.2205 15.1125 14.4202 14.8876 14.6536C14.5756 14.9474 14.3988 15.2022 14.209 15.4492C13.2473 16.6995 12.7296 18.2346 12.7374 19.812C12.7426 21.086 13.0754 22.3262 13.5954 23.4858C14.6588 25.831 16.4086 28.314 18.7174 30.615C19.2738 31.1688 19.8198 31.7252 20.4074 32.2426C23.2762 34.7684 26.6949 36.5899 30.3914 37.5622L31.8682 37.7884C32.3492 37.8144 32.8302 37.778 33.3138 37.7546C34.071 37.7155 34.8104 37.5105 35.4796 37.154C35.8201 36.9786 36.1524 36.7877 36.4754 36.582C36.4754 36.582 36.5872 36.5092 36.8004 36.348C37.1514 36.088 37.3672 35.9034 37.6584 35.5992C37.8742 35.3756 38.0614 35.113 38.2044 34.814C38.4072 34.3902 38.61 33.5816 38.6932 32.9082C38.7556 32.3934 38.7374 32.1126 38.7296 31.9384C38.7192 31.6602 38.4878 31.3716 38.2356 31.2494L36.7224 30.5708C36.7224 30.5708 34.4604 29.5854 33.0772 28.9562C32.9325 28.893 32.7774 28.8568 32.6196 28.8496C32.4417 28.8313 32.262 28.8513 32.0925 28.9083C31.923 28.9652 31.7676 29.0578 31.6368 29.1798C31.6238 29.1746 31.4496 29.3228 29.5698 31.6004C29.4619 31.7454 29.3133 31.8549 29.1429 31.9151C28.9725 31.9753 28.788 31.9834 28.613 31.9384C28.4436 31.893 28.2777 31.8356 28.1164 31.7668C27.794 31.6316 27.6822 31.5796 27.4612 31.486C25.969 30.8348 24.5874 29.955 23.3662 28.8782C23.0386 28.5922 22.7344 28.2802 22.4224 27.9786C21.3995 26.999 20.5081 25.8908 19.7704 24.6818L19.617 24.4348C19.5068 24.2688 19.4178 24.0898 19.3518 23.9018C19.253 23.5196 19.5104 23.2128 19.5104 23.2128C19.5104 23.2128 20.1422 22.5212 20.436 22.1468C20.722 21.7828 20.9638 21.4292 21.1198 21.177C21.4266 20.683 21.5228 20.176 21.3616 19.7834C20.6336 18.005 19.8796 16.2344 19.1048 14.4768C18.9514 14.1284 18.4964 13.8788 18.083 13.8294C17.9426 13.8138 17.8022 13.7982 17.6618 13.7878C17.3127 13.7704 16.9628 13.7739 16.614 13.7982L17.1366 13.7774L17.1392 13.78Z" fill="#EED9C5" />
                  </g>
                  <defs>
                    <clipPath id="clip0_109_2135">
                      <rect width="52" height="52" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
              <a href="<?php echo get_theme_mod('phone_settings') ?>" target='_blank' rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                  <g clipPath="url(#clip0_109_2133)">
                    <path d="M34.5022 37.9263L38.7679 17.817C38.942 16.9658 38.8404 16.3564 38.4632 15.9888C38.0859 15.6213 37.5878 15.5536 36.9688 15.7857L11.8973 25.4487C11.3363 25.6615 10.9542 25.9033 10.7511 26.1741C10.548 26.4449 10.5238 26.7013 10.6786 26.9431C10.8333 27.1849 11.1429 27.3735 11.6071 27.5089L18.0201 29.5112L32.9062 20.1384C33.3125 19.8676 33.622 19.8095 33.8348 19.9643C33.9702 20.061 33.9315 20.2061 33.7188 20.3996L21.6763 31.2812L21.2121 37.8973C21.657 37.8973 22.0923 37.6845 22.5179 37.2589L25.6518 34.2411L32.1518 39.029C33.3899 39.7254 34.1734 39.3579 34.5022 37.9263ZM52 26C52 29.5208 51.3132 32.8869 49.9397 36.0982C48.5662 39.3095 46.7188 42.0759 44.3973 44.3973C42.0759 46.7188 39.3095 48.5662 36.0982 49.9397C32.8869 51.3132 29.5208 52 26 52C22.4792 52 19.1131 51.3132 15.9018 49.9397C12.6905 48.5662 9.92411 46.7188 7.60268 44.3973C5.28125 42.0759 3.43378 39.3095 2.06027 36.0982C0.686756 32.8869 0 29.5208 0 26C0 22.4792 0.686756 19.1131 2.06027 15.9018C3.43378 12.6905 5.28125 9.92411 7.60268 7.60268C9.92411 5.28125 12.6905 3.43378 15.9018 2.06027C19.1131 0.686756 22.4792 0 26 0C29.5208 0 32.8869 0.686756 36.0982 2.06027C39.3095 3.43378 42.0759 5.28125 44.3973 7.60268C46.7188 9.92411 48.5662 12.6905 49.9397 15.9018C51.3132 19.1131 52 22.4792 52 26Z" fill="#EED9C5" />
                  </g>
                  <defs>
                    <clipPath id="clip0_109_2133">
                      <rect width="52" height="52" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
              <a href="<?php echo get_theme_mod('instagram_settings') ?>" target='_blank' rel="noopener noreferrer">
                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                  <g clipPath="url(#clip0_109_2160)">
                    <path d="M39.8125 0H12.1875C5.45653 0 0 5.45653 0 12.1875V39.8125C0 46.5435 5.45653 52 12.1875 52H39.8125C46.5435 52 52 46.5435 52 39.8125V12.1875C52 5.45653 46.5435 0 39.8125 0Z" fill="#EED9C5" />
                    <path d="M39.8125 0H12.1875C5.45653 0 0 5.45653 0 12.1875V39.8125C0 46.5435 5.45653 52 12.1875 52H39.8125C46.5435 52 52 46.5435 52 39.8125V12.1875C52 5.45653 46.5435 0 39.8125 0Z" fill="#EED9C5" />
                    <path d="M26.0018 5.6875C20.4854 5.6875 19.7929 5.71167 17.6264 5.81019C15.4639 5.90931 13.9878 6.25158 12.6963 6.75391C11.3602 7.27269 10.2269 7.96677 9.09797 9.09614C7.96798 10.2253 7.27391 11.3585 6.7535 12.6941C6.24975 13.986 5.90708 15.4627 5.80978 17.6241C5.71289 19.7909 5.6875 20.4835 5.6875 26.0002C5.6875 31.5169 5.71188 32.2071 5.81019 34.3736C5.90972 36.5361 6.25198 38.0122 6.75391 39.3037C7.27309 40.6398 7.96717 41.7731 9.09655 42.902C10.2253 44.032 11.3585 44.7277 12.6937 45.2465C13.9862 45.7488 15.4625 46.0911 17.6245 46.1902C19.7913 46.2887 20.4831 46.3129 25.9994 46.3129C31.5165 46.3129 32.2067 46.2887 34.3732 46.1902C36.5357 46.0911 38.0134 45.7488 39.3059 45.2465C40.6415 44.7277 41.7731 44.032 42.9016 42.902C44.0316 41.7731 44.7255 40.6398 45.2461 39.3043C45.7454 38.0122 46.0882 36.5357 46.1898 34.374C46.2871 32.2075 46.3125 31.5169 46.3125 26.0002C46.3125 20.4835 46.2871 19.7913 46.1898 17.6245C46.0882 15.4621 45.7454 13.9862 45.2461 12.6947C44.7255 11.3585 44.0316 10.2253 42.9016 9.09614C41.7718 7.96636 40.6419 7.27228 39.3047 6.75411C38.0098 6.25158 36.5328 5.90911 34.3704 5.81019C32.2036 5.71167 31.5138 5.6875 25.9955 5.6875H26.0018ZM24.1796 9.34802C24.7205 9.3472 25.324 9.34802 26.0018 9.34802C31.4255 9.34802 32.0682 9.36752 34.2099 9.46481C36.1904 9.55541 37.2653 9.8863 37.9813 10.1644C38.9293 10.5324 39.6051 10.9726 40.3156 11.6837C41.0266 12.3947 41.4665 13.0717 41.8356 14.0197C42.1137 14.7347 42.445 15.8096 42.5352 17.7901C42.6325 19.9314 42.6536 20.5745 42.6536 25.9955C42.6536 31.4165 42.6325 32.0598 42.5352 34.201C42.4446 36.1814 42.1137 37.2564 41.8356 37.9716C41.4676 38.9196 41.0266 39.5945 40.3156 40.3051C39.6047 41.016 38.9297 41.456 37.9813 41.8242C37.2661 42.1035 36.1904 42.4336 34.2099 42.5242C32.0686 42.6215 31.4255 42.6426 26.0018 42.6426C20.578 42.6426 19.9351 42.6215 17.794 42.5242C15.8135 42.4328 14.7385 42.1019 14.0219 41.8238C13.0741 41.4556 12.3969 41.0156 11.686 40.3047C10.975 39.5937 10.5351 38.9183 10.166 37.97C9.88792 37.2547 9.55663 36.1798 9.46644 34.1993C9.36914 32.058 9.34964 31.4149 9.34964 25.9905C9.34964 20.5662 9.36914 19.9264 9.46644 17.785C9.55703 15.8045 9.88792 14.7296 10.166 14.0136C10.5343 13.0656 10.975 12.3886 11.6862 11.6777C12.3971 10.9667 13.0741 10.5265 14.0221 10.1577C14.7381 9.87837 15.8135 9.5483 17.794 9.4573C19.6678 9.37259 20.394 9.3472 24.1796 9.34294V9.34802ZM36.8446 12.7207C35.4989 12.7207 34.4071 13.8115 34.4071 15.1574C34.4071 16.5031 35.4989 17.5949 36.8446 17.5949C38.1903 17.5949 39.2821 16.5031 39.2821 15.1574C39.2821 13.8117 38.1903 12.7199 36.8446 12.7199V12.7207ZM26.0018 15.5687C20.2412 15.5687 15.5705 20.2394 15.5705 26.0002C15.5705 31.761 20.2412 36.4295 26.0018 36.4295C31.7627 36.4295 36.4317 31.761 36.4317 26.0002C36.4317 20.2396 31.7623 15.5687 26.0014 15.5687H26.0018ZM26.0018 19.2292C29.7412 19.2292 32.7728 22.2605 32.7728 26.0002C32.7728 29.7395 29.7412 32.7712 26.0018 32.7712C22.2623 32.7712 19.2311 29.7395 19.2311 26.0002C19.2311 22.2605 22.2623 19.2292 26.0018 19.2292Z" fill="white" />
                  </g>
                  <defs>
                    <clipPath id="clip0_109_2160">
                      <rect width="52" height="52" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class='Map'><?php echo do_shortcode('[wpgmza id="1"]') ?></div>
    <!-- <iframe class='Map' src="https://yandex.ru/map-widget/v1/?um=constructor%3A22539b684133b5a1ca0278b4f5908c51dc6f2de5b5c7f473f1749a9fb4dc18e8&amp;source=constructor" width="721" height="556"></iframe> -->
  </div>
  </main>
  <?php get_footer() ?>